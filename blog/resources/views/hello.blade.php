<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="form-group text-center">
			<h1>Register Form</h1>
		</div>

	<form>
	  <div class="row">
	    <div class="col">
	    	<label for="firstname">First name</label>
	      <input type="text" id="firstname" class="form-control" placeholder="First name">
	    </div>
	    <div class="col">
	    	<label for="lastname">Last name</label>
	      <input type="text" id="lastname" class="form-control" placeholder="Last name">
	    </div>
	  </div>
	</form><br>

	<form>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>

	  <div class="form-group">
	    <label for="username">Username</label>
	    <input type="text" class="form-control" id="username" placeholder="Username">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	  </div>

	  <div class="form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>	
	</form>
	</div>
</body>
</html>
