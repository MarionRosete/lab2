<?php include 'header.html';
      

?>
<body>
	<div class="jumbotron " >
		<div class="container" style="width:400px">
			<h1>File Upload</h1>
			<form action ="upload.php" method="post" enctype="multipart/form-data">
			<h5>select image to upload:</h5>
			<input type="file" name="fileToUpload[]" id="src" multiple >
			<p><img id="target" width="200" /></p>


			<input type="submit" name="submit">

			</form>
		</div>		
	</div>

	

<script>
function showImage(src,target) {
  var fr=new FileReader();
  // when image is loaded, set the src of the image where you want to display it
  fr.onload = function(e) { target.src = this.result; };
  src.addEventListener("change",function() {
    // fill fr with image data    
    fr.readAsDataURL(src.files[0]);
  });
}

var src = document.getElementById("src");
var target = document.getElementById("target");
showImage(src,target);
</script>

</body>
</html>