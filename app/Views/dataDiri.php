<?php
// Menyimpan data diri dalam variabel
$nama = "Mis Atika Nur Azizah";
$nim = "23.240.0026";
$kelas = "3P41";
$prodi = "Teknik Informatika";
$konsentrasi = "Teknik Informatika";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            text-align: center;
            padding: 20px;
            margin: 0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        table th, table td {
            text-align: left;
            padding: 10px;
            font-size: 16px;
        }
        table th {
            width: 40%;
            color: #555;
        }
        table td {
            width: 60%;
            color: #333;
        }
        .kembali {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .kembali:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <table>
            <tr>
                <th>Nama</th>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <th>NIM</th>
                <td><?php echo $nim; ?></td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td><?php echo $kelas; ?></td>
            </tr>
            <tr>
                <th>Prodi</th>
                <td><?php echo $prodi; ?></td>
            </tr>
            <tr>
                <th>Konsentrasi</th>
                <td><?php echo $konsentrasi; ?></td>
            </tr>
        </table>
        <a class="kembali" href="welcome_message">Kembali</a>
    </div>
</body>
</html>
