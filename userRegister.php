<?php

	$username = $_POST["user"];
	$password = $_POST["pass"];
// 	$db = array();
// 	echo "<br>Đã đăng kí thành công tài khoản $username<br>";
// 	$file = fopen("users.json","a") or die("can't open file!");
// 	$arr = array(userName=>$username , password=>$password);
// 	$save_json = json_encode($arr);
// 	 // fwrite($file, ",");

// 	 fwrite($file, $save_json);
// 	// fwrite($file, ",");
// file_put_contents('user.json', $save_json);
// 	fclose($file);
	   $myFile = "users.json";
   		$arr_data = array(); // create empty array

  {
	   //Get form data
	   $formdata = array(
	      'username'=> $_POST['user'],
	      'password'=> $_POST['pass']
	   );

	   // var_dump($formdata);
	   //Get data from existing json file
	   $jsondata = file_get_contents($myFile);

	   // converts json data into array
	   $arr_data = json_decode($jsondata, true);

	   // Push user data to array
	   array_push($arr_data, $formdata);

       //Convert updated array to JSON
	   $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents($myFile, $jsondata)) {
	        echo 'Bạn đã đăng ký thành công tài khoản';
	    }
	   else 
	        echo "Lỗi";

   }

?>	