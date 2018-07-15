<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
	<meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
	<meta http-equiv="pragma" content="no-cache" />
</head>
<body>
	<div class="Wrapper">
		<div><p></p></div>

		<div class="LoginSection">
			<div class="LoginSectionContainer">
				<form class="ViewRecords" action="" method="">
					<div class="Input">
						<input type="text" name="partner_emailID" id="UserEmail" placeholder="Partner ID">
						<div class="mEmailError"></div>
					</div>
					<div class="Input">
						<input type="password" name="partner_passWord" id="UserPwd" placeholder="Password">
					</div>
					<div class="Input LoginSubmit">
						<input type="button" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>


<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<!-- Validation -->
<script type="text/javascript">
	$(document).ready(function(){
	$('.LoginSubmit input[type=button]').removeAttr('disabled');
		$('.LoginSubmit input[type=button]').click(function(){
			var userEmail = $('#UserEmail').val();
			var userPwd = $('#UserPwd').val();
			var partnerEmaillFilter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
			if (!partnerEmaillFilter.test(partnerEmail)) {
				$('.mEmailError').html('Please enter a valid email ID');
			}
			else {
				$('.mEmailError').html('');
			}
			if (userPwd.length !== 0 && userPwd == 'test'  &&partnerEmaillFilter.test(userEmail)){
				$('.LoginSubmit input[type=button]').attr('value','Login ...');
				$('.LoginSubmit input[type=button]').attr('disabled','Disabled').css('cursor','not-allowed');
				
				window.location.replace("app.py");
				return false;
			}
			else{
				errorAlert("Error");
			}
			function errorAlert(msg){
				$('.LoginSubmit input[type=button]').attr('value','Login');
				$('.LoginSubmit input[type=button]').removeAttr('disabled').css('cursor','pointer');
			}
	});
});
</script>

</body>
</html>
</body>
</html>
