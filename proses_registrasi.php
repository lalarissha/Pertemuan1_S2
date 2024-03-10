<?php
// Fungsi untuk menghitung skor berdasarkan jawaban skill web dan programming
function hitungSkor($skills) {
    // Menghitung total skor dari jawaban skill
    $totalSkor = array_sum($skills);

    // Menentukan predikat berdasarkan total skor
    if ($totalSkor == 0) {
        return "Tidak Memadai";
    } elseif ($totalSkor > 0 && $totalSkor <= 40) {
        return "Kurang";
    } elseif ($totalSkor > 40 && $totalSkor <= 60) {
        return "Cukup";
    } elseif ($totalSkor > 60 && $totalSkor <= 100) {
        return "Baik";
    } elseif ($totalSkor > 100 && $totalSkor <= 150) {
        return "Sangat Baik";
    } else {
        return "Skor tidak valid";
    }
}

// Menangkap data dari formulir
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$skill = isset($_POST['skill']) ? $_POST['skill'] : array(); // Memastikan bahwa variabel skill tidak error jika tidak ada yang dipilih
$domisili = $_POST['domisili'];
$email = $_POST['email'];

// Hitung skor berdasarkan skill yang dipilih
$skor = array_sum($skill);

// Hitung predikat skor menggunakan fungsi yang didefinisikan
$predikatSkill = hitungSkor($skill);

// Menampilkan data yang diterima beserta skor
echo "<h2>Data yang Anda Kirim</h2>";
echo "NIM : $nim <br>";
echo "Nama : $nama <br>";
echo "Jenis Kelamin : $jk <br>";
echo "Program Studi : $prodi <br>";
echo "Skor Skill : $skor <br>";
echo "Predikat Skill : $predikatSkill <br>";
echo "Tempat Domisili : $domisili <br>";
echo "Email : $email";
?>
