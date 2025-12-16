<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
</head>
<body>
    <h1>List Data Barang</h1>

    <table style="width: 60dvw; border-collapse:collapse;" border="1">
        <thead>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Stok</th>
            <th>Pilihan</th>
        </thead>
        <tbody>
            @forelse ( $data as $item )
                <tr>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->kode_barang }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>
                        <a href="">detail</a>
                    </td>
                </tr>
            @empty
                
            @endforelse
        </tbody>
    </table>

</body>
</html>