<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Registration</title>
</head>
<body>
   <div class="result"></div>
   <form action="" method="post" id="student-frm">
	<table border="1" width="800" align="center">
		   <tr>
		   	   <td align="center" colspan="2"><h1>Student Registration</h1></td>
		   </tr>
		   <tr>
		   	   <td>Name</td>
		   	   <td><input type="text" name="username"></td>
		   </tr>
		   <tr>
		   	   <td>Email ID</td>
		   	   <td><input type="text" name="email_id"></td>
		   </tr>
		   <tr>
		   	   <td>Mobile Number</td>
		   	   <td><input type="text" name="mobile"></td>
		   </tr>
		   <tr>
		   	 <td colspan="2" align="center"><input type="submit" name="add_student"></td>
		   </tr>
		  
	</table>
	</form>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script type="text/javascript">

    	$('#student-frm').validate({

    		rules:
    		{
    			username:
    			{
    				required:true
    			},
    			email_id:
    			{
    				required:true,
    				email:true
    			},
    			mobile:
    			{
    				required:true,
    				number:true
    			}
    		},
    		messages:
    		{
    			username:
    			{
    				required:'Username is required'
    			},
    			email_id:
    			{
    				required:'Email ID is required',
    				email:'Enter a valid Email ID'
    			},
    			mobile:
    			{
    				required:'Mobile Number is required',
    				number:'Mobile Number must be a numeric value'
    			}
    		},
    		submitHandler:function()
    		{
    			$.ajax({

    				url:'ajax/student-data.php',
    				data: $('#student-frm').serializeArray(),
    				type:'POST',
    				dataType:'json',
    				beforeSend:function()
    				{
    					$('input[name="add_student"]').val('Please Wait...');

    				},
    				success:function(r)
    				{
    					$('input[name="add_student"]').val('Submit');
    					//alert(r.msg);

    					$('.result').html(r.msg);

    				}

    			});

    		}



    	});
    	

    </script>

</body>
</html>