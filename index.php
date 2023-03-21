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
                <form action="./index.php" class="text-center" method="GET">
                    <input type="number" name="pswLenght" id="" min="2"
                        placeholder="Inserisci la lunghezza della password desiderata">
                    <input type="submit" value="Genera password">
                </form>
            </div>
        </div>

        <?php
        if (isset($_GET['pswLenght'])) {
            $pswLenght = $_GET['pswLenght'];
            $password = "";
            $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
            for ($i = 0; $i < $pswLenght; $i++) {
            $password .= $characters[rand(0, strlen($characters))];
            }
        }

        ?>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Password generata</h1>
                <p class="text-center">La tua password è:
                    <?php if (isset ($password)) {
                        echo $password;
                    }?>
                </p>
            </div>

            <style>
                body {
                    background-color: #000;
                    color: #fff;
                }

                input[type="number"] {
                    width: 250px;
                    height: 25px;
                    font-size: 20px;
                    text-align: center;
                    border: none;
                    border-bottom: 1px solid #fff;
                    background-color: #000;
                    color: #fff;
                }

                input[type="submit"] {
                    width: 200px;
                    height: 30px;
                    font-size: 20px;
                    text-align: center;
                    border: none;
                    border-bottom: 1px solid #fff;
                    background-color: #000;
                    color: #fff;
                }
            </style>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>