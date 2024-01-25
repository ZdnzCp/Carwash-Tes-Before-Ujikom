<!DOCTYPE html>

<head>
    <title>Invoice</title>
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    .invoice-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .invoice-card {
        border: 1px solid #ccc;
        border-radius: 10px;
        /* Sudut bulat */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 400px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .invoice-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .invoice-details p {
        margin: 0;
        padding: 5px 0;
    }

    .invoice-details strong {
        margin-right: 5px;
        width: 130px;
        /* Menyesuaikan lebar strong untuk sejajar */
        display: inline-block;
        /* Menjadikan strong sebagai elemen inline-block */
    }

    .download-pdf a {
        text-decoration: none;
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .download-pdf a:hover {
        background-color: #0056b3;
    }
</style>

<body>

    <div class="invoice-container">
        <div class="invoice-card">
            <div class="invoice-header">
                <h2>Invoice</h2>
            </div>
            <div class="invoice-details">
                    
                <p><strong>Tanggal:</strong>{{ $invoice->created_at}}</p>
                <p><strong>No Telepon:</strong> {{ $invoice->noTelp }}</p>
                <p><strong>Nama Pengguna:</strong> {{ $invoice->nama }}</p>
                <p><strong>Paket yang Dipilih:</strong>{{ $invoice->namaPaket }} </p>
                <p><strong>Harga Paket:</strong>Rp. {{ $invoice->harga }}</p>
                <p><strong>Nominal Diberikan:</strong> Rp. {{ $invoice->nominal }}</p>
            </div>
        </div>
    </div>

</body>

</html>
