<?php
    $current_user = $_SESSION['user_username'];
    $sql = "SELECT * FROM user WHERE user_username='$current_user'";
    $result = mysqli_query($database,$sql);
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
?>
    <!-- Navbar1 -->
	    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
	      <div class="fluid-container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
                <a class="navbar-brand" href="home.php"><b>Get Hired</b></a>	        
            </div>
	        <div class="navbar-collapse collapse" id="navbar-collapse1">
	           <ul class="nav navbar-nav">
	               <li>
                       <a href="home.php"><i class="fa fa-home"></i> Home</a>
                   </li>
	           </ul>
			   <ul class="nav navbar-nav">
	               <li>
                       <br><?php 
					   if($_SERVER['REQUEST_URI']=='/CareerResourceCentre/edit-profile.php') 
						   echo 'EDIT PROFILE';
					   else if($_SERVER['REQUEST_URI']=='/CareerResourceCentre/all-users.php')
						   echo 'JOB SEARCH';
					   ?>
                   </li>
	           </ul>
			   
               <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $row['user_name'];?> <strong class="caret"></strong></a>                  
                        <ul class="dropdown-menu">
                            <li>
                                <a href="edit-profile.php"><i class="fa fa-edit"></i> Edit Profile</a>
                            </li>
							<li>
                                <a href="all-users.php"><i class="fa fa-edit"></i> Search Jobs</a>
                            </li>
							<li>
                                <a href="components/logout.php"><i class="fa fa-mail-reply"></i> Logout</a>
                            </li>
                        </ul>
                    </li>	
                </ul>    
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
      <!-- ./Navbar1 -->
<?php
    }
?>