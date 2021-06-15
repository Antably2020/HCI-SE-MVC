<?php 
class About extends view{

  public function output(){
    $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
 ?>
<body>
<div class="col-md-12">
			<h2>ABOUT <b>BIGBOYSTOYS</b></h2>
</div>

<div class="row" style="background-color:#FF7A00; ">
<div>
		
</div>

<p class="abus" style="margin-left:5%; margin-right:5%; margin-top:5%; margin-bottom:5%;">Odiggo  is a one-stop shop for everything that you need for your vehicle, either your looking for a cool accessory or a superior car part then odiggo is your online place to be, as we are trying to help all car owners to find the best quality car parts with the lowest prices possible, along the ease of using technology, therefore our platform fulfills the need and the luxury when it comes to car parts & accessories, finding a car part has never been easy, filtering the prices and availability of all products in seconds.</p>
</div> 

</body>

 <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>