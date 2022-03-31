<?php

require_once 'includes/config.php';
include_once 'public/common/header.php';

?>



<style>
.wrapper { padding-top:30px; }
</style>

<div class="row justify-content-center wrapper">
<div class="col-md-6">

<?php
if (!empty($_SESSION['success'])){
?>
<div class="alert alert-success text-center">

<?php echo $_SESSION['success']; ?>

</div>
<?php
unset($_SESSION['success']);
}
?>


<?php
if (!empty($_SESSION['errors'])){
?>
<div class="alert alert-danger">
<p> There were following error(s) found !  </p>
    <ul>
        <?php
        foreach ($_SESSION['errors'] as $errors) {
            print '<li>'.$errors.'</li>';            
        }
        ?>
    </ul>
</div>
<?php
unset($_SESSION['errors']);
}
?>

<div class="card">
<header class="card-header">
	<h4 class="card-title mt-2">Sign In</h4>
</header>
<article class="card-body">
<form method="POST" action="<?php echo SITEURL . 'actions/login_action.php'; ?>">
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" placeholder="Email">
	</div> 
	<div class="form-group">
		<label>Password</label>
	    <input class="form-control" type="password" name="password" placeholder="password">
	</div>   
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-success btn-block"> Login  </button>
    </div>       
</form>
</article>
<div class="border-top card-body text-center">Haven't an account? <a href="<?php echo SITEURL."signup.php"; ?>">Sign Up</a></div>
</div>
</div>

</div>

</div>
<?php
include_once 'public/common/footer.php';
?>
