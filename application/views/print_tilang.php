<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Tilang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>ID Tilang</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pasal</th>
                <th>Denda</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($tilang as $ttl) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $ttl->id_tilang ?></td>
                <td><?= $ttl->nama ?></td>
                <td><?= $ttl->alamat ?></td>
                <td><?= $ttl->pasal ?></td>
                <td><?= $ttl->denda ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
