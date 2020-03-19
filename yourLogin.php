<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>yourLogin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
 <style type="text/css">
 	body{
 		background:linear-gradient(rgba(0, 0, 50, 0.5),rgba(0, 0, 50, 0.5)),url('https://images.pexels.com/photos/68147/waterfall-thac-dray-nur-buon-me-thuot-daklak-68147.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
 	}
    
    .login-box{
    	max-width: 700px;
    	float: none;
    	margin: 150px auto;
    }

    .login-single{
    	background: rgba(211, 211, 211, 0.5);
    	padding: 30px;
    }

    form-group{
    	background-color: transparent !important;
    }
</style>
</head>
<body>
	<div class="container-fluid">
		<div class="loginin-box">
			<div class="col-md-12 login-single">
				<h2 class="text-primary">Login Here</h2>
				<form action="submission.php" method="POST">
					<div class="form-group">
					<label>UserID: </label>
					<input type="text" name="user" value="" placeholder="Enter Your ID" class="form-control">
					</div>

					<div class="form-group">
						<label>Password: </label>
					<input type="password" name="pass" value="" placeholder="Enter Your Password" class="form-control" required>
					</div>

					<input type="submit" class="btn btn-success" name="submit">

				</form>



			</div>



		</div>


	</div>


</body>
</html>