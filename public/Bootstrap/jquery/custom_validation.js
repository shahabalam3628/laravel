$(document).ready(function(){
$("#myForm").validate({
rules:  {
		    name:{
					required:true,
					minlength:4,
					
			    },
			email:{
                   required:true,
                   email:true
				},
			mobile:{
					required:true,
					number:true,
					minlength:10,
					maxlength:10
                },	

			repassword:{
					required:true,
					equalTo:"#pass"
			    },





		},
messages:
		{
				name:{
						       required:"<span style='color:red; font-size:10px'>Please Enter Name</span>",
						       minlength:"<span style='color:red;font-size:10px'>Name Must be 4 Character.</span>",
					},						
				email:{
				               required:"<span style='color:red;font-size:10px'>Pls enter email id</span>",  
				               email:"<span style='color:red;font-size:10px'>Pls enter valid Emailid</span>"   
				    },
							
					mobile:{
						        required:"<span style='color:red;font-size:10px'>Must enter mobile number</span>",
								number:"<span style='color:red;font-size:10px'>Pls enter only digit</span>",
								minlength:"<span style='color:red;font-size:10px'>Pls enter min 10 digit</span>",
								maxlength:"<span style='color:red;font-size:10px'>pls enter max 10 digit</span>"
				    },
							
			
		}
				
});

});
