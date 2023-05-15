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
                    <h1>Kategori Produk</h1>
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
                            <h3 class="card-title">Kategori Produk</h3>
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



                            <div class="container-fluid">
                                <?php
                                require_once 'dbkoneksi.php';
                                ?>
                                <?php
                                $sql = "SELECT * FROM kategori_produk ORDER BY kategori_produk.id ASC";
                                $rs = $dbh->query($sql);
                                ?>
                                <?php if (isset($row['id'])) : ?>
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <?php endif; ?>
                                <a class="btn btn-success" href="tambahkategori.php" role="button">Tambah Kategori</a><br>
                                <br>
                                <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
                                    <thead class="thead-dark" align="center">
                                        <tr>
                                            <th>ID Kategori</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php
                                        foreach ($rs as $row) {
                                        ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $row['nama'] ?></td>
                                                <td align="center">
                                                    <a class="btn btn-primary" href="view_kategori.php?id=<?= $row['id'] ?>">View</a>
                                                    <a href="tambahkategori.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                                                    <a class="btn btn-danger" href="delete_kategori.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Kategori <?= $row['nama'] ?>?')) {return false}">Delete</a>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
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