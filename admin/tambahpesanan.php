<?php

require_once 'dbkoneksi.php';
require_once 'header.php';
require_once 'sidebar.php';

if (isset($_GET['idedit'])) {
    $id = $_GET['idedit'];

    $sql = "SELECT * FROM pesanan WHERE id=?";
    $pr = $dbh->prepare($sql);
    $pr->execute([$id]);
    $row = $pr->fetch();
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Pesanan</h1>
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
                            <h3 class="card-title">Tambah Pesanan</h3>

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

                            <form method="POST" action="proses_pesanan.php?idedit=<?php if (isset($id)) {
                                                                                        echo $id;
                                                                                    } ?>">
                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-anchor"></i>
                                                </div>
                                            </div>
                                            <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?php if (isset($row['tanggal'])) {
                                                                                                                            echo $row['tanggal'];
                                                                                                                        } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adjust"></i>
                                                </div>
                                            </div>
                                            <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" value="<?php if (isset($row['nama_pemesan'])) {
                                                                                                                                        echo $row['nama_pemesan'];
                                                                                                                                    } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat Pemesan</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adjust"></i>
                                                </div>
                                            </div>
                                            <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control" value="<?php if (isset($row['alamat_pemesan'])) {
                                                                                                                                            echo $row['alamat_pemesan'];
                                                                                                                                        } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-4 col-form-label">No Hp</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adjust"></i>
                                                </div>
                                            </div>
                                            <input id="no_hp" name="no_hp" type="text" class="form-control" value="<?php if (isset($row['no_hp'])) {
                                                                                                                        echo $row['no_hp'];
                                                                                                                    } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adjust"></i>
                                                </div>
                                            </div>
                                            <input id="email" name="email" type="email" class="form-control" value="<?php if (isset($row['email'])) {
                                                                                                                        echo $row['email'];
                                                                                                                    } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adjust"></i>
                                                </div>
                                            </div>
                                            <input id="jumlah_pesanan" name="jumlah_pesanan" type="number" class="form-control" value="<?php if (isset($row['jumlah_pesanan'])) {
                                                                                                                                            echo $row['jumlah_pesanan'];
                                                                                                                                        } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adjust"></i>
                                                </div>
                                            </div>
                                            <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Contoh: Lebar layar 21 inch"><?php if (isset($row['deskripsi'])) {
                                                                                                                                                            echo $row['deskripsi'];
                                                                                                                                                        } ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="produk_id" class="col-4 col-form-label">Produk</label>
                                    <div class="col-8">
                                        <?php
                                        $sqljenis = "SELECT * FROM produk";
                                        $rsjenis = $dbh->query($sqljenis);
                                        ?>
                                        <select id="produk_id" name="produk_id" class="custom-select">
                                            <?php
                                            foreach ($rsjenis as $rowjenis) {
                                            ?>
                                                <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <br>
                                        <button name="proses" type="submit" value="<?php if (isset($row['id'])) {
                                                                                        echo "update";
                                                                                    } else {
                                                                                        echo "create";
                                                                                    } ?>" class="btn btn-primary"><?php if (isset($row['id'])) {
                                                                                                                        echo "Update";
                                                                                                                    } else {
                                                                                                                        echo "Submit";
                                                                                                                    } ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Data Pesanan - By Reyvaldo Arrizky - TI15
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