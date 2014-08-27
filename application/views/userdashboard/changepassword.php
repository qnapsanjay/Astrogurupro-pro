<?php $this->load->view('userdashboard/header');   ?> 
<div class="user-profile  col-lg-6 col-md-6 col-sm-8 col-xs-12"> 
                <div class="change-password panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                      CHANGE PASSWORD
                        </h3>
                    </div>
                    <div class="panel-body">
                    <form id="change-password" method="post" action="userdashboard/changePassword">
                       <div class="row"> 
                       <strong> <lable class="col-lg-3 col-md-4 col-sm-4 col-xs-4 control-label">Old Password</lable></strong>
                       <input type="password" name="old-password" class="col-lg-4 form-control"/>
                       </div> 
                       <div class="row"> 
                       <strong> <lable class="col-lg-3 col-md-4 col-sm-4 col-xs-4 control-label">New Password</lable></strong>
                       <input type="password" name="new-password" class="col-lg-4 form-control"/>
                       </div>
                       <div class="row"> 
                       <strong> <lable class="col-lg-3 col-md-4 col-sm-4 col-xs-4 control-label">Re-Enter Password</lable></strong>
                       <input type="password" name="conform-password" class="col-lg-4 form-control"/>
                       </div> 
                      <div class="row">
                       <button class="btn" onclick="" type="submit">SAVE</button>
                       <button class="btn" onclick="" type="submit">Close</button>
                      </div>
                    </form>
                    </div>    
              </div> 
            </div>
<?php $this->load->view('userdashboard/footer');   ?> 