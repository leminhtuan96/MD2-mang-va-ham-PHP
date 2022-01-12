<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="number">
    <select name = "phepTinh" id="tinh">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="number1">
    <button>tinh</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $number = $_POST["number"];
    $number1 = $_POST["number1"];
    $phepTinh = $_POST["phepTinh"];
}

function tinh($number,$number1,$phepTinh){
    switch ($phepTinh){
        case "+":
            return $number + $number1;
        case "-":
            return $number-$number1;
        case "*":
            return $number*$number1;
        case "/":
            if ($number1 != 0){
                return $number/$number1;
            }else{
                echo "phep tinh nay khong thuc hien duoc";
            }

    }
}

echo tinh($number,$number1,$phepTinh);
?>
</body>
</html>
