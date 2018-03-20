<?php

  $db= new App\Database('blog');

  $datas = $db->query('SELECT * FROM posts');

  var_dump($datas);

  