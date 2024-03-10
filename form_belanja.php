<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="row">
<div class="konten-kiri col-md-6 mb-5">
<h2>Belanja Online</h2>
<div class="container-fluid mt-5">
<form method="POST" action="#">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary" style="background-color: FC819E;">Submit</button>
    </div>
  </div>
</form>
</div>
</div>

<div class="konten-kanan col-md-6">
    <div class="ml-5">
        <div class="ml-5">
            <div class="ml-5">
                <div class="ml-5">
                  <div class="ml-5">
                    <ul class="list-group">
                      <li class="list-group-item active" style="background-color: FC819E;">Daftar Harga</li>
                      <li class="list-group-item">TV : Rp. 4.200.000</li>
                      <li class="list-group-item">Kulkas : Rp. 3.100.000</li>
                      <li class="list-group-item">Mesin Cuci : Rp. 3.800.000</li>
                      <li class="list-group-item active" style="background-color: FC819E;">Harga Dapat Berubah Setiap Saat</li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


<?php
if (isset($_POST['name']) && isset($_POST['produk']) && isset($_POST['jumlah']))
{
$nama = $_POST ['name'];
$produk = $_POST ['produk'];
$jumlah = $_POST ['jumlah'];
$harga_tv = 4200000;
$harga_kulkas = 3100000;
$harga_mesin_cuci = 3800000;

switch ($produk) 
{
    case 'TV':
        $total = $harga_tv * $jumlah;
        break;
    case 'Kulkas':
        $total = $harga_kulkas * $jumlah;
        break;
    case 'Mesin Cuci':
        $total = $harga_mesin_cuci * $jumlah;
        break;
    default:
        echo "error";
        break;
}

echo "Nama Customer: ". $nama . "<br>";
echo "Produk Pilihan: ". $produk . "<br>";
echo "Jumlah Beli: ". $jumlah . "<br>";
echo "Total Belanja: " . "Rp. ".  $total;
}
?>