<?php


// define variables and set to empty values
$firstname = $lastname = $gender = $age =  "";
$firstnameErr = $lastnameErr = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"]) and empty($_POST["lname"])) {
        $firstnameErr = "First name is required";
        $lastnameErr = "Last name is required";
    }else{
        $firstname = test_input($_POST["fname"]);
        $lastname = test_input($_POST["lname"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
                $firstnameErr = "Only letters and white space allowed";     
            }
            if(!preg_match("/^[a-zA-Z ]*$/", $lastname)){
                $lastnameErr = "Only letters and white space allowed";
            }
            if (strlen($firstname) <= 2){
                    $firstnameErr = "Letters Must be atleast three or more";
            }
            if (strlen($lastname) <= 2){
                    $lastnameErr = "Letters Must be atleast three or more";
            }

            

            
        }
}
 


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  
  return $data;
}


?>