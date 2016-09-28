<!DOCTYPE html PUBLIC>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ลงทะเบียน เพื่อรับสิทธิ์ดูหนัง อ่านหนังสือฟรี 30 วัน</title>
	<link rel="stylesheet" type="text/css" href="<?=$conf['assets_url']?>css/build.css">
	<link rel="stylesheet" type="text/css" href="<?=$conf['assets_url']?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=$conf['assets_url']?>font-awesome/css/font-awesome.min.css">	
	<link rel="stylesheet" type="text/css" href="<?=$conf['assets_url']?>bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">	
</head>
<body>

	<div class="content">
		<div class="box-banner"></div>
		<div class="box-form" id="box-form">
			<div class="header-form">ลงทะเบียน
				<font class="sub-header-form">(เพื่อรับสิทธิ์ อ่านหนังสือ - ดูหนัง ฟรี 30 วัน)</font>
			</div>		
			
			<!-- Form Register -->			

			<div class="form-register">
				<form action="" method="post" id="form-register" class="form-horizontal">
					<div class="col-xs-12 col-sm-8 col-md-6 col-md-offset-3 col-sm-offset-2">					
						<div class="form-group ">
							<label for="username" class="label_register control-label col-sm-4 col-xs-12">ชื่อ-นามสกุล</label>
							<div class="col-sm-8 col-xs-12">
								<input type="text" name="name" id="name" placeholder="ชื่อ-นามสกุล">
							</div>
						</div>
						<div class="form-group">
							<label class="label_register control-label col-sm-4 col-xs-12">เบอร์โทรศัพท์</label>
							<div class="col-sm-8 col-xs-12">
								<input type="text" name="tel" id="tel" placeholder="เบอร์โทรศัพท์" value="" maxlength="10" onkeypress="return isNumber(event)">
							</div>
						</div>
						<div class="form-group">
							<label class="label_register control-label col-sm-4 col-xs-6">E-mail</label>
							<div class="col-sm-8 col-xs-12">
								<input type="text" name="email" id="email" placeholder="E-mail" value="">
							</div>
						</div>
						<div class="form-group">
							<label class="label_register control-label col-sm-4 col-xs-6">Username</label>
							<div class="col-sm-8 col-xs-12">
								<input type="text" name="username" id= "username" placeholder="Username" value="">
							</div>
						</div>
						<div class="form-group">
							<label class="label_register control-label col-sm-4 col-xs-6">Password</label>
							<div class="col-sm-8 col-xs-12">
								<input type="password" name="password" id="password" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<label class="label_register control-label col-sm-4 col-xs-6">Pincode</label>
							<div class="col-sm-8 col-xs-12">
								<input type="text" name="pincode" id="pincode" placeholder="Pincode">
							</div>
						</div>
					</div>
					<center>
						<div class="col-xs-12 col-sm-8 col-md-6 col-md-offset-3 col-sm-offset-2 col-xs-offset-0 gsm-btn">
							<button type="reset" class="btn btn-default" id="btn-reset">Reset</button>
							<button type="submit" class="btn btn-default" id="btn-submit">Register</button>							
						</div>
					</center>
				</form>
			</div>			
		</div>

		<div class="clear"></div>
		<hr class="hr">

		<!-- Banner Doonung & Mbookstore -->

		<div class="box-maxxbook">
			<img src="<?=$conf['assets_url']?>img/header.png">
			<div class="clear"></div>
		</div>
		
		<!-- Chose Option Gift -->		

		<div class="box-option">
			<div class="col-md-6 book">
				<h3><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="20px" viewBox="0 0 50 35" enable-background="new 0 0 50 35" xml:space="preserve">
					<path fill-rule="evenodd" clip-rule="evenodd" fill="#0078C0" d="M43.001,0h-8.162c-4.291,0-7.896,1.247-9.919,3.207
					 	C22.897,1.247,19.291,0,15.003,0H6.839C5.551,0,4.503,1.048,4.503,2.335v26.831c0,1.287,1.048,2.335,2.336,2.335h8.164
					 	c3.11,0,6.494,1.334,7.701,2.599c0.553,0.574,1.311,0.9,2.108,0.9h0.233c0.786,0,1.537-0.326,2.085-0.896
					 	c1.208-1.265,4.592-2.604,7.709-2.604h8.162c1.286,0,2.335-1.048,2.335-2.335V2.335C45.336,1.048,44.287,0,43.001,0L43.001,0z
					  	M23.171,29.912c-2.073-1.197-4.928-1.914-8.168-1.914H8v-24.5h7.002c4.983,0,8.168,2.074,8.168,3.503V29.912z M41.838,27.998
					 	h-6.999c-3.243,0-6.097,0.717-8.17,1.914V7.001c0-1.43,3.184-3.503,8.17-3.503h6.999V27.998z M41.838,27.998"/>
					</svg> Interested Book 
				</h3>
				<div class="col-md-12">
					<label>
						<div class="checkbox checkbox-info checkbox-circle">
							<input type="checkbox" name="book" id="General" value="3"> 
							<label for="General">General</label>
						</div>
					</label>
					<label>
						<div class="checkbox checkbox-info checkbox-circle">
							<input type="checkbox" name="book" id="Pocket" value="2"> 
							<label for="Pocket">Pocket Book</label>
						</div>
					</label>
					<label>
						<div class="checkbox checkbox-info checkbox-circle">
							<input type="checkbox" name="book" id="Novel" value="1"> 
							<label for="Novel">Novel</label>
						</div>
					</label>
					<label>
						<div class="checkbox checkbox-info checkbox-circle">
							<input type="checkbox" name="book" id="Magazine" value="4"> 
							<label for="Magazine">Magazine</label>
						</div>
					</label>
				</div>
				<div class="clear"></div>
			</div>
			<div class="col-md-6 movie">
				<div>
					<h3><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="20px" viewBox="0 0 50 35" enable-background="new 0 0 50 35" xml:space="preserve">
						<path fill="#0078C0" d="M10.07,35h29.801c1.223,0,2.23-1.004,2.23-2.229V2.229c0-1.221-1.008-2.229-2.23-2.229H10.07
						 	C8.837,0,7.833,1.008,7.833,2.229v30.541C7.833,33.996,8.837,35,10.07,35L10.07,35z M36.66,2.728c0-0.372,0.303-0.67,0.67-0.67
						 	h2.096c0.367,0,0.664,0.298,0.664,0.67V4.88c0,0.369-0.297,0.668-0.664,0.668H37.33c-0.367,0-0.67-0.296-0.67-0.668V2.728z
						  	M36.66,8.205c0-0.373,0.303-0.669,0.67-0.669h2.096c0.367,0,0.664,0.296,0.664,0.669v2.151c0,0.369-0.297,0.674-0.664,0.674H37.33
						 	c-0.367,0-0.67-0.305-0.67-0.674V8.205z M36.66,13.685c0-0.366,0.303-0.668,0.67-0.668h2.096c0.367,0,0.664,0.302,0.664,0.668v2.156
						 	c0,0.363-0.297,0.669-0.664,0.669H37.33c-0.367,0-0.67-0.306-0.67-0.669V13.685z M36.66,19.164c0-0.369,0.303-0.672,0.67-0.672
						 	h2.096c0.367,0,0.664,0.303,0.664,0.672v2.151c0,0.37-0.297,0.67-0.664,0.67H37.33c-0.367,0-0.67-0.3-0.67-0.67V19.164z
						  	M36.66,24.644c0-0.375,0.303-0.671,0.67-0.671h2.096c0.367,0,0.664,0.296,0.664,0.671v2.154c0,0.365-0.297,0.664-0.664,0.664H37.33
						 	c-0.367,0-0.67-0.299-0.67-0.664V24.644z M36.66,30.12c0-0.369,0.303-0.669,0.67-0.669h2.096c0.367,0,0.664,0.3,0.664,0.669v2.155
						 	c0,0.363-0.297,0.669-0.664,0.669H37.33c-0.367,0-0.67-0.302-0.67-0.669V30.12z M15.57,4.342c0-0.369,0.303-0.668,0.672-0.668
						 	h17.455c0.367,0,0.668,0.299,0.668,0.668v10.664c0,0.367-0.301,0.672-0.668,0.672H16.242c-0.369,0-0.672-0.305-0.672-0.672V4.342z
						  	M15.57,20.782c0-0.364,0.303-0.661,0.672-0.661h17.455c0.367,0,0.668,0.297,0.668,0.661v9.858c0,0.367-0.301,0.669-0.668,0.669
						 	H16.242c-0.369,0-0.672-0.302-0.672-0.669V20.782z M9.847,2.728c0-0.372,0.3-0.67,0.668-0.67h2.094c0.364,0,0.665,0.298,0.665,0.67
						 	V4.88c0,0.369-0.301,0.668-0.665,0.668h-2.094c-0.368,0-0.668-0.296-0.668-0.668V2.728z M9.847,8.205c0-0.373,0.3-0.669,0.668-0.669
						 	h2.094c0.364,0,0.665,0.296,0.665,0.669v2.151c0,0.369-0.301,0.674-0.665,0.674h-2.094c-0.368,0-0.668-0.305-0.668-0.674V8.205z
						  	M9.847,13.685c0-0.366,0.3-0.668,0.668-0.668h2.094c0.364,0,0.665,0.302,0.665,0.668v2.156c0,0.363-0.301,0.669-0.665,0.669h-2.094
						 	c-0.368,0-0.668-0.306-0.668-0.669V13.685z M9.847,19.164c0-0.369,0.3-0.672,0.668-0.672h2.094c0.364,0,0.665,0.303,0.665,0.672
						 	v2.151c0,0.37-0.301,0.67-0.665,0.67h-2.094c-0.368,0-0.668-0.3-0.668-0.67V19.164z M9.847,24.644c0-0.375,0.3-0.671,0.668-0.671
						 	h2.094c0.364,0,0.665,0.296,0.665,0.671v2.154c0,0.365-0.301,0.664-0.665,0.664h-2.094c-0.368,0-0.668-0.299-0.668-0.664V24.644z
						  	M9.847,30.12c0-0.369,0.3-0.669,0.668-0.669h2.094c0.364,0,0.665,0.3,0.665,0.669v2.155c0,0.363-0.301,0.669-0.665,0.669h-2.094
						 	c-0.368,0-0.668-0.302-0.668-0.669V30.12z M9.847,30.12"/>
						</svg> Interested Movie  
					</h3>
				</div>
				<div class="col-md-12">
					<label>
						<div class="checkbox checkbox-info checkbox-circle">
							<input type="checkbox" name="movie" id="International" value="International"> 
							<label for="International">International</label>
						</div>
					</label>
					<label>
						<div class="checkbox checkbox-info checkbox-circle">
							<input type="checkbox" name="movie" id="Thai" value="Thai"> 
							<label for="Thai">Thai</label>
						</div>
					</label>
					<label>
						<div class="checkbox checkbox-info checkbox-circle">
							<input type="checkbox" name="movie" id="Asia" value="Asia">  
							<label for="Asia">Asia</label>
						</div>
					</label>
					<label>
						<div class="checkbox checkbox-info checkbox-circle">
							<input type="checkbox" name="movie" id="Serie" value="Serie"> 
							<label for="Serie">Serie</label>
						</div>
					</label>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>

		<!-- Gift Benefit -->		

		<div class="box-book-movie">
			<h2>RECOMMEND</h2>

			<!-- Mbookstore -->			

			<div class="box-book" id="book">
				<h4>Book Recommend</h4>
				<div class="col-md-12 show-book">
					<div class= "row">
					<? for ($i=0; $i < 4; $i++) { ?>
						<div class="col-md-3 col-sm-3 col-lg-3 col-xs-6" style="margin-bottom: 30px;">
							<a href="http://www.mbookstore.com/book-details/<?=$book[$i]->book_id?>" target="_blank">
								<img src="<?=$conf['mbook_url'].$book[$i]->book_image?>" class="box-image">
							</a>
						</div>
					<? } ?>
					</div>
				</div>
				<div class="clear"></div>
			</div>

			<!-- Doonung -->
			
			<div class="box-movie" id="doonung">
				<h4>Movie Recommend</h4>
				<div class="col-md-12 show-movie" id="movie">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-lg-3 col-xs-6" style="margin-bottom: 30px;">
							<a href="http://www.monomaxxx.com/inter-movies/action-adventure/91529_TheOutsider.html" target="_blank">
								<img src="<?=$conf['monomaxxx_img']?>the-outsider-ccc-pos-200.jpg" class="box-image">
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-lg-3 col-xs-6" style="margin-bottom: 30px;">
							<a href="http://www.monomaxxx.com/thai-movies/romantic/11174_2538%E0%B8%AD%E0%B8%B1%E0%B8%A5%E0%B9%80%E0%B8%97%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%A1%E0%B8%B2%E0%B8%88%E0%B8%B5%E0%B8%9A.html" target="_blank">
								<img src="<?=$conf['monomaxxx_img']?>/2538cover200_1440560901.jpg" class="box-image">
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-lg-3 col-xs-6" style="margin-bottom: 30px;">
							<a href="http://www.monomaxxx.com/chinese-movies/action-adventure/10410_ICEMAN3D.html" target="_blank">
								<img src="<?=$conf['monomaxxx_img']?>/iceman3d200.jpg" class="box-image">
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-lg-3 col-xs-6" style="margin-bottom: 30px;">
							<a href="http://www.monomaxxx.com/inter-movies-series/action-adventure/11177_TransporterTheSeriesSeason2.html" target="_blank">
								<img src="<?=$conf['monomaxxx_img']?>/LargadereTRansp2Cover200_1453179813.jpg" class="box-image">
							</a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>

	<div class="copyright">
		All rights reserved by Mono Group. 
		<img src="<?=$conf['copyright']?>">
	</div>

