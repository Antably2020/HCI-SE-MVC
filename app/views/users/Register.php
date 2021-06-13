<?php
class Register extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';?>
   
   <div class="login-container ">


<div> <button class="column" style="background-color:#bbb;"><a href="<?php echo URLROOT . 'public/users/login'; ?>"><h1>Login<h1></a></button></div>

<div> <button class="column"style="border-bottom:0px; border-top: 5px solid #FF7A00; "  ><a href="<?php echo URLROOT . 'public/users/register'; ?>"><h1>SignUp<h1></a></button></div>




  <form class="form" method="post" action="" name="Login" >
       
    <h1 style=" padding-top: 105px;">REGISTER<h1>
      
		<div>
	
             <input class="login-field1" type="text"  required="true"  name="fname" placeholder="First Name" autofocus="false">

						<input class="login-field1" type="text"  required="true"  name="lname" placeholder="Last Name" autofocus="false">
            <input class="login-field" type="text"  required="true"  name="email" placeholder="Email Address" autofocus="false">
						
            <input class="login-field" type="text"  required="true"  name="age" placeholder="Age" autofocus="false">
						
			
			
            <input class="login-field"type="password" required="true" name="password" placeholder="password" autofocus="false">
					
						<input class="login-field"type="password" required="true" name="C_password" placeholder="confirm password" autofocus="false">
					</div>
				
					
					
					
        <input type="submit" class="login-btn" id="Login" name="Login"onsubmit="return false" value="submit" class="login-button">
        <input type="button" class="login-btn" onclick="window.location.href='<?php echo URLROOT . 'public'; ?>';" value="Back" />
  
	  </form>  </div>

<?php
    require APPROOT . '/views/inc/footer.php';
  }

 
  }?>

