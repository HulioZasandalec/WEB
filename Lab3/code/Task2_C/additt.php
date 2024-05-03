<?php
session_start();

if (!empty($_SESSION["user_data"])) {
    $user_data = $_SESSION["user_data"];

    echo "<ul>";
    foreach ($user_data as $key => $value) {
        echo "<li><strong>$key:</strong> $value</li>";
    }
    echo "</ul>";
} else {
    echo "Данные не найдены.";
}
?>