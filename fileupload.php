<?php include 'bootstrap and js';?>
<body>
	<div class="jumbotron " >
		<div class="container" style="width:400px">
			<h1>File Upload</h1>
			<form action ="upload.php" method="post" enctype="multipart/form-data">
			<h5>select image to upload:</h5>
			<input type="file" name="fileToUpload[]" multiple >


			<input type="submit" name="submit">

			</form>
		</div>		
	</div>
</body>
</html>