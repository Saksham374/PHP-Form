<!DOCTYPE html>
<html>
  <head>
    <title>PHP FORM</title>
  </head>
  <body>
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
</html>



