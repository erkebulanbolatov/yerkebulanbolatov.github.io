<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<style type="text/css">
		form {
			margin-top: 50px;
		}
		.group {
  			position: relative;
  			margin-bottom: 30px;
		}

		input {
		  font-size: 16px;
		  padding: 10px;
		  display: block;
		  width: 300px;
		  border: none;
		  border-bottom: 1px solid #ccc;
		}
		input:focus {
		  outline: none;
		}

		label {
		  color: #999;
		  font-size: 18px;
		  position: absolute;
		  pointer-events: none;
		  left: 10px;
		  top: 15px;
		  transition: 0.2s ease all;
		  -moz-transition: 0.2s ease all;
		  -webkit-transition: 0.2s ease all;
		}

		/* active state */
		input:focus ~ label, input:valid ~ label {
		  top: -15px;
		  font-size: 14px;
		  color: #5264AE;
		}


		/* BOTTOM BARS ================================= */
		.bar {
		  position: relative;
		  display: block;
		  width: 320px;
		}
		.bar:before, .bar:after {
		  content: "";
		  height: 2px;
		  width: 0;
		  bottom: 0;
		  position: absolute;
		  background: #5264AE;
		  transition: 0.2s ease all;
		  -moz-transition: 0.2s ease all;
		  -webkit-transition: 0.2s ease all;
		}
		.bar:before {
		  left: 50%;
		}
		.bar:after {
		  right: 50%;
		}

		/* active state */
		input:focus ~ .bar:before,
		input:focus ~ .bar:after {
		  width: 50%;
		}
	</style>
</head>
<body>
	<form method="POST" action="{{ route('add-blog') }}">
		@csrf
   		<div class="group">      
	    	<input type="text" name="Title" required>
	    	<span class="bar"></span>
	    	<label>Title</label>
   		</div>
	   	<div class="group">      
	    	<input type="text" name="Body" required>
	    	<span class="bar"></span>
	    	<label>Body</label>
	   	</div>
	   	<div class='group'>
	   		<button type="submit">Create</button>
	   	</div>
	</form>
</body>
</html>