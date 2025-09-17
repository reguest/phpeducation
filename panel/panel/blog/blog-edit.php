<?php
include "template/header.php"; ?>
 
 <?php
$id = intval($_GET['id']);
$blogs = $config->db->prepare("SELECT * from blogs where id=?");
$blogs->execute(array($id));
$blogsAll = $blogs->fetch();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blog Düzenle</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Blog Düzenle</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                        Blog Düzenle

                        </h3>
                        <!-- tools box -->
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove"
                                data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <form method="POST" action="settings/blog-settings.php" enctype="multipart/form-data">
                        <input type="hidden" value="<?= $blogsAll['id'] ?>" name="id">
                        <div class="mb-3">
                        <img  width="80px" src="../images/blog/<?= $blogsAll['image'] ?>" alt="">

                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="file" name="imageFile">
                            </div>


                            <div class="mb-3">
                                <input type="text" class="form-control" name="title" value="<?= $blogsAll['title'] ?>" id="exampleInputEmail1"
                                    placeholder="Blog Adı">
                            </div>                      

                            <div class="mb-3">
                          
                                    <textarea class="textarea" name="description" placeholder="Blog Açıklaması" style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    <?= $blogsAll['description'] ?>
                                    </textarea>
                            </div>
                            <div class="mb-3">
                                 <select name="status" class="form-control">                                 
                                  
                                    
                                 <option <?php if($blogsAll['status']==1){ echo "Selected"; } ?> value="1">Aktif</option>
                                        <option <?php if($blogsAll['status']==0){ echo "Selected"; } ?> value="0">Pasif</option>
                                  
                                  
                                </select>
                            </div>

                           


                    </div>

                    <div class="card-footer">
                        <button style="width: 100%;" type="submit" name="update_blog_setting"
                            class="btn btn-primary ">Ekle</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- /.col-->
</div>
<!-- ./row -->
</section>
<!-- /.content -->
</div>


<!-- /.content-wrapper -->

<?php include "template/footer.php"; ?>