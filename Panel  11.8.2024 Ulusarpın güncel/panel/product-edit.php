<?php
include "template/header.php"; ?>
 
<?php
$id = intval($_GET['id']);
$products = $config->db->prepare("SELECT * from products where id=?");
$products->execute(array($id));
$productAll = $products->fetch();


?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ürün Düzenle</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Ürün Düzenle</li>
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
                        Ürün Düzenle

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
                        <form method="POST" action="settings/product-settings.php" enctype="multipart/form-data">
                        <div class="mb-3">
                        <img  width="80px" src="../images/product/<?= $productAll['mainImage'] ?>" alt="">

                            </div>
                       
                       
                            <input type="hidden" value="<?= $productAll['mainImage'] ?>" name="oldImage">
                             <input type="hidden" value="<?= $productAll['id'] ?>" name="id">
                            
                            <div class="mb-3">
                                <input class="form-control" type="file" name="imageFile">
                            </div>


                            <div class="mb-3">
                                <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                                    placeholder="Ürün Adı" value="<?= $productAll['title'] ?>" > 
                            </div>


                            <div class="mb-3">
                                <input type="text" class="form-control" name="productOrder" id="exampleInputEmail1"
                                    placeholder="Ürün Sırası" value="<?= $productAll['productOrder'] ?>" >
                            </div>

                            <div class="mb-3">
                          
                                    <textarea class="textarea" name="description" placeholder="Ürün Açıklaması" style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    <?= $productAll['description'] ?> 
                        </textarea>
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="model" id="exampleInputEmail1"
                                    placeholder="Model"  value="<?= $productAll['model'] ?>" >
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="color" id="exampleInputEmail1"
                                    placeholder="Renk"  value="<?= $productAll['color'] ?>" >
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="body" id="exampleInputEmail1"
                                    placeholder="Beden"  value="<?= $productAll['body'] ?>" >
                            </div>

                            <div class="mb-3">
                                 <select name="category" class="form-control">                                 
                                    <?php
                                    $categorie = $config->db->prepare("SELECT * from categories 
                                    ORDER BY id DESC");
                                     $categorie->execute(array());
                                     $categorieAll = $categorie->fetchAll(PDO::FETCH_ASSOC);
                                     foreach ($categorieAll as $row) {
                                         ?>
                                        <option <?php if($productAll['category']==$row['id']){ echo "Selected"; } ?> value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                                    <?php
                                     }
                                     ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="price" id="exampleInputEmail1"
                                    placeholder="Fiyatı"  value="<?= $productAll['price'] ?>" >
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="piece" id="exampleInputEmail1"
                                    placeholder="Ürün Adedi"  value="<?= $productAll['piece'] ?>" >
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" name="hastag" id="exampleInputEmail1"
                                    placeholder="Etiketleri"  value="<?= $productAll['hastag'] ?>" >
                            </div>

                            <div class="mb-3">
                                 <select name="status" class="form-control">                                 
                                  
                                    
                                        <option <?php if($productAll['status']==1){ echo "Selected"; } ?> value="1">Aktif</option>
                                        <option <?php if($productAll['status']==0){ echo "Selected"; } ?> value="0">Pasif</option>
                                  
                                </select>
                            </div>

                           


                    </div>

                    <div class="card-footer">
                        <button style="width: 100%;" type="submit" name="update_product_setting"
                            class="btn btn-primary ">Kaydet</button>
                    </div>
                    </form>

                    <?php
                                
                                $productImage = $config->db->prepare("SELECT * from images where category=?");
                                $productImage->execute(array($productAll['image']));
                                $productImageName = $productImage->fetch(); // images tablosundan ürünün herhangi bir resmini çektik
                        ?>


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