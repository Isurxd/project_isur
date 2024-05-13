<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2" align="center">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>nama barang</th>
            <th>nama pembeli</th>
            <th>jumlah</th>
            <th>tanggal</th>
        </tr>
        
        @php $no = 1; @endphp
        @foreach ($data as $transaksi )

        <tr>
            <td>{{$no++ }}</td>
            <td>{{$transaksi->id }}</td>
            <td>{{$transaksi->barang2->nama_barang }}</td>
            <td>{{$transaksi->pembeli->nama_pembeli}}</td>
            <td>{{$transaksi->jumlah }}</td>
            <td>{{$transaksi->tanggal }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>