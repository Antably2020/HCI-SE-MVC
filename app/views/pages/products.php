<?php 
class products extends view{
    public function output (){
        $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
    echo breadcrumbs(); 
    ?>
   




<section class="products-content">
  <div class="container">
     
    <div class="products-area">
  
  <div class="row">
  <div class="col-md-12">
			<h2><b> PRODUCTS</b></h2>
    
       <hr class="hr2">
  </div>
  </div>
  
  <div class="row">
  
  <?php
  foreach($this->model->readProd() as $product){
    $var = "window.location.href='ProductDescription?id=".$product->id."';";
    ?>
        
 <!-- Product -->
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
       <br><br><br><div class="product">
    <article>
        <div class="thumb">
          <img class="img-fluid" src="<?php echo URLROOT . $product->img; ?>" alt="Genuine Air Mass Sensor Seal, Ring O MAZDA 3 BL / ZL01-13-214">
        </div>
          
      <span class="tag"><?php echo $product->name; ?></span>
      <h2 class="title text-center"><?php echo  $product->description; ?></h2>
      <div class="price">
                EGP&nbsp;<?php echo  $product->price; ?>&nbsp;
      </div>
      <div class="product-hover d-none d-lg-block d-xl-block">
       
        <div class="buttons">
          <form action="ProductDescription" method="post" name="addToCart">                                            
              <?php echo'<button id="addtocart" name="addtocart" class="btn btn-block  p-btn"  value="'.$product->id.'">Details</button>';?>
          </form>
        </div>
      </div>

  </article>
        </div>
            </div>
      
       



<?php
  }
  ?>
       





       










       






     
         </div>
</div>
  </div>
</section>
<?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>