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
                    <h1>Siparişler</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Siparişler</li>
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
                            <h3 class="card-title"> </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sipariş No:</th>
                                        <th>Ürün Kodu</th>
                                        <th>Müşteri</th>     
                                        <th>Sipariş</th>          
                                        <th>Sipariş Saati</th>
                                        <th>Adet Fiyatı</th>
                                        <th>Adet </th>
                                        <th>Toplam Fiyatı</th>
                                        <th>Ödeme Türü </th>
                                        <th>Onay </th>
                                        <th>İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $orders = $config->db->prepare("SELECT * from orders  
                                    -- INNER JOIN products ON products.id = orders.product_id;
                                    LEFT JOIN user ON user.id = orders.user_id; 
                                    ORDER BY id DESC");
                                    $orders->execute(array());
                                    $ordersAll = $orders->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($ordersAll as $row) {
                                        $orderOrder = $row['order_status'];
                                    ?>
                                        <tr>
                                            <td><?= $row['order_id'] ?></td>
                                            <td><?= $row['product_id'] ?></td>
                                            <td><?= $row['k_adi'] ?></td>
                                            <td><?= $row['order_title'] ?></td>
                                            <td><?= $row['order_time'] ?></td>
                                            <td><?= $row['price'] ?> TL</td>
                                            <td><?= $row['order_piece'] ?></td>
                                            <td><?= $row['total_price'] ?> TL</td>
                                            <td><?php if ($row['payment_type'] == 1) {
                                                    echo "Nakit";
                                                }
                                                if ($row['payment_type'] == 2) {
                                                    echo "Kapıda";
                                                }
                                                if ($row['payment_type'] == 3) {
                                                    echo "Kredi Kartı ile online ödeme";
                                                } ?></td>

                                            <td> 
                                               <?php
                                                     if ($row['order_status'] == "1") {
                                                            echo "Onaylandı";
                                                        }
                                                        else if ($row['order_status'] == "2") {
                                                            echo "Reddedildi!";
                                                        } else { ?>
                                                            <a href="settings/order-settings.php?status=ok&id=<?= $row['order_id'] ?>&userId=<?= $row['user_id'] ?>&productId=<?= $row['product_id'] ?>&orderPiece=<?= $row['order_piece'] ?>" class="btn btn-sm btn-primary">Onay</a>
                                                    <a href="settings/order-settings.php?status=no&id=<?= $row['order_id'] ?>&userId=<?= $row['user_id'] ?>" class="btn btn-sm btn-danger">Red</a>
                                                    <?php   }
                                                     ?>
                                            </td>
                                            <td>
                                                <a href="order-edit.php?id=<?= $row['order_id'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="settings/order-settings.php?delete=<?= $row['order_id'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sipariş Numarası</th>
                                        <th>Ürün Kodu</th>
                                        <th>Müşteri</th>
                                        <th>Sipariş</th> 
                                        <th>Sipariş Saati</th>
                                        <th>Adet Fiyatı</th>
                                        <th>Adet </th>
                                        <th>Toplam Fiyatı</th>
                                        <th>Ödeme Türü </th>
                                        <th>Onay </th>
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