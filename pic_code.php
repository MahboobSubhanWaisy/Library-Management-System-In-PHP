<?php
 session_start();
include 'connection_DB.php';
if (isset($_POST['done'])) {
    $img_name = $_FILES['file']['name'];
	$img_size = $_FILES['file']['size'];
	$img_type = pathinfo($img_name,PATHINFO_EXTENSION);
	$img_tmp_name = $_FILES['file']['tmp_name'];
    
	
	$uploadok=0;
	if(file_exists('gu_pic/'.$img_name)){
		 header("location:pic.php?already_data_exists");
			$uploadok=-1;
	}
	if($img_size >=6291456){
		 header("location:pic?image_is_too_large");
			$uploadok=-1;
	}
	if($img_type !="jpg" && $img_type !="jpeg" && $img_type !="png"){
		  header("location:pic?invalid_data");
			$uploadok=-1;
	}
	if($uploadok==0){
        move_uploaded_file($img_tmp_name,"gu_pic/".$img_name);
		 $sql = "INSERT INTO `gu_images`(`photo`) VALUES ('$img_name')";
    $query = mysqli_query($con,$sql);
  
	} 
	  if($query){
        header("location:pic?Data_Inserted");
        $_SESSION['response']="Data Saved Success!";
        $_SESSION['res_type']="success";
    }else{
		header("location:pic?photo cant insert on system");
        $_SESSION['response']="Sorry! the system cant insert data  plase slect avaliable data.";
        $_SESSION['res_type']="success";
    //   echo "faild";
    }
	
   
}

?>
