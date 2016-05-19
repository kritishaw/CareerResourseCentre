<form action="components/update-profile-after-registration.php" method="post" enctype="multipart/form-data" id="UploadForm" autocomplete="off">
<?php
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    $sql = "SELECT * FROM user WHERE user_username='$user_username'";
    $result = mysqli_query($database,$sql);
    $rws = mysqli_fetch_array($result);
?>
    <div class="col-md-6">
        <div class="form-group float-label-control">
            <label for="">Name</label>
            <input type="text" class="form-control"  placeholder="<?php echo $rws['user_name'];?>" name="user_name" value="<?php echo $rws['user_name'];?>" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">UF ID:</label>
            <input type="text" class="form-control"  placeholder="<?php echo $rws['user_ufid'];?>" name="user_ufid" value="<?php echo $rws['user_ufid'];?>" required>
        </div>
    </div>    
    <div class="col-md-6">
        <div class="form-group float-label-control">
            <label for="">Email</label>
            <input type="text" class="form-control" placeholder="<?php echo $rws['user_email'];?>" name="user_email" value="<?php echo $rws['user_email'];?>" required>
        </div>
    </div>          
<?php
    $user_username =  $_GET['user_username'];
?>     
    <br>                 
    <div class="submit">           
        <center>
            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Continue</button>
        </center>
    </div>
</form>