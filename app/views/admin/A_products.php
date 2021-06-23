
<?php 
class A_products extends view{
    public function output (){
        $title = $this->model->title;
        ?><div style="margin-left: 160px;"><?php require APPROOT . '/views/inc/header.php'; echo breadcrumbs(); ?></div ><?php
        require APPROOT . '/views/inc/sidebar.php';
    ?>
   
   <head>
<script>


    $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

    </script>



</head>
<div class="main">





       <div class="container">
	<div class="row" style="padding-bottom:20px">
    <div class="col-md-12">
			<h2>ALL<b> PRODUCTS</b></h2>
            
      <hr class="hr2" >

</div>
	</div>

  
    
        <div class="row"> 
        <form action="add_product">
        <input type="submit" class="login-btn" id="Login" name="Login"  value="Add New" class="login-button">
         </form>
    

            <div class="col-md-12">
            
            
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr>
              <th>Featured</th>
              <th>Image</th>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
							
                                <th>Edit</th>
                                 <th>Delete</th>
						</tr>
					</thead>

					<tfoot>
						<tr>
              <th>Featured</th>
							<th>Image</th>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
							
                             <th>Edit</th>
                                 <th>Delete</th>
						</tr>
					</tfoot>

					<tbody>

           
  <?php
  foreach($this->model->readProd() as $product){
    ?>

						<tr>
             <td><input class="form-check-input"  type="checkbox" value="<?php echo $product->featured; ?>" id="flexCheckDefault"></td>
            <td><img class="img-fluid" src="<?php echo URLROOT . $product->img; ?>"  width="90" height="90" ></td>
                        
							<td><?php echo $product->name; ?></td>
							<td><?php echo  $product->description; ?></td>
							<td> EGP&nbsp;<?php echo  $product->price; ?>&nbsp;</td>
							
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="order-btn  btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"style="background-color:#fff; color:#FF7A00; border:1px solid #FF7A00; "  ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><form method="post" action='' ><?php echo '<button class="order-btn  btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"  style="background-color:#FF7A00; color:white;" name="del" id="del" value="'.$product->id.'"><span class="glyphicon glyphicon-trash" ></span></button>';?></td>	</tr>
						
             


<?php
  }
  ?>
                        
					</tbody>
				</table>

	
	</div>
	</div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
          <h3 class="modal-title custom_align" id="Heading">Edit</h3>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      
      </div>
          <div class="modal-body">
            
          <div class="form-group">
        <input class="form-control " type="text" name="Pname" placeholder="Name">
        </div>
        
        <div class="form-group">
        <input class="form-control " type="text" name="Pdescription" placeholder="Description">
        </div>
       
        <div class="form-group">
        <input class="form-control " type="text" name="Pprice" placeholder="Price">
        </div>

      </div>
          <div class="modal-footer ">
        <input type="submit" class="btn btn-warning btn-lg" id="Update" name="UopdateProduct" onsubmit="return false" value="UPDATE" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> 
        
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>

     
         </div>
</div>
  </div>
</section>

</div>
<?php
 require APPROOT . '/views/inc/footer.php';
  }
}
?>