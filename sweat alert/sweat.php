<?php if (isset($_GET['status'])) {

    if ($_GET['status'] == "ok") { ?>
        <script>  sweetFire("Başarılı!", "İlanın başarılı bir şekilde EKLENDİ", "success", "black")</script>
    <?php }

    if ($_GET['status'] == "no") { ?>
        <script>  sweetFire("Hata!", "İlan eklemede bir sorun var", "error", "black")</script>
    <?php }


    if ($_GET['status'] == "edit") { ?>
        <script>  sweetFire("Başarılı!", "İlanın başarılı bir şekilde GÜNCELLENDİ", "success", "black")</script>
    <?php }

    if ($_GET['status'] == "noedit") { ?>
        <script>  sweetFire("Hata!", "İlanın GÜNCELLENEMEDİ", "error", "black")</script>
    <?php }


    if ($_GET['status'] == "image") { ?>
        <script>  sweetFire("Başarılı!", "Resim YÜKLENDİ", "success", "black")</script>
    <?php }

    if ($_GET['status'] == "noimage") { ?>
        <script>  sweetFire("Hata!", "Resim YÜKLENEMEDİ", "error", "black")</script>
    <?php }

    if ($_GET['status'] == "profileok") { ?>
        <script>  sweetFire("Başarılı!", "Profil bilgileriniz GÜNCELLENDİ", "success", "black")</script>
    <?php }

    if ($_GET['status'] == "profileno") { ?>
        <script>  sweetFire("Hata!", "Profil bilgileriniz GÜNCELLENEMEDİ", "error", "black")</script>
    <?php }


    if ($_GET['status'] == "loginok") { ?>
        <script>  sweetFire("Başarılı!", "Giriş Yapıldı", "success", "black")</script>
    <?php }
    if ($_GET['status'] == "loginno") { ?>
        <script>  sweetFire("Hata!", "Profil bilgileriniz GÜNCELLENEMEDİ", "error", "black")</script>
    <?php }

    if ($_GET['status'] == "registerok") { ?>
        <script>  sweetFire("Başarılı!", "Kayıt Yapıldı. Hesabınız Onaylandıktan sonra giriş yapabilirsiniz", "success", "black")</script>
    <?php }
    if ($_GET['status'] == "registerno") { ?>
        <script>  sweetFire("Hata!", "Kayıt olma hatalı", "error", "black")</script>
    <?php }

    if ($_GET['status'] == "logoutok") { ?>
        <script>  sweetFire("Başarılı!", "Başarıyla çıkış yapıldı", "success", "black")</script>
    <?php }



}
?>