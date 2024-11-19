<?php
// Boshqa kiritilgan malumotlarni saqlash uchun massiv
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formadagi ma'lumotlarni olish
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Shartlarni tekshirish
    if (empty($firstName) || strlen($firstName) < 3) {
        $errors['first_name'][] = 'Ism 3 ta harfdan kam bo\'lmasligi kerak.';
    }

    if (empty($lastName) || strlen($lastName) < 3) {
        $errors['last_name'][] = 'Familya 3 ta harfdan kam bo\'lmasligi kerak.';
    }

    if (empty($username) || !filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $errors['username'][] = 'Username email shaklida bo\'lishi kerak.';
    }

    if (empty($password) || strlen($password) < 8 || !preg_match('/[0-9]{2}$/', $password)) {
        $errors['password'][] = 'Parol 8 ta harfdan kam bo\'lmasligi va oxirgi 2 harfi son bo\'lishi kerak.';
    }

    if ($password !== $confirmPassword) {
        $errors['confirm_password'][] = 'Parol va tasdiqlash paroli bir xil bo\'lishi kerak.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ro'yxatdan O'tish</title>
</head>
<body>
    <h2>Ro'yxatdan O'tish Formasi</h2>

    <form method="POST" action="">
        <label for="first_name">Ism:</label><br>
        <input type="text" id="first_name" name="first_name" value="<?= isset($firstName) ? $firstName : '' ?>"><br>
        <?php
        if (isset($errors['first_name'])) {
            echo "<ul>";
            foreach ($errors['first_name'] as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
        ?>

        <label for="last_name">Familya:</label><br>
        <input type="text" id="last_name" name="last_name" value="<?= isset($lastName) ? $lastName : '' ?>"><br>
        <?php
        if (isset($errors['last_name'])) {
            echo "<ul>";
            foreach ($errors['last_name'] as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
        ?>

        <label for="username">Username (Email):</label><br>
        <input type="email" id="username" name="username" value="<?= isset($username) ? $username : '' ?>"><br>
        <?php
        if (isset($errors['username'])) {
            echo "<ul>";
            foreach ($errors['username'] as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
        ?>

        <label for="password">Parol:</label><br>
        <input type="password" id="password" name="password"><br>
        <?php
        if (isset($errors['password'])) {
            echo "<ul>";
            foreach ($errors['password'] as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
        ?>

        <label for="confirm_password">Tasdiqlash Paroli:</label><br>
        <input type="password" id="confirm_password" name="confirm_password"><br>
        <?php
        if (isset($errors['confirm_password'])) {
            echo "<ul>";
            foreach ($errors['confirm_password'] as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
        ?>

        <button type="submit">Yuborish</button>
    </form>

</body>
</html>
