<?php

class ProcessController extends \BaseController {

    public function index() {

    }

    public function payment() {
        Conekta::setApiKey("key_v8TTXAcjJMyd3cKg");
        //Conekta Private API Key
        try {
            $charge = Conekta_Charge::create(array(
            "amount" => $_POST["amount"],
            "currency" => "MXN",
            "description" => "Example of OXXO Payment",
            "reference_id"=> "orden_de_id_interno",
            'cash'=>array(
              'type'=>'oxxo'
              )
            ));
        } catch (Conekta_Error $e) {
           return View::make('payment',array('message'=>$e->getMessage()));
        }

        return View::make('payment',array('message'=>$charge));

    }

}
