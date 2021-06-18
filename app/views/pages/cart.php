<?php 
class cart extends view{
    public function output (){
        $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
	echo breadcrumbs(); 
    ?>
    <br><br><br>
<section class="cart-content">
<div class="row">
 <div class="cart-container" style="margin-right:10%">
 <form>
    <table class="cart-table"  cellspacing="0">
    <thead>
			<tr>
                <th class="product-image">&nbsp;</th>
				<th class="cart-description">Description</th>
				<th class="cart-price">Price</th>
				<th class="cart-quantity">Quantity</th>
				<th class="cart-total">Subtotal</th>
                <th class="cart-delete">&nbsp;</th>
			</tr>
        <tbody>
			<tr class=" cart_item">
				<td class="product-thumbnail">
				<a href="" class="no-lightbox"><img height="60" src="<?php echo URLROOT . 'images/car.jpg'; ?>"></a></td>
				<td class="product-name" data-title="cart-description">
				<a href="">this is a super car</a><dt>Sold By:</dt><p><a href="" title="L">item seller</a></p>
				</td>
				<td  data-title="Price"><span ><bdi>610.00&nbsp;<span>EGP</span></bdi></span>						
				</td>
				<td  data-title="Quantity">1 <input type="hidden" name="" value=""></td>
				<td  data-title="TOTAL"><span >EGP</span></td>
				<td >
				<button class="btn login-btn"  id="delete" name="delete" viewBox="0 0 10 16">Remove item</button>	</td>
           </tr>
			
		   <tr>
			  <td colspan="6" >
			     <div class="row">
			      <label >Coupon:</label>
				  <input type="text" name="" class="form-control " style="background-color:#FF7A00; width:60%;"  value="" placeholder="Coupon code">
				  <button type="submit" class="login-btn" style="margin-left:3%" name="Applycoupon">Apply coupon</button>
			     </div>	
		   </tr>
		</tbody>   
	</thead>
    </table>
 </form>
 </div>
 
 <div class="table2"  id="table2" style="position:realtive; ">
	<table style="border-radius: 19px;"  cellspacing="0">
      <h2 class="checkot-total">Cart totals</h2>
	   <tbody >
            <tr>
		       <th >Subtotal</th>
		       <td data-title="Subtotal"><span ><bdi>610.00&nbsp;<span >EGP</span></bdi></span></td>
	       </tr>
		
		   <tr>
	           <th>Shipping</th>
	           <td data-title="Shipping">
            <ul>
            <li>
              <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate1" value="flat_rate:1">
              <label>Flat rate: <span><bdi>35.00&nbsp;<span >EGP</span></bdi></span></label>	
            </li>
            </ul>
              <p>Shipping to <strong>cairo, Cairo</strong>.</p>
              </td>
           </tr>

           <tr class="order-total">
           <th >Total</th>
           <td data-title="Total"><strong><span ><bdi>645.00&nbsp;<span>EGP</span></bdi></span></strong> </td>
          </tr>
       </tbody>
	  </table>	
	  <input type="submit" style="margin-top:4%; width:45%" class="login-btn" id="tocheckout" name="tocheckout" onsubmit="return false" value="Proceed to Checkout">
	  </div>        




</div>
</section>







<?php
  require APPROOT . '/views/inc/footer.php';
  }
}
?>






