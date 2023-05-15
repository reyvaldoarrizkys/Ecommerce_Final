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
                    <h1>Praktikum 02</h1>
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
                            <h3 class="card-title">Praktikum 02</h3>

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
                            <?php

                            $customer = $_POST["cust"];
                            $produk = $_POST["produk"];
                            $jumlah = $_POST["jumlah"];

                            //total harga beli
                            $total_harga;

                            //case
                            if ($produk === "TV") {
                                $total_harga = $jumlah * 4200000;
                            } elseif ($produk === "kulkas") {
                                $total_harga = $jumlah * 3100000;
                            } elseif ($produk === "mesincuci") {
                                $total_harga = $jumlah * 3800000;
                            } else {
                                $total_harga =  "";
                            }



                            ?>
                            <h1>Belanja Online</h1>
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8">
                                        <form method="POST" action="praktikum02.php">
                                            <div class="form-group row">
                                                <label for="cust" class="col-4 col-form-label">Customer</label>
                                                <div class="col-8">
                                                    <input id="cust" name="cust" placeholder="Nama Customer" type="text" class="form-control">
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
                                                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                                                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin_cuci">
                                                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                                                <div class="col-8">
                                                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-4 col-8">
                                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">Daftar Harga <span class="badge badge-light badge-pill">3</span></a>
                                            <div class="list-group-item">
                                                TV : 4.200.000
                                            </div>
                                            <div class="list-group-item">
                                                Kulkas : 3.100.000
                                            </div>
                                            <div class="list-group-item">
                                                Mesin Cuci : 3.800.000
                                            </div>
                                            <a href="#" class="list-group-item list-group-item-action active justify-content-between">Daftar Dapat Berubah Setiap Saat </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="container-fluid">
                                <h1>Daftar Hasil Belanja</h1>
                                <table class="table">
                                    <thead class="thead" style="text-align: center;">
                                        <tr>
                                            <th colspan="2" scope="col">Hasil Belanja</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <th><?= $customer; ?></th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Produk Pilihan</th>
                                            <th><?= $produk; ?></th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Jumlah Beli</th>
                                            <th><?= $jumlah; ?></th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Total Belanja</th>
                                            <th><?= $total_harga; ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Praktikum 02 - By Reyvaldo Arrizky - TI15
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