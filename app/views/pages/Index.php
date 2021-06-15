<?php
class Index extends view{
  public function output(){
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    require APPROOT . '/views/inc/header.php';
    ?>
   


<Br><br><br>



   <section class="products-content">
  <div class="container">
   
	<div class="row">
    <div class="col-md-12">
      <!-- heading -->
      <h2>FEATURED <b>CATEGORIES</b></h2>
      
      <hr class="hr2" >
      <br><br>
     
  </div>
      <div class="row">
        <!-- categories -->
                                                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <!-- categories -->
                  <div class="product">
                      <article style="padding-bottom:30px;">
                        <div class="module">
                          <div class="cat-thumb">
                              <img class="img-fluid" src="<?php echo URLROOT . 'images/cat1.jpg'; ?>" style="Height: 245px;" alt="Spare Parts">
                          </div>
                          <a href="" class="cat-title">
						  Drive & Transmission
                          </a>
                        </div>
                      </article>
                  </div>
                </div>
                                 <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <!-- categories -->
                  <div class="product">
                      <article>
                        <div class="module">
                          <div class="cat-thumb">
                              <img class="img-fluid" src="<?php echo URLROOT . 'images/p1.jpg'; ?>" alt="Fluids">
                          </div>
                          <a href="" class="cat-title">
						  Exhaust Systems
                          </a>
                        </div>
                      </article>
                  </div>
                </div>
                                                                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <!-- categories -->
                  <div class="product">
                      <article>
                        <div class="module">
                          <div class="cat-thumb">
                              <img class="img-fluid" src="<?php echo URLROOT . 'images/cat2.jpg'; ?>" alt="Car Care">
                          </div>
                          <a href="" class="cat-title">
						  Air Cleaners
                          </a>
                        </div>
                      </article>
                  </div>
                </div>
                                                                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <!-- categories -->
                  <div class="product">
                      <article>
                        <div class="module">
                          <div class="cat-thumb">
                              <img class="img-fluid" src="<?php echo URLROOT . 'images/cat3.jpg'; ?>" alt="Sound Systems">
                          </div>
                          <a href="" class="cat-title">
						  HANDLEBARS & CONTROLS
                          </a>
                        </div>
                      </article>
                  </div>
                </div>
                                                                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <!-- categories -->
                  <div class="product">
                      <article>
                        <div class="module">
                          <div class="cat-thumb">
                              <img class="img-fluid" src="<?php echo URLROOT . 'images/cat4.jpg'; ?>" alt="Engine Performance">
                          </div>
                          <a href="" class="cat-title">
						  Bike Protection
                          </a>
                        </div>
                      </article>
                  </div>
                </div>
                                                                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <!-- categories -->
                  <div class="product">
                      <article>
                        <div class="module">
                          <div class="cat-thumb">
                              <img class="img-fluid" src="<?php echo URLROOT . 'images/cat5.jpg'; ?>" alt="Car Lightening">
                          </div>
                          <a href="" class="cat-title">
						  SUSPENSION & FRAME
                          </a>
                        </div>
                      </article>
                  </div>
                </div>
                                                                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <!-- categories -->
                  <div class="product">
                      <article>
                        <div class="module">
                          <div class="cat-thumb">
                              <img class="img-fluid" src="<?php echo URLROOT . 'images/cat6.jpg'; ?>" alt="Accessories">
                          </div>
                          <a href="" class="cat-title">
						  Brakes
                          </a>
                        </div>
                      </article>
                  </div>
                </div>
                                                                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <!-- categories -->
                  <div class="product">
                      <article>
                        <div class="module">
                          <div class="cat-thumb">
                              <img class="img-fluid" src="<?php echo URLROOT . 'images/cat7.jpg'; ?>" alt="Best Selling">
                          </div>
                          <a href="" class="cat-title">
						  Engine Parts 
                          </a>
                        </div>
                      </article>
                  </div>
                </div>
                                                                                                                                                                                                        
      </div>
    </div>


  </div>
</section>






        

    <div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>TRENDING<b> PRODUCTS</b></h2>
      
      <hr class="hr2">

			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="" class="cat-title">
								<img src="<?php echo URLROOT . 'images/p1.jpg'; ?>" class="img-responsive" alt="">
								</div>
								
								<div class="thumb-content">
									<h4>Akrapovic GP Slip-On Exhaust</h4>
									<p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p></a>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="" class="cat-title">
									<img src="<?php echo URLROOT . 'images/p2.jpg'; ?>" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Yoshimura Alpha T Works Slip-On Exhaust</h4>
									<p class="item-price"><strike>$825.00</strike> <span>$23.99</span></p></a>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="" class="cat-title">
									<img src="<?php echo URLROOT . 'images/p3.jpg'; ?>" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Akrapovic Slip-On Exhausts</h4>
									<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p></a>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="" class="cat-title">
									<img src="<?php echo URLROOT . 'images/p4.jpg'; ?>" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Arrow Pro-Race Slip-On Exhaust</h4>
									<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p></a>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
					<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="" class="cat-title">
									<img src="<?php echo URLROOT . 'images/p1.jpg'; ?>" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Akrapovic GP Slip-On Exhaust</h4>
									<p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p></a>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="" class="cat-title">
									<img src="<?php echo URLROOT . 'images/p2.jpg'; ?>" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Yoshimura Alpha T Works Slip-On Exhaust</h4>
									<p class="item-price"><strike>$825.00</strike> <span>$23.99</span></p></a>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="" class="cat-title">
									<img src="<?php echo URLROOT . 'images/p3.jpg'; ?>" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Akrapovic Slip-On Exhausts</h4>
									<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p></a>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="" class="cat-title">
									<img src="<?php echo URLROOT . 'images/p4.jpg'; ?>" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Arrow Pro-Race Slip-On Exhaust</h4>
									<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p></a>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="" class="cat-title">
									<img src="<?php echo URLROOT . 'images/p1.jpg'; ?>" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Akrapovic GP Slip-On Exhaust</h4>
									<p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p></a>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="" class="cat-title">
									<img src="<?php echo URLROOT . 'images/p2.jpg'; ?>" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Yoshimura Alpha T Works Slip-On Exhaust</h4>
									<p class="item-price"><strike>$825.00</strike> <span>$23.99</span></p></a>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="" class="cat-title">
									<img src="<?php echo URLROOT . 'images/p3.jpg'; ?>" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Akrapovic Slip-On Exhausts</h4>
									<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p><a>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
								<a href="" class="cat-title">
									<img src="<?php echo URLROOT . 'images/p4.jpg'; ?>" class="img-responsive" alt="">
								</div>
								<div class="thumb-content">
									<h4>Arrow Pro-Race Slip-On Exhaust</h4>
									<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p></a>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control left" style=" background-image: linear-gradient(to right,rgba(0,0,0,.0001) 0,rgb(0 0 0 / 0%) 100%);" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right "  style=" background-image: linear-gradient(to right,rgba(0,0,0,.0001) 0,rgb(0 0 0 / 0%) 100%);"href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>





    
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