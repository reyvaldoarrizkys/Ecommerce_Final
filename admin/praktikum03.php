<?php

require_once 'header.php';
require_once 'sidebar.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Praktikum 03</h1>
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
                            <h3 class="card-title">Praktikum 03</h3>

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
                            <div class="container">
                                <h3>Form Pendaftaran IT Club Data Science</h3>
                                <hr>
                                <form method="POST" action="praktikum03.php">
                                    <div class="form-group row">
                                        <label for="nim" class="col-4 col-form-label">NIM</label>
                                        <div class="col-8">
                                            <input id="nim" name="nim" placeholder="Nim Anda" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Jenis Kelamin</label>
                                        <div class="col-8">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki">
                                                <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan">
                                                <label for="jk_1" class="custom-control-label">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                                        <div class="col-8">
                                            <select id="prodi" name="prodi" class="custom-select">
                                                <option value="Sistem-Informasi">SI</option>
                                                <option value="Teknik-Informatika">TI</option>
                                                <option value="Bisnis-Digital">BD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Skill Web & Programming</label>
                                        <div class="col-8">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="HTML">
                                                <label for="skill[]_0" class="custom-control-label">HTML</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="CSS">
                                                <label for="skill[]_1" class="custom-control-label">CSS</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="Javascript">
                                                <label for="skill[]_2" class="custom-control-label">Javascript</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="Bootstrap">
                                                <label for="skill[]_3" class="custom-control-label">Bootstrap</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="PHP">
                                                <label for="skill[]_4" class="custom-control-label">PHP</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="Python">
                                                <label for="skill[]_5" class="custom-control-label">Python</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="Java">
                                                <label for="skill[]_6" class="custom-control-label">Java</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="domisili" class="col-4 col-form-label">Domisili</label>
                                        <div class="col-8">
                                            <select id="domisili" name="domisili" class="custom-select">
                                                <option value="Jakarta">Jakarta</option>
                                                <option value="Depok">Depok</option>
                                                <option value="Bogor">Bogor</option>
                                                <option value="Tangerang">Tangerang</option>
                                                <option value="Bekasi">Bekasi</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email</label>
                                        <div class="col-8">
                                            <input id="email" name="email" placeholder="Email Anda" type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <h3>Proses Hasil Pendaftaran</h3>
                                <hr>
                                <?php

                                if (isset($_POST['submit'])) {

                                    $nim = $_POST['nim'];
                                    $nama = $_POST['nama'];
                                    $jk = $_POST['jk'];
                                    $prodi = $_POST['prodi'];
                                    $skill = $_POST['skill'];
                                    $domisili = $_POST['domisili'];
                                    //Buat Skor
                                    $skor = 0;
                                    $predikat = "";
                                    $email = $_POST['email'];


                                    foreach ($skill as $s) {
                                        switch ($s) {
                                            case 'HTML':
                                                $skor += 10;
                                                break;
                                            case 'CSS':
                                                $skor += 10;
                                                break;
                                            case 'Javascript':
                                                $skor += 20;
                                                break;
                                            case 'Bootstrap':
                                                $skor += 20;
                                                break;
                                            case 'PHP':
                                                $skor += 30;
                                                break;
                                            case 'Python':
                                                $skor += 30;
                                                break;
                                            case 'Java':
                                                $skor += 50;
                                                break;

                                            default:
                                                $skor = 0;
                                                break;
                                        }
                                    }

                                    if ($skor > 100 && $skor < 150) {
                                        $predikat =  "Sangat Baik";
                                    } elseif ($skor > 60 && $skor < 100) {
                                        $predikat =  "Baik";
                                    } elseif ($skor > 40 && $skor < 60) {
                                        $predikat =  "Kurang Baik";
                                    } elseif ($skor = 0 && $skor < 40) {
                                        $predikat =  "Kurang";
                                    } elseif ($skor = 0) {
                                        $predikat =  "Tidak Memadai";
                                    } else {
                                        $predikat =  "Tidak Terdaftar";
                                    }
                                }
                                echo "NIM : " . $nim;
                                echo "<br>Nama Lengkap : " . $nama;
                                echo "<br>Jenis Kelamin : " . $jk;
                                echo "<br>Program Studi : " . $nama;
                                echo "<br>Skill Web & Programming : ";
                                foreach ($skill as $s) {
                                    echo $s . " ,";
                                }
                                echo "<br>Domisili : " . $domisili;
                                echo "<br>Skor Anda : " . $skor;
                                echo "<br>Kategori Skor : " . $predikat;
                                echo "<br>Email : " . $email;

                                ?>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Praktikum 03 - By Reyvaldo Arrizky - TI15
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

require_once 'footer.php';

?>