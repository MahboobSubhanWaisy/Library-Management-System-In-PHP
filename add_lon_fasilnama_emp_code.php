<?php 
    session_start();
    require('connection_DB.php');
    if(isset($_POST['submit-book-btn'])){
        $bb_id = $_POST['fasilnama-id'];
        $employee_id = $_POST['emp-id'];
        $loan_date = $_POST['loan-date'];
        $return_date = $_POST['return-date'];
        $book_type = $_POST['book-type'];

        $check_copy = mysqli_query($con, 'SELECT copy FROM fasilnama WHERE fasilnama_id = '.$bb_id.'');
        $row = mysqli_fetch_array($check_copy);
        $old_copy_number = $row[0];
        if($old_copy_number > 0){
            $new_copy = ($old_copy_number - 1);
            $update_copy = mysqli_query($con, "UPDATE fasilnama SET `copy` = '$new_copy' WHERE fasilnama_id = '$bb_id'");
            if($update_copy){
                $query = mysqli_query($con, "INSERT INTO loan(`loan_date`, `return_date`, `loan_status`, `loaner`, `loaner_type`, `book_id`, `book_type`)
                VALUES ('$loan_date', '$return_date', '0', '$employee_id', '2', '$bb_id', '$book_type')");
                
                if($query){
                    header('location: add_lon_employee.php');
                }else{
                    echo mysqli_error($con);
                } 
            }else{
                echo mysqli_error($con);
            }
        }  else{
            echo 'This book has not avaliable';
        } 
     }
?>




