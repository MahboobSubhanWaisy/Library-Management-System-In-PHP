<?php
$conn = mysqli_connect("localhost","root","","gu_lib");
$sql = mysqli_query($conn,"select book_id from book where book_id 
order by book_id desc limit 0,1");
$row = mysqli_fetch_row($sql);
$last_id = $row[0];
$last_id = substr($last_id,8,2);
$last_id;
if($last_id<=9){
 $last_id++;
 $last_id = "0".$last_id;
}
else
  $last_id = $last_id+1;
$book_id = "CS"."1"."1".$last_id;
echo $book_id;
?>