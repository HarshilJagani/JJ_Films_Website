<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Submit Movie | Fanatsy Cinema</title>
	<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
	<link rel="stylesheet" type="text/css" href="css/movie submit.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link href="css/footer.css" rel="stylesheet" type="text/css"> -->
	
</head>

<body>	
	<div class="topbutton">
		<a href="index.html">BACK TO HOME</a>
	</div>
	<div class="alignbox">
		
<div class="wrapper">
    <div class="title">
        <h3><span class="text"><img src="images/image-147x60.jpg" alt="logo"> </span><br> Submission Form</h3>
        <hr>
    </div>
    <div class="form">
        <form id="movieform" name="movieform" action="db.php" method="POST">
            <div class="form_control">
                <label>Movie Name</label>
                <input type="text" name="mname" id="mname" class="input_field" placeholder="Enter the name...">
            </div>
            <div class="form_control">
                <label>Released Year</label>
                <input type="text" name="year" id="year" class="input_field" placeholder="Enter the year...">
            </div>
            <div class="form_control">
                <label>Genre</label>
                <select id="genre" name="genre" class="input_field">
                        <option value="">Select the Genre</option>
                        <option value="action">Action</option>
                        <option value="comedy">Comedy</option>
                        <option value="fantasy">Fantasy</option>
                        <option value="horror">Horror</option>
						<option value="romance">Romance</option>
						
                </select>
            </div>
            <div class="form_control">
                <label>Description</label>
				<textarea name="description" id="description" class="input_field" placeholder="Enter a lengthy description..."></textarea>
            </div>
            
			<div class="form_control">
                <label>Your Email</label>
                <input type="text" name="email" id="email" class="input_field" placeholder="Enter the email...">
            </div>
            <div class="form_control terms">
                <label class="check">
                    <input type="checkbox" name="agree" id="agree">
                    <span class="check"></span>
                </label>
                <p class="agree">I Agree to terms and conditions</p>
            </div>
            <div class="form_control">
                <input type="submit" class="btn-custom" value="Submit">
            </div>
        </form>
    </div></div>
</div>
	
</body>
</html>
