<?php
	//is form submitted
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//form was summitted.
		
		//checking whether file was uploaded without error
		if(isset($_FILES['photo']) && is_uploaded_file($_FILES['photo']['tmp_name']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK){
			//file uploaded error free
			
			//display file info
			foreach($_FILES['photo'] as $key => $value){
				echo "$key : $value<br>";
			}
		}else{
			//file not uploaded
			echo "No file uploaded!<br>";
		}
	}else{
		//form not submitted. display form.
?>
<form action="upload-photo.php" method="post" enctype="multipart/form-data">
<label for="File">File:</label>
<input type="file" name="photo">
<input type="submit" value="Upload">
</form>
<?php } //else ends here?>