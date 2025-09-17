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
                    <h1>Ürünler</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Ürünler</li>
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
                            <h3 class="card-title">Ürün Ekle <a href="product-add.php">+</a> </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Görsel</th>
                                        <th>Adı</th>
                                        <th>Sıra</th>
                                        <th>Model</th>
                                        <th>Renk</th>
                                        <th>Beden</th>
                                        <th>Kategori</th>
                                        <th>Fiyatı</th>
                                        <th>Adeti</th>
                                        <th>Yükleme Tarihi</th>
                                        <th>Etiket</th>
                                        <th>İşlem</th>
                                        <th>Çoklu Resim</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $execute = []; // sql execute karşılıkları için boş dizi oluşturduk
                                    if (isset($_GET['categoryId'])) {  // verileri filtrele
                                        $categoryId = $_GET['categoryId'];
                                        $sql = " where category=:category ORDER BY id DESC "; //sql sorgusu için arama yapılacak sütunları birleştirdik
                                        // $execute=" 'category' =>  $categoryId " ;
                                        $execute["category"] = $categoryId; //boş diziye önce karşılık isim verdik ve = ile o ismi doldurduk
                                    } else {  // filtreleme yapılmamış ise tüm verileri getir
                                        $sql = " ORDER BY id DESC "; //sql sorgusu oluşturduk
                                        $execute =  [];
                                    }
                                    $products = $config->db->prepare("SELECT * from products " . $sql);
                                    $products->execute($execute);
                                    $productsAll = $products->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($productsAll as $row) {
                                    ?>
                                        <tr>
                                            <td> <a href="product-edit.php?id=<?= $row['id'] ?>?image=<?= $row['image'] ?>"> <img width="80px" src="../images/product/<?= $row['mainImage'] ?>" alt=""></a>  </td>
                                            <td><?= $row['title'] ?></td>
                                            <td> <?= $row['productOrder'] ?></td>
                                            <td> <?= $row['model'] ?></td>
                                            <td> <?= $row['color'] ?></td>
                                            <td> <?= $row['body'] ?></td>
                                            <td> <?= $row['category'] ?></td>
                                            <td> <?= $row['price'] ?></td>
                                            <td> <?= $row['piece'] ?></td>
                                            <td> <?= $row['time'] ?></td>
                                            <td> <?= $row['hastag'] ?></td>
                                            <td>
                                                <a href="product-edit.php?id=<?= $row['id'] ?>?image=<?= $row['image'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="settings/product-settings.php?imageCategory=<?= $row['image'] ?>&delete=<?= $row['id'] ?>&image=<?= $row['mainImage'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                            <td> <a href="product-images.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-home"></i></a> </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Görsel</th>
                                        <th>Adı</th>
                                        <th>Sıra</th>
                                        <th>Model</th>
                                        <th>Renk</th>
                                        <th>Beden</th>
                                        <th>Kategori</th>
                                        <th>Fiyatı</th>
                                        <th>Adeti</th>
                                        <th>Yükleme Tarihi</th>
                                        <th>Etiket</th>
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