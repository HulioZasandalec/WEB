<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["firstname"] = $_POST["firstname"];
    $_SESSION["lastname"] = $_POST["lastname"];
    $_SESSION["age"] = $_POST["age"];

    header("Location: additional.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Введите данные</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="firstname">Имя:</label><br>
    <input type="text" id="firstname" name="firstname"><br>

    <label for="lastname">Фамилия:</label><br>
    <input type="text" id="lastname" name="lastname"><br>

    <label for="age">Возраст:</label><br>
    <input type="text" id="age" name="age"><br>

    <input type="submit" value="Отправить">
</form>
</body>
</html>