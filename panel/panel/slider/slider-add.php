<?php
include "template/header.php"; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Slider Ekle</h1>
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
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Slider Ekle

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
                        <form method="POST" action="settings/sliders-settings.php" enctype="multipart/form-data">

                            <div class="mb-3">
                                <input class="form-control" type="file" name="imageFile">
                            </div>


                            <div class="mb-3">
                                <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                                    placeholder="Sayfa">
                            </div>


                            <div class="mb-3">
                                <input type="text" class="form-control" name="sliderOrder" id="exampleInputEmail1"
                                    placeholder="Sıra">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="description" id="exampleInputEmail1"
                                    placeholder="Açıklama">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="button" id="exampleInputEmail1"
                                    placeholder="Buton">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="url" id="exampleInputEmail1"
                                    placeholder="Bağlantı">
                            </div>


                            <div class="mb-3">
                                <label>Seçim</label>
                                <select name="status" class="form-control">
                                    <option value="1">Slider</option>
                                    <option value="0">Banner</option>
                                </select>
                            </div>


                    </div>

                    <div class="card-footer">
                        <button style="width: 100%;" type="submit" name="add_sliders_setting"
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