<script type="text/javascript" src="<?=$conf['assets_url']?>jquery/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="<?=$conf['assets_url']?>bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=$conf['assets_url']?>js/jquery.validate.min.js"></script>
<script type="text/javascript">
		 
	/*function popup(url,name,windowWidth,windowHeight) {    
		myleft=(screen.width)?(screen.width-windowWidth)/2:100; 
		mytop=(screen.height)?(screen.height-windowHeight)/2:100;   
		properties = "width="+windowWidth+",height="+windowHeight;
		properties +=",scrollbars=yes, top="+mytop+",left="+myleft;   
		window.open(url,name,properties);
		self.close();
	}*/

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
					url: "http://www.mbookstore.com/code-tel",
					type: "post"
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

		/*submitHandler: function() { 					
			var name = document.getElementById("name").value;
			var tel = document.getElementById("tel").value;
			var email = document.getElementById("email").value;
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			var pincode = document.getElementById("pincode").value;
			$.post("http://www.mbookstore.com/code-register", {
				name:name, tel:tel, email:email, username:username, password:password, pincode:pincode, params: "register-mbook"
			}, function(response) {  
				document.getElementById("box-register").innerHTML= response;
				var url =  document.getElementById("url_auth").value;
				popup(url,'',400,400);
			});
		}*/
	 
	});

	$( "input[type=checkbox]" ).on( "click", function() {
		var name = $(this).attr("name");
		if (name == 'book') {
			var choices = [];
			var els = document.getElementsByName('book');
			for (var i=0;i<els.length;i++){
				if ( els[i].checked ) {
					choices.push(els[i].value);
				}
			}
			$.post("http://www.mbookstore.com/code-category", {
				category: choices,
				params: "book",
			}, function(response) {
				document.getElementById("book").innerHTML= response;
			});
		} else {
			// alert('dd');
			var choices = [];
			var els = document.getElementsByName('movie');
			for (var i=0;i<els.length;i++){
				if ( els[i].checked ) {
					choices.push(els[i].value);
				}
			}
			$.post("http://www.mbookstore.com/code-movie", {
				category: choices,
				params: "movie",
			}, function(response){
				document.getElementById("movie").innerHTML= response;
			});
		}
	});

	/*function isNumber(evt) {
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode> 31 && (charCode < 48 || charCode> 57)) {
			return false;
		}
		return true;
	}

	function finishAjax(id, response) {
		$('#'+id).html(unescape(response));
		$('#'+id).fadeIn(1000);
	}*/

</script>

</body>
</html>