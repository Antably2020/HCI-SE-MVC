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
   
            </style>
            

            </head>
    <div class="main" >

	<div class="row" >
    <div class="col-md-12">
			<h2>MY<b> PROFILE</b></h2>
            
      <hr class="hr2" style="margin-top:4px">



<p style="padding-top:50px">
	Hello <strong>Zoair</strong> (not <strong>Zoair</strong>? <a href="">Log out</a>)</p>

    <p>
	From your account dashboard you can view your <a  href="<?php echo URLROOT . 'public/admin/A_orders'; ?>">ORDERS</a>, manage your <a  href="<?php echo URLROOT . 'public/admin/A_products'; ?>">PRODUCTS</a>.</p>


    </div></div>
   






    <?php
  foreach($this->model->readuser($_SESSION['ID']) as $user){
    ?>

    <div class="container profile-body" style="padding-bottom:10%">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
				</div>
				<h3 class="user-name"><?php echo $user->Name; ?></h3>
				<h6 class="user-email"><?php echo  $user->Email; ?></h6>
			</div>
			<div class="about">
				<h3>Points</h3>
				<h5><?php echo  $user->Points; ?></h5>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12" >
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h5 class="mb-2" style="color:#FF7A00;">Personal Details</h5>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" id="fullName" placeholder="Enter full name">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
				</div>
			</div>

			
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="password">Password</label>
					<input type="text" class="form-control" id="Street" placeholder="Enter Street">
				</div>
			</div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="password">Confirm Password</label>
					<input type="text" class="form-control" id="Street" placeholder="Enter Street">
				</div>
			</div>
			
		
		
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div >
					<button type="button" id="submit" name="submit" style="margin-top:20px; "class=" login-btn">Update</button>
				</div>
			</div>
		</div>

</div>
</div>
</div>
</div>


<?php
}
?>

        </div>
</div>
 <?php
require APPROOT . '/views/inc/footer.php';

  }
}
?>
