<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="POST">
        <label>Username</label><br>
        <input type="text" name="usr"><br>
        <label>Password</label><br>
        <input type="password" name="pwd"><br><br>
        <button type="submit" name="login">Login</button>
    </form>

    <?php
    if (isset($_POST['login'])) {
        if ($_POST['usr'] === 'eltibiz' && $_POST['pwd'] === 'rahasia') {
            session_start();
            $_SESSION['nama_admin'] = 'M. IQBAL ADENAN';
            header('Location:index.php');
        } else {
            echo '<span style=color:red;>Gagal Login!!</span>';
        }
    }
    ?>
</body>

</html>