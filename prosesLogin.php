<?php
session_start();
$akun = array(
    array("ferdy","ferdy"),
    array("samsul",1234)
);  
if (@$_SESSION['sukses']) {
    header("location: registrasi.php");
} 

if (@$_GET['logout']) {
    session_destroy();
    header("location: login.php");
}
?>
<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
   
    $cek=0;
    for ($i = 0; $i < count($akun); $i++) { 
        if ( $akun[$i][0] == $username && $akun[$i][1] == $password) {
            $_SESSION['sukses']="mantul";
            header("Location: registrasi.php");
            $cek=1;
        }
    }
    if ($cek == 0) {
        ?>
        <script>
        alert("Username/Password salah");
        </script>
        <?php
    }
}
?>
