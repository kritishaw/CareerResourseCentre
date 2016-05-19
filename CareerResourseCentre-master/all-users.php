<?php include 'components/authentication.php' ?>
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?>          
    <div class="container">
	   <div class="no-gutter row"> 
           <div class="col-md-12">
               <div class="panel panel-default" id="sidebar">
                   <div class="panel-body">                
<?php          
    $sql = "SELECT * FROM user where user_username='$user_username'";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysqli_fetch_array($result);
?>             
<form action="components/search-profile.php" method="post" enctype="multipart/form-data" id="UploadForm">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
		<li class="active"><a href="#SearchJobs" data-toggle="tab">Search Jobs</a></li>
		<li><a href="#Create" data-toggle="tab">Create Search Agent</a></li>
	</ul>
	
    <!-- Tab panes -->
	</br>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="SearchJobs">  
			<div class="col-md-6">
				<div class="form-group float-label-control">                      
					<table cellspacing='2' style='font-family:arial'>
						<tr><td style='font-size:16px;'><b>WHAT</b></td></tr>
						<tr><td><input name='q' value='' size='15'></td></tr>
						<tr><td style='font-size:10px'>job title, keywords</td></tr>
						<tr><td style='font-size:16px;'><b>WHERE</b></td></tr>
						<tr><td><input name='q' value='' size='15' ></td></tr>
						<tr><td style='font-size:10px'>city, state, zip</td></tr>
						
					</table>
				</div>
				<div class="form-group float-label-control">
					<label for="">Location Preferences(Upto 3)</label> 
					<input type="text" class="form-control" name="user_email"><br>
					<input type="text" class="form-control" name="user_email"><br>
					<input type="text" class="form-control" name="user_email">
				</div> 
				<div class="form-group float-label-control">  
					<label for="">Include Jobs Posted Within</label>
					<select name="user_currentcountry">
						<option value="US">Last 30 Days</option>
						<option value="INDIA">Last Week</option>
						<option value="UK">Last Day</option>
						<option value="CANADA">Anytime</option>
					</select>
				</div>
				<div class="form-group float-label-control">  
					<label for="">Industries</label>
					<select name="user_currentcountry">
						<option value="US">Software</option>
						<option value="INDIA">Mechanical</option>
						<option value="UK">Aeronautical</option>
						<option value="CANADA">Electrical</option>
					</select>
				</div>
			</div>  
			<div class="col-md-6">
				<div class="form-group float-label-control">
					<label for="">Job Category(Upto 3)</label> 
					<input type="text" class="form-control" name="user_email"><br>
					<input type="text" class="form-control" name="user_email"><br>
					<input type="text" class="form-control" name="user_email">
				</div> 
				<div>	
					<label for="">Degree</label>	
					<select>
						<option value="Batchelors">Batchelors</option>
						<option value="Masters">Masters</option>  
						<option value="Masters">PhD</option>  
						<option value="Masters">Diploma</option>  
					</select><br>
					<input type="checkbox" name="vehicle" value="Bike">Include Lower Degrees<br>
				</div>
				<br>
				<div>	
					<label for="">Employment Type</label>	
					<br>
					<input type="checkbox" name="vehicle" value="Bike">Full Time<br>
					<input type="checkbox" name="vehicle" value="Bike">Part Time<br>
					<input type="checkbox" name="vehicle" value="Bike">Intern<br>
					<input type="checkbox" name="vehicle" value="Bike">Contract To Hire<br>	
				</div><br>
				<div class="form-group float-label-control">  
					<label for="">VISA Sponsorship</label>
					<input type="radio" name="relocate" value="Yes"> Yes
					<input type="radio" name="relocate" value="No"> No
				</div>				                
			</div>
			<div class="submit">
				<center>
					<input class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  name="submit"  value="Search Jobs">
				</center>
			</div>
		</div>	
		<div class="tab-pane fade" id="Create">  
			<div class="col-md-6">
				<div class="form-group float-label-control">
					<label for="">Name of Agent</label> 
					<input type="text" class="form-control" name="user_email">
				</div> 
				<div class="form-group float-label-control">
					<label for="">Keyword Search</label> 
					<input type="text" class="form-control" name="user_email">
				</div> 				
				<div class="form-group float-label-control">  
					<label for="">Keywords</label>
					<input type="radio" name="relocate" value="Yes"> Use All
					<input type="radio" name="relocate" value="No"> Use Any
				</div>	
				
				<div class="form-group float-label-control">
					<label for="">Location Preferences(Upto 3)</label> 
					<input type="text" class="form-control" name="user_email"><br>
					<input type="text" class="form-control" name="user_email"><br>
					<input type="text" class="form-control" name="user_email">
				</div> 
				<div class="form-group float-label-control">  
					<label for="">Include Jobs Posted Within</label>
					<select name="user_currentcountry">
						<option value="US">Last 30 Days</option>
						<option value="INDIA">Last Week</option>
						<option value="UK">Last Day</option>
						<option value="CANADA">Anytime</option>
					</select>
				</div>
				<div class="form-group float-label-control">  
					<label for="">Industries</label>
					<select name="user_currentcountry">
						<option value="US">Software</option>
						<option value="INDIA">Mechanical</option>
						<option value="UK">Aeronautical</option>
						<option value="CANADA">Electrical</option>
					</select>
				</div>
			</div>  
			<div class="col-md-6">
				<div class="form-group float-label-control">
					<label for="">Job Category(Upto 3)</label> 
					<input type="text" class="form-control" name="user_email"><br>
					<input type="text" class="form-control" name="user_email"><br>
					<input type="text" class="form-control" name="user_email">
				</div> 
				<div>	
					<label for="">Degree</label>	
					<select>
						<option value="Batchelors">Batchelors</option>
						<option value="Masters">Masters</option>  
						<option value="Masters">PhD</option>  
						<option value="Masters">Diploma</option>  
					</select><br>
					<input type="checkbox" name="vehicle" value="Bike">Include Lower Degrees<br>
				</div>
				<br>
				<div>	
					<label for="">Employment Type</label>	
					<br>
					<input type="checkbox" name="vehicle" value="Bike">Full Time<br>
					<input type="checkbox" name="vehicle" value="Bike">Part Time<br>
					<input type="checkbox" name="vehicle" value="Bike">Intern<br>
					<input type="checkbox" name="vehicle" value="Bike">Contract To Hire<br>
				</div><br>
				<div class="form-group float-label-control">  
					<label for="">VISA Sponsorship</label>
					<input type="radio" name="relocate" value="Yes"> Yes
					<input type="radio" name="relocate" value="No"> No
				</div>				                
			</div>
			<div class="submit">
				<center>
					<input class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  name="submit"  value="Create a Search Agent">
				</center>
			</div>
		</div>
	</div>
</form>
					</div>
				</div>
			</div>
        </div>
    </div>