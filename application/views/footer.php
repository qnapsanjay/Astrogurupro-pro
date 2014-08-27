<footer>
    <div class="row">
        <div class="col-md-3 widget">
            <h3 class="widget-title text-center">Astro Guru Mantra</h3>
            <div class="widget-body text-center">
                <p>Meet with future</p>
            </div>
        </div>
        <div class="col-md-3 widget">
            <h3 class="widget-title text-center">Site Map</h3>
            <div class="widget-body text-left">
                <ul>
                    <li>Home</li>
                    <li>About us</li>
                    <li>Products & Remedies</li>
                    <li>Services</li>
                    <li>Terms & Conditions</li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 widget">
            <h3 class="widget-title text-center">Contact</h3>
            <div class="widget-body text-center">
                <p><br><a href="mailto:#"></a></br></p>	
            </div>
        </div>
        <div class="col-md-3 widget">
            <h3 class="widget-title text-center">Follow us</h3>
            <div class="widget-body text-center">
                <p class="follow-me-icons">
                    <a href="#"><img src="<?php echo base_url();?>assets/images/followme/fb.jpg" alt=""/></a>
                    <a href="#"><img src="<?php echo base_url();?>assets/images/followme/Twitter-Logo.png" alt=""/></a>
                    <a href="#"><img src="<?php echo base_url();?>assets/images/followme/linkedin-icon1.png" alt=""/></a>
                </p>	
            </div>
        </div>        
    </div> 
    <div class="row"> 
        <div class="wrap">
            <div class="copy-right text-center">
                <p style="margin-top: -15px;">Copyright © 2014 &nbsp;<a href="http://atrourl/">Astrology website</a></p>
            </div>      
        </div>
    </div>
</footer>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/lib/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/datepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui-timepicker-addon.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/lib/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/application.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-transition.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/modernizr.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.autocomplete.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/demo.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
//        $.mockjax({
//            url: "emails.action",
//            response: function(settings) {
//                var email = settings.data.email,
//                        emails = ["glen@marketo.com", "george@bush.gov", "me@god.com", "aboutface@cooper.com", "steam@valve.com", "bill@gates.com"];
//                this.responseText = "true";
//                if ($.inArray(email, emails) !== -1) {
//                    this.responseText = "false";
//                }
//            },
//            responseTime: 500
//        });
//
//        $.mockjax({
//            url: "users.action",
//            response: function(settings) {
//                var user = settings.data.username,
//                        users = ["asdf", "Peter", "Peter2", "George"];
//                this.responseText = "true";
//                if ($.inArray(user, users) !== -1) {
//                    this.responseText = "false";
//                }
//            },
//            responseTime: 500
//        });

        // validate signup form on keyup and submit
//        var validator = $("#signupform").validate({
//            rules: {
//                password: {
//                    minlength: 6
//                },
//                cpassword: {
//                    required: true,
//                    equalTo: "#password"
//                },
//                email: {
//                    email: true,
//                    remote: "emails.action"
//                },
//                birthday: "required",
//                birthtime: "required",
//                birthplace: "required"
//            },
//            messages: {
//                firstname: "Enter your firstname",
//                lastname: "Enter your lastname",
//                username: {
//                    minlength: jQuery.validator.format("Enter at least {0} characters"),
//                    remote: jQuery.validator.format("{0} is already in use")
//                },
//                password: {
//                    minlength: jQuery.validator.format("Enter at least {0} characters")
//                },
//                password_confirm: {
//                    minlength: jQuery.validator.format("Enter at least {0} characters"),
//                    equalTo: "Enter the same password as above"
//                },
//                email: {
//                    minlength: "Please enter a valid email address",
//                    remote: jQuery.validator.format("{0} is already in use")
//                },
//                birthday: "Choose your preferred dateformat",
//                birthtime: "Enter your birth time",
//                birthplace: "Enter your birth place"
//            },
//            submitHandler: function() {
//                alert("submitted!");
//            },
//            // set this class to error-labels to indicate valid fields
//            success: function(label) {
//                // set &nbsp; as text for IE
//            },
//            highlight: function(element, errorClass) {
//                $(element).parent().next().find("." + errorClass).removeClass("checked");
//            }
//        });

    });
</script>
<script type="text/javascript">
//    var mobileDemo = {'center': '57.7973333,12.0502107', 'zoom': 10};
//    $('#directions_map').live('pageinit', function() {
//        demo.add('directions_map', function() {
//            $('#map_canvas_1').gmap({'center': mobileDemo.center, 'zoom': mobileDemo.zoom, 'disableDefaultUI': true, 'callback': function() {
//                    var self = this;
//                    self.set('getCurrentPosition', function() {
//                        self.refresh();
//                        self.getCurrentPosition(function(position, status) {
//                            if (status === 'OK') {
//                                var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
//                                self.get('map').panTo(latlng);
//                                self.search({'location': latlng}, function(results, status) {
//                                    if (status === 'OK') {
//                                        $('#from').val(results[0].formatted_address);
//                                    }
//                                });
//                            } else {
//                                alert('Unable to get current position');
//                            }
//                        });
//                    });
//                    $('#submit').click(function() {
//                        self.displayDirections({'origin': $('#from').val(), 'destination': $('#to').val(), 'travelMode': google.maps.DirectionsTravelMode.DRIVING}, {'panel': document.getElementById('directions')}, function(response, status) {
//                            (status === 'OK') ? $('#results').show() : $('#results').hide();
//                        });
//                        return false;
//                    });
//                }});
//        }).load('directions_map');
//    });
//
//    $('#directions_map').live('pageshow', function() {
//        demo.add('directions_map', $('#map_canvas_1').gmap('get', 'getCurrentPosition')).load('directions_map');
//    });
</script>
</body>
</html>