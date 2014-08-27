<?php $this->load->view('userdashboard/header');   ?> 
<div class="user-profile col-lg-5 col-md-8 col-sm-7 col-xs-12"> 
                <div class="edit-profile panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                       EDIT PROFILE
                        </h3>
                    </div>
                    <div class="panel-body">
                    <form id="edit-profile" method="post" action="userdashboard/edit" class="form-group">
                        <div class="row"> 
                       <strong> <lable class="col-lg-3 col-md-3 col-sm-4 control-label">NAME</lable></strong>
                       <input type="text" name="name" value="" class="col-lg-4 form-control"/>
                        </div>
                        <div class="row">
                       <strong> <lable class="col-lg-3 col-md-3 col-sm-4 control-label">EMAIL</lable></strong>
                       <input type="text" name="email" value="" class="col-lg-4 form-control disabled"/>
                        </div>
                        <div class="row">
                       <strong> <lable class="col-lg-3 col-md-3 col-sm-4 control-label">MOBILE</lable></strong>
                       <input type="text" name="mobile" value="" class="col-lg-4 form-control"/>
                        </div>
                        <div class="row">
                       <strong><lable class="col-lg-3 col-md-3 col-sm-4 control-label">Birth Date</lable></strong>
                       <input type="text" name="birth_date" class="col-lg-4 form-control"/>
                        </div>
                        <div class="row">
                       <strong> <lable class="col-lg-3 col-md-3 col-sm-4 control-label">Birth Time</lable></strong>
                       <input type="text" name="birth_time" class="col-lg-4 form-control"/>
                        </div>
                        <div class="row">
                       <strong><lable class="col-lg-3 col-md-3 col-sm-4 control-label">Birth Place</lable></strong>
                       <input type="text" name="birth_place" value="" class="col-lg-4 form-control"/>
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