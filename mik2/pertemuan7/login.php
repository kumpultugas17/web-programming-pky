<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="usr"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php 
    if (isset($_POST['login'])) {
        if ($_POST['usr'] === 'eltibiz' && $_POST['pwd'] === 'rahasia') {
            header('Location:index.php');
        } else {
            echo "<span style=color:red;>Username & Password Tidak sesuai !!!</span>";
        }
    }
?>