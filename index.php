<?php
require_once("lib.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BINGO ZDZ</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col"><h1>ZDZ BINGO - Logowanie</h1></div>
        </div>

        <div class="row">
            <div class="col">
                <form action="login.php" method="post">
                    <h2>Logowanie</h2>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text" class="form-control"  name="username" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text" class="form-control"  name="passowrd" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Loguj</button>
                </div>
                </form>
            </div>
            <div class="col">
            <form action="register.php" method="post">
                    <h2>Dodaj konto</h2>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text" class="form-control"  name="username" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text" class="form-control"  name="passowrd" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text" class="form-control" name="passowrd1" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Dodaj</button>
                </div>
                </form>

            </div>
        </div>
    </div>


<!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>