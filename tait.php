
<?php
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
	$fileName =$_FILES['file']['name'];
	$fileTmpName =$_FILES['file']['tmp_name'];
	$fileSize =$_FILES['file']['size'];
	$fileError =$_FILES['file']['error'];
	$fileTypee =$_FILES['file']['type'];

	$fileExt=explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));


	$format = array('jpg', 'jpeg', 'png', 'pdf');
	if (in_array($fileActualExt, $format)) {
		if ($fileError === 0) {
			if($fileSize < 5000000){
				$filenewname = uniqid('', true).".".$fileActualExt;
				$filedestination = 'dossierimage/'.$filenewname;
				move_uploaded_file($fileTmpName, $filedestination);
				header("Location: test.php/upploadsucceess");
			}
			else {
				echo "fichier trop volumineux !!!";
			}
		}
		else{
			echo "erreur d'upload !!!";
		}
	}
	else{
		echo "muavais format !!!";
	}

}