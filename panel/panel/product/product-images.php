<?php include "template/header.php"; ?>
<?php

 $id = intval($_GET['id']);

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
                    <h1>Çoklu Resim</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Çoklu Resim</li>
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
                    <!-- #id="my-awesome-dropzone" -->
                <form action="settings/image-settings.php" method="POST" class="dropzone" enctype="multipart/form-data" >
                   <input  type="hidden" name="id" value="<?= $id ?>" />
                </form>



                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Çoklu Resim Ekle  <a href="slider-add.php">+</a> </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr> 
                                        <th>Görsel</th>
                                                                           
                                        <th>İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $productImages = $config->db->prepare("SELECT * from images where category=:category 
                                    ORDER BY id DESC");
                                   $productImages->execute(array("category"=>$id));
                                   $productImagesAll = $productImages->fetchAll(PDO::FETCH_ASSOC);
                                   foreach ($productImagesAll as $row) {
                                       ?>
                                      <tr>
                                            <td> <img  width="80px" src="../images/product/<?= $row['imageName'] ?>" alt=""> </td>                                                           
                                            <td>
                                             <a href="settings/image-settings.php?delete=<?= $row['id'] ?>&image=<?= $row['imageName'] ?>&productId=<?=  $id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                  }
                                  ?>



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Görsel</th>
                                

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