<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>OXXO Payment Laravel Example</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
        <script type="text/javascript">
            // Conekta Public Key
            Conekta.setPublishableKey('key_AJuCsxJrPqQrjcvv');
            // ...
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="/process/payment" method="POST" id="card-form" role="form">
                        <span class="card-errors"></span>
                        <div class="form-group">
                            <label>Nombre del tarjetahabiente</label>
                            <input type="text" class="form-control" name="amount" placeholder="Ej. in cents: 50000" size="20" />
                        </div>
                        <button id="processPayment" class="btn btn-success" type="submit">Procesar pago</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>
