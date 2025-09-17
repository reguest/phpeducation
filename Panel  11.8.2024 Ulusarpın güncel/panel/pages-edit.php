<?php

include "template/header.php"; ?>

<?php

$id = intval($_GET['id']);



$page = $config->db->prepare("SELECT * from pages where id=?");

$page->execute(array($id));

$pageAll = $page->fetch();





?>



<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>Sayfa Detayları</h1>

                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>

                        <li class="breadcrumb-item active">Detay</li>

                    </ol>

                </div>

            </div>

        </div><!-- /.container-fluid -->

    </section>



    <!-- Main content -->

    <section class="content">

        <div class="row">

            <div class="col-md-12">

                <div class="card card-outline card-info">

                    <div class="card-header">

                        <h3 class="card-title">

                            Sayfa Detayları



                        </h3>

                        <!-- tools box -->

                        <div class="card-tools">

                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">

                                <i class="fas fa-minus"></i>

                            </button>

                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip" title="Remove">

                                <i class="fas fa-times"></i>

                            </button>

                        </div>

                        <!-- /. tools -->

                    </div>

                    <!-- /.card-header -->

                    <div class="card-body pad">

                        <form method="POST" action="settings/pages-settings.php">

                            <input type="hidden" name="id" value="<?= $pageAll['id']  ?>">

                            <div class="mb-3">

                                <textarea class="textarea" name="page_text" placeholder="İçerik buraya" style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                            <?= $pageAll['page_text'] ?>

                        </textarea>



                        <textarea class="textarea" name="page_text_en" placeholder="İçerik buraya" style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                            <?= $pageAll['page_text_en'] ?>

                        </textarea>
                            </div>



                            <div class="card-footer">

                                <button style="width: 100%;" type="submit" name="update_pages_setting" class="btn btn-primary ">Kaydet</button>

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