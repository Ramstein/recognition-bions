<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Amazon Rekognition - Deep Learning Powered Image Recognition Service</title>
	<link rel="stylesheet" href="../distr/css/bootstrap.min.css">
	<link rel="stylesheet" href="../distr/css/all.min.css">
	<link rel="stylesheet" href="../distr/css/fontawesome.min.css">
	<link rel="stylesheet" href="../distr/css/animate.css">
	<link rel="stylesheet" href="../distr/css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700,800" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<script src="../distr/js/jquery-3.4.1.min.js"></script>
	<script src="../distr/js/modernizr.js"></script>
	<script>
		$(window).on("load", function() {
			$(".se-pre-con").fadeOut("slow");
		});
	</script>
</head>

<body>
	<div class="se-pre-con"></div>
	<section id="section">
		<div class="container-fluid" id="top-nav">
			<div class="container">
				<nav class="navbar sticky-top navbar-expand-lg"><a class="navbar-brand" href="../index.php">Amazon <span>Rekognition</span></a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item active"><a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a></li>
							<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services </a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="../object-detection/object-detection-frontend.php">Object and Scene Detection</a><a class="dropdown-item" href="../facial-analysis/facial-analysis-frontend.php">Facial Analysis</a><a class="dropdown-item" href="../face-comparison/face-comparison-frontend.php">Face Comparison</a><a class="dropdown-item" href="../celebrity-recognition/celebrity-recognition-frontend.php">Celebrity Recognition</a><a class="dropdown-item" href="../image-moderation/image-moderation-frontend.php">Image Moderation</a><a class="dropdown-item" href="../text-in-image/text-image-frontend.php">Text in Image</a></div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<div class="container-fluid" id="box">
			<div class="row no-gutters">
				<div id="outer-wrapper">
					<h3>Celebrity Recognition</h3>
					<h5><span>Amazon Rekognition</span>automatically recognizes celebrities in images and provides confidence scores</h5>
					<form id="celebrity-recognition" action="celebrity-recognition-backend.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-5">
								<div id="label-container">
									<div id="columns">
										<h6 class="left">Results</h6>
										<h6 class="right">Confidence</h6>
									</div>
									<div id="labels"></div><span id="processing" class="deactivated"><img src="../distr/img/processing.gif" alt="Processing"></span>
								</div>
								<div id="action"><button onclick="downloadRekognitionResults()">Download Info</button></div>
							</div>
							<div class="col-md-7">
								<div id="image-holder">
									<div id="image-wrapper"><canvas id="canvas"></canvas><img id="image" src="../distr/img/cr3-large.jpg" alt="Main Image"></div>
								</div>
								<div id="image-utilities" class="row">
									<div id="upload-image" class="col-md-6">
										<h6>Use your own image</h6>
										<div class="upload"><input type="file" name="file" id="file" class="upload-image" required /><label for="file"><i class="fas fa-upload"></i><span id="file-label">Upload an image...</span></label></div>
										<p>Upload your Image</p>
										<p>Image must be <span>.jpeg</span>or <span>.png</span>format and no larger than <span>5MB</span></p>
										<div id="status-message"></div>
									</div>
									<div id="sample-image" class="col-md-6">
										<h6>Try with Sample Images</h6><a href="" class="img-thumb"><img src="../distr/img/cr1-large.jpg" alt="Demo Image"></a><a href="" class="img-thumb"><img src="../distr/img/cr2-large.jpg" alt="Demo Image"></a><a href="" class="img-thumb active"><img src="../distr/img/cr3-large.jpg" alt="Demo Image"></a>
									</div>
								</div>
							</div>
						</div>
					</form>
					<div id="logo">
						<p>Powered By</p><img src="../distr/img/aws.png" alt="AWS Logo">
					</div>
				</div>
			</div>
			<div id="copyright">
				<p>Copyright &copy; 2021 <a href="https://recognition.bions.us" target="_blank">Recognition BIONS</a><span>|</span>All Rights Reserved</p>
			</div>
		</div>
	</section>
	<script src="../distr/js/bootstrap.min.js"></script>
	<script src="../distr/js/jquery.foggy.min.js"></script>
	<script src="../distr/js/jcanvas.min.js"></script>
	<script src="../distr/js/custom.js"></script>
</body>

</html>