<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        input[type="text"]:focus, input[type="date"]:focus {
            border-color: #007bff;
            outline: 0;
            box-shadow: 0 0 0 0.1rem rgba(0, 123, 255, 0.25);
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Data</h1>
        <form action="/manajemen/{{$manajemen->id}}" method="POST">
            @method('put')
            @csrf
            <input type="text" name="nama_barang" placeholder="Nama Barang" value="{{$manajemen->nama_barang}}"><br>
            <input type="text" name="jenis_barang" placeholder="Jenis Barang" value="{{$manajemen->jenis_barang}}"><br>
            <input type="text" name="jumlah" placeholder="Jumlah" value="{{$manajemen->jumlah}}"><br>
            <input type="date" name="tanggal_masuk_barang" value="{{$manajemen->tanggal_masuk_barang}}"><br>
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>
