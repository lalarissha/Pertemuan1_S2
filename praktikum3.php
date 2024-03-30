<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<!-- main.php -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>PRAKTIKUM</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum 3</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <!DOCTYPE html>
              <html lang="en">

              <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Formulir</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
              </head>

              <body>
                <?php
                $ar_prodi = [
                  "SI" => "Sistem Informasi",
                  "TI" => "Teknik Informatika",
                  "BD" => "Bisnis Digital"
                ];
                $ar_skill = [
                  "HTML" => 10,
                  "CSS" => 10,
                  "Javascript" => 20,
                  "RWD Boostrap" => 20,
                  "PHP" => 30,
                  "Python" => 30,
                  "Java" => 50
                ];
                $ar_domisili = [
                  "Jakarta",
                  "Bogor",
                  "Depok",
                  "Tanggerang",
                  "Bekasi",
                  "Lainnya"
                ];
                ?>

                <div class="container">
                  <h2>Formulir</h2>
                  <form method="POST" action="proses_registrasi.php">
                    <div class="form-group row">
                      <label for="nim" class="col-4 col-form-label">NIM</label>
                      <div class="col-8">
                        <input id="nim" name="nim" placeholder="Masukkan NIM Anda" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                      <div class="col-8">
                        <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-4">Jenis Kelamin</label>
                      <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="L">
                          <label for="jenis_kelamin_0" class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="P">
                          <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                      <div class="col-8">
                        <select id="prodi" name="prodi" class="custom-select">
                          <?php foreach ($ar_prodi as $k => $v) { ?>
                            <option value="<?php echo $k; ?>"><?php echo $v; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-4">Skill Web & Programming</label>
                      <div class="col-8">
                        <?php foreach ($ar_skill as $skill => $value) { ?>
                          <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill_<?php echo $skill; ?>" type="checkbox" class="custom-control-input" value="<?php echo $value; ?>">
                            <label for="skill_<?php echo $skill; ?>" class="custom-control-label"><?php echo $skill; ?></label>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
                      <div class="col-8">
                        <select id="domisili" name="domisili" class="custom-select">
                          <?php foreach ($ar_domisili as $domisili) { ?>
                            <option value="<?php echo $domisili; ?>"><?php echo $domisili; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email" class="col-4 col-form-label">Email</label>
                      <div class="col-8">
                        <input id="email" name="email" placeholder="Masukkan Email Anda" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </body>

              </html>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Ini Hasil Praktikum 3
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once 'footer.php';

?>