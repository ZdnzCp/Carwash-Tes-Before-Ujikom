<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            /* Atur margin sesuai kebutuhan */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 10px;
            /* Atur padding sesuai kebutuhan */
        }

        h1 {
            text-align: center;
            font-size: 18px;
            /* Atur ukuran font sesuai kebutuhan */
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h1>Data Pelanggan</h1>
    
    <table>
        <thead>
            <tr>
                <th>Tanggal Pembelian</th>
                <th>No Telepon</th>
                <th>Nama Pelanggan</th>
                <th>Paket Yang Dipilih</th>
                <th>Harga Paket</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($data) && (is_array($data) || is_object($data)))
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->noTelp }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->namaPaket }}</td>
                        <td>Rp.{{ number_format($item->harga, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

</body>

</html>
