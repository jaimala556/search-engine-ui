<?php
// In working condition
session_start();
$_SESSION = array();
session_unset();
session_destroy();
setcookie("email","",time()-84600,"/");
setcookie("fname","",time()-84600,"/");
echo "<!doctype html>
                <html lang='en'>
                <head>
                  <meta charset='utf-8'>
                  <meta name='viewport' content='width=device-width, initial-scale=1'>
                  <title>Verification | Infohunt | infohunt.com</title>
                  <link rel='shortcut icon' href='icon.png' type='image/x-icon'>
                  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
                </head>
                <body>
                  <div class='alert alert-warning alert-dismissible fade show bg-primary text-white' role='alert'>
                    <strong>Your account has been logout successfully <br>Thank You for visiting us.</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>
                  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
                </body>
                </html>";
header("location: login.html");
?>