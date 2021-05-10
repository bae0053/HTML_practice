<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="EditPlus">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">

	<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scaleable=yes">
	<title>sub-header</title>

	<script src="../js/jquery-1.12.4.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>

	<script src="../js/swiper.min.js"></script>
	<link rel="stylesheet" href="../js/swiper.min.css">
	<link rel="stylesheet" href="../css/style.css">

	<!-- 모바일 -->
	<link rel="stylesheet" media="screen and (max-width:480px)" href="../css/480.css">
	<!-- 태블릿 세로 -->
	<link rel="stylesheet" media="screen and (min-width:481px) and (max-width:720px)" href="../css/720.css">
	<!-- 태블릿 가로 -->
	<link rel="stylesheet" media="screen and (min-width:721px) and (max-width:1024px)" href="../css/1024.css">
	<!-- PC -->
	<link rel="stylesheet" media="screen and (min-width:1025px)" href="../css/pc.css">

</head>

<!-- 상단 헤더 -->
<div class="header">
	<div>
		<div class="logo">
			<h1>
				<a href="../index.html"><img src="../img/logo_w.png"></a>
			</h1>
		</div>

		<div class="top-btn">
			<ul>
				<li>
					<a href="../member/login.html">로그인</a>
				</li>
				<li>
					<a href="../member/join.html">회원가입</a>
				</li>
			</ul>

		</div>
	</div>
</div>

<!-- 메뉴 -->
<div class="menu">
	<div>
		<ul>
			<li>
				<a href="#none">회사소개</a>
				<ul class="sub-menu">
					<li>
						<a href="../about/intro.html">회사소개</a>	
					</li>
					<li>
						<a href="../about/location.html">오시는길</a>
					</li>
				</ul>

			</li>
			<li>
				<a href="#none">게시판</a>
				<ul class="sub-menu">
					<li>
						<a href="../bbs/notice_list.html">공지사항</a>	
					</li>
					<li>
						<a href="../bbs/free_list.html">자유 게시판</a>
					</li>
					<li>
						<a href="../bbs/gallery_list.html">갤러리 게시판</a>
					</li>
				</ul>	
			</li>
			<li>
				<a href="../booking/list.html">장소예약</a>
			</li>
			<li>
				<a href="../member/mypage.html">마이페이지</a>
			</li>
		</ul>
	</div>
</div>

<?php if($page_name == "login" || $page_name =="join") { ?>

<?php } else { ?>

	<!-- 모바일 메뉴 -->
	<div class="m-menu">
		<div>
			<a href="#none">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
	</div>

	<script>
	 /* a를 클릭하면 a에게 class="active"를 부여해라 다시 클릭하면 class가 없어짐 */
		$('.m-menu a').click( 
			function() {
				$(this).toggleClass('active');
				$('html').toggleClass('active');
			}
		)
	</script>

<?php } ?>