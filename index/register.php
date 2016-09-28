<?php

session_start();
$name = $_POST['name'];
list($first_name, $last_name) = explode(" ", $name);
$tel = $_POST['tel'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$pincode = $_POST['pincode'];

$array_field = array(
	"`user_login`" 			=> "'".$username."'",
	"`user_email`" 			=> "'".$email."'",
	"`user_password`" 		=> "'".sha1($password)."'",
	"`user_name`" 				=> "'".$first_name."'",
	"`user_surname`" 			=> "'".$last_name."'",
	"`user_telephone`" 		=> "'".$tel ."'",
	"`imageprofile_path`" 	=> "'/media/images/member/default/default.jpg'",
	"`level_id`" 				=> "'2'",
	"`user_type`" 				=> "'openhouse'",
	"`subscribe`" 				=> "'1'"
);

$add_register_data = DB::mbook()->insertData("`users`", $array_field);

if ($add_register_data) {

	$get_user_id = DB::mbook()->getInsertId();
	$payment = array( 
		"`user_id`" 		=> "'".$get_user_id."'", 
		"`package_id`" 	=> "'27'",
		"`date_register`" => "'".date("Y-m-d H:i:s")."'", 
		"`operation_id`" 	=> "'13'", 
		"`date_start`" 	=> "'".date("Y-m-d H:i:s")."'",
		"`date_expire`" 	=> "'".date("Y-m-d H:i:s", strtotime("+30 day", strtotime(date("Y-m-d H:i:s"))))."'", 
		"`status_paid`" 	=> '1'
	);

	$add_payment = DB::mbook()->insertData("`payment`", $payment);

	// $username = "chiwin.bw@gmail.com";
	// $password = "789963321";

	$login = "SELECT users.user_id,users.user_name,users.user_login,users.user_surname,users.user_operator,users.user_password,users.user_birthday,users.user_address,users.user_email,users.user_gender,users.user_telephone,users.level_id,users.subscribe,
	case when instr(imageprofile_path,'media/images/member/') != 0 THEN  concat('https://www.mbookstore.com/',imageprofile_path)  else imageprofile_path end as imageprofile_path,users.update_date,users.user_type FROM users  WHERE  user_login = '".$username."' and user_password = '".sha1($password)."' ";

	$user_login = DB::mbook()->query($login);

	if (!empty($user_login)) {

		$members_login['members_id'] 					= $user_login[0]['user_id'];
		$members_login['user_login'] 					= $user_login[0]['user_login'];
		$members_login['members_name'] 				= $user_login[0]['user_name'];
		$members_login['members_surname'] 			= $user_login[0]['user_surname'];
		$members_login['members_email'] 				= $user_login[0]['user_email'];
		$members_login['members_type'] 				= $user_login[0]['user_type'];
		$members_login['imageprofile_path'] 		= $user_login[0]['imageprofile_path'];
		$members_login['members_user_gender'] 		= $user_login[0]['user_gender'];
		$members_login['members_user_telephone'] 	= $user_login[0]['user_telephone'];
		$members_login['members_user_operator'] 	= $user_login[0]['user_operator'];
		$members_login['members_user_birthday'] 	= $user_login[0]['user_birthday'];
		$members_login['members_user_address'] 	= $user_login[0]['user_address'];

		$payment = "SELECT  payment.*,DATEDIFF(date_expire,NOW()) as days FROM  payment  where user_id = '".$user_login[0]['user_id']."' AND status_paid = '1' AND  date_start <= NOW() AND date_expire >= NOW()";
		$pay = DB::mbook()->query($payment);

		if ($pay[0]['user_id']) {
			$_SESSION['payment'] = true;
			$_SESSION['date_expire'] = $pay[0]['date_expire'];
			$_SESSION['days'] = $pay[0]['days'];
		} else {
			$_SESSION['payment'] = false;
		}

		$_SESSION['member_verify'] 				= true;
		$_SESSION['fb_login'] 						= false;
		$_SESSION['member_id'] 						= $members_login['members_id'];
		$_SESSION['user_login'] 					= $members_login['user_login'];
		$_SESSION['member_name'] 					= $members_login['members_name'];
		$_SESSION['member_surname'] 				= $members_login['members_surname'];
		$_SESSION['member_email'] 					= $members_login['members_email'];
		$_SESSION['member_type'] 					= $members_login['members_type'];
		$_SESSION['imageprofile_path'] 			= $members_login['imageprofile_path'];
		$_SESSION['members_user_gender'] 		= $members_login['members_user_gender'];
		$_SESSION['members_user_telephone'] 	= $members_login['members_user_telephone'];
		$_SESSION['members_user_operator'] 		= $members_login['members_user_operator'];
		$_SESSION['members_user_birthday'] 		= $members_login['members_user_birthday'];
		$_SESSION['members_user_address'] 		= $members_login['members_user_address'];

		$num = mt_rand(100000000,999999999);
		$characters_string = generateRandomStringChar();
		$s =  $num.$characters_string;
		$mcode_travel = str_shuffle($s);
		$mcard_array = array(
			"`code`" => "'".$mcode_travel."'",
			"`package_id`" => "'15'",
			"`user_id`" => "'".$user_login[0]['user_id']."'",
			"`status`" => "'1'",
		);

		$add_mcard = DB::mbook()->insertData("`mcard`", $mcard_array);
		$travel_code = base64_encode($mcode_travel."-mBookStores");

		$update_status['status'] = "'1'";
		$update_status['user_id'] = "'".$members_login['members_id']."'";
		$set_where_code = "`code`='".$pincode."' ";
		$code_update = DB::mbook()->updateData("`mcard`", $update_status, $set_where_code);

		//---------------------------------------------------- register doonung -----------------------------------------------------//

		$parameter = "username=$username&email=$email@gmail.com&password=$password&name=$name&mobile=$tel&customer_type=mbook&package_id=34";
		$userAgent=$_SERVER['HTTP_USER_AGENT'];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"http://www.monomaxxx.com/api/register_mbook");
		curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$parameter);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec ($ch);
		curl_close ($ch);

		$user_doonung = json_decode($server_output);

		if ($user_doonung->status == "success") {

			$url_set = "http://www.monomaxxx.com/api/set_authen?name=".$user_doonung->authen->name."&sig=".$user_doonung->authen->sig."&expire_time=".$user_doonung->authen->expire_time;
			$_SESSION['url_set'] = $url_set;

		}

		header( "location: http://www.mbookstore.com/tmb/detail/".$travel_code);
	} else {
		header( "location: http://www.mbookstore.com/tmb");
		exit(0);
	}

}

function generateRandomStringChar($length = 3) {

	$characters = 'ABCDEFGHJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

?>