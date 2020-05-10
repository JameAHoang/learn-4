<!DOCTYPE html>
<html>
<head>
	<title>ĐĂNG KÝ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: Arial;
		}
		body
		{
			background-image: url("image/bg.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
		.From_DangKy
		{
			
			margin-left: 675px;
		    text-align: center;
		    width: 600px;
		    height: 400px;
		    margin-top: 238px;
		    opacity: 0.4;
		}
		.From_DangKy:hover
		{
			opacity: 1;
		}

		.title_dangky
		{
			margin-top: 35px;
		    width: 600px;
		    font-size: 25px;
		}

		.title_dangky,.User,.Pass
		{
			padding-bottom: 15px;
			color: white;
		}
		input[type=text],input[type=password]
		{
			width: 250px;
			height: 30px;
		}
		input[type=submit]
		{
			cursor: pointer;
			width: 250px;
			height: 50px;
		}
	</style>

</head>
<body>
	<div class="From_DangKy">
		<div class="title_dangky">
			<?php
				date_default_timezone_set('Asia/Ho_Chi_Minh');
				echo "Chào bạn, bây giờ là "
					 . date("H") . " giờ " 
					 .date("i") . " phút ngày "
					 .date("d") . "/"
					 .date("m"). "/"
					 .date("Y");
			?>
		</div>
		 <div class="User">
		 	<input type="text" name="username" placeholder="Tên đăng nhập" id="user">
		 </div>
		 <div class="Pass">
		 	<input type="password" name="password" placeholder="Mật khẩu" id="pass">
		 </div>
		 <div id="check" style="color: red;"></div>
		 	<input type="submit" name="submit" value="Đăng ký" id="btn_submit">
		 <div id="result" style="color: white"></div>

		</div>
		<div>
			<a href="jameahoang.hocweb.cf/learn-4/userView">Xem danh sách</a>
		</div>
		

	<script type="text/javascript">
		$("#btn_submit").on("click", function(){
		var username = $("#user").val();
		var password = $("#pass").val();
		var check = $("#check");

		//reset  khi bấm nút submit
		check.html("");
		//kiểm tra rỗng
		
		if (username == "") {
			check.html("Tên đăng nhập không được để trống");
			return false;
		}
		if (password == "") {
			check.html("Mật khẩu không được để trống");
			return false;
		}
		

		$.ajax({
		  url: "userRegister.php",
		  method: "POST",
		  data: { user : username, pass : password },
		  success : function (result){
                        $('#result').html(result);
                    }
		});
	});
	</script>
</body>
</html>