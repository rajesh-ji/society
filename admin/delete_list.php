<?php 
	if(isset($_POST['mgs'])){
		include('include/config.php');
   		 extract($_POST);
		$userid = $_POST['delete_id'];

		$query = "delete from areas where id= '$userid' ";
		$result = mysqli_query($conn, $query);

		$query = "delete from advertisement where id= '$userid' ";
		$result = mysqli_query($conn, $query);

		$query = "delete from event where id= '$userid' ";
		$result = mysqli_query($conn, $query);

		$query = "delete from blood_doner where id= '$userid' ";
		$result = mysqli_query($conn, $query);

		$query = "delete from tbl_user where id= '$userid' ";
		$result = mysqli_query($conn, $query);

		$query = "delete from ad_page where id= '$userid' ";
		$result = mysqli_query($conn, $query);

		$query = "delete from blog where id= '$userid' ";
		$result = mysqli_query($conn, $query);

		$query = "delete from pages where id= '$userid' ";
		$result = mysqli_query($conn, $query);

	}
?>