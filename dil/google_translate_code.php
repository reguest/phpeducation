
<?php
$gstatus = '1'; 
$googlestatus = "";
if ($gstatus == '1') {
    $googlestatus = '
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" defer></script>
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: "tr",
            includedLanguages: "en,es,fr,de,ru,tr,ar,mk",
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        }, "google_translate_element");
    }

    function doGTranslate(langPair) {
        var lang = langPair.split("|")[1];
        if (lang) {
            window.location.href = window.location.href.replace(/\/([a-z]{2})\//, "/" + lang + "/");
        }
    }
    </script>
    </head>
    <body>
    <div class="col-md-a5" id="google_translate_element">
    <center>
    <div class="baslik">Dili Seçin</div>
    <a href="#" onClick="doGTranslate('tr|tr'); return false;" title="Türkçe" class="style2">&nbsp;&nbsp;Türkçe</a><br>
    <a href="#" onClick="doGTranslate('tr|en'); return false;" title="İngilizce" class="style2">&nbsp;&nbsp;İngilizce</a><br>
    <a href="#" onClick="doGTranslate('tr|de'); return false;" title="Almanca" class="style2">&nbsp;&nbsp;Almanca</a><br>
    <a href="#" onClick="doGTranslate('tr|ar'); return false;" title="Arapça" class="style2">&nbsp;&nbsp;Arapça</a><br>
    <a href="#" onClick="doGTranslate('tr|ru'); return false;" title="Rusça" class="style2">&nbsp;&nbsp;Rusça</a><br>
    <a href="#" onClick="doGTranslate('tr|mk'); return false;" title="Makedonca" class="style2">&nbsp;&nbsp;Makedonca</a>
    </center>
    </div>
    ';
}
?>
