<h1>Login</h1>
<?php
	if(Session::get("loggedin")){
		echo 'This is the username of the logged in user: '.$this->username;
		echo '<br />';
	}
	
	if($this->message){
		echo 'This is the message: '.$this->message;
		echo '<br />';
	}
?>
<form class="Frm" action="runLogin" method="post">
	<ul>
		<li>
			<label>Username</label>
			<input name="username" placeholder="Enter User Name">
		</li>
		<li>
			<label>Password</label>
			<input name="password" type="password" placeholder="Enter Password">
		</li>
		<li>
			<label>Admin Login</label>
			<input type="checkbox" name="IsAdmin" />
		</li>
		<li>
			<input type="submit" name="submit" value="Login">
		</li>

</form>
