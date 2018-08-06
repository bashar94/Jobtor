<?php
if(isset($_SESSION['username'])){


	if(!$user['doctor'] && $profileid == 'profile'){
		header('Location: ?page=settings&profile=account');
		exit();
	}

	if(isset($_POST['work1'])){
		$work1 = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['work1']));
		$work2 = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['work2']));
		$designation = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['designation']));
		$phone = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['phone']));
		data_update($dbc, 'users', "work1='$work1', work2='$work2', designation='$designation', phone='$phone'", "username='$_SESSION[username]'");

		unset($work1, $work2, $designation, $phone, $_POST);
		header('Location: ?page=settings&profile=profile');
		exit();

	}

	if(isset($_POST['current']) && isset($_POST['password'])){
		$password = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['password']));
		$current = mysqli_real_escape_string($dbc, htmlspecialchars($_POST['current']));
		$date = date('Y-m-d H:i:s');

		$q = "SELECT * FROM users WHERE (email ='$_SESSION[username]' or username ='$_SESSION[username]') AND password = SHA1('$current')";
		$r = mysqli_query($dbc, $q);

		if(mysqli_num_rows($r) == 1){
			data_update($dbc, 'users', "password=SHA1('$password'), pass_change='$date'", "username='$_SESSION[username]'");

			unset($paaword, $current, $data, $q, $r, $_POST);

			session_unset();
			header('Location: ?page=login');
			exit();

		}else{
			unset($paaword, $current, $data, $q, $r, $_POST);
			header('Location: ?page=settings&profile=account&success=false');
			exit();
		}
	}


 if(isset($_FILES['image'])){
    $errors= array();
		$date = date('Y-m-d H:i:s');
    $file_name = sha1($date).'='.$user['username'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
		$img_name = explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($img_name));

    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
       $errors[]="Extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 5000000) {
       $errors[]='File size must be excately 5 MB';
    }

	  if(!getimagesize($file_tmp)){
			 $errors[] = 'Please ensure you are uploading an image.';
	  }

    if(empty($errors)==true) {

			if($file_ext == "jpg" || $file_ext == "jpeg" ){
				$src = imagecreatefromjpeg($file_tmp);
			}elseif($file_ext=="png"){
				$src = imagecreatefrompng($file_tmp);
			}

			list($width,$height)=getimagesize($file_tmp);
			$newwidth=400;
			$newheight=400;
			$tmp=imagecreatetruecolor($newwidth,$newheight);

			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
			$img_path = "uploads/pro_pic/".$file_name.'.'.$file_ext;
			imagejpeg($tmp,$img_path,100);

	 		data_update($dbc, 'users', "pp_url = 'uploads/pro_pic/$file_name.$file_ext'", "username = '$user[username]'");
			$_SESSION['pp_url'] = "uploads/pro_pic/".$file_name.'.'.$file_ext;
			imagedestroy($src);
			imagedestroy($tmp);

			unset($src, $tmp, $img_path, $newwidth, $newheight);
    }
		unset($errors, $date, $file_size, $file_tmp, $file_type, $file_ext, $file_name, $img_name, $extensions, $_FILES);

 }
 $profile = mysqli_fetch_assoc(data_user($dbc, $user['username']));

}else{
	header("Location: page?=login");
}
?>
