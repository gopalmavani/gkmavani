<?php 
$data = $_POST;
if ($data){
$message = "name =".$data['name'].'<br>email = '.$data['email'].'<br>Subject = '.$data['subject'].'<br>Message = '.$data['message'];
	mail('gopalmavani3@gmail.com', $data['subject'],$message);
	echo "OK";
}else{
	echo "OK";
}
?>