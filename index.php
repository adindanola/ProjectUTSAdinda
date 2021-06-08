<?php
include('Config/googleapi.php');
$loginurl = $google_client->createAuthUrl();
?>
<!DOCTYPE html>
<html>
<head>
 <title>Market Buah</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 

 <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }
 ?>

 <div class="panel_login">
  <p class="tulisan_atas">Silahkan Masuk</p>


  <form action="cek_login.php" method="post">
   <label>Username</label>
   <input type="text" name="username" class="form_login" placeholder="Username" required="required">

   <label>Password</label>
   <input type="password" name="password" class="form_login" placeholder="Password" required="required">
    
   <div style="margin-left: 110px; margin-right: 110px;">
   <div class="container-tombol_login style="">
   <button class="tombol_login">Login</button></div></div>

    <div class="container-tombol_login" style="margin-top: 25px; margin-left: 110px;">
    <a href="<?php echo $loginurl; ?>" class="ml-2 tombol_login">Login Google</a></div>
   
  </form>
  
</div>


</body>
</html>