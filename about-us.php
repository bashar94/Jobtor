<?php
  $q = "SELECT * FROM pages where slug = '$pageid'";
  $r = mysqli_query($dbc, $q);
  $data = mysqli_fetch_assoc($r);
 ?>
 <h1><?php echo $data['title']; ?></h1>
 <p><?php echo $data['body']; unset($r, $q, $data);?></p>
