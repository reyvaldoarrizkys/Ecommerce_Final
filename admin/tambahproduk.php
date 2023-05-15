<?php

require_once 'dbkoneksi.php';
require_once 'header.php';
require_once 'sidebar.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id=?";
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
                    <h1>Tambah Produk</h1>
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
                            <h3 class="card-title">Tambah Produk</h3>

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

                            <form method="POST" action="proses_produk.php?idedit=<?php if (isset($id)) {
                                                                                        echo $id;
                                                                                    } ?>">
                                <div class="form-group row">
                                    <label for="kode" class="col-4 col-form-label">Kode Produk</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-anchor"></i>
                                                </div>
                                            </div>
                                            <input id="kode" name="kode" type="text" class="form-control" value="<?php if (isset($row['kode'])) {
                                                                                                                        echo $row['kode'];
                                                                                                                    } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama Produk</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adjust"></i>
                                                </div>
                                            </div>
                                            <input id="nama" name="nama" type="text" class="form-control" value="<?php if (isset($row['nama'])) {
                                                                                                                        echo $row['nama'];
                                                                                                                    } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adjust"></i>
                                                </div>
                                            </div>
                                            <input id="harga_jual" name="harga_jual" type="text" class="form-control" value="<?php if (isset($row['harga_jual'])) {
                                                                                                                                    echo $row['harga_jual'];
                                                                                                                                } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adjust"></i>
                                                </div>
                                            </div>
                                            <input id="harga_beli" name="harga_beli" type="text" class="form-control" value="<?php if (isset($row['harga_beli'])) {
                                                                                                                                    echo $row['harga_beli'];
                                                                                                                                } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="stok" class="col-4 col-form-label">Stok</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adjust"></i>
                                                </div>
                                            </div>
                                            <input id="stok" name="stok" type="text" class="form-control" value="<?php if (isset($row['stok'])) {
                                                                                                                        echo $row['stok'];
                                                                                                                    } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="min_stok" class="col-4 col-form-label">Min Stok</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adjust"></i>
                                                </div>
                                            </div>
                                            <input id="min_stok" name="min_stok" type="text" class="form-control" value="<?php if (isset($row['min_stok'])) {
                                                                                                                                echo $row['min_stok'];
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
                                            <input id="deskripsi" name="deskripsi" type="text" class="form-control" value="<?php if (isset($row['deskripsi'])) {
                                                                                                                                echo $row['deskripsi'];
                                                                                                                            } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kategori_produk_id" class="col-4 col-form-label">ID Kategori Produk</label>
                                    <div class="col-8">
                                        <?php
                                        $sqlkategori = "SELECT * FROM kategori_produk";
                                        $rskategori = $dbh->query($sqlkategori);
                                        ?>
                                        <select required id="kategori_produk_id" name="kategori_produk_id" class="custom-select" value="">
                                            <option value="" disabled selected>Pilih Kategori</option>
                                            <?php
                                            foreach ($rskategori as $rowkategori) {
                                            ?>
                                                <option value="<?= $rowkategori['id'] ?>"><?= $rowkategori['nama'] ?></option>
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
                            Data Produk - By Reyvaldo Arrizky - TI15
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

<script>
    var kategori_id = <?php if (isset($row['kategori_produk_id'])) {
                    echo $row['kategori_produk_id'];
                } ?>;
    document.getElementById("kategori_produk_id").value = kategori_id;
</script>