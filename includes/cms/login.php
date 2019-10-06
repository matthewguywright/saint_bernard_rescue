<h3>Login</h3>
<p>
<?php if( isset($message) ) { print $message; } ?>
<form action="cms.php" method="post">
                <div align="left">Username: 
                  <input name="username" type="text" id="username" size="30" maxlength="30" />
                  <br />
                  <br />
  				Password: 
  				<input name="password" type="password" id="password" size="30" maxlength="30" />
  				</p>
                <br />
                <br />
                <center><input type="submit" name="submitlogin" id="submitlogin" value="Login" />
                  <br />
                </center>
                </div>
</form>
</p>