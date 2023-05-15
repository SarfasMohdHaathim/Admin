<?php 

if (isset($_POST['submit'])) {

        $conn  = mysqli_connect("localhost", "akinokib_sarfas", "Hacker@89", "akinokib_yash");
	$title=$des=" ";

	// $title=$_POST['title'];
	// $des=$_POST['des'];
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 1250000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: add_table.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				
				$new_img_name = uniqid("table-", true).'.'.$img_ex_lc;
				$img_upload_path = '../uploads/table/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				// create table if not exist
				$query="CREATE TABLE IF NOT EXISTS admintable(id INT AUTO_INCREMENT primary key NOT NULL,
				title VARCHAR(100),
				des VARCHAR(100),
				image_url VARCHAR(255));";
				mysqli_query($conn, $query);

				// Insert into Database
				$sql = "INSERT INTO admintable(title,des,image_url) 
				        VALUES('title','des','$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: ../table.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: ../add-table.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: ../add-table.php?error=$em");
	}

}else {
	header("Location: ../add_table.php");
}