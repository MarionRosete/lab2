


          Profile Picture:
            <form action ="data.php" method="post" enctype="multipart/form-data">
            <label class="custom-file-upload"></label>
              <input type="file" name="fileToUpload[]" id="src" multiple >
              <p><img id="target" width="300"  /></p>
            </form>
            
            
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