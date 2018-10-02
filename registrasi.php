<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    NIM : <input type="text" name="nim" pattern="\d*" maxlength="10" required><br><br>
    Nama : <input type="text" name="nama" maxlength="25" required><br><br>
    Email : <input type="email" name="email" pattern="[a-z0-9._-]+@+[a-z]+.com"><br><br>
    Jenis Kelamin : <input type="radio" name="gender" value="laki-laki" required>Laki-laki <input type="radio" name="gender" value="perempuan" required>Perempuan <br><br>
    Program Studi : <select name="prodi">
                        <option value="D3MI">D3MI</option>
                        <option value="D3KA">D3KA</option>
                        <option value="D3IF">D3IF</option>
                        <option value="D3MP">D3MP</option>
                        <option value="D3TK">D3TK</option>
                        <option value="D3PH">D3PH</option>
                        <option value="D4SM">D4SM</option>
                    </select><br><br>
    Fakultas : <select name="fakultas">
                        <option value="FIT">FIT</option>
                        <option value="FIK">FIK</option>
                        <option value="FEB">FEB</option>
                        <option value="FKB">FKB</option>
                        <option value="FIF">FIF</option>
                        <option value="FRI">FRI</option>
                        <option value="FTE">FTE</option>
                    </select><br><br>
    Hobi : <br>
        <input type="checkbox" name="hobi[]" value="makan">Makan <br>
        <input type="checkbox" name="hobi[]" value="tidur">Tidur <br>
        <input type="checkbox" name="hobi[]" value="main">Main <br><br>
    Upload Gambar 
        <input type="file" name="gambar" accept="image/*" required><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    <a href="proseslogin.php?logout=keluar">LOGOUT</a>
</body>
</html>
<?php
    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $prodi = $_POST['prodi'];
        $fakultas = $_POST['fakultas'];
        $hobi = $_POST['hobi'];
        
        $namagambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        $dir = "folder/";

        $uploadgambar = move_uploaded_file($tmp, $dir.$namagambar);
        if(!$uploadgambar){
            die("Upload Gagal!");
        }
        $data = count($_SESSION['array']);
        $_SESSION['array'][$data] = array(
                                            "NIM"=> $nim,
                                            "Nama"=> $nama,
                                            "Email"=> $email,
                                            "Gender"=> $nama,
                                            "Prodi"=> $prodi,
                                            "Fakultas"=> $fakultas,
                                            "Hobi"=> $hobi,
                                            "Gambar"=> $dir.$namagambar,
                                        );
        header("location: prosesregis.php");
    }
?>
