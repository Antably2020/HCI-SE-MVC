<?php
class contact extends view{

 public function output(){
    $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
 ?>

<div class="login-container " style="border-bottom:0px; border-top: 5px solid #FF7A00; ">



  <form class="form" method="post" action="" name="Submit" >
       
    <h1 style=" padding-top: 105px;">Contact Us<h1>
      
		<div  >
	
						
						<input class="login-field" type="text"  required="true"  name="email" placeholder="Email Address" autofocus="false">
						
		
			
			
	
            <select class="form-select login-field" name="choice" aria-label="Default select example">
  <option selected>What is this about?</option>
  <option value="1">complain</option>
  <option value="2">option 2</option>
  <option value="3">option 3</option>
</select>
<textarea class="form-control login-field" id="exampleFormControlTextarea1" rows="3" name="desc" placeholder="Description"style="  display: block; margin-left:auto; margin-right: auto;"></textarea>
					</div>
				
					
					
					
        <input type="submit" class="login-btn" id="Login" name="submit"onsubmit="return false" value="submit" class="login-button">
        <input type="button" class="login-btn" onclick="window.location.href='<?php echo URLROOT . 'public'; ?>';" value="Back" />
      
  
	  </form>  
  
     </div>


 <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>