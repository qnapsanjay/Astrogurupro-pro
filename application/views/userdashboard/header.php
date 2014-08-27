<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/app.css" rel="stylesheet" type="text/css"/>
       <script src="assets/js/jquery.min.js" type="text/javascript"></script>
         <script src="assets/lib/bootstrap.js" type="text/javascript"></script>
         
    </head>
    <body>
       <header>
          <div class="row">
            <div class="col-lg-3 col-xs-12 col-sm-12 col-md-3">
                <div class="logo text-center">
                    <div>
                        <a href="<?php echo base_url();?>/userdashboard"> ASTROLOGY</a>
                    </div>
               </div>   
            </div>
            
            <div class="col-lg-7 col-xs-12 col-sm-12 col-md-7">
               <nav id="navbar-userpanel" class="navbar navbar-default navbar-static" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" 
                     data-target=".bs-js-navbar-scrollspy">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                </div>
            <div class="collapse navbar-collapse bs-js-navbar-scrollspy">
            <ul class="nav navbar-nav nav-tabs ">
                <li><a href="<?php echo base_url();?>userdashboard"><i class="fa fa-fw fa-home"></i>&nbsp;HOME</a></li>
               <li><a href="<?php echo base_url();?>astrologerlist1"><i class="fa fa-fw fa-user"></i>&nbsp;Astrlogers</a></li>
               <li><a href="<?php echo base_url();?>astrologerlist1">Astrlogers</a></li>
               <li><a href="<?php echo base_url();?>astrologerlist1">Astrlogers</a></li>
             </ul>
            </div>
           </nav>
          </div>
        <div class="col-lg-2 col-xs-12 col-sm-12 col-md-2">
            <div class="logout">                  
                <ul class="nav  top-nav">
                <li class="dropdown">
                    <img src="assets/images/man.jpg" class="dropdown-toggle img-rounded" data-toggle="dropdown"/>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url();?>userprofile/view_profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>userprofile/edit_profile"><i class="fa fa-fw fa-envelope"></i> Edit</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>userprofile/changePassword"><i class="fa fa-fw fa-gear"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                </ul>    
            </div>
         </div>  
          </div>     
    </header> 
        <div class="row">
            <div class="vertical-navigation nav nav-stacked col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
                <ul>
                    <li >
                        <a class="btn pull-left" href="<?php echo base_url();?>/userdashboard"><i class="fa fa-fw fa-home pull-right"></i>HOME</a>
                    </li>
                    <li>
                        <a class="btn pull-left" href="<?php echo base_url();?>astrologerlist1"><i class="fa fa-fw fa-user pull-right"></i>Astrologer 1</a>
                    </li>
                    <li>
                       <a class="btn pull-left" href="<?php echo base_url();?>astrologerlist1"><i class="fa fa-fw fa-user pull-right"></i>Astrologer 2</a>
                    </li>
                    <li>
                       <a class="btn pull-left" href="<?php echo base_url();?>astrologerlist1"><i class="fa fa-fw fa-user pull-right"></i>Astrologer 3</a>
                    </li>
                     <li>
                       <a class="btn pull-left" href="<?php echo base_url();?>astrologerlist1"><i class="fa fa-fw fa-user pull-right"></i>Astrologer 4</a>
                    </li>
                     <li>
                       <a class="btn pull-left" href="<?php echo base_url();?>astrologerlist1"><i class="fa fa-fw fa-user pull-right"></i>Astrologer 5</a>
                    </li>
                     <li>
                       <a class="btn pull-left" href="<?php echo base_url();?>astrologerlist1"><i class="fa fa-fw fa-user pull-right"></i>Astrologer 6</a>
                    </li>
                    <li>
                       <a class="btn pull-left" href="<?php echo base_url();?>astrologerlist1"><i class="fa fa-fw fa-user pull-right"></i>Astrologer 7</a>
                    </li>
                    <li>
                       <a class="btn pull-left" href="<?php echo base_url();?>astrologerlist1"><i class="fa fa-fw fa-user pull-right"></i>Astrologer 8</a>
                    </li>
                 </ul>
            </div>        
      