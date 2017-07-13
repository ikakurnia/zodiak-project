<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
<title>Zodiak</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Informasi Zodiak, Zodiak, Tanggal Lahir, Hari Lahir" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- /fonts -->
<!-- css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type='text/css' media="all" />
<!-- /css -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<script>
	function infoZodiak(){
		var nama=$("#username").val();
		var tanggal=$("#email").val();
		$.ajax({
			url:"zodiak.php",
			method:"POST",
			data:"nama="+nama+"&tanggal="+tanggal,
			success:function(response){
				$("#informasi").html(response);
				console.log(response);
			},
			beforeSend:function(){
				console.log("SEDANG MEMUAT DATA");
			}
		});
	}
</script>
</head>
<body>
<h1 class="w3layouts">Informasi Zodiak</h1>
<div class="w3-header-top-right">
<div class="content-w3ls">
	<div class="content1-agile">
		<div class="info-w3l">
			<h2 class="wthree">Input Data </h2>
			<form action="#" method="post" class="form-agileits">
				<input type="text" id="username" name="nama" placeholder="Nama" required="">
				<input type="text" id="email" name="lahir" placeholder="Tanggal Lahir" required="">
				<input type="button" class="sign-in" onclick="infoZodiak()" value="Submit">
			</form>
			<p class="agileinfo">Or</p>
			<ul class="social-w3-agileits">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>		
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				
			</ul>
		</div>	
	</div>
	<div class="content2-agile" >
	<div class="info-w3l">
			<h2 class="wthree">Informasi Data</h2>
			<div id="informasi" style="color:#FFFFFF;"/></div>
	</div>
	</div>
	<div class="clear">
	
	</div>
</div>
<p class="copyright-agileits">© 2017 Kelompok 6: Ari Widiyanto || Ika Kurnia Rahmawati || Muhammad Khadirin
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
</body>
</html>