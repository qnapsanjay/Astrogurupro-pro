<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>Astro Guru Mantra | Home</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
        <link href="<?php echo base_url() ?>assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/css/jquery-ui.theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/css/app.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/css/colorblocks-style.css" rel="stylesheet" type="text/css"/>
    </head>    
    <body>
        <header>
            <div class="row home">
                <div class="logo col-lg-3 col-xs-12 col-sm-4 col-md-4 text-center">
                    <a href="<?php echo base_url() ?>">AstroGuru Mantra</a>
                </div>
                <div class="col-lg-5 col-xs-12 col-sm-8 col-md-7 pull-right">
                    <?php if (isset($error) && $error): ?>
                        <div class="alert alert-error">
                            <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
                        </div>
                    <?php endif; ?> 
                    <form name="login" method="post" action="home/login" class=" row login form-inline" >
                        <div class="col-lg-5 col-xs-12 col-sm-5 col-md-5"> 
                            <input type="email"  name="loginusername" class="form-control" placeholder="USERNAME" required/>
                            <label><input type="checkbox" id="login_cookie" value="login" /><small> Keep me logged in</small></label>                            
                        </div>
                        <div class="col-lg-5 col-xs-12 col-sm-5 col-md-5">
                            <input type="password"  name="loginpassword" class="form-control" placeholder="PASSWORD" required/>
                            <label><a herf="forgetpass.html" data-toggle="modal" data-target="#forgetpass" ><small>Can't log in?</small></a></label>
                        </div>
                        <div class="col-lg-2 col-xs-12 col-sm-2 col-md-2">     
                            <button type="submit" name="login" class="btn-primary btn-md form-control">Login</button>
                        </div>    
                    </form>
                </div>
            </div>
            <!--Forget password model-->
            <div class="forget-pass">      
                <div class="modal fade" id="forgetpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                Forget Password
                            </div>
                            <div class="modal-body">
                                <form name="forgetpass" method="post" action="home/forget_password" >
                                    <b style="margin-right:8px;">Enter Email ID</b>
                                    <input type="email" name="forgetpass_email" class="form-control" placeholder="Enter email id" required />
                                    <button type="submit" name="forgetpassword" class="btn btn-info" >Submit </button>
                                    <button type="button" class="btn btn-default" 
                                            data-dismiss="modal">Close </button>
                                </form>  
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </header> 
        <div class="">
            <nav class="navbar" role="navigation" >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" 
                            data-target="#example-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo base_url() ?>"><i class="icon-home"></i> Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>astro/aboutus"> <i class="icon-group"></i> About us</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>category/index"><i class="icon-key"></i> Products & Remedies</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>astro/services"><i class="icon-cogs"></i> Services</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>astro/termsandconditions"><i class="icon-legal"></i> Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>astro/contactus"><i class="icon-phone"></i> Contact us</a>
                        </li>	 
                    </ul>
                </div>
            </nav>
        </div>