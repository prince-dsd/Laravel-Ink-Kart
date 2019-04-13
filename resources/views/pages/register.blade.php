
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="colorlib/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="colorlib/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('colorlib/images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="colorlib/images/registration-form-1.jpg" alt="">
				</div>
                <form action="{{url('/customer_registration')}}" method="POST">
                    {{csrf_field()}}
					<h3>Registration Form</h3>
					<div class="form-wrapper">
						<input type="text" placeholder="Ful Name" class="form-control" name="customer_name" required>
						<i class="zmdi zmdi-email"></i>
					</div>
					
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control" name="customer_email" required>
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password" required>
						<i class="zmdi zmdi-lock"></i>
                    </div>
                    <div class="form-wrapper">
						<input type="text" placeholder="Mobile" class="form-control" name="mobile_number" required>
						<i class="zmdi zmdi-account"></i>
					</div>
					
					<button type="submit">Register
						<i class="zmdi zmdi-arrow-right"></i>
                    </button>
                {{-- <button><a class="zmdi" href="{{url('/loginCheck')}}">Already A member <a></button> --}}
                    <button type="submit">Already A Member
						<i class="zmdi zmdi-arrow-right"></i>
                    </button>
                    
                
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>