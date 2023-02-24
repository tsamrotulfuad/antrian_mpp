<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="{!! asset('login/css/style.css') !!}">

    
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	
			 <form action="{{route('postlogin')}}" class="login-form" method="post">
             {{ csrf_field() }}
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Email" name="email" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" name="password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	            <div class="form-group d-flex" style="margin-bottom: -20px">
	            	<div class="w-50">
	            		
								</div>
								<div class="w-50 text-md-right">
									
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
    
  <script src="{{ asset('login/js/jquery.min.js') }}"></script>
  <script src="{{ asset('login/js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>

