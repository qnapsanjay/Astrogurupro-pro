<?php $this->load->view('header'); ?>
<div class="container-fluid">    
    <div class="col-lg-12">
        <h1>Contact Us</h1>
        <hr/>
        <div id="directions_map" class="col-lg-12" data-role="page" >
            <div data-role="content">	
                <div class="ui-bar-c ui-corner-all ui-shadow">
                    <div id="map_canvas_1"></div>
                    <p>
                        <label for="from">From</label>
                        <input id="from" class="ui-bar-c" type="text" value="Pune, India" />
                    </p>
                    <p>
                        <label for="to">To</label>
                        <input id="to" class="ui-bar-c" type="text" value="Mumbai, India" />
                    </p>
                    <p>
                        <a id="submit" href="#" data-role="button" data-icon="search">Get directions</a>
                    </p>
                </div>            
            </div>
        </div>
    </div>   
</div>
<div class="container-fluid contact-us">
    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12" >        		                                                
        <form name="enqiry" method="post" action="contact/email" onsubmit="">
            <fieldset>
                <input type="text" name="name" id="name"   class="input-block-level" placeholder="Name" />
                <input type="text" name="email" id="email"   class="input-block-level" placeholder="Email" />
                <input type="text" name="mobile_no" id="mobile_no"  class="input-block-level" placeholder="Mobile No." />
                <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>
                <div class="actions">
                    <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
                </div>
            </fieldset>
        </form>  				 											
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="panel text-center">
            <h3 class="panel-heading text-info">Contact Information</h3>
            <p class=" text-primary">
            <address><strong>Your Company, Inc.</strong><br />
                Address<br />
                City, State, Zip<br />
                <i class="fa fa-2x fa-phone"></i><abbr title="Phone"></abbr> (123) 456-7890</address> 
            <address><strong>Email</strong><br />
                <a href="mailto:#" class="text-warning">first.last@gmail.com</a></address>  
            </p>            					
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>	
