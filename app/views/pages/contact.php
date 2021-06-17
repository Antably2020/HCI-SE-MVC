<?php
class contact extends view{

 public function output(){
    $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
 ?>

      <!--      <select class="form-select login-field" name="choice" aria-label="Default select example">
  <option value="none" selected disabled hidden>Select</option>
  <option value="1">Orders and shipping</option>
  <option value="2">option 2</option>
  <option value="3">option 3</option>
</select>
<textarea class="form-control login-field" id="exampleFormControlTextarea1" rows="3" name="desc" placeholder="Description"style="  display: block; margin-left:auto; margin-right: auto;"></textarea>
-->


<div class="login-container ">
    
    <form class="form" method="post" action="post" name="Contact" style="padding: 18px;" >
         <div style="margin-top:10px;">
<select class="btn  dropdown-toggle" name="choice" style="width:60%; border:2px solid #FF7A00;">
  <option value="none" selected disabled hidden>Select</option>
  <option value="1">Exchanges</option>
  <option value="2">Warranty</option>
  <option value="3">Shipping</option>
  <option value="4">Gifts</option>
</select>
         </div>
      <div  style=" padding-top: 30px; ">
              <div ><label >Descrption</label></div>
              <textarea class="form-control center-block" style="width:60% ;border:2px solid #FF7A00;" type="text" required="true" name="" ></textarea>
            </div>
          
            
            
            
          <input type="submit" class="login-btn" id="Login" name="Login"onsubmit="return false" value="Submit" class="login-button">
          
        
      </form>     </div>

 <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>