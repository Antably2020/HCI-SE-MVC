<?php
class Login extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';?>
    
    <div class="row">
		<div class="col-md-12">
		<h2 ><a class="login-head1" href="<?php echo URLROOT . 'public/users/login'; ?>">Login</a> <li class="or">Or</li> <b> <a class="login-head2" style=" color: #FF7A00;" href="<?php echo URLROOT . 'public/users/register'; ?>">Register</a></b></h2>
     
 </div></div>
    
    <div class="login-container ">
    
      <form class="form" method="post" action="" name="Login" style="padding: 18px;" >
           
        
          
  
        <div  style=" padding-top: 50px; ">
      
               <div > <label >Email</label></div>
                <input class=" form-control center-block" style="width:60%" type="text"  required="true"  name="email" placeholder="Email Adress" autofocus="false">
                
        
          
          
<<<<<<< HEAD
      
          
                <input class="login-field" type="password" required="true" name="password" placeholder="password" autofocus="false">
=======
                <div ><label >Password</label></div>
          
                <input class="form-control center-block" style="width:60%" type="password" required="true" name="password" placeholder="password" autofocus="false">
>>>>>>> mahmoud
              </div>
            
              
              
              
            <input type="submit" class="login-btn" id="Login" name="Login"onsubmit="return false" value="Submit" class="login-button">
<<<<<<< HEAD
            <input type="button" class="login-btn" onclick="window.location.href='<?php echo URLROOT . 'public'; ?>';" value="Back" />
=======
            
>>>>>>> mahmoud
          
        </form>     </div>
    
    <?php

    require APPROOT . '/views/inc/footer.php';
  }


  }
?>
