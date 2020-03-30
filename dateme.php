<?php include "header.html"; ?>
<head>
<style>
    body {
  background: #555;
  max-width: 550px;
margin: auto;



    }
    
  .head { 
    background-color:bisque;
     color:darkblue;
      text-align: center;
      padding: 10px;
      max-width: 550px;
      margin: auto;
  

 


      
  }
  .body{
      background-color:aliceblue;
      padding: 10px;
      max-width: 550px;
      margin: auto;
     
  }


  
  </style>
</head>

<body>
    
    <center>

                <div class="d-inline-flex p-2 bd-highlight">
                    <div class="card">
                        <div class="head">
                            <h1>DateMe</h1>
                            <h4>Date random people nearby<h4>
                        </div>
                        <div class="body" style="text-align:left;">
                        <?php include "profilepic.php" ?>
                        <?php include "content.php";?> 
                        </div>
                    </div>  
                </div>   
    </center>

</body> 
    
                
    
    
   
    