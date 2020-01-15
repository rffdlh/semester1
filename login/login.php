<?php
session_start();
include 'koneksi.php';
if (isset($_POST['btnlogin'])) {
    $db = new Login();
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $result = mysqli_query(
        $db->koneksi,
        "SELECT * FROM admin WHERE email='$email' and password='$pass'");
        $row = mysqli_num_rows($result);

        if ($row > 0) {
            $_SESSION['login'] = $pass;

            echo "<script type='text/javascript'>
            alert('login berhasil!!!')
            window.location = 'data_diri/index2.php'
            </script>";
            //
        }
        else {
            ?>
            <html>
            <head>
                <title>LOGIN</title>
            </head>
            <body>
                <center>
            <?php
                echo "Maaf Username & Password Anda Salah !!!";
        }
    }
        ?>
                </center>
                <br><center><font size=5>LOGIN</font></center>
                <form action="" method="post">
                    <table border=0 align="center" cellpadding=5 cellpacing=0>
                        <tr>
                            <center>
                            <td colspan=3></td>
                            </center>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td colspan=2></td>
                            <td><input type="submit" name="btnlogin" value="LOGIN"></td>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                </form>
            </body>
            </html>