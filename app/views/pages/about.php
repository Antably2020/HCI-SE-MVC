<?php 
class About extends view{

  public function output(){
    $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
 ?>


 <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>