<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Generatore di password</h1>
                <p class="text-center">Inserisci la lunghezza della password desiderata</p>
                <form action="./index.php" class="text-center" method="GET" class="d-flex align-items-center">
                    <input type="number" name="pswLenght" id="" min="2" placeholder="Inserisci la lunghezza della password desiderata">
                    <input type="submit" value="Genera password">
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Password generata</h1>
                <p class="text-center">La tua password è:
                    <?php 
                        include './functions.php';
                    if (isset($password)) {
                        echo $password;
                    } ?>
                </p>
            </div>

            <style>
                body {
                    background-color: #000;
                    color: #fff;
                }
            </style>