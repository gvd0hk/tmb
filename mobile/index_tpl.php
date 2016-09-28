<!DOCTYPE html PUBLIC>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ลงทะเบียน เพื่อรับสิทธิ์ดูหนัง อ่านหนังสือฟรี 30 วัน</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="stylesheet" type="text/css" href="<?=$conf['assets_url']?>css/build.css">
	<link rel="stylesheet" type="text/css" href="<?=$conf['assets_url']?>Font-Awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=$conf['assets_url']?>css/m_style.css">
	<link rel="stylesheet" type="text/css" href="http://www.mbookstore.com/assets/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">	
</head>
<body>

	<div id="container">
		<div class="content">
			<div class="banner-top">
				<img src="<?=$conf['assets_url']?>images/landingpage_openhouse_M_header.png">
				<div class="clear"></div>
			</div>
			<div class="box-register" id="box-register">
				<h2 style="color:#585858;margin-top: 5px;">ลงทะเบียน </h2><small style="color:#585858;">เพื่อรับสิทธิ์ อ่านหนังสือ - ดูหนัง ฟรี 30 วัน</small>
				<div class="form-register">
					<form action="" method="POST" id="form-register" class="form-horizontal" >
						<div class="form-group ">
							<label for="username" class="label_register control-label col-sm-4">ชื่อ-นามสกุล</label>
							<div class="col-sm-8">
								<input type="text" name="name" id="name" class="zocial-dribbble" placeholder="ชื่อ-นามสกุล">
							</div>
						</div>
						<div class="form-group">
							<label class="label_register control-label col-sm-4">เบอร์โทรศัพท์</label>
							<div class="col-sm-8">
								<input type="text" name="tel" id="tel" placeholder="เบอร์โทรศัพท์" value="">
							</div>
						</div>
						<div class="form-group">
							<label class="label_register control-label col-sm-4">E-mail</label>
							<div class="col-sm-8">
								<input type="text" name="email" id="email" placeholder="E-mail" value="">
							</div>
						</div>
						<div class="form-group">
							<label class="label_register control-label col-sm-4">Username</label>
							<div class="col-sm-8">
								<input type="text" name="username" id= "username" placeholder="Username" value="">
							</div>
						</div>
						<div class="form-group">
							<label class="label_register control-label col-sm-4">Password</label>
							<div class="col-sm-8">
								<input type="password" name="password" id="password" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<label class="label_register control-label col-sm-4">Pincode</label>
							<div class="col-sm-8">
								<input type="text" name="pincode" placeholder="Pincode">
							</div>
						</div>
						<div class="form-group">
							<center>
							<div class="btn-group" role="group" aria-label="...">
								<button type="submit" class="btn btn-default" id="btn-register">Register</button>
								<button type="reset" class="btn btn-default" id="btn-reset">Reset</button>
							</div>
							</center>
						</div>
					</form>
			 	</div> 
			</div>
		</div>
	</div>
	<div id="copy">
		All rights reserved by Mono Group. 
		<img src="<?=$conf['assets_url']?>images/logo-mono.png">
	</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="http://www.mbookstore.com/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=$conf['assets_url']?>js/jquery.validate.min.js"></script>
<script type="text/javascript">
		
	$("#form-register").validate({
		rules: {
			name: {
				required: true,
				minlength: 2
			},
			tel:{
				required: true,
				number: true,
				minlength: 10,
				remote: {
					url:"http://www.mbookstore.com/code-tel",
					type : "POST"
				}
			},
			email:{
				required: true,
				email:true,
				remote: {
					url: "http://www.mbookstore.com/code-email",
					type: "post"
				}
			},
			username:{
				required: true,
				minlength: 5,
				remote: {
					url: "http://www.mbookstore.com/code-user",
					type: "post"
				}
			},
			password:{
				required: true,
				minlength: 6,
			},
			pincode:{
				required: true,
				minlength: 12,
				remote: {
					url: "http://www.mbookstore.com/code-pincode",
					type: "post"
				}
			},

		},
		messages: {
			name: {
				required: "กรอก ชื่อ-นามสกุล",
				minlength: jQuery.validator.format("กรอก ชื่อ-นามสกุล มากกว่า 2 ตัวอักษร")
			},
			tel: {
				required : "กรอก เบอร์โทรศัพท์",
				number   : "กรอก เบอร์โทรศัพท์ ไม่ถูกต้อง",
				minlength    : jQuery.validator.format("กรอก เบอร์โทรศัพท์ 10 หมายเลข"),
				remote: "เบอร์โทรศัพท์ มีการใช้งานแล้ว"
			},
			email: {
				required : "กรอก อีเมล",
				email   : "กรอก อีเมล ไม่ถูกต้อง",
				remote: "อีเมล มีการใช้งานแล้ว"
			},
			username: {
				required : "กรอก ชื่อผู้ใช้งาน",
				minlength : jQuery.validator.format("กรอก ชื่อผู้ใช้งาน มากกว่า 5 ตัวอักษร"),
				remote: "ชื่อผู้ใช้งาน มีการใช้งานแล้ว"
			},
			password: {
				required : "กรอก รหัสผ่าน",
				minlength : jQuery.validator.format("กรอก รหัสผ่าน มากกว่า 6 ตัวอักษร"),
			},
			pincode: {
				required : "กรอก Pincode",
				minlength : jQuery.validator.format("กรอก Pincode 12 ตัวอักษร"),
				remote: "Pincode ไม่ถูกต้อง"
			},
		},

		submitHandler: function() { 				
			var name = document.getElementById("name").value;
			var tel = document.getElementById("tel").value;
			var email = document.getElementById("email").value;
			var username = document.getElementById("username").value;
			var password = document.getElementById("tel").value;
 
			$.post("http://www.mbookstore.com/code-register", {
				name: name,tel:tel , email:email , username:username , password:password , params: "register-mbook"
			}, function(response) {  
				document.getElementById("box-register").innerHTML= response;
			});
		}
	 
	});

	$( "input[type=checkbox]" ).on( "click", function() {

		var choices = [];
		var els = document.getElementsByName('book');
		for (var i=0;i<els.length;i++) {
			if ( els[i].checked ) {
				choices.push(els[i].value);     
			}
		}

		$.post("http://www.mbookstore.com/code-category", {
			category: choices,
			params: "book",
		}, function(response){
			document.getElementById("book").innerHTML= response;
		});

	});

	function finishAjax(id, response) {	 
		$('#'+id).html(unescape(response));
		$('#'+id).fadeIn(1000);
	} 

</script>

</body>
</html>