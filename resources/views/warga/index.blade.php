<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Daftar Data Warga</h2>
  <a href="">Tambah</a>
  <br><br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Nama.</th>
      <th>NIK.</th>
      <th>No. KK</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      {{-- <th>Aksi</th> --}}
    </tr>
    @foreach($warga as $data)
    <tr>
      <td>{{ $loop->iteration}}</td>
      <td>{{ $data->nama}}</td>
      <td>{{ $data->nik}}</td>
      <td>{{ $data->noKK}}</td>
      <td>{{ $data->jenisKelamin}}</td>
      <td>{{ $data->alamat}}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>