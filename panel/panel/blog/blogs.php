<?php include "template/header.php"; ?>
<?php
$info = $config->db->prepare("SELECT * from settings where id=?");
$info->execute(array(1));
$infoAll = $info->fetch();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bloglar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Bloglar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Blog Ekle <a href="blog-add.php">+</a> </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Görsel</th>
                                        <th>Adı</th>
                                        <th>Açıklaması</th>
                                        <th>İşlem</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php


                                    $blogs = $config->db->prepare("SELECT * from blogs ");
                                    $blogs->execute(array());
                                    $blogsAll = $blogs->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($blogsAll as $row) {
                                    ?>
                                        <tr>
                                            <td> <a href="blog-edit.php?id=<?= $row['id'] ?>?image=<?= $row['image'] ?>"> <img width="80px" src="../images/blog/<?= $row['image'] ?>" alt=""></a> </td>
                                            <td><?= $row['title'] ?></td>
                                            <td> <?= $row['description'] ?></td>

                                            <td>
                                                <a href="blog-edit.php?id=<?= $row['id'] ?>?image=<?= $row['image'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="settings/blog-settings.php?delete=<?= $row['id'] ?>&image=<?= $row['image'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>


                                        </tr>
                                    <?php
                                    }
                                    ?>



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Görsel</th>
                                        <th>Adı</th>
                                        <th>Açıklaması</th>
                                        <th>İşlem</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include "template/footer.php"; ?>