<body>
    <?php
     include 'bootstrap and js';
    ?>
    <div class="jumbotron" >
	<div class="container" style="width:400px">

        <?php
        $files=$_FILES['fileToUpload']['type'];
        $counted = count($files);


            for ($i=0; $i < $counted ; $i++) { 
                $name=$_FILES['fileToUpload']['name'][$i];
                $tmp_name=$_FILES['fileToUpload']['tmp_name'][$i];
                $type = $_FILES['fileToUpload']['type'][$i];
                $size = $_FILES['fileToUpload']['size'][$i]; 

                
                
                if($type != "image/png"&& $type!="image/jpeg"&& $type!="image/jpg"){
                    alert( "Fail to upload, only png,jpeg and jpg are accepted");
                     
                }elseif($size > 5000000){ 
                    alert("Fail to upload, File must not exceed to 5mb");
                    
                }else{
                    alert("File uploaded successfully");
                    
                    echo "Name : ".$_FILES['fileToUpload']['name'][$i]. "<br>";
                    echo "Type : ".$_FILES['fileToUpload']['type'][$i]. "<br>";
                    echo "Size : ".$_FILES['fileToUpload']['size'][$i]. "<br>";
                    $dir ='uploads/'.basename($_FILES['fileToUpload']['name'][$i])  ;
                    echo "<img src=".$dir." height = 250 width= 400>"."<br>";
                    move_uploaded_file($_FILES['fileToUpload']['tmp_name'][$i], $dir);
                }     
            } 

            

            function alert($msg) {
            echo "<script type='text/javascript'>alert('$msg');</script>";
            }
            
        ?>
    </div>
    </div>

</body>