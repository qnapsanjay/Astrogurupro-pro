<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/app.css" rel="stylesheet" type="text/css"/>
</head>    
<body>
    <header>
        <div class="row home">
            <div class="logo col-lg-5 col-xs-12 col-sm-4 col-md-4">
                <a href="<?php echo base_url()?>"><p class="text-center">ASTROLOGY</p></a>
            </div>
        </div>
</header> 
    <div class="container resetpassword">
        <div class=" thumbnail col-lg-6 col-lg-offset-2 col-sm-10 col-sm-offset-1 col-md-8  col-lg-offset-2 col-xs-12" style="vertical-align: middle;">
           <div class="container">
                <div class="col-lg-12 col-lg-offset-1 col-sm-offset-3 col-sm-12 col-md-12 col-xs-12">
                    <h2>Reset Password</h2>          
                </div>            
            </div>
            <form class="form" name="resetpassword" method="post" action="resetpassword/index" class="form" >    
                <div class="container">
                   <div class="col-lg-2 col-sm-4 col-md-3 col-xs-12">
                       <label id="newpassword" for="newpassword" >New Password</label>         
                   </div>       
                     <div class="col-lg-3 col-sm-4 col-md-4 col-xs-12">
                  <input class="form-control"  type="password" name="newpassword" required />          
                   </div> 
                </div>
                <div class="container">
                   <div class="col-lg-2 col-sm-4 col-md-3 col-xs-12">
                       <label id="conf_newpassword" for="conf_newpassword">Conform Password</label>         
                   </div>       
                     <div class="col-lg-3 col-sm-4 col-md-4 col-xs-12">
                  <input class="form-control" type="password" name="conf_newpassword" required />          
                   </div> 
                </div>
               <div class="container">
                   <div class="col-lg-2 col-sm-2 col-md-2 col-xs-10">
                  <button name="submit" type="submit" id="resetpassword"   class="btn btn-primary form-control " >Submit</button>           
                   </div> 
                </div> 
            </form>
        </div>   
    </div>
</body>
</html>