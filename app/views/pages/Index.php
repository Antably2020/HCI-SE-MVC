<?php
class Index extends view{
  public function output(){
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    require APPROOT . '/views/inc/header.php';
    ?>
    <section >
    <div class="wrapper">
    <button class="smallbox">
    <div class="center">
    <h5 style="color:white">Model Search</h5>
    </div>
    </button>
    
    
    <button class="smallbox2">
      <div class="center">
      <h5 style="color:white">Part number search</h5>
    </div>
    </button>
    
    
       <div class="blockimage " >
       <img class="blockimage1" src="<?php echo URLROOT . 'images/image.png'; ?>" >
       <div class="hero-content center"  >
      
    
      <div btn-toolbar>
      <div class="btn-group">
      <button type="button" class="btn ">Action</button>
      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
      
                <div class="btn-group">
      <button type="button" class="btn ">Action</button>
      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
      
    <div class="btn-group">
      <button type="button" class="btn ">Action</button>
      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    
    <div class="btn-group">
      <button type="button" class="btn ">Action</button>
      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
           
    </div>
    
                <button type="button" class="btn " style="margin-top:30px; border-color:white;">Action</button>
            
       
    </div>
    
    </div> 
    
    </div>
        



    <div class="container">
  <div class="row">
    <div class="col-sm-6">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                
                <div class="item">
                    <img src="http://placehold.it/350x250/00ffff/000&amp;text=Product+Image+2">
                </div>
                <div class="item">
                    <img src="http://placehold.it/350x250/ff00ff/fff&amp;text=Product+Image+3">
                </div>
                <div class="item">
                    <img src="http://placehold.it/350x250/ffff00/000&amp;text=Product+Image+4">
                </div>
                <div class="item">
                    <img src="http://placehold.it/350x250/612b65/fff&amp;text=Product+Image+5">
                </div>
                <div class="item">
                    <img src="http://placehold.it/350x250/00ffff/000&amp;text=Product+Image+6">
                </div>
                <div class="item">
                    <img src="http://placehold.it/350x250/db371b/fff&amp;text=Product+Image+7">
                </div>
                <div class="item">
                    <img src="http://placehold.it/350x250/feb8aa/000&amp;text=Product+Image+8">
                </div>
            </div>
        </div> 
    <div class="clearfix">
        <div id="thumbcarousel" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="item active">
                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="http://placehold.it/100/e8117f/fff&amp;text=Product+Main"></div>
                    <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="http://placehold.it/100/00ffff/000&amp;text=Product+Image+2"></div>
                    <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="http://placehold.it/100/ff00ff/fff&amp;text=Product+Image+3"></div>
                    <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="http://placehold.it/100/ffff00/000&amp;text=Product+Image+4"></div>
                </div><!-- /item -->
                <div class="item">
                    <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="http://placehold.it/100/612b65/fff&amp;text=Product+Image+5"></div>
                    <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="http://placehold.it/100/00ffcc/000&amp;text=Product+Image+6"></div>
                    <div data-target="#carousel" data-slide-to="6" class="thumb"><img src="http://placehold.it/100/db371b/fff&amp;text=Product+Image+7"></div>
                    <div data-target="#carousel" data-slide-to="7" class="thumb"><img src="http://placehold.it/100/feb8aa/000&amp;text=Product+Image+8"></div>
                </div><!-- /item -->
            </div><!-- /carousel-inner -->
            <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div> <!-- /thumbcarousel -->
    </div><!-- /clearfix -->
    </div> <!-- /col-sm-6 -->
    
  </div> <!-- /row -->
</div> <!-- /container -->


    
    <div class="container-fluid" style="background-color:rgba(0, 0, 0, 0.1);height: 290px;">
    
      <h1>Over 3.5 million genuine NEW spare parts</h1>
      <img class="img2" src="<?php echo URLROOT . 'images/im.png'; ?>" alt="Pineapple" width="200" height="200" style="float: right;">
      <h3 style="padding-top:50px;">Delivered all over Egypt</h3>
      
    </div>
          
    
          <br>
          
          
    </section >
    <?php
  require APPROOT . '/views/inc/footer.php';


  }
  }
  ?>