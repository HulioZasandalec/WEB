<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_data = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'something_else' => $_POST['something_else']
    );

    $_SESSION['user_data'] = $user_data;

    header("Location: additt.php");
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
    <label for="name">Имя:</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="age">Возраст:</label><br>
    <input type="text" id="age" name="age"><br>

    <label for="salary">Зарплата:</label><br>
    <input type="text" id="salary" name="salary"><br>

    <label for="something_else">Ещё что-нибудь:</label><br>
    <input type="text" id="something_else" name="something_else"><br>

    <input type="submit" value="Отправить">
</form>
</body>
    </html><?php
