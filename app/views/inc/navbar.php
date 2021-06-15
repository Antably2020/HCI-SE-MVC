



<nav class="navbar navbar-expand-md ">
  <a class="" href="<?php echo URLROOT . 'public'; ?>">

    <img src="<?php echo URLROOT . 'images/logo.png'; ?>" alt="Logo" style="width: 150px;">
  </a>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon justify-content-end"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
        
    
    <ul class="navbar-nav mr-auto ">

        
<div class="box">
        <form name="search">
            <input type="text" class="inputsearch" name="txt" 
            onmouseout="document.search.txt.value = ''">
        </form>
            <i class="fas fa-search"></i>
    </div>

           
        </ul>


        <ul class="navbar-nav">
        <li class="nav-item ">
                <a class="nav-link" href="<?php echo URLROOT . 'public'; ?>">Home <span class="sr-only">(current)</span></a>
                
            </li>
            <div class="vl"></div>
        
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT . 'public/pages/products'; ?>">Products</a>
            </li>
            <div class="vl"></div>
            
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT . 'public/users/login'; ?>">Login</a>
            </li>
            <div class="vl"></div>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT . 'public/users/register'; ?>">Register</a>
            </li>
            <div class="vl"></div>

            <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT . 'public/pages/cart'; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a>
</li>
        </ul>


    </div>
    <hr class="navhr">
</nav>
