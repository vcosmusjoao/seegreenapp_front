<?php 

function siteHeader($title) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 
    $BASE = 'http://localhost/seegreen_front';
    return <<<HTML
        <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
                <title>{$title}</title>
            </head>
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-success" href="#">
              SeeGreen
            </a>
            <button class="navbar-toggler" type="button" 
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" 
                 id="navbarSupportedContent">
                <ul class=" nav navbar-nav navbar-center">
                    <li class="nav-item active">
                        <a class="nav-link" 
                           href="{$BASE}">
                          Home 
                         
                      </a>
                    </li>
    

                    <li class="nav-item">
                        <a class="nav-link" 
                           href="{$BASE}/empresa/index.php">
                          Cadastrar Empresas 
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <body>
            <style>
            .navbar-custom {
            background-color: #0B5A9C;
            }
            .navbar-nav.navbar-center {
             position: absolute;
            left: 50%;
            transform: translatex(-50%);
            }
            </style>
        </body>
        
    HTML;
    }


?>
