<!DOCTYPE html5>
<html>
    <head>
        <title>Gudang 2IA21</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?= base_url("css/login.css") ?>" />
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" media="all" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="outer-wrapper">
            <div class="login-wrapper">
                <div class="form-wrapper">
                    <form action="<?= url_to('doLogin') ?>" method="post">
                        <label for="">Username</label>
                        <input type="text" id="username" name="username" placeholder="NPM" required>
                        <label for="">Password</label>
                        <input type="password" id="password" name="password" placeholder="password" required>
                        <button>Login</button>
                        <a href="#"><i>Forgot password?</i></a>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>