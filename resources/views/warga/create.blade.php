<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>create</title>
</head>
<body class="container pt-5">
  <h1>Tambah data</h1>
  <form class="mt-5" action="/warga/store" method="post">
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama..">
    </div>
    <div class="mb-3">
      <label for="nik" class="form-label">nik</label>
      <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan nik..">
    </div>
    <div class="mb-3">
      <label for="no_kk" class="form-label">No. KK</label>
      <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="Masukan no_kk..">
    </div>
    <select class="form-select" name="jenis_kelamin">
      <option value="">>-- Pilih Jenis Kelamin --<</option>
      <option value="l">Laki-Laki</option>
      <option value="p">Perempuan</option>
    </select>
    <div class="mb-3">
      <label for="alamat" class="form-label">alamat</label>
      <textarea class="form-control" id="alamat" name="alamat" cols="30" rows="10" placeholder="Masukan alamat.." ></textarea>
    </div>
    <button class="btn btn-primary" type="submit" name="submit">Tambah</button>
  </form>
</body>
</html>