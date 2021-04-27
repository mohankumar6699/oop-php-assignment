<?php
// connecting the database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//we will get id from url
$id = $crud->escape_string($_GET['id']);

//we can display details of specific id
$result = $crud->getData("SELECT * FROM conatct WHERE id=$id");
//displays the folowing details of searched id
foreach ($result as $res) {
	
	$Email = $res['Email'];
	$Name = $res['Name'];
	$Subject = $res['Subject'];
	$Message = $res['Message'];
	
}
?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update User's Data</h2>
						<div class="box-icon">
							<a href="users.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_data.php">
							<fieldset>
							  
							  
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Email" id="focusedInput" type="text" placeholder="Email" 
								  value="<?php echo $res['Email']; ?>">
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Name" id="focusedInput" type="text" placeholder="Name"
								  value="<?php echo $res['Name']; ?>">
								</div>
								</div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Subject:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Subject" id="focusedInput" type="text" placeholder="Subject"
								  value="<?php echo $res['Subject']; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Message:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="Message" id="focusedInput" type="text" placeholder="Message"
								  value="<?php echo $res['Message']; ?>">
								</div>
							  </div>
							
							  
							 <tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?> ></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
							</fieldset>
						</form>
					
					</div>
				</div>
			
			</div>
			

	