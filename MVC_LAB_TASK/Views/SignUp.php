<?php include 'MainHeader.php'; ?>
<?php include '../Controllers/UserControll.php'; ?>
 <html>
    <head></head>
	<boady>
	    <div align="center">
		    <h3>Sign Up</h3>
			<h5><?php echo $err_db; ?></h3>
			<form action="" method="post">
			    <div>
				    <h4>Name</h4>
					<input type = "text" name = "name"/>
					<span> <?php echo $err_name; ?> </span>
				</div>
				<div>
				    <h4>Username</h4>
					<input type = "text" name = "uname"/>
					<span> <?php echo $err_uname; ?> </span>
				</div>
				<div>
				    <h4>Email</h4>
					<input type = "text" name = "email"/>
					<span> <?php echo $err_email; ?> </span>
				</div>
				<div>
				    <h4>Password</h4>
					<input type = "password" name = "pass"/>
					<span> <?php echo $err_pass; ?> </span>
				</div>
				<div>
					<input type = "submit" name = "signUp" value = "Sign Up" />
				</div>
			</form>
		</div>
	</boady>
    <?php include 'Footer.php'; ?>
</html>