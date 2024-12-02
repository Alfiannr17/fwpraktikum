<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Unit</th>
                <th>Tipe</th>
                <th>Informasi</th>
                <th>Qty</th>
                <th>Produsen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->unit }}</td>
                    <td>{{ $product->type }}</td>
                    <td>{{ $product->information }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->producer }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
