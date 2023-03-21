<?php

function generate_password($pswLenght)
{
    $password = "";
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    $lenght = strlen($characters) - 1;
    for ($i = 0; $i < $pswLenght; $i++) {
        $password .= $characters[rand(0, $lenght)];
    }
    return $password;
}

?>


<style>
    input[type="number"] {
        width: 350px;
        height: 35px;
        font-size: 20px;
        text-align: center;
        border: none;
        border-bottom: 1px solid #fff;
        background-color: #000;
        color: #fff;
        margin-right: 15px;
    }

    input[type="submit"] {
        width: 200px;
        height: 35px;
        font-size: 20px;
        text-align: center;
        border: 1px solid #fff;
        background-color: #000;
        color: #fff;
        text-align: center;
    }

    form {
        display: flex;
        justify-content: center;
</style>