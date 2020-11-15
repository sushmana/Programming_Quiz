       - - -  check.php  - - - 


<?php 
session_start();
if (!isset($_SESSION['username'])){
	   header('location:login.php');
	}
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'bsc_lab');

if(isset($_POST['submit'])){
 if(!empty($_POST['checkquiz'])){
$count = count($_POST[checkquiz']);
echo "out of 5, you have selected ".$count. " options";
$result = 0;
$i = 1;
$selected = $_POST['checkquiz'];
print_r($selected);

$q = "select * from questions";
$query = mysqli_query($con, $q);
while($rows = mysqli_fetch_array($query) ){
print_r($rows[ans_id']);
$checked = $rows['ans_id'] = $selected[$i];
if($checked){
$result++;


}
$i++
}
echo "<br> your total score is ".$result;

?>


 ?>

