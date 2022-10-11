<?php
require_once("lib.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINGO ZDZ</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body style="background-image: url('src/images/background-image.jpg'); background-size: 100% 100%; background-repeat: no-repeat;">

    <div class="container bg-color-dark-opacity" style="padding-left: 0; padding-right: 0;">
        <div class="col-12 border p-3">
            <div class="row justify-content-center mt-1">
                <div class="col-6 text-center">
                    <h1>ZDZ BINGO</h1>
                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-6 col-sm-12 mt-5 mr-3">
                    <form action="login.php" method="post">
                        <h2>Logowanie</h2>

                    <div class="form-floating mb-3">
                        <input type="text" id="logu" class="form-control bg-transparent" >
                        <label for="logu">Username</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" id="logp" class="form-control bg-transparent">
                        <label for="logp">Password</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block rounded-pill">Loguj</button>
                    </form>
                </div>

                <div class="col-lg-6 col-sm-12 mt-5">
                <form action="register.php" method="post">
                        <h2>Dodaj konto</h2>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control bg-transparent"  id="regu">
                        <label class="form-label" for="regu">Username</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control bg-transparent"  id="regp">
                        <label class="form-label" for="regp">Password</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control bg-transparent" id="regp1">
                        <label class="form-label" for="regp1">Repeat password</label>
                    </div>

                    <button type="submit" class="btn btn-primary rounded-pill">Dodaj</button>
                </form>
                </div>
            </div>
            
            
        </div>
    </div>


<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>