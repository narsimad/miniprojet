<?php  ?>
<div id="main-content">
    <h1 class="box-title">Inscrivez-vous !</h1>
    <form class="post-form" action="saveregister.php" method="post">
    	<div class="form-group">
            <input type="text" class="box-input" name="pseudo" placeholder="Surnom :" required/><br>
            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur :" required/><br>
            <input type="passeword" class="box-input" name="passeword" placeholder="Mot de passe :" required/><br>
            <input type="passeword" class="box-input" name="passeword" placeholder="Confirmation du mot de passe :" required/><br>
            <input type="submit" value="Inscription " name="submit" class="button">
        </div></br>
        <?php if ("passeword"=="passeword2"): ?>
        	<form class="post-form" action="saveregister.php" method="post">
        <?php endif ?>
        <style type="text/css">
body {
  background: #008080;
  font-family: sans-serif;
}
.box-input{
    background: #f2f2f2;
  width: 50%;
  border: 0;
  margin: 0 320 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size:14px;
}
.box-title {
  width: 300px;
  margin: auto;
  position: relative;
  background:#FFFFFFFF;
  margin: 50px auto 50px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 20px 20px rgba(0, 0, 0, 0.24);
}
.button {
    background: #FFC107;
  width: 20%;
  border: 0;
  padding: 15px;
  color:#FFFFFF;
  margin: 50 520 15px;
  font-size: 30px;
  cursor: pointer;
}

    