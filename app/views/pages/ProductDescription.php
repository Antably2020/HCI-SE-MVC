<?php 
class ProductDescription extends view{
    public function output (){
        $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
    ?>
    <br><br><br>

    



    
<body>

   
<div class="row" >
<div class="card" style="margin-left:5%;">
  <img src="<?php echo URLROOT . 'images/im.png'; ?>" alt="Denim Jeans" style="width:100% hieght:100%">    
</div>
<div class="details">
        <h1><b> Product Name  </b></h1>
        <br>
        <p class="price">$19.99</p>
        <div style="font-size:20px ">
        <p><b>Avalability:</b> in stock  </p>
        <p><b>Product code:</b> cs000 </p>
        <p><b>Tags:</b> spare parts  </p>
        <p> This is description of the product  </p>
</div>
        <div >
<button class="cart-btn" style="border-radius:15px; font-size:20px; margin-right:10px;">		
Add to Cart</button> 
<input type="number" value="1" min="1" max="10" step="1" style="font-size:20px; border-radius:10px; width:20%; border:2px solid #000; "> 
</div>
</div>
<div style="margin-top:5%; margin-left:15%;">

  <h2><b> Relevant Products<b></h2>



  
</div>
</div>
        
    </body>
<?php
  require APPROOT . '/views/inc/footer.php';
  }
}
?>


