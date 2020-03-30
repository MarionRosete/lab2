<?php include "../Lab1/script.php"; ?>
<?php include "validation.php";     ?>

    <form action="data.php" method="POST" class="needs-validation">
        <div class="form-group col" style="width: 18rem;">
            
                <div class="col">
                <label class="control-label row-sm-2" for="fname">First name</label>
                <input type="text" class="form-control " id="fname" placeholder="Firstname"  name="fname" required>
                <label class="control-label row-sm-2" for="fname">Last name</label>
                <input type="text" class="form-control " id="fname" placeholder="Lastname" name="lname" required> 
                <label for="customRange">Age Range <span id="starting"></span>-<span id="selected"></span> </label>
                <input type="range" class="custom-range" min="18" max="60" id="myRange" value="18" name="Age">
                <label for="gender">Interested in:</label><br>
                <input type="radio"  id="gender"  name="gender" value="male" size="5" required>Male
                <input type="radio"  id="gender"  name="gender" value="Female" size="5" required>Female<br>
                <br><button type="submit" class="btn btn-primary">Date Now</button></br>
                </div>   
                
        </div>
        
    </form>
<script>


var slider = document.getElementById("myRange");
var output = document.getElementById("selected");
output.innerHTML =   slider.value;


slider.oninput = function() {
  output.innerHTML =  this.value;
  
}
</script>
