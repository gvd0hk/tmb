<?php
 session_start();
 $book = get_book_recommendation();
 $item = get_item_travel();
 $titem = $item->response->items;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta name="viewport" content="width=device-width, user-scalable=no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?=$conf['assets_url']?>css/build.css">
<link rel="stylesheet" type="text/css" href="<?=$conf['assets_url']?>Font-Awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?=$conf['assets_url']?>css/style.css">
<link rel="stylesheet" type="text/css" href="http://www.mbookstore.com/assets/bootstrap/css/bootstrap.min.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<title>ลงทะเบียน เพื่อรับสิทธิ์ดูหนัง อ่านหนังสือฟรี 30 วัน</title>
</head>
<body>
	<div id="container">
		<div class="content">
			<div class="banner-top">
				<img src="<?=$conf['assets_url']?>images/header1700x500.png" class="img-header">
				<div class="clear"></div>
			</div>
			<div class="box-register" id="box-register">
				<input type="hidden" id="url_auth" value="<?=$url_set?>">
				<div class="box-register-success" >
						<div class="alert alert-success" role="alert">การสมัครเสร็จสมบูรณ์ คุณสามารถเลือกอ่านหนังสือ หรือ ดูหนังได้ทันที</div>
						<div class="box-account" >
							<h3>Account สำหรับอ่านหนังสือ และ ดูหนัง</h3>
								<table class="table-account">
									<tr>
										<td width="50%">username</td>
										<td><?=$_SESSION['user_login']?></td>
									</tr>
									<tr>
										<td>วันใช้งานคงเหลือ</td>
										<td><?=$_SESSION['days']?> วัน</td>
									</tr>
								</table>
							<h3>ข้อมูลส่วนตัว</h3>
								<table class="table-profile" >
									<tr>
										<td width="50%">ชื่อ- นามสกุล</td>
										<td><?=$_SESSION['member_name']." ".$_SESSION['member_surname']?></td>
									</tr>
									<tr>
										<td>Email </td>
										<td><?=$_SESSION['member_email'] ?></td>
									</tr>
									<tr>
										<td>เบอร์มือถือ</td>
										<td><?=$_SESSION['members_user_telephone']?></td>
									</tr>
								</table>
						</div>
				</div>
			</div>
		<hr class="hr-gs">

		<div class="travel-box">
			<div class="travel-banner">
				<a href="http://www.hotelsthailand.com/gsb/hotels-discount/?code=<?=$uris['1']?>">
						<img src="<?=$conf['assets_url']?>images/travel_bg.png">
				</a>
			</div>
			<div class="doonung">
					<div class="col-md-12 box-travel" id="travel">
						<div class="col-md-12">
								<? for ($i=0; $i < 4; $i++) { ?>
									<div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 " >
										<div class="travel-detail">
												<div class="hotel_name"><?=$titem[$i]->hotel_name_th?></div>
												<div class="city_name">
														<span class="b1"> <?=$titem[$i]->city_name_th?> </span> | 
																<span class="symbol_star_list_big img_star_big_0_0"> 
																	<span class="symbol_star_list_big img_star_big_5_0" style="<?=getratetext($titem[$i]->star_rating)?>">
																	</span>
															</span>
													</div>
												<div class="thumb-detail_3col" >
													<div class="front">
														<a href="#" class="travelcheck">
																<img src="<?=$titem[$i]->image_url?>" class="">
														</a>
														<? if($titem[$i]->discount_percent > 0){ ?>
															<div class="thumb-tagprice_3col_save"><p>ลดทันที<br><span class="feed_Content" url="http://www.hotelsthailand.com/services/feed/dc_price.php?hotel_id=8638&amp;city_id=443&amp;type=city_percent"><?=$titem[$i]->discount_percent?>%</span></p></div>
														<? } ?>
													</div>
												</div>
												<? if($titem[$i]->price_sale > $titem[$i]->price_min){ ?>
												 <div class="price_sale">จาก <strike><?=number_format($titem[$i]->price_sale)?></strike> เหลือ  <b> <?=number_format($titem[$i]->price_min)?> </b> บาท</div>
												<? }else{ ?>
												<div class="price_sale">ราคา <b> <?=number_format($titem[$i]->price_min)?> </b> บาท</div>
												<? } ?>
												<hr>
												<div class="btn-travel">
														<a href="http://www.hotelsthailand.com/gsb/hotels-discount/?code=<?=$uris['1']?>" class="btn " target="_blank"> จองด่วน </a>
												</div>
										</div>
									</div>
								<? } ?>

						</div>
					</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="mbookstore-box">
			<div class="mbookstore-banner">
			 <a href="http://www.mbookstore.com/" target="_blank"> <img src="<?=$conf['assets_url']?>images/mbookstore_bg.png"></a>
			</div>
			<div class="favorite">
				<div class="col-md-12 inter-book" >
						<div class="col-md-4 col-sm-4">
							<h3><img src="<?=$conf['assets_url']?>images/icon_book.png">Interested Book </h3>
						</div>
						<div class="col-md-8 col-sm-8">
							<div class="select-cate-mbookstore">
								<label class="checkbox-inline">
									<div class="checkbox checkbox-info checkbox-circle">
										<input type="checkbox" name="book" class="styled" id="General" value="3" >
										<label for="General">General</label>
									</div>
								</label>
								<label class="checkbox-inline">
									<div class="checkbox checkbox-info checkbox-circle">
										<input type="checkbox" class="styled" name="book" id="Pocket" value="2" >
										<label for="Pocket">Pocket Book</label>
									</div>
								</label>
								<label class="checkbox-inline">
									<div class="checkbox checkbox-info checkbox-circle">
										<input type="checkbox" class="styled" name="book" id="Novel" value="1" >
										<label for="Novel">Novel</label>
									</div>
								</label>
								<label class="checkbox-inline" >
									<div class="checkbox checkbox-info checkbox-circle">
										<input type="checkbox" class="styled" name="book" id="Magazine" value="4" >
										<label for="Magazine">Magazine</label>
									</div>
								</label>
							</div>
						</div>
						<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="book-movie">
				<div class="book" id="book">
					<div class="col-md-12 box-book">
											<div class= "row">
						<? for ($i=0; $i < 4; $i++) { ?>
							 <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 " >
									<a href="http://www.mbookstore.com/book-details/<?=$book[$i]->book_id?>" target="_blank">
										<img src="<?=$conf['mbook_url'] . $book[$i]->book_image?>" class="rightBottom">
									</a>
							 </div>
						<? } ?>
					</div>
				</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div class="monomaxx-box">

			<div class="monomaxx-banner">
				<a href="http://www.monomaxxx.com/" target="_blank"><img src="<?=$conf['assets_url']?>images/monomaxx_bg.png"></a>
			</div>
			<div class="favorite">
				<div class="col-md-12 inter-movie">
					<div class="col-md-4 col-sm-4">
						<h3><img src="<?=$conf['assets_url']?>images/icon_movie.png"> Interested Movie  </h3>
					</div>
					<div class="col-md-8 col-sm-8">
						<div class="select-cate-mbookstore">
							<label class="checkbox-inline">
								<div class="checkbox checkbox-info checkbox-circle">
									<input type="checkbox" class="styled" name="movie" id="International" value="International" >
									<label for="International">International</label>
								</div>
							</label>
							<label class="checkbox-inline">
								<div class="checkbox checkbox-info checkbox-circle">
									<input type="checkbox" class="styled" name="movie" id="Thai" value="Thai" >
									<label for="Thai">Thai</label>
								</div>
							</label>
							<label class="checkbox-inline">
								<div class="checkbox checkbox-info checkbox-circle">
									<input type="checkbox" class="styled" name="movie" id="Asia" value="Asia" >
									<label for="Asia">Asia</label>
								</div>
							</label>
							<label class="checkbox-inline">
								<div class="checkbox checkbox-info checkbox-circle">
									<input type="checkbox" class="styled" name="movie" id="Serie" value="Serie" >
									<label for="Serie">Serie</label>
								</div>
							</label>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
				<div class="doonung">
					<div class="col-md-12 box-doonung" id="movie">
						<div class="col-md-12">
							<div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 " >
									<a href="http://www.monomaxxx.com/inter-movies/action-adventure/91529_TheOutsider.html" target="_blank">
											<img src="http://www.monomaxxx.com/assets/doonung/default/images_main/images_vdoondemand/the-outsider-ccc-pos-200.jpg" class="rightBottom">
									</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 " >
									<a href="http://www.monomaxxx.com/thai-movies/romantic/11174_2538%E0%B8%AD%E0%B8%B1%E0%B8%A5%E0%B9%80%E0%B8%97%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%A1%E0%B8%B2%E0%B8%88%E0%B8%B5%E0%B8%9A.html" target="_blank">
											<img src="http://www.monomaxxx.com/assets/doonung/default/images_main/images_vdoondemand/2538cover200_1440560901.jpg" class="rightBottom">
									</a>
							</div>

							<div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 " >
									<a href="http://www.monomaxxx.com/chinese-movies/action-adventure/10410_ICEMAN3D.html" target="_blank">
											<img src="http://www.monomaxxx.com/assets/doonung/default/images_main/images_vdoondemand/iceman3d200.jpg" class="rightBottom">
									</a>
							</div>
							<div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 " >
									<a href="http://www.monomaxxx.com/inter-movies-series/action-adventure/11177_TransporterTheSeriesSeason2.html" target="_blank">
											<img src="http://www.monomaxxx.com/assets/doonung/default/images_main/images_vdoondemand/LargadereTRansp2Cover200_1453179813.jpg" class="rightBottom">
									</a>
							</div>
						</div>
					</div>
				<div class="clear"></div>
			</div>
		</div>

		</div>
		<div class="clear"></div>
	</div>
