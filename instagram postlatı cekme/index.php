<?php
/*
$ch=curl_init();
curl_setopt_array($ch,[
CURLOPT_URL=>'https://www.instagram.com/aksaraygibiyiz/',
CURLOPT_RETURNTRANSFER=>true
]);
$output=curl_exec($ch);
curl_close($ch);
//echo $output;

preg_match_all('/"display_url":"(.*?)"/',$output,$images);

print_r($images);
*/
$json=file_get_contents('https://www.instagram.com/orhanince68/?__a=1');
$data=json_decode($json,true);

//print_r($data['graphql']['user']['edge_owner_to_timeline_media']['edges']);
//exit;
 ?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
<ul>
  <?php foreach ($data['graphql']['user']['edge_owner_to_timeline_media']['edges'] as $image): ?>


  <li><a href="#">
<img width="200px;" src="<?=$image['node']['display_url'] ?>" alt="">
  </a> </li>
</ul>
  <?php endforeach; ?>
  </body>
</html>
