<?php include 'MainHeader.php'; ?>
<?php include 'AdminHeader.php'; ?>
<?php include '../Controllers/CategoryControll.php'; ?>
<?php
    $id = $_GET["id"]; 
    $c = getCategory($id); 
?>
<html>
    <head></head>
	<boady>
	    <div align="center">
		    <h3>Edit Category</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Category Name</h4>
					<input type = "text" name = "cname" value="<?php echo $c["cname"];?>"/>
					<input type = "hidden" name = "id" value="<?php echo $id;?>"/>
					<span> <?php echo $err_cname; ?> </span>
				</div>
				<div>
					<input type = "submit" name = "updateCategory" value = "Update"/>
				</div>
			</form>
		</div>
	</boady>
    <?php include 'Footer.php'; ?>
</html>