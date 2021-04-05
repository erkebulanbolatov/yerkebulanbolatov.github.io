<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

	<div>
		<form>
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" placeholder="Enter Name">
			</div>
			<div class="form-group">
				<label>Surname</label>
				<input type="text" class="form-control" placeholder="Enter Surname">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" placeholder="Enter Email">
			</div>
			<div class="input-group">
				<div class="custom_file">
					<input type="file" class="custom-file-input">
					<label class="custom-file-label">Choose File</label>
				</div>
			</div>
			<button type="submit" name="submit" class="btn btn-primary"> Save Data </button>
		</form>
	</div>
</body>
</html>