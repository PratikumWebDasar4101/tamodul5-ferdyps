<?php
    session_start();
    $array = $_SESSION['array'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <center>
    <?php
        for ($i=0; $i < count($array); $i++) { 
    ?>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Program Studi</th>
            <th>Fakultas</th>
            <th>Hobi</th>
            <th>Gambar</th>
        </tr>
        <tr>
            <td><?php echo $array[$i]['NIM']?></td>
            <td><?php echo $array[$i]['Nama']?></td>
            <td><?php echo $array[$i]['Email']?></td>
            <td><?php echo $array[$i]['Gender']?></td>
            <td><?php echo $array[$i]['Prodi']?></td>
            <td><?php echo $array[$i]['Fakultas']?></td>
            
            <td>
                <?php
                    for ($j=0; $j < count($array[$i]['Hobi']); $j++) { 
                        echo $array[$i]['Hobi'][$j]."<br>";
                    }
                ?>
            </td>
            <td>
                <center><img src="<?php echo $array[$i]['Gambar'];?>" width="25%"></center>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    <a href="proseslogin.php?logout=keluar">LOGOUT</a>
    </center>
</body>
</html>
