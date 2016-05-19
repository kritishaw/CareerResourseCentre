<form action="components/update-profile.php" method="post" enctype="multipart/form-data" id="UploadForm">
    <!-- Nav tabs -->
	
    <ul class="nav nav-tabs">
		<li class="active"><a href="#PrimaryInformation" data-toggle="tab">Primary Information</a></li>
		<li><a href="#resume" data-toggle="tab">Resume</a></li>
		<li><a href="#education" data-toggle="tab">Education</a></li>
		<li><a href="#experience" data-toggle="tab">Experience</a></li>
		<li><a href="#add_info" data-toggle="tab">Additional Info</a></li>
		<li>
			<progress style="margin-top: 0.7em;"  value="<?php echo $rws['p1']+ $rws['p2']+ $rws['p3']+ $rws['p4']+ $rws['p5']; ?>" max="5"></progress>
			<span><?php echo ($rws['p1']+ $rws['p2']+ $rws['p3']+ $rws['p4']+ $rws['p5'])*20; ?>% Complete</span>
		</li>
    </ul>
	
    <!-- Tab panes -->
	</br>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="PrimaryInformation">  
			<div class="form-group float-label-control">                      
				<button type="button" onclick="alert('Hello world!')">in</button>
				<button type="button" onclick="alert('Hello world!')">f</button>
				<label for="">Import Profile from Online Social Network</label>
			</div>   
			<div class="col-md-6">
				<div class="form-group float-label-control">                      
					<label >Name</label><span style="font-weight: bold;color: #e32"> *</span>
					<input type="text" class="form-control" name="user_name" placeholder="<?php echo $rws['user_name'];?>" value="<?php echo $rws['user_name'];?>">
				</div>
				<div class="form-group float-label-control">
					<label for="">Email</label><span style="font-weight: bold;color: #e32"> *</span>
					<input type="text" class="form-control" name="user_email" placeholder="<?php echo $rws['user_email'];?>" value="<?php echo $rws['user_email'];?>">
				</div> 
				<div class="form-group float-label-control">  
					<label for="">Current Address</label><span style="font-weight: bold;color: #e32"> *</span>
					<textarea rows="4"  name="user_currentaddress" placeholder="<?php echo $rws['user_currentaddress'];?>" value="<?php echo $rws['user_currentaddress'];?>"><?php echo $rws['user_currentaddress'];?></textarea>
					&nbsp;&nbsp;&nbsp;
					<label for="">Country</label><span style="font-weight: bold;color: #e32"> *</span>	
					<select name="user_currentcountry" >
						<option value="US" <?php if($rws['user_currentcountry'] == 'US'){echo("selected");}?>>US</option>
						<option value="INDIA" <?php if($rws['user_currentcountry'] == 'INDIA'){echo("selected");}?>>INDIA</option>
						<option value="UK" <?php if($rws['user_currentcountry'] == 'UK'){echo("selected");}?>>UK</option>
						<option value="CANADA" <?php if($rws['user_currentcountry'] == 'CANADA'){echo("selected");}?>>CANADA</option>
					</select>
				</div>
				<div class="form-group float-label-control">  
					<label for="">Gender</label><span style="font-weight: bold;color: #e32"> *</span>
					<input type="radio" name="user_gender" value="male" <?php if($rws['user_gender'] == 'male'){echo("checked");}?>> Male
					<input type="radio" name="user_gender" value="female" <?php if($rws['user_gender'] == 'female'){echo("checked");}?>> Female
				</div>
				<div class="form-group float-label-control">	
					<label for="">Veteran Status</label>	
					<select name="user_veteran" >
						<option value="no" <?php if($rws['user_veteran'] == 'no'){echo("selected");}?>>No. I am not a Veteran</option>
						<option value="yes" <?php if($rws['user_veteran'] == 'yes'){echo("selected");}?>>Yes. I am a Veteran</option>
						<option value="disclose" <?php if($rws['user_veteran'] == 'disclose'){echo("selected");}?>>Do not want to disclose</option>
					</select>
				</div>
			</div>  
			<div class="col-md-6">
				<div class="form-group float-label-control">
					<label >Id</label><span style="font-weight: bold;color: #e32"> *</span>
					<input name="user_ufid" type="text" class="form-control" placeholder="<?php echo $rws['user_ufid'];?>" value="<?php echo $rws['user_ufid'];?>">
				</div>
				<div class="form-group float-label-control">
					<label>Ph No</label>
					<input name="user_phno" type="text" class="form-control" placeholder="<?php echo $rws['user_phno'];?>" value="<?php echo $rws['user_phno'];?>">
				</div>
				<div class="form-group float-label-control">  
					<label>Permanent Address</label>
					<textarea name="user_permanentaddress" rows="4" placeholder="<?php echo $rws['user_permanentaddress'];?>" value="<?php echo $rws['user_permanentaddress'];?>"><?php echo $rws['user_permanentaddress'];?></textarea>
					&nbsp;&nbsp;&nbsp;
					<label >Country</label>	
					<select  name="user_permanentcountry" >
						<option value="US" <?php if($rws['user_permanentcountry'] == 'US'){echo("selected");}?>>US</option>
						<option value="INDIA" <?php if($rws['user_permanentcountry'] == 'INDIA'){echo("selected");}?>>INDIA</option>
						<option value="UK" <?php if($rws['user_permanentcountry'] == 'UK'){echo("selected");}?>>UK</option>
						<option value="CANADA" <?php if($rws['user_permanentcountry'] == 'CANADA'){echo("selected");}?>>CANADA</option>
					</select>
				</div>
				<div class="form-group float-label-control">	
					<label for="">Visa Status</label>	
					<select name="user_visa">
						<option value="F1" <?php if($rws['user_visa'] == 'F1'){echo("selected");}?>>F1</option>
						<option value="F2" <?php if($rws['user_visa'] == 'F2'){echo("selected");}?>>F2</option>
						<option value="G1" <?php if($rws['user_visa'] == 'G1'){echo("selected");}?>>G1</option>
						<option value="G2" <?php if($rws['user_visa'] == 'G2'){echo("selected");}?>>G2</option>
					</select>
				</div> 
				<div class="form-group float-label-control">	
					<label >Disability</label>	
					<select  name="user_disability">
						<option value="no" <?php if($rws['user_disability'] == 'np'){echo("selected");}?>>No. I do not have Disability</option>
						<option value="yes" <?php if($rws['user_disability'] == 'yes'){echo("selected");}?>>Yes. I have a Disability</option>
						<option value="disclose" <?php if($rws['user_disability'] == 'disclose'){echo("selected");}?>>I do not want to disclose</option>
					</select>
				</div>                
			</div>
		</div>
		<div class="tab-pane fade" id="resume">
			<div class="form-group float-label-control">                      
				<div class="form-group float-label-control">
					<label for="">Import Resume from Computer</label>
					<input name="upload" type="submit" class="box" id="upload" value=" Upload ">
				</div>
			<!--<form method="post" enctype="multipart/form-data"> 
					<table width="350" border="0" cellpadding="1" cellspacing="1" class="box"> 
						<tr>  
							<td width="246"> 
								<input type="hidden" name="MAX_FILE_SIZE" value="2000000"> 
								<input name="userfile" type="file" id="userfile">  
							</td> 
							<td width="80">
								<input name="upload" type="submit" class="box" id="upload" value=" Upload ">
							</td> 
						</tr> 
					</table> 
				</form> -->
				<div class="form-group float-label-control">
					<label for="">Enter Resume as Text</label>
					<textarea class="form-control" rows="5" name="user_resume" value="<?php echo $rws['user_resume'];?>"></textarea>
				</div>
			</div>
			<div class="form-group float-label-control">                            
				<div class="form-group float-label-control">
					<label>Import CoverLetter from Computer</label>
					<input name="upload" type="submit" class="box" id="upload" value=" Upload ">
				</div>
					<!--<form method="post" enctype="multipart/form-data"> 
					<table width="350" border="0" cellpadding="1" cellspacing="1" class="box"> 
						<tr>  
							<td width="246"> 
								<input type="hidden" name="MAX_FILE_SIZE" value="2000000"> 
								<input name="userfile" type="file" id="userfile">  
							</td> 
							<td width="80">
								<input name="upload" type="submit" class="box" id="upload" value=" Upload ">
							</td> 
						</tr> 
					</table> 
				</form> -->
				<div class="form-group float-label-control">
					<label>Enter CoverLetter as Text</label>
					<textarea class="form-control" rows="5" name="user_coverletter" value="<?php echo $rws['user_coverletter'];?>"></textarea>
				</div>
			</div>		
		</div>
		<div class="tab-pane fade" id="education">         
			<div class="col-md-6">                    
				<div class="form-group float-label-control">                      
					<label for="">School</label><span style="font-weight: bold;color: #e32"> *</span>
					<input type="text" class="form-control" name="user_school">
				</div>
				<div class="form-group float-label-control">	
					<label for="">Degree</label><span style="font-weight: bold;color: #e32"> *</span></br>	
					<select>
						<option value="Bachelors">Bachelors</option>
						<option value="Masters">Masters</option>  
					</select>
				</div>
				<div class="form-group float-label-control">                      
					<label for="">Grade</label>
					<input type="text" class="form-control">
				</div>
				<div class="form-group float-label-control">
					<label for="">Activities and Societies</label>
					<textarea class="form-control" rows="3" name="activities" placeholder="Write about Activites and societies you were part of" ></textarea>
				</div>
			</div>   
			<div class="col-md-6">
				<div class="form-group float-label-control">                      
					<label for="">Location</label>
					<input type="text" class="form-control" name="user_schlocal">
				</div>
				<div class="form-group float-label-control">  
					<table>
						<tr>
							<th>
								<label for="">Dates Attended</label><span style="font-weight: bold;color: #e32"> *</span>
							</th>
						</tr>
						<tr>
							<td>
								<input id="date1" type="text" size="25" name="user_schoolsdate" placeholder="mm/dd/yyyy">
								<a href="javascript:NewCal('date1','ddmmyyyy')">
									<img src="controllers/form/calendar.png" width="16" height="16" border="0" alt="Pick a date">
								</a>
							</td>
							<td>-</td>
							<td>
								<input id="date2" type="text" size="25" name="user_schooledate" placeholder="mm/dd/yyyy">
								<a href="javascript:NewCal('date2','ddmmyyyy')">
									<img src="controllers/form/calendar.png" width="16" height="16" border="0" alt="Pick a date">
								</a>
							</td>
						</tr>
					</table>
				</div>
				<div class="form-group float-label-control">                      
					<label for="">Field of Study</label><span style="font-weight: bold;color: #e32"> *</span>
					<input type="text" class="form-control">
				</div>
				<div class="form-group float-label-control">
					<label for="">Description</label>
					<textarea class="form-control" rows="3" name="Description" placeholder="Write about Projects, skills, Acheivements, Certifications, Awards" ></textarea>
				</div>
			</div>
			<button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload">+ Add Education</button>
		</div>
		<div class="tab-pane fade" id="experience">         
			<div class="col-md-6">
				<div class="form-group float-label-control">                      
					<div class="form-group float-label-control">                      
						<label for="">Company Name</label><span style="font-weight: bold;color: #e32"> *</span>
						<input type="text" class="form-control">
					</div>
					<div class="form-group float-label-control">
						<label for="">Location</label> 
						<input type="text" class="form-control">
					</div> 
					<div class="form-group float-label-control">
						<label for="">Title</label><span style="font-weight: bold;color: #e32"> *</span>
						<input type="text" class="form-control">
					</div> 
					<div class="form-group float-label-control">  
						<table>
							<tr>
								<td><label for="">Time Period</label><span style="font-weight: bold;color: #e32"> *</span></td>
								<tr><td><input id="demo1" type="text" size="25" placeholder="mm/dd/yyyy"><a href="javascript:NewCal('demo1','ddmmyyyy')"><img src="controllers/form/calendar.png" width="16" height="16" border="0" alt="Pick a date"></a></td><td>-</td><td><input id="demo1" type="text" size="25" placeholder="mm/dd/yyyy"><a href="javascript:NewCal('demo1','ddmmyyyy')"><img src="controllers/form/calendar.png" width="16" height="16" border="0" alt="Pick a date"></a></td>
							</tr>
						</table>
					</div>	
				</div>
			</div> 
			<div class="col-md-6">
				<div class="form-group float-label-control">                      
					<div class="form-group float-label-control">
						<label for="">Description</label>
						<textarea class="form-control" rows="9" name="user_shortbio" ></textarea>
					</div>
				</div>
			</div>
			<button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />+ Add Position</button>
		</div>
		<div class="tab-pane fade" id="add_info">
			<div class="col-md-12">
				<div>	
					<label for="">Languages</label>	
					<select>
						<option value="English">English</option>
						<option value="French">French</option>
						<option value="German">German</option>
						<option value="Chinese">Chinese</option>
					</select>
				</div>
				<div class="form-group float-label-control">  
					<label for="">Relocation Preference</label><span style="font-weight: bold;color: #e32"> *</span>
					<input type="radio" name="relocate" value="Yes"> Yes
					<input type="radio" name="relocate" value="No"> No
				</div>	
			</div>
		</div>
	</div>	 
	<br>
	<div class="submit">
		<center>
			<input class="btn btn-primary ladda-button" data-style="zoom-in"  name="cancel"  onclick="window.location='/CareerResourceCentre/edit-profile.php'" value="RESET"></input>
			<input class="btn btn-primary ladda-button" data-style="zoom-in"  name="cancel"  onclick="window.location='/CareerResourceCentre/home.php'" value="CANCEL"></input>
			<button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  name="submit"  value="SAVE CHANGES">SAVE CHANGES</button>
		</center>
	</div>
</form>