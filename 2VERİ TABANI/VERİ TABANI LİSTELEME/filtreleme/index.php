   <?php
$execute = []; // sql execute karşılıkları için boş dizi oluşturduk


if(isset($_GET['categoryId'])) {  // verileri filtrele

 $categoryId= $_GET['categoryId'] ;
$sql = " where category=:category ORDER BY id DESC "; //sql sorgusu için arama yapılacak sütunları birleştirdik

                                       // $execute=" 'category' =>  $categoryId " ;
$execute["category"] = $categoryId; //boş diziye önce karşılık isim verdik ve = ile o ismi doldurduk

} else {  // filtreleme yapılmamış ise tüm verileri getir

$sql=" ORDER BY id DESC "; //sql sorgusu oluşturduk

 $execute=  [] ;
}

$products = $config->db->prepare("SELECT * from products " . $sql);

 $products->execute($execute);

$productsAll = $products->fetchAll(PDO::FETCH_ASSOC);





foreach ($productsAll as $row) {


}

?>