//here will be connection
 $json = file_ get_  
$obj = jsondecode($json, true); 


$password = $obj['password']; 
$email = $obj['email']; 

$query = "SELECT * FROM user where email = '($email)'"; 
$query_output = mysqli_query($conn, $query); 
$count = mysqli_num_rows($query_output); 

if($count == 1) {
$arr = array("result"=>"email_already_present"); 
echo json_encode($arr); 
}

elseif($count == 0 {

$queryl = "INSERT INTO 'us1r' ('email', 'password', 'username') VALUES ('{$email}', '{$password}')"; 
$query_outputl = mysqli_query($conn, Squeryl);
$arr = array('result'=>'ok'); 
echo json_encode($arr); 
}
else{ $arr = array('result'=>'fail'); 
echo json_encode($arr); 