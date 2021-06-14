<?php 
class cart extends view{
    public function output (){
        $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
    ?>
    <br><br><br>
<section class="cart-content">
<div class="cart-container">

<form>

    <table class="cart-table" cellspacing="0">
    <thead>
			<tr>
                <th class="product-image">&nbsp;</th>
				<th class="cart-description">description</th>
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
						<a href="">this is a super car</a>
			<dt>Sold By:</dt>
	<p><a href="" title="L">item seller</a></p>
						</td>
						<td  data-title="Price">
							<span ><bdi>610.00&nbsp;<span>EGP</span></bdi></span>						
						</td>
						<td  data-title="Quantity">
						1 <input type="hidden" name="" value=""></td>

						<td  data-title="TOTAL">
							<span >EGP</span></td>
					
                    
						<td >
							<button class="btn btn-warning" id="delete" name="delete" viewBox="0 0 10 16">Remove item</button>	</td>

                        </tr>
			<tr>
				<td colspan="6" >
											<div>
							<label >Coupon:</label> <input type="text" name="" class="coupon-input"  value="" placeholder="Coupon code"> <button type="submit" class="btn btn-warning" name="Applycoupon">Apply coupon</button>
													</div>	
			</tr>
					</tbody>   
		</thead>
        </table>
</form>

<div class="table2"  id="table2" style="position:realtive; bottom:0px; right:0px;">
	<table style="border-radius: 19px;"  cellspacing="0">
		<h2 class="checkot-total">Cart totals</h2>
		<tbody ><tr>
			<th >Subtotal</th>
			<td data-title="Subtotal"><span ><bdi>610.00&nbsp;<span >EGP</span></bdi></span></td>
		</tr>
			<tr >
	<th>Shipping</th>
	<td data-title="Shipping">
					<ul >
									<li>
						<input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate1" value="flat_rate:1"><label>Flat rate: <span><bdi>35.00&nbsp;<span >EGP</span></bdi></span></label>	</li>
							</ul>
							<p >
					Shipping to <strong>cairo, Cairo</strong>. 				</p>
			</td>
</tr>
		<tr class="order-total">
			<th >Total</th>
			<td data-title="Total"><strong><span ><bdi>645.00&nbsp;<span>EGP</span></bdi></span></strong> </td>
		</tr>
</tbody></table>	
<button class="btn btn-warning">		

<a href=""  type="button">Proceed to checkout</a></button>
</div>        
</div>
</section>
<?php
  require APPROOT . '/views/inc/footer.php';
  }
}
?>