<!--   <div id="copy">
		All rights reserved by Mono Group.
		<img src="http://www.mono.co.th/corporateSite/media/CzechCities/monogroup-logo.gif">
	</div> -->

</body>
<footer>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.mbookstore.com/assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=$conf['assets_url']?>js/jquery.validate.min.js"></script>
	<script type="text/javascript">

	<? if(isset($_SESSION['url_set'])){?>
			var width = 200;
			var height = 200;
			var leftpos = (screen.availWidth - width) / 2;
			var   toppos = (screen.availHeight - height) / 2;
			window.open("<?=$_SESSION['url_set']?>", "viewdetails","width=" + width + ",height=" + height + ",left=" + leftpos + ",top=" + toppos);
	<? }  ?>


		function popup(url,name,windowWidth,windowHeight){
				myleft=(screen.width)?(screen.width-windowWidth)/2:100;
				mytop=(screen.height)?(screen.height-windowHeight)/2:100;
				properties = "width="+windowWidth+",height="+windowHeight;
				properties +=",scrollbars=yes, top="+mytop+",left="+myleft;
				window.open(url,name,properties);
				self.close();
		}

		$( "input[type=checkbox]" ).on( "click", function(){
				var name = $(this).attr("name");
				if(name == 'book'){
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
					}, function(response){
						document.getElementById("book").innerHTML= response;
					});
				}else{
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
			} );
		function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				return false;
			}
			return true;
		}
		function finishAjax(id, response){
			$('#'+id).html(unescape(response));
			$('#'+id).fadeIn(1000);
		}
	</script>
</footer>
</html>
