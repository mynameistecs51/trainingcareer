<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template{
	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('mdl_authen');
	}

	public function getHeader($base_url)
	{
		return'
		<!DOCTYPE html>
		<html lang="en">

		<head>

			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">

			<title>ส่งเสริมอาชีพ อบจ.อุดรธานี</title>

			<!-- Bootstrap Core CSS -->
			<link href="'.$base_url.'assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

			<!-- Custom Fonts -->
			<link href="'.$base_url.'assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
			<!--  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
			<link href=\'https://fonts.googleapis.com/css?family=Kaushan+Script\' rel=\'stylesheet\' type=\text/css\'>
			<link href=\'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic\' rel=\'stylesheet\' type=\'text/css\'>
			<link href=\'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700\' rel=\'stylesheet\' type=\'text/css\'>
		-->
		<!-- Theme CSS -->
		<link href="'.$base_url.'assets/css/agency.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body id="page-top" class="index">

		<!-- Navigation -->
		<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" style=" background-color:#000000; opacity:0.7;width:100%">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top" >อบจ.อุดรธานี</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					'.$this->menu().'
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>

		<!-- Header -->
		<header >
			<div class="container">
				<div class="intro-text">
					<div style="background-color:gray;opacity:0.7;border-radius:10px 10px 10px 10px;display:block;">
						<div class="intro-lead-in" style="margin-top:-10%">โครงการฝึกอบรมส่งเสริมอาชีพเพื่อแก้ไขปัญหาความยากจน <br>ประจำปีงบประมาณ 2559 แก่ประชาชนในจังหวัดอุดรธานี
						</div>
						<div class="intro-heading " >โดย อบจ.อุดรธานี</div>
					</div>
					<a href="#services" class="page-scroll btn btn-info btn-xl " style="background-color:#24cdd4;">ยินดีต้อนรับ</a>
				</div>
			</div>
		</header>

		';
	}
	public function getFooter($base_url)
	{
		return '

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<span class="copyright">Copyright &copy; Mr.Chaiwat Homsang Web Developer</span>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery -->
		<script src="'.$base_url.'assets/vendor/jquery/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="'.$base_url.'assets/vendor/bootstrap/js/bootstrap.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="'.$base_url.'assets/js/contact_me.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

		<!-- Contact Form JavaScript -->
		<script src="'.$base_url.'assets/js/jqBootstrapValidation.js"></script>
		<script src="'.$base_url.'assets/js/contact_me.js"></script>

		<!-- Theme JavaScript -->
		<script src="'.$base_url.'assets/js/agency.min.js"></script>

		<script type="text/javascript" src="'.$base_url.'assets/js/bootstrap-hover-dropdown.min.js"></script>

		<script type="text/javascript">
			$(function(){
				$(".dropdown-toggle").dropdownHover({delay:0});	//menuhover
				$(".back-to-top").click(function(){	//buttom back to top page
					$("html,body").animate({scrollTop:0},"slow");return false;
				});
			});
		</script>

	</body>

	</html>
	';
}

public function menu()
{
	$menu = '';
	if($this->CI->session->userdata('id_member') != null){
		$menu .= '
		<ul class="nav navbar-nav navbar-right">
			<li class="hidden">
				<a href="#page-top"></a>
			</li>
			<li>
				<a class="page-scroll" href="#services">ผลิตภัณฑ์</a>
			</li>
			<li>
				<a class="page-scroll" href="#portfolio">Portfolio</a>
			</li>
			<li>
				<a class="page-scroll" href="#question">ถามตอบ</a>
			</li>
			<li>
				<a class="page-scroll" href="#about">เกี่ยวกับ</a>
			</li>
			<li>
				<a class="page-scroll" href="#team">คณะทำงาน</a>
			</li>
			<li>
				<a class="page-scroll" href="#contact">ข้อมูลติดต่อ</a>
			</li>
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">'.$this->CI->session->userdata('mem_name').'<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" style=" background-color:#000000;">
					<li>'.anchor('#', 'จัดการ ภาพกิจกรรม', 'class="page-scroll"').'</li>
					<li>'.anchor('#', 'จัดการ web board', 'class="page-scroll"').'</li>
					<li>'.anchor('authen/logout', 'ออกจากระบบ', 'class="page-scroll"').'</li>
				</ul>
			</li>

		</ul>';
	}else{
		$menu .='<ul class="nav navbar-nav navbar-right">
		<li class="hidden">
			<a href="#page-top"></a>
		</li>
		<li>
			<a class="page-scroll" href="#services">ผลิตภัณฑ์</a>
		</li>
		<li>
			<a class="page-scroll" href="#portfolio">Portfolio</a>
		</li>
		<li>
			<a class="page-scroll" href="#question">ถามตอบ</a>
		</li>
		<li>
			<a class="page-scroll" href="#about">เกี่ยวกับ</a>
		</li>
		<li>
			<a class="page-scroll" href="#team">คณะทำงาน</a>
		</li>
		<li>
			<a class="page-scroll" href="#contact">ข้อมูลติดต่อ</a>
		</li>
		<li>
			<a class="page-scroll" href="#login">เข้าสู่ระบบ</a>
		</li>
		<li>
			<a class="page-scroll" href="#regis">สมัครสมาชิก</a>
		</li>

	</ul>
	';
}
return $menu;
}

}