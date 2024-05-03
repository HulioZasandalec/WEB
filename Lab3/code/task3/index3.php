<!DOCTYPE html>

<html>
<head>
    <title>Доска объявлений</title>
</head>
<body>
<h1>Добавить объявление</h1>
<form action="save.php" method="post">
    Email: <input type="email" name="email" required><br><br>
    Категория:
    <select name="category">
        <option value="недвижимость">Недвижимость</option>
        <option value="транспорт">Транспорт</option>

    </select><br><br>
    Заголовок объявления: <input type="text" name="title" required><br><br>
    Текст объявления: <textarea name="description" rows="4" cols="50" required></textarea><br><br>
    <input type="submit" value="Добавить">
</form>

<h1>Список объявлений</h1>
<table border="1">
    <tr>
        <th>Категория</th>
        <th>Заголовок</th>
        <th>Текст объявления</th>
    </tr>

    <?php
    $categories = scandir('categories');
    $_SESSION = [];

    foreach ($categories as $category) {
        if (is_dir("categories/$category") && $category != '.' && $category != '..') {
            $subcategories = scandir("categories/$category");
            foreach ($subcategories as $subcategory) {
                if ($subcategory != '.' && $subcategory != '..') {
                    $filePath = "categories/$category/$subcategory";
                    $fp = fopen($filePath, 'r');
                    $desc = "";
                    while ($line = fgets($fp)) {
                        $desc .= $line;
                    }
                    fclose($fp);
                    echo '<tr>';
                    echo "<td>$category</td>";
                    echo "<td>".$subcategory."</td>";
                    echo "<td>$desc</td>";
                    echo '</tr>';

                }
            }
        }
    }
    ?>
