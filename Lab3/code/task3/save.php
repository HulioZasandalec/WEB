<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION = [];

    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    if (!is_dir("categories/$category")) {
        mkdir("categories/$category");
    }

    $file_content = "Email: $email\n$description";
    $file_name = "categories/$category/" . str_replace(' ', '_', $title) . ".txt";

    file_put_contents($file_name, $file_content);

    header("Location: index3.php");
}
?>