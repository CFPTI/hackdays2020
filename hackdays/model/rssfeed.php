<?php
require_once 'search.php';

$url = "https://letemps.ch/feed/";
if (isset($_POST['submit'])) {
     if ($_POST['feedurl'] != '') {
          $url = $_POST['feedurl'];
     }
}

$invalidurl = false;
if (@simplexml_load_file($url)) {
     $feeds = simplexml_load_file($url);
} else {
     $invalidurl = true;
     $error = 'Invalid RSS feed URL';
}


$i = 0;
if (!empty($feeds)) {

     $site = $feeds->channel->title;
     $sitelink = $feeds->channel->link;

     echo "<h1>" . $site . "</h1>";
     foreach ($feeds->channel->item as $item) {
          // var_dump($item);
          $title = $item->title;
          $link = $item->link;
          $description = $item->description;
          // var_dump($description);
          $postDate = $item->pubDate;
          $pubDate = date('D, d M Y', strtotime($postDate));
          preg_match('/\<p\>(.+)\<\/p\>/', $description, $matches);
          // var_dump($matches);
          if (count($matches) > 0)
          $desc = $matches[1];
          else
          $desc = $description;

          insertRss($title, $link, $desc, "");

          if ($i >= 10) break;
          $i++;
     }
} else {
     if (!$invalidurl) {
          echo "<h2>No item found</h2>";
     }
}
