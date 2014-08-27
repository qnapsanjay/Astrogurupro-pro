 $(function() {
  
    // Setup form validation on the #register-form element
    $("#registration-form").validate({
    
        // Specify the validation rules
        rules: {
            firstname: "required",
            lastname: "required",
            gender:{required:true},
             email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            },
         
            mobile: {
                required: true,
                minlength: 10,
                maxlength:10
            },
            birthday:{required:true},
            birth_time:{required:true},
            birth_place:{required:true},
           
        },
        
        // Specify the validation error messages
        messages: {
            firstname: "Please enter your first name",
            lastname: "Please enter your last name",
            
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
            email: "Please enter a valid email address",
            mobile: "Please enter a valid mobile number",
            birthday: "Please select date of birth",
            birth_time: "Please enter a valid valid time",
            birth_place: "Please enter your birth city",
            
            
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
