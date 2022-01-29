<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" method="POST">
        <table>
            <tr>
                <th style = "text-align: left">Input Data Array</th>
                <td>:</td>
                <td>
                    <input type="Number" name="angka">
                </td>
                <td><button type="submit" name="Simpan">KIRIM</button></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['Simpan'])) {
    $i = $_POST['angka'];

// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array dengan perulangan for
    echo $barang[$i]."<br>";
}