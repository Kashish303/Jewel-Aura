<!-- <
include ('include/header.php');
?>

<div class="container">
 <form method="post" action="controllor/controllor.php" enctype="multipart/form-data">
    <div class=" row mt-5">
        <div class="col-md-6">
            <h3 class="">Contact With Us</h3>
           
            <div class="form-group mt-4">
            <label >Full Name</label>
            <input type="text" class="form-control" placeholder="Enter Full Name">
            </div>
            <div class="form-group mt-4">
            <label >Email</label>
            <input type="text" class="form-control"  placeholder='Enter Email'>
            </div>
            <div class="form-group mt-4">
            <label >Contact</label>
            <input type="text" class="form-control"  placeholder='Enter Contact Number'>
            </div>
            <div class="form-group mt-4">
            <label >Message</label>
            <textarea  class="form-control"  placeholder="Message"></textarea>
            </div>
            <div class="form-group mt-4">
            <button type="button" class="btn btn-info w-100">Submit</button>
            </div>

             </div>

        <div class="col-md-6">
            <h3>Our Location</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.545583161482!2d75.86337437632433!3d26.822594176701173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db770070b115f%3A0x6f306afd08a3e737!2sSwami%20Keshvanand%20Institute%20of%20Technology%2C%20Management%20%26%20Gramothan%20(SKIT)!5e0!3m2!1sen!2sin!4v1722328101653!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
</form>        
</div> -->

<!--
include('include/footer.php');
?> -->

<?php 
include('include/header.php');
?>
<div class="container">
<form method="post" action="controllor/controllor.php" enctype="multipart/form-data">
    <div class="row mt-5">
        <div class="col-md-6 bg-light p-5">
            <h3 class="text-danger" style="text-align: center;">Connect With Us</h3>
            <div class="form-group mb-3">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="Enter Full Name" name="fname">
            </div>
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter email" name="email">
            </div>
            <div class="form-group mb-3">
                <label>Contact</label>
                <input type="text" class="form-control" placeholder="Enter contact number" name="contact">
            </div>

            <div class="form-group mb-3">
                <label>Message</label>
                <textarea class="form-control" rows="2" name="message"></textarea>
            </div>

            <div class="form-group mb-3 mt-5">
                <button type="submit" name="contact" class="btn btn-success btn-md w-100">Submit</button>
            </div>

            <?php 
            
            if($_SESSION['error'] !== '') {
              ?>
               <span style ="color:red;
               text-align:center;"><?php
               echo $_SESSION['error'];?>
               </span>
               <?php
            }$_SESSION['error'] ='';
            ?>
            <?php
            
            if ($_SESSION['success'] !== '') {
                ?>
                <span style ="color:success;
                text-align:center;"><?php
                echo $_SESSION['success'];?>
                </span>
                <?php
             }$_SESSION['success'] ='';
             ?>



        </div>

        <div class="col-md-6 p-5 bg-light">
            <h3 class="text-danger" style="text-align: center;">Our Location</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.491905126972!2d75.77032017522227!3d26.85610837668097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db56fbf8e3d0d%3A0xd76b92efd4a1b70!2sKistechnosoftware%20Pvt.%20Ltd.%20Software%2C%20Website%2C%20Mobile%20Application%20Development%20Company%20in%20Jaipur%20(India)!5e0!3m2!1sen!2sin!4v1722327254537!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</form>
</div>

<?php 
include('include/footer.php');
?>