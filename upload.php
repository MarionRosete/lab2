<?php
    $size = $_FILES['fileToUpload']['size'];
    $type = $_FILES['fileToUpload']['type'];
    $destination = 'uploads/'.basename($_FILES['fileToUpload']['name']);
   
    

    if (checkType($type)&&checkSize($size) == true) {
            echo "hmm";
            upload();

            echo "<img src=".$destination." height=200 width=300 />";

        }

   function checkType($type = null){
        $allowed = array('jpeg','jpg','png','gif'); 
        $strArray = explode('/',$type);
        return in_array(end($strArray),$allowed);
    }

    function checkSize($size = null){
        $max = 5000000; // 5mb
        if($size){
            return $size <= $max;
        }
    }

    function upload($file = null){
        $destination = 'uploads/'.basename($_FILES['fileToUpload']['name']);
        return move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $destination);
    }
   
?>