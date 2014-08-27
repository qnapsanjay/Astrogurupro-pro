<div class="container-fluid">
<?php $this->load->view('header'); ?>
<div class="row">
    <div class="col-lg-8 col-md-8 visible-lg visible-md hidden-xs hidden-sm">
        <div id="myCarousel" class="carousel slide" >
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>   
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo base_url(); ?>assets/images/suryamala.jpeg" alt="" class="img-responsive"/>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>assets/images/Astrology-Club.jpg" alt="" class="img-responsive"/>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>assets/images/Astrology-Club.jpg" alt="" class="img-responsive"/>
                </div>
            </div>
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div> 
    </div>    
    <div class="col-lg-4 col-xs-12 col-sm-12 col-md-4 ">
        <div class="registration container-fluid ">
            <h2 class="text-center title">Sign Up</h2>
            <h4 class="">It’s free and always will be.</h4>
            <hr/>
            <form class="form" name="signupform" method="post" action="home/signup">
                <div class="error">
                    <?php echo validation_errors(); ?>
                </div>
                <div class="row">    
                    <div class="col-lg-6">
                        <input class="form-control" type="text" name="fname"  placeholder="First Name"  required/>
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control" type="text"  name="lname"   placeholder="Last Name" required/>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        Gender :
                        <input  type="radio" name="gender"  value="male" required/><strong> Male</strong>
                        <input  type="radio" name="gender"  value="female"/><strong> Female</strong> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <input class="form-control" type="email" name="email"   placeholder="Email Address"  required />  
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <input class="form-control"  type="text"  name="mobile_no" placeholder="Mobile" required  /> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <input class="form-control" type="password" name="password" id="password"  placeholder="Password" required/>     
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control" type="password" name="password_confirm" id="cpassword" placeholder="Confirm Password" required/>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <input class="form-control" type="text" id="birthday"  name="birth_date" placeholder="Birth Date" required/>  
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control" type="text" id="birthtime"  name="birth_place"  placeholder="Birth Place" required/>   
                    </div>
                </div>                
                <div class="row">
                    <div class="col-lg-12">
                    <button name="submit" type="submit" id="signupform" class="btn btn-primary pull-right">SIGN UP</button> 
                    </div>
                </div> 
            </form>
        </div>
    </div>    
</div>  
<?php $this->load->view('footer'); ?>
</div>