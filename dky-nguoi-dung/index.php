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
<form method="post" style="width: 150px">
    <fieldset>
        <p><input type="text" name="username" placeholder="Username"></p>
        <p><input type="text" name="email" placeholder="email"></p>
        <p><input type="text" name="phone" placeholder="phone"></p>
        <button>Register</button>
    </fieldset>
</form>
<?php
function loadData($path)
{
    $dataJson = file_get_contents($path);
    $data = json_decode($dataJson, true);
    return $data;
}

function saveData($path, $data)
{
    $arr = loadData($path);
    array_push($arr, $data);
    $arrJson = json_encode($arr);
    file_put_contents($path, $arrJson);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $data = ["username" => $username, "email" => $email, "phone" => $phone];
    $path = "data.json";
    saveData($path, $data);
}


?>
</body>
</html>
