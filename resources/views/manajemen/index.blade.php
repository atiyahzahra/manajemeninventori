<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manajemen Inventori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #f8f9fa;
      }
      h1 {
        color: #007bff;
        text-align: center;
        margin-top: 50px;
      }
      table {
        margin-top: 30px;
        border-collapse: collapse;
        width: 100%;
      }
      th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #dee2e6;
      }
      th {
        background-color: #007bff;
        color: white;
      }
      .btn {
        margin-right: 5px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>MANAJEMEN INVENTORI</h1>
      <a href="/manajemen/create" class="btn btn-primary mt-3">ADD DATA</a>
      <table class="table mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAMA BARANG</th>
            <th>JENIS BARANG</th>
            <th>JUMLAH</th>
            <th>TANGGAL MASUK BARANG</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          @foreach($manajemen as $w)
          <tr>
            <td>{{$w->id}}</td>
            <td>{{$w->nama_barang}}</td>
            <td>{{$w->jenis_barang}}</td>
            <td>{{$w->jumlah}}</td>
            <td>{{$w->tanggal_masuk_barang}}</td>
            <td>
              <a href="/manajemen/{{$w->id}}/edit" class="btn btn-warning">Edit</a>
              <form action="/manajemen/{{$w->id}}" method="POST" style="display: inline-block;">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
