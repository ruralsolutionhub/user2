<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "connect.php";
    include "index.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 1250000) {
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs) && isset($_POST['submit']) ) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

                $problem_str = $_POST['problems'];
                $problem_types = implode(',', $problem_str);
                $about_problems = $_POST['problem'];
                // $my_image = $_POST['my_image'];
                $address = $_POST['address'];


				// Insert into Database
				$sql = "insert into `problems`(problem_types,about_problems,my_image,address) 
				        values('$problem_types','$about_problems','$new_img_name','$address')";
				$res = mysqli_query($con, $sql);
                if ($res) {
                    echo "Submitted Successfully";
                    echo '<script>alert("Submitted Successfully")</script>';
                    // header("Location: index.php");
                } else {
                    die(mysqli_error($con));
                }
				// header("Location: index.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: index.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: index.php?error=$em");
	}

}else {
	header("Location: index.php");
}
