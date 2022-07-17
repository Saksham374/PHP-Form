

<html>
    <body>
<?php

 

$nameErr= $emailErr ="";
 $name=$email="";
 if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if(empty($_POST["name"])){
        $nameErr="Name is required";
    }
    else{
    $name=test_input($_POST["name"]);
    }
    if(empty($_POST["email"])){
        $emailErr="email is required";
    }else{
    $email=test_input($_POST["email"]);
    }# code...
 }

 echo  $name."\r\n"; 
 echo  $email; 

 function test_input($data){
    $data=trim($data);
    $data=trim($data);
    $data=trim($data);
    return $data;
 }
 ?>

<form action="demo.php" method="post">
        <label for="Name">NAME</label>
        <input type="text" name="name" id="Name" autocomplete="off"><br>
        <span class="error">*<?php echo $nameErr?></span>
        <label for="E-mail">E-mail</label>
        <input type="email" name="email" id="E-mail" autocomplete="off"><br>
        <span class="error">*<?php echo $emailErr?></span>
        <input type="submit" value="Submit">
    </form>
 </body>
 
<html>