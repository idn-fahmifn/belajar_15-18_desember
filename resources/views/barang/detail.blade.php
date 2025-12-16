<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Barang</title>
</head>
<body>
    <h1>Detail Barang</h1>
    
    <table>
        <tbody>
            <tr>
                <td>Nama Barang :</td>
                <td>{{ $data->nama_barang }}</td>
            </tr>
            <tr>
                <td>Kode Barang :</td>
                <td>{{ $data->kode_barang }}</td>
            </tr>
            <tr>
                <td>Stok :</td>
                <td>{{ $data->stok }}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>