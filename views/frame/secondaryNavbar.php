<?php
?>
<nav id="navbar-secondary"  class="navbar-secondary navbar navbar-expand-lg navbar-light fixed-top" style=''>
    
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentSecondary" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContentSecondary">
    <ul class="navbar-nav mx-auto justify-content-around" style="display:flex;justify-content: space-around;">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>?pag=catalogue">CATALOGUE</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>?pag=projects">PROJECTS</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>?pag=aboutus">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>?pag=blog">BLOG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>?pag=contact">CONTACT</a>
      </li>
      <li>
          <form class="nav-search" action="">  
          <div class="input-group mb-4">  
            <input type="search" placeholder="Search here..." aria-describedby="button-addon5" class="form-control">  
            <div class="input-group-append">  
              <button id="button-addon5" type="submit" class="btn-search btn btn-primary"> <i class="fa fa-search"> </i> </button>  
            </div>  
          </div>  
        </form>
      </li>
      
    </ul>
    
  </div>
</nav>

