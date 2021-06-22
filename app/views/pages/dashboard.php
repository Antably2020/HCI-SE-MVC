<?php 
class  dashboard extends view{
    public function output (){
        $title = $this->model->title;
    require APPROOT . '/views/inc/adminHeader.php';
    
    
    ?> 
    
    <head>
        <style>
            a{
                color:#FF7A00
            }
            footer{
    bottom:0;
  } 
            </style>
            

            </head>
    <div class="main" style="margin-left: 200px; ">

	<div class="row" style="padding-bottom:10px">
    <div class="col-md-12">
			<h2>ALL<b> USERS</b></h2>
            
      <hr class="hr2" style="margin-top:4px">


<div style="padding-top:50px">

<p>
	Hello <strong>Zoair</strong> (not <strong>Zoair</strong>? <a href="">Log out</a>)</p>

    <p>
	From your account dashboard you can view your <a  href="<?php echo URLROOT . 'public/admin/A_orders'; ?>">ORDERS</a>, manage your <a  href="<?php echo URLROOT . 'public/admin/A_products'; ?>">PRODUCTS</a>.</p>


    </div></div>
    </div>
</div>
 <?php
require APPROOT . '/views/inc/footer.php';

  }
}
?>
