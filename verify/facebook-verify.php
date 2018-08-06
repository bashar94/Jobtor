<?php
if(isset($_SESSION['username'])){

  

}else{
  header('Location: ?page=login');
  exit();
}
?>
