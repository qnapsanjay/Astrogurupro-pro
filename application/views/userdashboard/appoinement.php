<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/fullcalendar.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/fullcalendar.print.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/app.css" rel="stylesheet" type="text/css"/>
       <script src="assets/js/jquery.min.js" type="text/javascript"></script>
       <script src="assets/lib/jquery-ui.min.js" type="text/javascript"></script>
         <script src="assets/lib/bootstrap.js" type="text/javascript"></script>
         <script src="assets/js/fullcalendar.min.js" type="text/javascript"></script>
         <script src="assets/js/fullcalender.js" type="text/javascript"></script>
         <script src="assets/js/gcal.js" type="text/javascript"></script>
        	<script type="text/javascript">

		$(document).ready(function()
		{
			/*
				date store today date.
				d store today date.
				m store current month.
				y store current year.
			*/
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
			
			/*
				Initialize fullCalendar and store into variable.
				Why in variable?
				Because doing so we can use it inside other function.
				In order to modify its option later.
			*/
			
			var calendar = $('#calendar').fullCalendar(
			{
				/*
					header option will define our calendar header.
					left define what will be at left position in calendar
					center define what will be at center position in calendar
					right define what will be at right position in calendar
				*/
   
				header:
				{
					left: 'prev,next,today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				/*
					defaultView option used to define which view to show by default,
					for example we have used agendaWeek.
				*/
				defaultView: 'month',
				/*
					selectable:true will enable user to select datetime slot
					selectHelper will add helpers for selectable.
				*/
				selectable: true,
				selectHelper: true,
				/*
					when user select timeslot this option code will execute.
					It has three arguments. Start,end and allDay.
					Start means starting time of event.
					End means ending time of event.
					allDay means if events is for entire day or not.
				*/
				select: function(start, end, allDay)
				{
					/*
						after selection user will be promted for enter title for event.
					*/
					var title = prompt('Event Title:');
					/*
						if title is enterd calendar will add title and event into fullCalendar.
					*/
					if (title)
					{
						calendar.fullCalendar('renderEvent',
							{
								title: title,
								start: start,
								end: end,
								allDay: allDay
							},
							true // make the event "stick"
						);
					}
					calendar.fullCalendar('unselect');
				},
				/*
					editable: true allow user to edit events.
				*/
				editable: true,
				/*
					events is the main option for calendar.
					for demo we have added predefined events in json object.
				*/
				events: [
					{
						title: 'All Day Event',
						start: new Date(y, m, 1)
					},
					{
						title: 'Long Event',
						start: new Date(y, m, d-5),
						end: new Date(y, m, d-2)
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: new Date(y, m, d-3, 16, 0),
						allDay: false
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: new Date(y, m, d+4, 16, 0),
						allDay: false
					},
					{
						title: 'Meeting',
						start: new Date(y, m, d, 10, 30),
						allDay: false
					},
					{
						title: 'Lunch',
						start: new Date(y, m, d, 12, 0),
						end: new Date(y, m, d, 14, 0),
						allDay: false
					},
					{
						title: 'Birthday Party',
						start: new Date(y, m, d+1, 19, 0),
						end: new Date(y, m, d+1, 22, 30),
						allDay: false
					},
					{
						title: 'Click for Google',
						start: new Date(y, m, 28),
						end: new Date(y, m, 29),
						url: 'http://google.com/'
					}
				]
			});
			
		});

	</script>
<!--        <script>
            $(document).ready(function()
		{
                   $("#calendar1").datepicker(); 
                });
        </script>-->

</head>
    <body ng-app="myApp">
       <header>
          <div class="row">
            <div class="col-lg-3 col-xs-12 col-sm-12 col-md-3">
                <div class="logo text-center">
                    <div>
                        <a href="userpanel.html"> ASTROLOGY</a>
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
               <li><a href="home">HOME</a></li>
               <li><a href="astrologer1">Astrlogers</a></li>
               <li><a href="#">Astrlogers</a></li>
               <li><a href="#">Astrlogers</a></li>
             </ul>
            </div>
           </nav>
          </div>
        <div class="col-lg-2 col-xs-12 col-sm-12 col-md-2">
            <div class="logout">
                <img  src="assets/images/man.jpg" class="popover-markup img-rounded" data-model="mymodel" data-toggle="popover" data-placement="bottom" data-container="body"/>   
                <div class="head hide">
                    <a href="viewprofile" id="viewprofile" class="btn btn-primary text-center" style="width:100%;margin:5px auto;">VIEW PROFILE</a> </br>
                    <a href="editprofile" id="editprofile" class="btn btn-primary text-center" style="width:100%;margin:5px auto;">EDIT PROFILE</a> </br>
                    <a href="changepassword" id="changepassword" class="btn btn-primary text-center" style="width:100%;margin:5px auto;">CHANGE PASSWORD</a> </br>
                    <a href="" id="logout" class="btn btn-primary text-center" style="width:100%;margin:5px auto;" >SIGN OUT</a> 
                </div>  
            </div>
         </div>  
          </div>     
    </header> 
        
        <div class="row">
            <div class="status col-lg-12 col-lg-offset-4 col-md-12 col-md-offset-2 col-sm-12 col-xs-12"> 
                <img src="assets/images/selected.jpg" alt=""/><strong>Selected</strong>
                <img src="assets/images/unavailable.jpg" alt=""/><strong>unavailable</strong>
                <img src="assets/images/available.png" alt=""/><strong>available</strong> 
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12"> 
                <div id='calendar'></div>
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12"> 
                <div id='calendar1'></div>
            </div>
        </div>
        	
     <footer>
    <div class="row">
        <div class="col-md-3 widget">
            <h3 class="widget-title text-center">Contact</h3>
            <div class="widget-body text-center">
                <p><br><a href="mailto:#"></a></br></p>	
            </div>
        </div>
        <div class="col-md-3 widget">
            <h3 class="widget-title text-center">Follow me</h3>
            `          <div class="widget-body text-center">
                <p class="follow-me-icons">
                    <a href="#"><img src="assets/images/followme/fb.jpg" alt=""/></a>
                    <a href="#"><img src="assets/images/followme/Twitter-Logo.png" alt=""/></a>
                    <a href="#"><img src="assets/images/followme/linkedin-icon1.png" alt=""/></a>
                </p>	
            </div>
        </div>
        <div class="col-md-6 widget">
            <h3 class="widget-title text-center">Text widget</h3>
            <div class="widget-body text-center">
                <p>information of astrology web site.</p>
            </div>
        </div>
    </div> 
    <div class="row"> 
        <div class="wrap">
            <!---start-copy-right----->
            <div class="copy-right text-center">
                <p style="margin-top: -15px;">Copyright © 2014 &nbsp;<a href="http://atrourl/">Astrology website</a></p>
            </div>
            <!---End-copy-right----->       
        </div>
    </div>
</footer>     
    </body>
</html>   
        

         


