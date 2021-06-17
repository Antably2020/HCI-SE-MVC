<?php 
class A_orders extends view{
    public function output (){
        $title = $this->model->title;
        ?><div style="margin-left: 160px;"><?php require APPROOT . '/views/inc/header.php';?></div ><?php
        require APPROOT . '/views/inc/sidebar.php';
    ?>
   




<head>
<script>


    $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

    </script>

<style>
  footer{
    bottom:0;
  } 
  </style>

</head>
<div class="main">


<div class="container">
	<div class="row" style="padding-bottom:20px">
    <div class="col-md-12">
			<h2>ALL<b> ORDERS</b></h2>
            
      <hr class="hr2" >

</div>
	</div>
    
        <div class="row">
		
            <div class="col-md-12">
            
            
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
						<tr>
                            
            <th>Product #</th>
							<th>Product Name</th>
							<th>user ID</th>
							<th>Status</th>
							<th>Address</th>
							<th>Order #</th>

						</tr>
					</thead>

					<tfoot>
						<tr>
            
            
            <th>Product #</th>
							<th>Product Name</th>
							<th>user ID</th>
							<th>Status</th>
							<th>Address</th>
							<th>Order #</th>
                         
						</tr>
					</tfoot>

					<tbody>

          <?php
  foreach($this->model->readorder() as $order){
    ?>

						<tr>
              
               <td><?php echo $order->productID; ?></td>
               <td><?php echo $order->productName; ?></td>
							<td><?php echo  $order->userID; ?></td>
              <td><?php if ( $order->status==0 ) { echo 'Not Delivered';}  else{ echo 'Delivered';}?></td>
              <td><?php echo  $order->address; ?></td>
              <td><?php echo  $order->id; ?></td>


                         	</tr>
					
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
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Tiger Nixon">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="System Architect">
        </div>
        <div class="form-group">
        
        
      <input class="form-control " type="text" placeholder="Edinburgh">
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
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
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
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
   
   <?php
  require APPROOT . '/views/inc/footer.php';
  }
}
?>