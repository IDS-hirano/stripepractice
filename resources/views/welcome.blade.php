<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Hello World</div>

                <form action="/purchase" method="POST">
                  <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_test_p3IyKiu4l88YyKhf8bk9z67w"
                    data-amount="100"
                    data-name="TEST"
                    data-description="TESTTEST"
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-currency="jpy">
                  </script>
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                </form>
            </div>
        </div>
    </body>
</html>
