<div class="container deals">
  <?php

  $url = 'http://deals.wego.com/api.js?market=id&page=1&per_page=50&location_id=67';
  $content = file_get_contents($url);
  $json = json_decode($content, true);

  foreach($json['deals'] as $item) {
    print '<a href="'.$item['url'].'" title="'.$item['headline'].'"target=_blank>';
    print'<div class="boox">';
    if(!$item['price']['formatted']){

      print'<div class="tag-currency">Enquiry</div>';
    }
    else{
      print'<div class="tag-currency">'.$item['price']['formatted'];
      print'</div>';
    }

    
    if(!$item['image']['original']){

    }
    else{
      print '<img class="lazy" src="' . $item['image']['thumbnail'] . '" border="0" alt="" />';
    }
    print '<div class="banner">';
    print'<div class="tag-title">"'.$item['headline'].'"</div>';
     print'<div class="tag-location">"'.$item['location'].'"</div>';
    print'</div>';

    print '</div>';
    print '</a>';

  } ?>

  
 
</div>