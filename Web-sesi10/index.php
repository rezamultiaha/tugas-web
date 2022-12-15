<?php
$mahasiswa = ["Reza", 20180040049, "TI", "muh.reza_ti18@nusaputra.ac.id"];
$nilai = [90, 60, 80];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 600px;
            margin: 50px auto;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>
        <tr>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <td><?php echo $mhs; ?></td>
            <?php endforeach; ?>
            <td><?php echo $nilai[0]; ?></td>
            <td><?php 
            if ($nilai [0] > 60) {
                echo "Lulus";
            } else{
                echo "tidak";
            }
             ?></td>
        </tr>
        <tr>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <td><?php echo $mhs; ?></td>
            <?php endforeach; ?>
            <td><?php echo $nilai[1]; ?></td>
            <td><?php 
            if ($nilai [1] > 60) {
                echo "Lulus";
            } else{
                echo "tidak";
            }
             ?></td>
        </tr>
        <tr>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <td><?php echo $mhs; ?></td>
            <?php endforeach; ?>
            <td><?php echo $nilai[2]; ?></td>
            <td><?php 
            if ($nilai [2] > 60) {
                echo "Lulus";
            } else{
                echo "tidak";
            }
             ?></td>
        </tr>
        
    </table>
</body>
</html>