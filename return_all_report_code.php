<?php
session_start();
require('connection_DB.php');

$from = $_POST['from'];
$section = $_POST['section'];

if(($from == 'book') && ($section == '0')){
    $join = 'SELECT student.stu_id, student.name, student.lastname, book.book_id, book.book_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN student ON student.stu_id = loan.loaner JOIN book ON book.book_id = loan.book_id WHERE loaner_type = 0 AND book_type = "book"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'fasilnama') && ($section == '0')){
    $join = 'SELECT student.stu_id, student.name, student.lastname, fasilnama.fasilnama_id, fasilnama.fasilnama_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN student ON student.stu_id = loan.loaner JOIN fasilnama ON fasilnama.fasilnama_id = loan.book_id WHERE loaner_type = 0 AND book_type = "fasilnama"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'general') && ($section == '0')){
    $join = 'SELECT student.stu_id, student.name, student.lastname, general_book.general_book_id, general_book.book_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN student ON student.stu_id = loan.loaner JOIN general_book ON general_book.general_book_id = loan.book_id WHERE loaner_type = 0 AND book_type = "general"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'rule') && ($section == '0')){
    $join = 'SELECT student.stu_id, student.name, student.lastname, rule_book.r_id, rule_book.book_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN student ON student.stu_id = loan.loaner JOIN rule_book ON rule_book.r_id = loan.book_id WHERE loaner_type = 0 AND book_type = "rule"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'monograph') && ($section == '0')){
    $join = 'SELECT student.stu_id, student.name, student.lastname, monograph.mo_id, monograph.m_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN student ON student.stu_id = loan.loaner JOIN monograph ON monograph.mo_id = loan.book_id WHERE loaner_type = 0 AND book_type = "monograph"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'history') && ($section == '0')){
    $join = 'SELECT student.stu_id, student.name, student.lastname, history_book.hs_id, history_book.book_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN student ON student.stu_id = loan.loaner JOIN history_book ON history_book.hs_id = loan.book_id WHERE loaner_type = 0 AND book_type = "history"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'book') && ($section == '1')){
    $join = 'SELECT teacher.teacher_id, teacher.name, teacher.lastname, book.book_id, book.book_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN teacher ON teacher.teacher_id = loan.loaner JOIN book ON book.book_id = loan.book_id WHERE loaner_type = 1 AND book_type = "book"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'fasilnama') && ($section == '1')){
    $join = 'SELECT teacher.teacher_id, teacher.name, teacher.lastname, fasilnama.fasilnama_id, fasilnama.fasilnama_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN teacher ON teacher.teacher_id = loan.loaner JOIN fasilnama ON fasilnama.fasilnama_id = loan.book_id WHERE loaner_type = 1 AND book_type = "fasilnama"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'general') && ($section == '1')){
    $join = 'SELECT teacher.teacher_id, teacher.name, teacher.lastname, general_book.general_book_id, general_book.book_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN teacher ON teacher.teacher_id = loan.loaner JOIN general_book ON general_book.general_book_id = loan.book_id WHERE loaner_type = 1 AND book_type = "general"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'rule') && ($section == '1')){
    $join = 'SELECT teacher.teacher_id, teacher.name, teacher.lastname, rule_book.r_id, rule_book.book_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN teacher ON teacher.teacher_id = loan.loaner JOIN rule_book ON rule_book.r_id = loan.book_id WHERE loaner_type = 1 AND book_type = "rule"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'monograph') && ($section == '1')){
    $join = 'SELECT teacher.teacher_id, teacher.name, teacher.lastname, monograph.mo_id, monograph.m_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN teacher ON teacher.teacher_id = loan.loaner JOIN monograph ON monograph.mo_id = loan.book_id WHERE loaner_type = 1 AND book_type = "monograph"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'history') && ($section == '1')){
    $join = 'SELECT teacher.teacher_id, teacher.name, teacher.lastname, history_book.hs_id, history_book.book_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN teacher ON teacher.teacher_id = loan.loaner JOIN history_book ON history_book.hs_id = loan.book_id WHERE loaner_type = 1 AND book_type = "history"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'book') && ($section == '2')){
    $join = 'SELECT employee.e_id, employee.name, employee.lastname, book.book_id, book.book_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN employee ON employee.e_id = loan.loaner JOIN book ON book.book_id = loan.book_id WHERE loaner_type = 2 AND book_type = "book"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'fasilnama') && ($section == '2')){
    $join = 'SELECT employee.e_id, employee.name, employee.lastname, fasilnama.fasilnama_id, fasilnama.fasilnama_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN employee ON employee.e_id = loan.loaner JOIN fasilnama ON fasilnama.fasilnama_id = loan.book_id WHERE loaner_type = 2 AND book_type = "fasilnama"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'general') && ($section == '2')){
    $join = 'SELECT employee.e_id, employee.name, employee.lastname, general_book.general_book_id, general_book.book_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN employee ON employee.e_id = loan.loaner JOIN general_book ON general_book.general_book_id = loan.book_id WHERE loaner_type = 2 AND book_type = "general"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'rule') && ($section == '2')){
    $join = 'SELECT employee.e_id, employee.name, employee.lastname, rule_book.r_id, rule_book.book_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN employee ON employee.e_id = loan.loaner JOIN rule_book ON rule_book.r_id = loan.book_id WHERE loaner_type = 2 AND book_type = "rule"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'monograph') && ($section == '2')){
    $join = 'SELECT employee.e_id, employee.name, employee.lastname, monograph.mo_id, monograph.m_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN employee ON employee.e_id = loan.loaner JOIN monograph ON monograph.mo_id = loan.book_id WHERE loaner_type = 2 AND book_type = "monograph"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}else if(($from == 'history') && ($section == '2')){
    $join = 'SELECT employee.e_id, employee.name, employee.lastname, history_book.hs_id, history_book.book_title, loan.loan_date, loan.return_date FROM `loan` 
    JOIN employee ON employee.e_id = loan.loaner JOIN history_book ON history_book.hs_id = loan.book_id WHERE loaner_type = 2 AND book_type = "history"';
    
    $query = mysqli_query($con, $join);
    $reault_array = [];
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row)
        {
            array_push($reault_array, $row);
        }
        echo json_encode($reault_array);
    }else{
        echo mysqli_error($con);
    }
}

?>