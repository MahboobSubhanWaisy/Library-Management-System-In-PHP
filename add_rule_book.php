<?php
if(!isset($_SESSION)){
  session_start();
}
  include 'connection_DB.php';
     if(isset($_POST["Import"])){
        
        $filename=$_FILES["file"]["tmp_name"];    
         if($_FILES["file"]["size"] > 0)
         {
            $file = fopen($filename, "r");
			
              while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
               {
                 $sql = "INSERT INTO `rule_book`(`r_id`, `book_title`, `Author`, `Translator`, `publish_place`, `publisher`, `publish_year`, `volume`, `book_edition`, `page`, `b_c_id`, `copy`, `created_at`) VALUES ('".$getData[0]."','".$getData[1]."' ,'".$getData[2]."' ,'".$getData[3]."' ,'".$getData[4]."' ,'".$getData[5]."','".$getData[6]."','".$getData[7]."' ,'".$getData[8]."' ,'".$getData[9]."', '".$getData[10]."', '".$getData[11]."',NOW())";
                       $result = mysqli_query($con, $sql);
            if(!isset($result))
            {
              echo "<script type=\"text/javascript\">
                  alert(\"Invalid File:Please Upload CSV File.\");
                  window.location = \"manage_rule.php\"
                  </script>";    
            }
            else {
                echo "<script type=\"text/javascript\">
                alert(\"CSV File has been successfully Imported.\");
                window.location = \"manage_rule.php\"
              </script>";
            }
               }
          
               fclose($file);  
         }
      }   
	     if(isset($_POST["Export"])){
         
          header('Content-Type: text/csv; charset=utf-8');  
          header('Content-Disposition: attachment; filename=rule_book.csv');  
          $output = fopen("php://output", "w");  
		 
          fputcsv($output, array('r_id', 'book_title', 'Author', 'Translator', 'publish_place' ,'publisher' , 'publish_year' , 'volume','book_edition','page','b_c_id','copy','created_at'));  
          $query = "SELECT * from rule_book ORDER BY r_id DESC";  
          $result = mysqli_query($con, $query);  
          while($row = mysqli_fetch_assoc($result))  
          {  
               fputcsv($output, $row);  
          }  
          fclose($output);  
     }  
?>



<?php
include 'connection_DB.php';
if (isset($_POST['rule-btn'])) {
    
    $book_id = $_POST['rule_id'];
    $title = $_POST['book_title'];
    $author = $_POST['author'];
    $translator = $_POST['translator'];
    $publish_place = $_POST['publish_place'];
    $publisher= $_POST['publisher'];
    $publish_year = $_POST['publish_year'];
    $volume = $_POST['volume'];
    $book_edition = $_POST['book_edition'];
    $page = $_POST['page'];
    $copy = $_POST['copy'];
    $case_id = $_POST['case_id'];
    $row = $_POST['row'];
    $column = $_POST['column'];
    
    
    $check_sql = mysqli_query($con, 'SELECT r_id FROM rule_book LIMIT 0,1');
    $num_row = mysqli_num_rows($check_sql);
    $newId = 0;
    if($num_row > 0){
        $case_check = mysqli_query($con, 'SELECT r_id FROM rule_book INNER JOIN book_case ON rule_book.b_c_id = book_case.b_c_id 
        WHERE book_case.book_case_id ="'.$case_id.'" ORDER BY(r_id) DESC LIMIT 0,1');
        $num_row_data = mysqli_num_rows($case_check);
        if($num_row_data > 0){
            while($row3 = mysqli_fetch_assoc($case_check)){
                $last_id = $row3['r_id'];
                $string2 = (string)$last_id;
                $digit = substr($string2,8, 4);
                if($digit <= 8){
                    $digit += 1;
                    $newId = $book_id.'000'.$digit;
                }else if($digit <= 98){
                    $digit += 1;
                    $newId = $book_id.'00'.$digit;
                }else if($digit <= 998){
                    $digit += 1;
                    $newId = $book_id.'0'.$digit;
                }else{
                    $digit++;
                    $newId = $book_id.$digit;
                }
            }
        }else{
            $newId = $book_id . '0001';
        }
    }else{
        $newId = $book_id . '0001';
    }
    
    
    $res = mysqli_query($con, 'SELECT b_c_id FROM book_case WHERE book_case_id = "'.$case_id.'" AND c_row = "'.$row.'" AND c_column = "'.$column.'"');
    $b_c_id = 0;
    while($row2 = mysqli_fetch_assoc($res)){
        $b_c_id = $row2['b_c_id'];
        echo $b_c_id;
    }

    $sql = "INSERT INTO rule_book(`r_id`,`book_title`, `Author`, `Translator`, `publish_place`, `publisher`, `publish_year`, `volume`, `book_edition`, `page`, `b_c_id`, `copy`, `created_at`)
    VALUES ('$newId','$title',' $author','$translator','$publish_place',' $publisher','$publish_year',' $volume',' $book_edition','$page','$b_c_id','$copy',NOW())";
    $query = mysqli_query($con,$sql);
    if($query){
    header("location:add_book.php?Data_Inserted");
    $_SESSION['response']="Data Saved Success!";
    $_SESSION['res_type']="success";
    }else{ 
        echo mysqli_error($con);
    }
}


if (isset($_POST['delete_btn_set'])) {
        
    $del_id = $_POST['delete_id'];
    $q = "DELETE FROM rule_book WHERE r_id = '$del_id'";
    $query = mysqli_query($con,$q);
    if ($query) {
        # code...
        echo "delete";
    }else{
        echo "filed";
    }
}

// edit
if (isset($_POST['r_update'])) {
    $r_id = $_POST['r_id'];
     $book_title = $_POST['book_title'];
     $Author = $_POST['Author'];
     $Translator = $_POST['Translator'];
     $publish_place = $_POST['publish_place'];
     $publisher = $_POST['publisher'];
     $publish_year = $_POST['publish_year'];
     $volume = $_POST['volume'];
     $book_edition = $_POST['book_edition'];
     $page = $_POST['page'];
     $b_c_id = $_POST['b_c_id'];
     $copy = $_POST['copy'];
     
     $query_edit = "UPDATE `rule_book` SET `book_title`='$book_title',`Author`='$Author',`Translator`='$Translator',`publish_place`='$publish_place',`publisher`='$publisher',`publish_year`='$publish_year',`volume`='$volume',`book_edition`='$book_edition',`page`='$page',`b_c_id`='$b_c_id',`copy`='$copy' WHERE r_id = '$r_id'";
     $result_set = mysqli_query($con,$query_edit);
   
     if ($result_set) {
       # code...
       header("location:manage_rule?Data_updated");
       $_SESSION['response']="Data Updated Success!";
       $_SESSION['res_type']="success";
   
       //echo "data update it.";
     }else {
       # code...
       header("location:manage_rule?somting wrong updating");
       $_SESSION['response']="Hopes! Somting Wrong Data Cant Update Success!";
       $_SESSION['res_type']="success";
   
       //echo "data cant update it.!";
     }
   
     # code...
   
    
   }
 
 // end

?>