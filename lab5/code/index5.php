
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doc</title>
</head>
<body>
<form action="save.php" method="post">
    <label>
        <br> Введите Ваш email:
        <input name="email" required type="email"">
    </label>
    <label>
        <br> Выберете категорию:
        <select name="category" required>
            <option value="fu">Еда</option>
            <option value="norm">Техника</option>
            <option value="cool">Искусство</option>
        </select>
    </label>
    <label>
        <br> Заголовок:
        <input name="title" required type="text">
    </label>
    <label>
        <br>Описание:
        <textarea name="description"></textarea>
    </label>
    <label>
        <br> <input type="submit">
    </label>
</form>
<?php
$container = 'db';
$useruser = 'root';
$password = 'hello';
$database = 'web';
$port = 3306;

$My_new_SQL = new mysqli($container, $useruser, $password, $database, $port);

foreach ($My_new_SQL->query("SELECT * FROM MySQL.ad") as $row) {
    $email = $row['email'];
    $category = $row['category'];
    $title = $row['title'];
    $description = $row['description'];

    echo "<p> $email -> $title -> $description -> $category </p>";
}
?>

</body>
</html>
