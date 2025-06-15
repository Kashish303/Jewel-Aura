<?php 
include('include/header.php');
?>

<div class="container">
	<form>
	<div class="row mt-5 bg-light p-5">
		<div class="col-md-6 offset-3">
			<h3 class="text-success" style="text-align:center;">Sign Up Here</h3>

            <div class="form-group">
            <label>Name*</label>
            <input type="text" name="name" placeholder="Enter your name" class="form-group">
            </div>

            <div class="form-group mt-3">
            <label>Email*</label>
            <input type="text" name="email" placeholder="Enter your Email" class="form-group">
            </div>

            <div class="form-group mt-3">
            <label>Contact*</label>
            <input type="text" name="contact" placeholder="Enter your number" class="form-group">
            </div>

            <div class="form-group mt-3">
            <label>Password*</label>
            <input type="text" name="pass" placeholder="***********" class="form-group">
            </div>

            <div class="form-group mt-3">
            <label>Confirm Password*</label>
            <input type="text" name="cpass" placeholder="Confirm Password" class="form-group">
            </div>

            <div class="form-group mb-3 mt-5">
                <button type="submit" name="submit" class="btn btn-success btn-md w-100">Sign Up Here</button>
            </div>
            
            <?php
            if($_SESSION['error'] !== '') {?>
            <h5 class="text-danger"><?php echo $_SESSION['error'];?></h5>
            <?php} $_SESSION['error'] = '';
            ?>

            <?php
            if($_SESSION['success'] !== '') {?>
            <h5 class="text-danger"><?php echo $_SESSION['success'];?></h5>
            <?php} $_SESSION['success'] = '';
            ?>

          
		</div>
	</div>
	</form>
</div>

<?php
include('include/footer.php')
?>