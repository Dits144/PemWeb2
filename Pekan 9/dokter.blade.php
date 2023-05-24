<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil</title>
</head>
<body>
    <h2>Hasil Permeriksaan</h2>

<table border="1" width="100%" border="1">
    <tr>
        <th>Nama</th>
        <th>Tanggal Pemeriksaan</th>
        <th>Tanggal lahir/usia</th>
        <th>Jenis Kelamin</th>
    </tr>
    <tr>
        <td><?= $nama ?></td>
        <td><?= $pemeriksaan ?></td>
        <td><?= $tanggallhr ?></td>
        <td><?= $jeniskelamin ?></td>
    </tr>
</table>
</body>
</html>