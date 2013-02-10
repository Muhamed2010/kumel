
<div class="container deals">
  <?php

  $url = 'http://api.roomorama.com/v1.0/rooms.json?destination_id=2533&limit=100';
  $content = file_get_contents($url);
  $json = json_decode($content, true);

  foreach($json['result'] as $item) {
    print '<a href="'.$item['url'].'" title="'.$item['title'].'"target=_blank>';
    print'<div class="boox">';

      print'<div class="tag-currency">'.$item['price'];
      print'"</div>';
 

      print '<img class="lazy" src="' . $item['thumbnail'] . '" border="0" alt="" />';
    print '<div class="banner">';
    print'<div class="tag-title">"'.$item['title'].'"</div>';
     print'<div class="tag-location">"'.$item['city'].'"</div>';
    print'</div>';

    print '</div>';
    print '</a>';

  } ?>

  
 
</div>