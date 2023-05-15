<?php 

if (isset($_POST['submit'])) {

        $conn  = mysqli_connect("localhost", "akinokib_sarfas", "Hacker@89", "akinokib_yash");
	$title=$des=" ";

	// $title=$_POST['title'];
	// $des=$_POST['des'];
	session_start();
	$image=$_SESSION['image'];
				// create table if not exist
				$query="CREATE TABLE IF NOT EXISTS admintable(id INT AUTO_INCREMENT primary key NOT NULL,
				title VARCHAR(100),
				des VARCHAR(100),
				image_url VARCHAR(255));";
				mysqli_query($conn, $query);

				// Insert into Database
				$sql = "INSERT INTO admintable(title,des,image_url) 
				        VALUES('title','des','$image')";
				mysqli_query($conn, $sql);
				header("Location: ../table.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: ../add-table.php?error=$em");
	header("Location: ../add_table.php");
}