<!DOCTYPE html>
<html lang="tr">
<head>

  <!-- Basic Page Needs
    ================================================== -->
  <meta charset="utf-8">
  <title>Hayal Kozmetik</title>

    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">


  </head>
  <body class="homepage">

    <div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
      <div class="nl-popup-main">
        <div class="nl-popup-inner">
          <div class="newsletter-inner">
            <div class="row">
              <div class="col-md-8">
                <h2 class="main_title">BİZE ABONE OL</h2>
                <span>Hayal Kozmetik</span>
                <p>Kampanyalardan ilk sen haberdar ol!</p>
                <form method="POST">

                  <input type="email" name="mail_al" placeholder="Email..">
                  <button type="submit" class="btn-black" name="gonder" title="Gönder">Gönder</button>
                </form>
              </div>
              <div class="col-md-4"></div>
            </div>
          </div>
        </div>
      </div>
    </div>



      <script src="js/jquery-1.12.3.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/jquery.magnific-popup.js"></script>
      <script>
      /* ------------ Newslater-popup JS Start ------------- */
        $(window).load(function() {
          $.magnificPopup.open({
          items: {src: '#newslater-popup'},type: 'inline'}, 0);
        });
          /* ------------ Newslater-popup JS End ------------- */
      </script>

  </body>

</html>
