<div class="row" style="background-color:black;">
  <div class="col-md-3">
    <p class="text-white mt-3" style="font-weight:bolder;">BarBer Shop- LH:0965637450</p>  
  </div>
  <div class="col-md-9">
    <nav class="navbar navbar-expand-lg navbar-light " style="float:right;">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" style="background:black;">
        <button class="btn btn-dark my-2 my-sm-0" type="submit">
          <i class="fa fa-search"></i>
        </button>
        
        
      </form>
      <?php
            //Nếu đăng nhập
              if ($this->session->userdata("CheckLogin")){
          ?>            
              <a class = "btn" href="<?php echo base_url();?>index.php/admin"><i class="fa fa-home" style="color:white"></i></a>              
          <?php 
          }else{?>
              <a class = "btn" href="<?php echo base_url();?>index.php/login/view"><i class="fa fa-cog" style="color:white"></i></a>
          <?php }          
          ?>      
    </nav>
  </div>
</div>