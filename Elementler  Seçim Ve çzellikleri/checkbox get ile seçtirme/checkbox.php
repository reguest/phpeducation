
 <form  method="post">
   <?php

   if(isset($_POST)) {
   $prg = $_POST['progdil'];


   foreach($prg as $dil) {
   echo  $dil ;
   }
   }
    ?>
 <label><input type="checkbox" name="progdil[]" value="php"/> php</label><br/>
 <label><input type="checkbox" name="progdil[]" value="asp"/> asp</label><br/>
 <label><input type="checkbox" name="progdil[]" value="ajax"/> ajax</label><br/>
 <label><input type="checkbox" name="progdil[]" value="jquery"/> jquery</label><br/>
<input type="submit" name="" value="">
 </form
