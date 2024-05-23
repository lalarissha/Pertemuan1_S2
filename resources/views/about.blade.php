@php
    $nama = "Rissa Ulandari";
    $nim = "0110123231";
    $prodi = "Sistem Informasi";
    $angkatan = 2023;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <h3>Nama Saya {{ $nama }}, NIM Saya {{ $nim }}, Program Studi Saya {{ $prodi }}, Saya Angkatan Tahun {{ $angkatan }}</h3>
</body>
</html>