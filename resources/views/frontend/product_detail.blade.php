@extends('layouts.site')
@section('title', 'Chi tiết sản phẩm')
@section( 'content')

<body>

	<div class="opacity_menu"></div>
	
<div class="top-banner position-relative" style="background: rgb(167, 2, 8); display: none;">
<div class="container text-center px-0">
			<a class="position-relative  d-sm-none d-block" style="max-height: 39px;height:  calc( 39 * 100vw /414 )" href="/collections/all" title="Banner top">
		<img class="img-fluid position-absolute " src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/top_banner_mb.jpg?1692086228721" style="left:0" alt="Banner top" width="414" height="39">

	</a>
			<a class="position-relative   d-sm-block d-none " style="max-height: 70px;height:  calc( 70 * 100vw /1410 )" href="/collections/all" title="Banner top">
		<picture>

			<source media="(max-width: 480px)" srcset="//bizweb.dktcdn.net/thumb/large/100/426/076/themes/917889/assets/top_banner.jpg?1692086228721">

			<img class="img-fluid position-absolute" src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/top_banner.jpg?1692086228721" style="left:0" alt="Banner top" width="1410" height="70">
		</picture>

	</a>
	<button type="button" class="close " aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>
</div>

</div>
<script>
$(document).ready(()=>{
	$('.top-banner .close').click(()=>{
		$('.top-banner').slideToggle()
		sessionStorage.setItem("top-banner",true)
	})


})

</script>



<!-- subheader == mobile nav -->
<div class="subheader ">
<div class="container ">

<div class="toogle-nav-wrapper 	">
	<div class="icon-bar btn menu-bar mr-2  p-0 d-inline-flex">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</div>
Danh mục sản phẩm

	<div class="navigation-wrapper ">

<nav class="h-100">
<ul class="navigation list-group list-group-flush scroll">
	


		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Ưu đãi hot 49%">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_1.png?1692086228721" alt="Ưu đãi hot 49%">
								<span>Ưu đãi hot 49%</span>
		
		</a>			
		
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc da mặt">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_2.png?1692086228721" alt="Chăm sóc da mặt">
								<span>Chăm sóc da mặt</span>
		
		<i class="float-right" data-toggle-submenu="">
		

<svg class="icon">
<use xlink:href="#icon-arrow"></use>
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class="toggle-submenu d-lg-none d-xl-none">
			<i class="mr-3">
				

<svg class="icon" style="transform: rotate(180deg)">
<use xlink:href="#icon-arrow"></use>
</svg>
			</i>
			<span>Chăm sóc da mặt </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dưỡng ẩm">Dưỡng ẩm</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Toner">Toner</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Mặt nạ">Mặt nạ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Serum - Tinh chất">Serum - Tinh chất</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kem dưỡng - Dầu dưỡng">Kem dưỡng - Dầu dưỡng</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Làm sạch da mặt">Làm sạch da mặt</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy trang">Tẩy trang</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Làm sạch da mặt">Làm sạch da mặt</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết">Tẩy tế bào chết</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Xịt khoáng">Xịt khoáng</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước hoa hồng">Nước hoa hồng</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Trang điểm">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_3.png?1692086228721" alt="Trang điểm">
								<span>Trang điểm</span>
		
		<i class="float-right" data-toggle-submenu="">
		

<svg class="icon">
<use xlink:href="#icon-arrow"></use>
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class="toggle-submenu d-lg-none d-xl-none">
			<i class="mr-3">
				

<svg class="icon" style="transform: rotate(180deg)">
<use xlink:href="#icon-arrow"></use>
</svg>
			</i>
			<span>Trang điểm </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Trang điểm mặt">Trang điểm mặt</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kem lót">Kem lót</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kem nền">Kem nền</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn phủ">Phấn phủ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn nước Cushion">Phấn nước Cushion</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Che khuyết điểm">Che khuyết điểm</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tạo khối - Highlighter">Tạo khối - Highlighter</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn má hồng">Phấn má hồng</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Trang điểm vùng mắt">Trang điểm vùng mắt</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kẻ chân mày">Kẻ chân mày</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kẻ mắt">Kẻ mắt</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Mascara">Mascara</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn mắt">Phấn mắt</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Trang điểm môi">Trang điểm môi</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son môi">Son môi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son dưỡng">Son dưỡng</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son lì">Son lì</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son bóng">Son bóng</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết môi">Tẩy tế bào chết môi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Mặt nạ môi">Mặt nạ môi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kẻ viền môi">Kẻ viền môi</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Móng">Móng</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Sơn móng">Sơn móng</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phụ kiện làm móng">Phụ kiện làm móng</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Tẩy Trang mắt - môi">Tẩy Trang mắt - môi</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ trang điểm">Dụng cụ trang điểm</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cơ thể">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_4.png?1692086228721" alt="Chăm sóc cơ thể">
								<span>Chăm sóc cơ thể</span>
		
		<i class="float-right" data-toggle-submenu="">
		

<svg class="icon">
<use xlink:href="#icon-arrow"></use>
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class="toggle-submenu d-lg-none d-xl-none">
			<i class="mr-3">
				

<svg class="icon" style="transform: rotate(180deg)">
<use xlink:href="#icon-arrow"></use>
</svg>
			</i>
			<span>Chăm sóc cơ thể </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Làm sạch cơ thể">Làm sạch cơ thể</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Sữa tắm - xà phòng tắm">Sữa tắm - xà phòng tắm</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Muối tắm">Muối tắm</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết toàn thân">Tẩy tế bào chết toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Gel rửa tay">Gel rửa tay</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dưỡng thể">Dưỡng thể</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng ẩm toàn thân">Dưỡng ẩm toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng trắng toàn thân">Dưỡng trắng toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Chống nắng toàn thân">Chống nắng toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng tay chân">Dưỡng tay chân</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Khử mùi">Khử mùi</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Khử mùi cho nam">Khử mùi cho nam</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Khử mùi cho nữ">Khử mùi cho nữ</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Vệ sinh phụ nữ">Vệ sinh phụ nữ</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dung dịch vệ sinh">Dung dịch vệ sinh</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Băng vệ sinh">Băng vệ sinh</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Kem massage - chăm sóc ngực">Kem massage - chăm sóc ngực</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Giảm mỡ/tan mỡ">Giảm mỡ/tan mỡ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Giảm rạn da">Giảm rạn da</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Nở ngực - săn chắc ngực">Nở ngực - săn chắc ngực</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Tẩy lông">Tẩy lông</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cá nhân">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_5.png?1692086228721" alt="Chăm sóc cá nhân">
								<span>Chăm sóc cá nhân</span>
		
		<i class="float-right" data-toggle-submenu="">
		

<svg class="icon">
<use xlink:href="#icon-arrow"></use>
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class="toggle-submenu d-lg-none d-xl-none">
			<i class="mr-3">
				

<svg class="icon" style="transform: rotate(180deg)">
<use xlink:href="#icon-arrow"></use>
</svg>
			</i>
			<span>Chăm sóc cá nhân </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc răng miệng">Chăm sóc răng miệng</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Khẩu trang">Khẩu trang</a>
			</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/collections/all" title="Nước hoa nam">Nước hoa nam</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Nước hoa Eau De Parfum">Nước hoa Eau De Parfum</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước hoa nữ">Nước hoa nữ</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Nước hoa Eau De Toilrttee">Nước hoa Eau De Toilrttee</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước súc miệng">Nước súc miệng</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Sản phẩm thiên nhiên">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_6.png?1692086228721" alt="Sản phẩm thiên nhiên">
								<span>Sản phẩm thiên nhiên</span>
		
		<i class="float-right" data-toggle-submenu="">
		

<svg class="icon">
<use xlink:href="#icon-arrow"></use>
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class="toggle-submenu d-lg-none d-xl-none">
			<i class="mr-3">
				

<svg class="icon" style="transform: rotate(180deg)">
<use xlink:href="#icon-arrow"></use>
</svg>
			</i>
			<span>Sản phẩm thiên nhiên </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Tinh dầu các loại">Tinh dầu các loại</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tinh dầu thiên nhiên">Tinh dầu thiên nhiên</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dầu dừa thiên nhiên">Dầu dừa thiên nhiên</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Đèn xông hương">Đèn xông hương</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Sản phẩm thiên nhiên làm đẹp">Sản phẩm thiên nhiên làm đẹp</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nến thơm">Nến thơm</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc tóc">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_7.png?1692086228721" alt="Chăm sóc tóc">
								<span>Chăm sóc tóc</span>
		
		<i class="float-right" data-toggle-submenu="">
		

<svg class="icon">
<use xlink:href="#icon-arrow"></use>
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class="toggle-submenu d-lg-none d-xl-none">
			<i class="mr-3">
				

<svg class="icon" style="transform: rotate(180deg)">
<use xlink:href="#icon-arrow"></use>
</svg>
			</i>
			<span>Chăm sóc tóc </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dầu gội">Dầu gội</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Trị gàu">Trị gàu</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Ngăn rụng tóc">Ngăn rụng tóc</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Giảm dầu nhờn">Giảm dầu nhờn</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng tóc khô xơ">Dưỡng tóc khô xơ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Chăm sóc tóc nhuộm">Chăm sóc tóc nhuộm</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Mặt nạ - Kem ủ tóc">Mặt nạ - Kem ủ tóc</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dầu dưỡng tóc">Dầu dưỡng tóc</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Thuốc nhuộm - uốn - duỗi">Thuốc nhuộm - uốn - duỗi</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dầu xả">Dầu xả</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Bộ sản phẩm làm đẹp">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_8.png?1692086228721" alt="Bộ sản phẩm làm đẹp">
								<span>Bộ sản phẩm làm đẹp</span>
		
		<i class="float-right" data-toggle-submenu="">
		

<svg class="icon">
<use xlink:href="#icon-arrow"></use>
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class="toggle-submenu d-lg-none d-xl-none">
			<i class="mr-3">
				

<svg class="icon" style="transform: rotate(180deg)">
<use xlink:href="#icon-arrow"></use>
</svg>
			</i>
			<span>Bộ sản phẩm làm đẹp </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc da mặt">Bộ chăm sóc da mặt</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ trang điểm">Bộ trang điểm</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc cơ thể">Bộ chăm sóc cơ thể</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc tóc và da đầu">Bộ chăm sóc tóc và da đầu</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Thiết bị làm đẹp">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_9.png?1692086228721" alt="Thiết bị làm đẹp">
								<span>Thiết bị làm đẹp</span>
		
		<i class="float-right" data-toggle-submenu="">
		

<svg class="icon">
<use xlink:href="#icon-arrow"></use>
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class="toggle-submenu d-lg-none d-xl-none">
			<i class="mr-3">
				

<svg class="icon" style="transform: rotate(180deg)">
<use xlink:href="#icon-arrow"></use>
</svg>
			</i>
			<span>Thiết bị làm đẹp </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ làm đẹp">Dụng cụ làm đẹp</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Bút điện di massage">Bút điện di massage</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy tỉa lông mũi">Máy tỉa lông mũi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy massage nâng cơ mặt">Máy massage nâng cơ mặt</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ tạo kiểu tóc">Dụng cụ tạo kiểu tóc</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy sấy tóc">Máy sấy tóc</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy ép, duỗi tóc">Máy ép, duỗi tóc</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy uốn tóc">Máy uốn tóc</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Massage thư giãn và làm đẹp">Massage thư giãn và làm đẹp</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Massage mặt">Massage mặt</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Làm thon gọn cơ thể">Làm thon gọn cơ thể</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Máy xông da mặt">Máy xông da mặt</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ tẩy lông">Dụng cụ tẩy lông</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Sản phẩm định hình">Sản phẩm định hình</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cá nhân">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_10.png?1692086228721" alt="Chăm sóc cá nhân">
								<span>Chăm sóc cá nhân</span>
		
		<i class="float-right" data-toggle-submenu="">
		

<svg class="icon">
<use xlink:href="#icon-arrow"></use>
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class="toggle-submenu d-lg-none d-xl-none">
			<i class="mr-3">
				

<svg class="icon" style="transform: rotate(180deg)">
<use xlink:href="#icon-arrow"></use>
</svg>
			</i>
			<span>Chăm sóc cá nhân </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc cơ thể">Chăm sóc cơ thể</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc tóc">Chăm sóc tóc</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc sức khoẻ">Chăm sóc sức khoẻ</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước hoa">Nước hoa</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dưỡng tay chân">Dưỡng tay chân</a>
			</li>
		
		
	</ul>
	</div>
		</li>

</ul>
</nav>

</div>
	
</div>

<ul class="shop-policises list-unstyled  d-flex align-items-center flex-wrap m-0 pr-0">
						<li>
	<div class="">
		<img class="img-fluid " src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_header_image_1.png?1692086228721" width="32" height="32" alt="Chính sách đổi trả">
	</div>
	<a class="link" href="/chinh-sach" title="Chính sách đổi trả">Chính sách đổi trả</a>
</li>
							<li>
	<div class="">
		<img class="img-fluid " src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_header_image_2.png?1692086228721" width="32" height="32" alt="Hệ thống cửa hàng">
	</div>
	<a class="link" href="/he-thong-cua-hang" title="Hệ thống cửa hàng">Hệ thống cửa hàng</a>
</li>
							<li>
	<div class="">
		<img class="img-fluid " src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_header_image_3.png?1692086228721" width="32" height="32" alt="Kiểm tra đơn hàng">
	</div>
	<a class="link" href="/apps/kiem-tra-don-hang" title="Kiểm tra đơn hàng">Kiểm tra đơn hàng</a>
</li>
		
</ul>
	
</div>
</div>
<script type="text/x-custom-template" data-template="stickyHeader">
<header class="header header_sticky">

<div class="mid-header wid_100 d-flex align-items-center">
	<div class="container">

		<div class="row align-items-center">
			<div class="col-2 col-md-3 header-left d-lg-none d-block py-1">
				<div class="toggle-nav btn menu-bar mr-4 ml-0 p-0  d-lg-none d-flex text-white">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</div>
			</div>
			<div class="col-4 col-xl-3 col-lg-3  header-left d-none d-lg-flex align-items-center h-100">

				<div class="toogle-nav-wrapper w-100 " >
					<div class=" d-flex align-items-center" style="height: 52px; font-size: 1rem; font-weight: 500">
						<div class="icon-bar btn menu-bar mr-3 ml-0 p-0 d-inline-flex">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</div>
					Danh mục sản phẩm
					</div>
					
					<div class="navigation-wrapper">
						<nav class="h-100">
<ul  class="navigation list-group list-group-flush scroll">
	


		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Ưu đãi hot 49%">
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII=" 
	 alt="Ưu đãi hot 49%" />
					<span>Ưu đãi hot 49%</span>
		
		</a>			
		
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc da mặt">
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII=" 
	 alt="Chăm sóc da mặt" />
					<span>Chăm sóc da mặt</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
					<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dưỡng ẩm">Dưỡng ẩm</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Toner">Toner</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Mặt nạ">Mặt nạ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Serum - Tinh chất">Serum - Tinh chất</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kem dưỡng - Dầu dưỡng">Kem dưỡng - Dầu dưỡng</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Làm sạch da mặt">Làm sạch da mặt</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy trang">Tẩy trang</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Làm sạch da mặt">Làm sạch da mặt</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết">Tẩy tế bào chết</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Xịt khoáng">Xịt khoáng</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước hoa hồng">Nước hoa hồng</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Trang điểm">
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII=" 
	 alt="Trang điểm" />
					<span>Trang điểm</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
					<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Trang điểm mặt">Trang điểm mặt</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kem lót">Kem lót</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kem nền">Kem nền</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn phủ">Phấn phủ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn nước Cushion">Phấn nước Cushion</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Che khuyết điểm">Che khuyết điểm</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tạo khối - Highlighter">Tạo khối - Highlighter</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn má hồng">Phấn má hồng</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Trang điểm vùng mắt">Trang điểm vùng mắt</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kẻ chân mày">Kẻ chân mày</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kẻ mắt">Kẻ mắt</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Mascara">Mascara</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn mắt">Phấn mắt</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Trang điểm môi">Trang điểm môi</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son môi">Son môi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son dưỡng">Son dưỡng</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son lì">Son lì</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son bóng">Son bóng</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết môi">Tẩy tế bào chết môi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Mặt nạ môi">Mặt nạ môi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kẻ viền môi">Kẻ viền môi</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Móng">Móng</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Sơn móng">Sơn móng</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phụ kiện làm móng">Phụ kiện làm móng</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Tẩy Trang mắt - môi">Tẩy Trang mắt - môi</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ trang điểm">Dụng cụ trang điểm</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cơ thể">
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII=" 
	 alt="Chăm sóc cơ thể" />
					<span>Chăm sóc cơ thể</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
					<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Làm sạch cơ thể">Làm sạch cơ thể</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Sữa tắm - xà phòng tắm">Sữa tắm - xà phòng tắm</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Muối tắm">Muối tắm</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết toàn thân">Tẩy tế bào chết toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Gel rửa tay">Gel rửa tay</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dưỡng thể">Dưỡng thể</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng ẩm toàn thân">Dưỡng ẩm toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng trắng toàn thân">Dưỡng trắng toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Chống nắng toàn thân">Chống nắng toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng tay chân">Dưỡng tay chân</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Khử mùi">Khử mùi</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Khử mùi cho nam">Khử mùi cho nam</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Khử mùi cho nữ">Khử mùi cho nữ</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Vệ sinh phụ nữ">Vệ sinh phụ nữ</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dung dịch vệ sinh">Dung dịch vệ sinh</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Băng vệ sinh">Băng vệ sinh</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Kem massage - chăm sóc ngực">Kem massage - chăm sóc ngực</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Giảm mỡ/tan mỡ">Giảm mỡ/tan mỡ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Giảm rạn da">Giảm rạn da</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Nở ngực - săn chắc ngực">Nở ngực - săn chắc ngực</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Tẩy lông">Tẩy lông</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cá nhân">
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII=" 
	 alt="Chăm sóc cá nhân" />
					<span>Chăm sóc cá nhân</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
					<ul class="submenu__list">
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc răng miệng">Chăm sóc răng miệng</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Khẩu trang">Khẩu trang</a>
			</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/collections/all" title="Nước hoa nam">Nước hoa nam</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Nước hoa Eau De Parfum">Nước hoa Eau De Parfum</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước hoa nữ">Nước hoa nữ</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Nước hoa Eau De Toilrttee">Nước hoa Eau De Toilrttee</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước súc miệng">Nước súc miệng</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Sản phẩm thiên nhiên">
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII=" 
	 alt="Sản phẩm thiên nhiên" />
					<span>Sản phẩm thiên nhiên</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
					<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Tinh dầu các loại">Tinh dầu các loại</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tinh dầu thiên nhiên">Tinh dầu thiên nhiên</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dầu dừa thiên nhiên">Dầu dừa thiên nhiên</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Đèn xông hương">Đèn xông hương</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Sản phẩm thiên nhiên làm đẹp">Sản phẩm thiên nhiên làm đẹp</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nến thơm">Nến thơm</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc tóc">
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII=" 
	 alt="Chăm sóc tóc" />
					<span>Chăm sóc tóc</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
					<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dầu gội">Dầu gội</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Trị gàu">Trị gàu</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Ngăn rụng tóc">Ngăn rụng tóc</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Giảm dầu nhờn">Giảm dầu nhờn</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng tóc khô xơ">Dưỡng tóc khô xơ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Chăm sóc tóc nhuộm">Chăm sóc tóc nhuộm</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Mặt nạ - Kem ủ tóc">Mặt nạ - Kem ủ tóc</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dầu dưỡng tóc">Dầu dưỡng tóc</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Thuốc nhuộm - uốn - duỗi">Thuốc nhuộm - uốn - duỗi</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dầu xả">Dầu xả</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Bộ sản phẩm làm đẹp">
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII=" 
	 alt="Bộ sản phẩm làm đẹp" />
					<span>Bộ sản phẩm làm đẹp</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
					<ul class="submenu__list">
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc da mặt">Bộ chăm sóc da mặt</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ trang điểm">Bộ trang điểm</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc cơ thể">Bộ chăm sóc cơ thể</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc tóc và da đầu">Bộ chăm sóc tóc và da đầu</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Thiết bị làm đẹp">
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII=" 
	 alt="Thiết bị làm đẹp" />
					<span>Thiết bị làm đẹp</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
					<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ làm đẹp">Dụng cụ làm đẹp</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Bút điện di massage">Bút điện di massage</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy tỉa lông mũi">Máy tỉa lông mũi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy massage nâng cơ mặt">Máy massage nâng cơ mặt</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ tạo kiểu tóc">Dụng cụ tạo kiểu tóc</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy sấy tóc">Máy sấy tóc</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy ép, duỗi tóc">Máy ép, duỗi tóc</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy uốn tóc">Máy uốn tóc</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Massage thư giãn và làm đẹp">Massage thư giãn và làm đẹp</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Massage mặt">Massage mặt</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Làm thon gọn cơ thể">Làm thon gọn cơ thể</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Máy xông da mặt">Máy xông da mặt</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ tẩy lông">Dụng cụ tẩy lông</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Sản phẩm định hình">Sản phẩm định hình</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cá nhân">
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII=" 
	 alt="Chăm sóc cá nhân" />
					<span>Chăm sóc cá nhân</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
					<ul class="submenu__list">
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc cơ thể">Chăm sóc cơ thể</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc tóc">Chăm sóc tóc</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc sức khoẻ">Chăm sóc sức khoẻ</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước hoa">Nước hoa</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dưỡng tay chân">Dưỡng tay chân</a>
			</li>
		
		
	</ul>
	</div>
		</li>

</ul>
</nav>
					</div>
					
				</div>
				<div class="sticky-overlay">
					
				</div>
			</div>
			<div class=" col-8 col-md-6 col-lg-4 col-xl-4 header-center py-1" id="search-header">
				<form action="/search" method="get" class="input-group search-bar custom-input-group " role="search">
<input type="text" name="query" value="" autocomplete="off" 
	   class="input-group-field auto-search form-control " required="" 
	   data-placeholder="Tìm theo tên sản phẩm...; Tìm theo thương hiệu...;">
<input type="hidden" name="type" value="product">
<span class="input-group-btn btn-action">
	<button type="submit"  aria-label="search" class="btn text-white icon-fallback-text h-100">
		<svg class="icon">
<use xlink:href="#icon-search" />
</svg>		</button>
</span>

</form>

<div class="search-overlay">

</div>

			</div>
			<div class="col-2 col-md-3 col-xl-5  col-lg-5 py-1">
				<ul class="header-right mb-0 float-right list-unstyled  d-flex align-items-center">
<li class='media d-lg-flex d-none hotline '>
		<img loading="lazy"
			 src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/phone_icon.png?1692086228721" 
			 width="32" height="32" class="mr-3 align-self-center" 
			   alt="phone_icon"/>

	<div class="media-body d-md-flex flex-column d-none ">
		<span>Hỗ trợ khách hàng</span>
		<a class="font-weight-bold d-block" href="tel:19006750" title="19006750">
			19006750
		</a>
	</div>
</li>
<li class='ml-4 mr-4 mr-md-3 ml-md-3 media d-lg-flex d-none '>
	<img loading="lazy" src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/account_icon.png?1692086228721"  width="32" height="32" alt="account_icon"
		 class="  mr-3 align-self-center" />
	<div class="media-body d-md-flex flex-column d-none ">
					<a rel="nofollow" href="/account/login"  class="d-block" title="Tài khoản" >
			Tài khoản
		</a>
		<small>
			<a href="/account/login" title="Đăng nhập" class="font-weight: light">
				Đăng nhập
			</a> </small>
		
	</div>
</li>
<li class="cartgroup  ml-0 mr-2 mr-md-0">
	<div class="mini-cart text-xs-center">
		<a class="img_hover_cart" href="/cart" title="Giỏ hàng" >  
					<img 
						  loading="lazy" 
						 src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/cart_icon.png?1692086228721" 
						  width="24" height="24"
						  alt="cart_icon"
						 />

			<span class='mx-2 d-xl-block d-none'>Giỏ hàng</span>
			<span class="count_item count_item_pr">0</span>
		</a>
		<div class="top-cart-content card ">
			<ul id="cart-sidebar" class="mini-products-list count_li list-unstyled">
				<li class="list-item">
					<ul></ul>
				</li>
				<li class="action">

				</li>
			</ul>
		</div>
	</div>
</li>

</ul>
			</div>
		</div>
	</div>
</div>

</header>
</script>
	








<section class="bread-crumb mb-3">
<span class="crumb-border"></span>
<div class="container ">
	<div class="row">
		<div class="col-12 a-left">
			<ul class="breadcrumb m-0 px-0">					
				<li class="home">
					<a href="/" class="link"><span>Trang chủ</span></a>						
					<span class="mr_lr">&nbsp;/&nbsp;</span>
				</li>
				
				
				<li>
					<a class="changeurl link" href="/san-pham-flash-sale"><span>Sản phẩm Flash Sale</span></a>						
					<span class="mr_lr">&nbsp;/&nbsp;</span>
				</li>
				
				<li><strong><span>Combo Dầu gội và Dầu xả Tsubaki sạch dầu mát lạnh 490ml</span></strong></li>
				
			</ul>
		</div>
	</div>
</div>
</section> 

	
<link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/lightbox.css?1692086228721">

<link href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/lightbox.css?1692086228721" rel="stylesheet" type="text/css" media="all">
	<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/lightgallery.js?1692086228721">
<script src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/lightgallery.js?1692086228721" type="text/javascript"></script>


<section class="product details-main" itemscope="" itemtype="http://schema.org/Product">	
<!-- Start Product Schema -->
<meta itemprop="category" content="Sản phẩm Flash Sale">
<meta itemprop="url" content="//ega-cosmetic.mysapo.net/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml">
<meta itemprop="name" content="Combo Dầu gội và Dầu xả Tsubaki sạch dầu mát lạnh 490ml">
<meta itemprop="image" content="http://bizweb.dktcdn.net/thumb/grande/100/426/076/products/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml.jpg?v=1631849168343">
<meta itemprop="description" content="Làm sạch bụi bẩn, bã nhờn, dầu thừa, không gây khô hay tổn hại cho mái tóc hay da đầu, giúp hạn chế các vấn đề của da đầu như ngứa, khô, hạn chế tình trạng da đầu bị đổ dầu gây bết tóc &amp; gây mùi khó chịu.">
<div class="d-none" itemprop="brand" itemtype="https://schema.org/Brand" itemscope="">
	<meta itemprop="name" content="Tsubaki">
</div>
<meta itemprop="model" content="">
<div class="d-none hidden" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
	<div class="inventory_quantity hidden" itemscope="" itemtype="http://schema.org/ItemAvailability">
		<span class="a-stock" itemprop="supersededBy">
			Còn hàng
		</span>
	</div>
	<link itemprop="availability" href="http://schema.org/InStock">
	<meta itemprop="priceCurrency" content="VND">
	<meta itemprop="price" content="415000">
	<meta itemprop="url" content="https://ega-cosmetic.mysapo.net/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml">
	<span itemprop="UnitPriceSpecification" itemscope="" itemtype="https://schema.org/Downpayment">
		<meta itemprop="priceType" content="415000">
	</span>
	<span itemprop="UnitPriceSpecification" itemscope="" itemtype="https://schema.org/Downpayment">
		<meta itemprop="priceSpecification" content="455000">
	</span>
	<meta itemprop="priceValidUntil" content="2099-01-01">
</div>
<div class="d-none hidden" id="https://ega-cosmetic.mysapo.net" itemprop="seller" itemtype="http://schema.org/Organization" itemscope="">
	<meta itemprop="name" content="EGA Cosmetic">
	<meta itemprop="url" content="https://ega-cosmetic.mysapo.net">
	<meta itemprop="logo" content="http://bizweb.dktcdn.net/100/426/076/themes/917889/assets/logo.png?1692086228721">
</div>
<!-- End Product Schema -->
	<section class="section mt-0 mb-xl-5 mb-0">
	<div class="container card py-3">
		<div class="section wrap-padding-15 wp_product_main m-0">
			<div class="details-product  ">
				<div class="row ">
																	
					<div class="product-detail-left product-images col-xs-12 col-sm-12 col-md-8 
								mx-auto  col-xl-4   col-lg-6 ">
						<div class=" pb-3 pt-0  col_large_full large-image">

							
							
																<div id="gallery_1" class="slick-initialized slick-slider">

							<div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 473px; transform: translate3d(0px, 0px, 0px);" role="listbox"><a class="d-block pos-relative                              embed-responsive embed-responsive-1by1  slick-slide slick-current slick-active" data-src="//bizweb.dktcdn.net/thumb/1024x1024/100/426/076/products/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml.jpg?v=1631849168343" href="//bizweb.dktcdn.net/thumb/1024x1024/100/426/076/products/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml.jpg?v=1631849168343" data-rel="prettyPhoto[product-gallery]" data-slick-index="0" aria-hidden="false" style="width: 473px;" tabindex="-1" role="option" aria-describedby="slick-slide20">
								
								








<img class="product-frame " src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/frame_1.png?1692086228721" alt="" data-image-scale="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

">




								<img class="checkurl img-fluid" width="600" height="600" style="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

" src="//bizweb.dktcdn.net/thumb/grande/100/426/076/products/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml.jpg?v=1631849168343" alt="Combo Dầu gội và Dầu xả Tsubaki sạch dầu mát lạnh 490ml">

							</a></div></div>

							</div>
													
							
							
							<div class="hidden">
								
							</div>
						</div>
						
						
																												</div>

					<div class="col-xs-12 col-sm-12 px-lg-5  col-lg-6  details-pro">

							<div class="">

								<div class="">
										
																			<span class="first_status "><span class="status_name">

										<a href="/collections/all?q=vendor.filter_key:(%22Tsubaki%22)&amp;page=1&amp;view=grid" target="_blank" class="product-vendor" title="Tsubaki">
											Tsubaki
										</a>
																				</span>

										
									</span>
									<h1 class="title-product">Combo Dầu gội và Dầu xả Tsubaki sạch dầu mát lạnh 490ml</h1>
									<form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add" method="post" class="form_background  margin-bottom-0">

									
<div class="group-status">

<span class="first_status status_2">
	Tình trạng: 
	
	
	<span class="status_name availabel">
		Còn hàng
	</span>
	
	
	<span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>

</span>
<span class="first_status  product_sku">
	Mã SKU:
	<span class="status_name product-sku" itemprop="sku" content="Đang cập nhật">
		Đang cập nhật
		
	</span>
</span>
</div>
<div class="price-box">
				











		




<span class="special-price"><span class="price product-price">415.000₫</span> 
</span> <!-- Giá Khuyến mại -->
<span class="old-price">
	<del class=" product-price-old sale">455.000₫</del> 
</span> <!-- Giá gốc -->

<div class="label_product">
	
-9% 
	</div>
<div class="save-price">
	(Tiết kiệm: <span>40.000₫</span>)
</div>



</div>
																

	

<link rel="stylesheet" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/flashsale.css?1692086228721" media="all" onload="this.media='all'">

<noscript><link href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/flashsale.css?1692086228721" rel="stylesheet" type="text/css" media="all" /></noscript>	


<script>
window.flashSale = {
	flashSaleColl: "san-pham-flash-sale",
	type:"hours",
	dateStart: "30/11/2020",
	dateFinish: "1",
	hourStart: "00:00",
	hourFinish:  "24",
	activeDay: "7",
	finishAction: "show",
	finishLabel :"Chương trình đã kết thúc",
	percentMin: "50",
	percentMax: "90",
	maxInStock: "300",
	useSoldQuantity: true,
	useTags: true,
	timestamp: new Date().getTime(),
	openingText: "Vừa mở bán",
	soldText: "Đã bán [soluong] sản phẩm",
	outOfStockSoonText: "🔥 Sắp cháy hàng"
}
</script>
<script src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/flashsale.js?1692086228721" defer=""></script>



<div class="form-product pt-3">

<div class="box-variant clearfix ">
	
	<input type="hidden" name="variantId" value="51261092">
	
</div>
<div class="form_button_details margin-top-15 w-100">
	<div class="form_product_content type1 ">
		<div class="soluong soluong_type_1 show">
			<label>Số lượng:</label>
			<div class="custom input_number_product custom-btn-number ">									
				<button class="btn btn_num num_1 button button_qty" onclick="var result = document.getElementsByClassName('pd-qtym')[0];var stick_result = document.getElementsByClassName('pd-qtym')[1]; var qtypro = result.value; if(!isNaN( qtypro ) &amp;&amp; qtypro > 1){result.value--;stick_result.value--;}else{return false;}" type="button">
					<svg class="icon">
<use xlink:href="#icon-minus"></use>
</svg></button>
				<input type="text" id="qtym111" name="quantity" value="1" maxlength="3" class="form-control prd_quantity pd-qtym" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="var stick_result = document.getElementsByClassName('pd-qtym')[1];if(this.value == 0){this.value=1;}else{stick_result.value=this.value}">
				<button class="btn btn_num num_2 button button_qty" onclick="var result = document.getElementsByClassName('pd-qtym')[0];var stick_result = document.getElementsByClassName('pd-qtym')[1]; var qtypro = result.value; if( !isNaN( qtypro )) result.value++;stick_result.value++;return false;" type="button">
					<svg class="icon">
<use xlink:href="#icon-plus"></use>
</svg>					</button>
			</div>
		</div>
		<div class="button_actions clearfix" style="grid-template-columns:1fr 1fr ">
							
			<button type="submit" class="btn btn_base  btn-main  buynow ">
				<span class="text_1">Mua ngay</span>
			</button>									
			
							
			<button type="submit" class="btn btn_base btn_add_cart btn-cart add_to_cart ">
				<span class="text_1">Thêm vào giỏ </span>
			</button>									
			

		</div>

	</div>
</div>
</div>
									</form>
									
									<div class="sapo-appcombo-module-detail"></div>
<script type="text/x-custom-template" data-template="comboModuleDetail">
<div class="module-combo">
	<h4>${comboName}</h4>
	<div class="module-content-combo">
		<div class="list-product">${listProduct}</div>
		<div class="total-action">
			<div class="total-price-bg">
				<p>Giá gốc: <span class="price-regular">${priceRegular}</span><del>${priceOriginal}</del></p>
				<p>Tiết kiệm: <span class="price-saving">${priceSaving}</span></p>
				<p>Giá combo: <span class="price-combo">${priceCombo}</span></p>
			</div>
			<div class="action">
				<button type="button" class="btn-addtocart-combo" onclick="submitDealCombo(this)">Thêm Vào Giỏ Hàng</button>
			</div>
		</div>
	</div>
</div>
</script>
<script type="text/x-custom-template" data-template="comboModuleProduct">
<div class="item-product" data-product-id="${productId}">
	<div class="product-image"><a href="${productUrl}" target="_blank"><img src="${productImage}" alt="${productTitle}"></a></div>
	<div class="product-content">
		<div class="product-title"><a href="${productUrl}" target="_blank">${productTitle}</a></div>
		<div class="product-variant">${variantTitle}</div>
		<div class="price">
			<span class="price-regular" data-price="${productPriceRegular}">${productPriceRegularFormat}</span>
			<del class="price-old" data-price="${productPriceOriginal}">${productPriceOriginalFormat}</del>
		</div>
		${optionProduct}
	</div>
	<input type="text" class="id-item" value="${variantId}" style="display: none;">
</div>
</script>
<script async="">
var hostCombo = "https://combo.sapoapps.vn/";
var productsComboDetail, valueType, valueDiscount, itemDiscounts, saving;
	$(window).on('load', function(){
		var $selectedVariantIdCombo = $('input[name^=variantId]:checked, select[name^=variantId], input[name=variantId], hidden[name^=variantId],input[name=variantId]',$('form[action="/cart/add"]'));
		if($selectedVariantIdCombo.length > 0){
			var variantId = $selectedVariantIdCombo.first().val();
			if(variantId){
				$.ajax({
					url: hostCombo + 'api/client/module-detail',
					type: "POST",
					data:{
						productId: 23009191,
						storeAlias: getAlias(Bizweb.store)
					},
					success: function(data){
						if(data != null && data != '' && data.error == null){
							if(data.products_combo != null && data.products_combo.length > 1){
								productsComboDetail = data.products_combo;
								valueType = data.value_type;
								valueDiscount = data.value_discount;
								saving = data.total_price_saving;
								itemDiscounts = data.item_discounts;
								createTemplateCombo(data);
							}
						}else if(data.error != null){
							console.log(data.error);
						}
					},
					error: function(){
						console.log("Có lỗi xảy ra");
					}
				});
			}
		}
	});

	function createTemplateCombo(data){
		var TemplateModule = $('script[data-template="comboModuleDetail"]').text().split(/\$\{(.+?)\}/g);
		var TemplateProduct = $('script[data-template="comboModuleProduct"]').text().split(/\$\{(.+?)\}/g);
		var totalPriceCombo = data.total_price_combo, totalPriceRegular = data.total_price_regular, totalPriceOriginal = data.total_price_original, totalPriceSaving = data.total_price_saving;
		var listProductTemplate = renderProductDataCombo(data.products_combo);
		var listItem = listProductTemplate.map(function(itemProduct) {
			return TemplateProduct.map(render(itemProduct)).join('');
		});
		var moduleData = {
			listProduct: listItem.join(''),
			priceRegular: Bizweb.formatMoney(totalPriceRegular, '{{150000}}₫'),
			priceOriginal: totalPriceOriginal > totalPriceRegular ? Bizweb.formatMoney(totalPriceOriginal, '{{150000}}₫') : 0,
			priceSaving: Bizweb.formatMoney(totalPriceSaving, '{{150000}}₫'),
			priceCombo: Bizweb.formatMoney(totalPriceCombo, '{{150000}}₫'),
			comboName: escapeHtml(data.combo_name)
		};
		var htmlFinal = $(TemplateModule.map(render(moduleData)).join(''));
		htmlFinal.find('.item-product').each(function(index, item){
			if($(item).find('.product-variant').text() == "Default Title"){
				$(item).find('.product-variant').hide();
			}
			if($(item).find('.price-old').data('price') == "" || parseInt($(item).find('.price-old').data('price')) == 0 ||  parseInt($(item).find('.price-old').data('price')) == parseInt($(item).find('.price-regular').data('price'))){
				$(item).find('.price-old').hide();
			}
		});
		if(totalPriceOriginal > totalPriceRegular){
			htmlFinal.find(".total-price-bg").find('del').show();
		}else{
			htmlFinal.find(".total-price-bg").find('del').hide();
		}
		$('.sapo-appcombo-module-detail').html(htmlFinal);
	}

	function renderProductDataCombo(listProduct){
		var listProductTemplate = [];
		$.each(listProduct, function(i, item) {
			if (item.variants.length > 0) {
				var ItemProduct = {
					productId: item.sapo_product_id,
					productUrl: '/' + item.alias,
					productTitle: escapeHtml(item.name)
				};
				ItemProduct['productPriceRegular'] = item.variants[0].price;
				ItemProduct['productPriceRegularFormat'] = Bizweb.formatMoney(item.variants[0].price, '{{150000}}₫');
				ItemProduct['productPriceOriginal'] = item.variants[0].compare_at_price ?? 0;
				ItemProduct['productPriceOriginalFormat'] = Bizweb.formatMoney(item.variants[0].compare_at_price, '{{150000}}₫');
				ItemProduct['variantId'] = item.variants[0].sapo_variant_id;

				if(item.variants[0].image){
					ItemProduct['productImage'] = item.variants[0].image;
				} else if (item.image) {
					ItemProduct['productImage'] = item.image;
				}else {
					ItemProduct['productImage'] = 'http://bizweb.dktcdn.net/thumb/small/assets/themes_support/noimage.gif';
				}

				var optionProduct = selectVariantComboToTemplate(item);
				if(optionProduct != null){
					ItemProduct['optionProduct'] =  optionProduct[0].outerHTML;
				}else{
					ItemProduct['optionProduct'] =  '';
					ItemProduct['variantTitle'] = escapeHtml(item.variants[0].title);
				}
				listProductTemplate.push(ItemProduct);
			}
		});
		return listProductTemplate;
	}

	function selectVariantComboToTemplate(item){
		if(item.variants.length > 1){
			var optionProduct = $('<select/>', {class: "selector-variant-combo", onChange: "changeVariantCombo(this)" });
			for(var k = 0; k < item.variants.length; k++){
				optionProduct.append("<option value='"+ item.variants[k].sapo_variant_id +"'>"+ escapeHtml(item.variants[k].title) +"</option>")
			}
			return optionProduct;
		}
		return null;
	}

	function changeVariantCombo(elem){
		var variantSelected = $(elem).find("option:selected").val(),
			itemProduct = $(elem).parents('.item-product'),
			dataProduct = productsComboDetail.filter(item => item.sapo_product_id == itemProduct.data('product-id')),
			dataVariant = dataProduct[0].variants.filter(item => item.sapo_variant_id == variantSelected);
		itemProduct.find(".price-regular").attr('data-price', dataVariant[0].price).text(Bizweb.formatMoney(dataVariant[0].price, '{{150000}}₫'));
		itemProduct.find(".price-old").attr('data-price', dataVariant[0].compare_at_price).text(Bizweb.formatMoney(dataVariant[0].compare_at_price, '{{150000}}₫'));
		itemProduct.find(".id-item").val(variantSelected);
		if(dataVariant[0].compare_at_price == null || !dataVariant[0].compare_at_price > 0 || dataVariant[0].price == dataVariant[0].compare_at_price){
			itemProduct.find(".price-old").hide();
		}else{
			itemProduct.find(".price-old").show();
		}
		debugger
		if(dataVariant[0].image) {
			itemProduct.find(".product-image img").attr('src', dataVariant[0].image);
		}else if(dataProduct[0].image){
			itemProduct.find(".product-image img").attr('src', dataProduct[0].image);
		}else {
			itemProduct.find(".product-image img").attr('src', 'http://bizweb.dktcdn.net/thumb/small/assets/themes_support/noimage.gif');
		}

		var totalPriceRegular = 0, totalPriceOriginal = 0, totalPriceSaving = 0, totalPriceCombo;
		$(elem).parents(".module-combo").find(".item-product").each(function(){
			totalPriceRegular += parseInt($(this).find('.price-regular').attr('data-price'));
			totalPriceOriginal += parseInt($(this).find('.price-old').attr('data-price'));
			if(valueType != "total_fixed_amount"){
				totalPriceSaving += caculatorDiscountCombo(parseInt($(this).find('.price-regular').attr('data-price')));
			}
		});
		if(valueType == "total_fixed_amount"){
			totalPriceSaving = valueDiscount;
		}
		if (valueType == "percentage"){
			totalPriceCombo = totalPriceRegular - totalPriceSaving;
		} else if (valueType == "fixed_amount"){
			var totalDiscount = totalPriceRegular - totalPriceSaving
			totalPriceCombo = totalPriceRegular - totalDiscount;
			totalPriceSaving = totalDiscount;
		} else {
			totalPriceCombo = totalPriceRegular - totalPriceSaving;
		}

		$(elem).parents(".module-combo").find(".total-price-bg").find('.price-regular').text(Bizweb.formatMoney(totalPriceRegular, '{{150000}}₫'));
		if(totalPriceOriginal > totalPriceRegular){
			$(elem).parents(".module-combo").find(".total-price-bg").find('del').show();
			$(elem).parents(".module-combo").find(".total-price-bg").find('del').text(Bizweb.formatMoney(totalPriceOriginal, '{{150000}}₫'));
		}else{
			$(elem).parents(".module-combo").find(".total-price-bg").find('del').hide();
		}
		if(valueType == "percentage" || valueType == "fixed_amount"){
			 $(elem).parents(".module-combo").find(".total-price-bg").find('.price-saving').text(Bizweb.formatMoney(totalPriceSaving, '{{150000}}₫'));
			}
		$(elem).parents(".module-combo").find(".total-price-bg").find('.price-combo').text(Bizweb.formatMoney(totalPriceCombo, '{{150000}}₫'));

	}
	function caculatorDiscountCombo(itemPrice, productId){
		if(valueType == "percentage"){
			var percentage = 100;
			var percentageAfter = valueDiscount / percentage;
			itemPrice = itemPrice * percentageAfter;
		} else if (valueType == "fixed_amount") {
			var items = JSON.parse(itemDiscounts);
			if (items[productId]){
				if (itemPrice > items[productId]) {
					itemPrice = itemPrice - items[productId];
				} else {
					itemPrice = 0
				}
			}
		}
		return itemPrice;
	}

	function submitDealCombo(elem){
		$(elem).prop("disabled", true);
		var success = false;
		var variantIds = [];
		$(elem).parents('.module-combo').find('.id-item').each(function() {
			variantIds.push($(this).val());
		});
		if(variantIds.length > 0){
			for(var i = 0; i < variantIds.length; i++){
				$.ajax({
					type: 'POST',
					url: '/cart/add.js',
					async: false,
					data: "quantity=" + 1 + "&VariantId=" + variantIds[i],
					dataType: 'json',
					error: function(){
						$(elem).prop("disabled", false);
					},
					success: function(){
						success = true;
					},
					cache: false
				});
			}
			if(success === true){
				$(elem).prop("disabled", false);
				window.location.href= "/cart";
			}
		}
	}

	function render(props) {
		return function(tok, i) {
			return (i % 2) ? props[tok] : tok;
		};
	}

	function getAlias(domain){
		domain = domain.replace(".mysapo.net","");
		domain = domain.replace("http://","");
		domain = domain.replace("https://","");
		return domain;
	}

	function escapeHtml(unsafe) {
		return unsafe
			.replace(/&/g, "&amp;")
			.replace(/</g, "&lt;")
			.replace(/>/g, "&gt;")
			.replace(/"/g, "&quot;")
			.replace(/'/g, "&#039;");
	}
</script>
									<div class="sapo-buyxgety-module-detail-v2"></div>
									
																												   
																			
									
									
								</div>
																			<div class="product-policises-wrapper">
<!--	<h5 class="m-0 mb-3">
Chỉ có ở EGA Cosmetic:
</h5> -->
<ul class="product-policises list-unstyled row ">
					<li class="media col-12">
	<div class="mr-3">
		<img class="img-fluid " width="32" height="32" src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_product_image_1.png?1692086228721" alt="Giao hàng toàn quốc">
	</div>
	<div class="media-body"> 
		Giao hàng toàn quốc
	</div>
</li>
						<li class="media col-12">
	<div class="mr-3">
		<img class="img-fluid " width="32" height="32" src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_product_image_2.png?1692086228721" alt="Tích điểm tất cả sản phẩm">
	</div>
	<div class="media-body"> 
		Tích điểm tất cả sản phẩm
	</div>
</li>
						<li class="media col-12">
	<div class="mr-3">
		<img class="img-fluid " width="32" height="32" src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_product_image_3.png?1692086228721" alt="Giảm 5% khi thanh toán online">
	</div>
	<div class="media-body"> 
		Giảm 5% khi thanh toán online
	</div>
</li>
						<li class="media col-12">
	<div class="mr-3">
		<img class="img-fluid " width="32" height="32" src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_product_image_4.png?1692086228721" alt="Cam kết chính hãng">
	</div>
	<div class="media-body"> 
		Cam kết chính hãng
	</div>
</li>
		
</ul>
</div>
									

							</div>


					</div>
					
					<div class="col-12 col-xl-2 pl-md-3   product-right">
						<link rel="preload" as="style" type="text/css" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/coupon.css?1692086228721">

<link rel="stylesheet" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/coupon.css?1692086228721">


<div class="section_coupons ">
<div class="container px-0  py-2 card border-0">
	<div class="row scroll">
									
		<!-- -->
																	
		<!-- -->
																	
		<!-- -->
																	
		<!-- -->
																				
																																																																																																																																																																																																																																																																																																																
		
														
		<div class="col-xl-12 col-lg col-md-5 col-10 mb-xl-3 
			">
			<div class="coupon_item no-icon">
	<div class="coupon_body">
	<div class="coupon_head">
		<h3 class="coupon_title">NHẬP MÃ: EGA10</h3>
		<div class="coupon_desc">Mã giảm 10% cho đơn hàng tối thiểu 500k.			</div>

	</div>
	<div class="d-flex align-items-center flex-wrap justify-content-between">
		<button class="btn btn-main btn-sm  coupon_copy" data-ega-coupon="EGA10">
			<span>Sao chép mã</span></button>
					<span class="coupon_info_toggle" data-coupon="EGA10">
			Điều kiện
		</span>

		<div class="coupon_info">
			- Mã giảm 10% cho đơn tối thiểu 500k.
<br>
- Mỗi khách hàng được sử dụng tối đa 1 lần.			</div>
		
	</div>
</div>
</div>			</div>
		

																																
		
														
		<div class="col-xl-12 col-lg col-md-5 col-10 mb-xl-3 
			">
			<div class="coupon_item no-icon">
	<div class="coupon_body">
	<div class="coupon_head">
		<h3 class="coupon_title">NHẬP MÃ: EGA15</h3>
		<div class="coupon_desc">Mã giảm 15% cho đơn hàng tối thiểu 700k.			</div>

	</div>
	<div class="d-flex align-items-center flex-wrap justify-content-between">
		<button class="btn btn-main btn-sm  coupon_copy" data-ega-coupon="EGA15">
			<span>Sao chép mã</span></button>
		
	</div>
</div>
</div>			</div>
		

																																
		
														
		<div class="col-xl-12 col-lg col-md-5 col-10 mb-xl-3 
			">
			<div class="coupon_item no-icon">
	<div class="coupon_body">
	<div class="coupon_head">
		<h3 class="coupon_title">NHẬP MÃ: EGA99K</h3>
		<div class="coupon_desc">Mã giảm 99k cho đơn hàng tối thiểu 600k.			</div>

	</div>
	<div class="d-flex align-items-center flex-wrap justify-content-between">
		<button class="btn btn-main btn-sm  coupon_copy" data-ega-coupon="EGA99K">
			<span>Sao chép mã</span></button>
		
	</div>
</div>
</div>			</div>
		

																																
		
														
		<div class="col-xl-12 col-lg col-md-5 col-10 mb-xl-3 
			">
			<div class="coupon_item no-icon">
	<div class="coupon_body">
	<div class="coupon_head">
		<h3 class="coupon_title">NHẬP MÃ: FREESHIP</h3>
		<div class="coupon_desc">Miễn phí vận chuyển cho đơn tối thiểu 500k.			</div>

	</div>
	<div class="d-flex align-items-center flex-wrap justify-content-between">
		<button class="btn btn-main btn-sm  coupon_copy" data-ega-coupon="EGANY04">
			<span>Sao chép mã</span></button>
		
	</div>
</div>
</div>			</div>
		

																																																																																																																																		</div>
</div>
</div>
<script type="text/x-custom-template" data-template="couponPopup">
<div id="coupon-modal" class="coupon-modal modal fade " role="dialog" style="display:none;">
<div class="modal-dialog align-vertical">
<div class="modal-content">
	<button type="button" class="close window-close" data-dismiss="modal" data-backdrop="false"
	aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>
	<div class="coupon-content"></div>
</div>
</div>
</div>
	</script>
<script>
$(document).ready(()=>{
	let initCoupon = false
	function initCoupons (){
	if( initCoupon) return
	initCoupon = true
	if(!$('#coupon-modal').length){
	$('body').append($('[data-template="couponPopup"]').html())
	}
	$('.coupon_info_toggle').click(function(e){
			e.preventDefault();
			const code = $(this).data('coupon')
			const info = $(this).next('.coupon_info').html()|| ''
			const title = $(this).parents('.coupon_body').find('.coupon_title').text() || ''
			const couponHtml = `
				<div class="coupon-title">${title}</div>
				<div class="coupon-row">
					<div class="coupon-label">Mã khuyến mãi:</div><span class="code">${code}</span>

				</div>
				<div class="coupon-row">
					<div class="coupon-label">Điều kiện:</div><div class="coupon-info">${info}</div>
				</div>
				<div class="coupon-action">
				<button type="button" class="btn btn-main" data-dismiss="modal" data-backdrop="false"
					aria-label="Close" style="z-index: 9;">Đóng</button>
				<button class="btn btn-main coupon_copy" data-ega-coupon="${code}">
					<span>Sao chép mã</span></button>
				</div>
				`
			$('.coupon-modal .coupon-content').html(couponHtml)
			$("#coupon-modal").modal();
		})
		$(document).on('click','.coupon_copy', function() {
			
	const copyText = "Sao chép mã";
	const copiedText = "Đã sao chép";
	const coupon = $(this).data().egaCoupon;
	const _this = $(this);
	_this.html(`<span>${copiedText}</span>`);
	_this.addClass('disabled');
	setTimeout(function() {
		_this.html(`<span>${copyText}</span>`);
		_this.removeClass('disabled');
	}, 3000)
	navigator.clipboard.writeText(coupon);
})
	
	}
$(window).one(' mousemove touchstart scroll', initCoupons)
		
})
</script><script>
$('.filter-item-toggle').click(function(){
	$(this).toggleClass('show')
	let overflowItem = $(this).parent().find('.overflow-item')
	overflowItem.toggleClass('show')
	let text = !$(this).hasClass('show') ? 'Xem tất cả ưu đãi <i class="fas fa-chevron-down "></i>' : 'Thu gọn <i class="fas fa-chevron-down "></i>'  
	$(this).html(text)
})


</script>						</div>
					
				</div>
			</div>
		</div>
	</div>


</section>
	<section class="section sec_tab ">
	<div class="container card  px-3 py-3">
		<div class="row">
			<div class="col-12 col-xl-9 pr-xl-5 product-content">
				<div class="title_module_main heading-bar d-flex justify-content-between align-items-center">
					<h2 class="heading-bar__title ">
						Mô tả sản phẩm
					</h2>
				</div>
				<div id="ega-uti-editable-content" data-platform="sapo" data-id="23009191" class="rte product_getcontent py-3 pos-relative border-top" style="border-color: var(--text-color)!important">
					
					<div id="content">
						<p><strong><em>Thành phần:</em></strong></p>
<p>-&nbsp; Sữa ong chúa, Protein đậu nành, Tinh dầu hoa trà<br>
- Thành phần nuôi tóc bóng mượt: hợp chất Squalane<br>
- Công thức chứa bạc hà mang đến cảm giác mát lạnh sảng khoái suốt ngày dài.<br>
- Mùi hương hoa cỏ &amp; bạc hà sang trọng, thanh mát</p>
<p><strong><em>Công dụng:</em></strong>&nbsp;</p>
<p>1. Dầu gội: Làm sạch bụi bẩn, bã nhờn, dầu thừa, không gây khô hay tổn hại cho mái tóc hay da đầu, giúp hạn chế các vấn đề của da đầu như ngứa, khô, hạn chế tình trạng da đầu bị đổ dầu gây bết tóc &amp; gây mùi khó chịu.</p>
<p>2. Dầu xả:&nbsp;Nuôi dưỡng &amp; phục hồi mái tóc hư tổn, mang lại mái tóc mềm mại &amp; bóng mượt, hạn chế tình trạng tóc gãy rụng do khô rối. Đồng thời, giúp loại bỏ các vấn đề của da đầu như ngứa, khô, hạn chế tình trạng da đầu bị đổ dầu gây bết tóc &amp; gây mùi khó chịu.</p>
<p>Xuất Xứ Thương Hiệu: Nhật Bản</p>
<p>Nơi Sản Xuất: Nhật Bản</p>
<p>Ngày sản xuất: Xem trên bao bì sản phẩm</p>
<p>Hạn Sử Dụng: 3 Năm Kể Từ NSX</p>
					</div>

					


				</div>
				<div class="ega-pro__seemore text-center pos-relative my-3" style="display: none;">
					<a href="javascript:void(0)" title="Xem thêm" class="btn btn-main  ">
						Xem thêm
					</a>
				</div>
					


<script type="text/javascript">
$(document).ready(function ($) {
	$(window).one(' mousemove touchstart scroll', function() {
		(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
	})
})
</script>					</div>
			
			
			
		</div>


	</div>
</section>

</div>
</div>
</section>	

<section class="section sec_tab ">
	







<div class="container card py-2 related-product">
<div class="title_module mb-3 heading-bar d-flex justify-content-between align-items-center">
	<h2 class="bf_flower heading-bar__title">
		<a href="/san-pham-flash-sale" title="Sản phẩm cùng loại">Sản phẩm cùng loại</a>
	</h2>
</div>
	

<div class="section_prd_feature" id="sidebarproduct">
	<div class="section products product_related slick-product slickrelated row slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow slick-disabled" aria-label="Previous" role="button" aria-disabled="true" style="display: inline-block;">Previous</button>
		









































	<div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1512px; transform: translate3d(0px, 0px, 0px);" role="listbox"><div class="item   col-7 col-md-5 col-lg-15 slick-slide slick-current slick-active" style="width: 252px;" tabindex="-1" role="option" aria-describedby="slick-slide00" data-slick-index="0" aria-hidden="false">
<div class="item_product_main ">
	






























<form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-23009374" enctype="multipart/form-data">
<div class="product-thumbnail pos-relative">
	<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/dau-goi-kho-colab-dry-shampoo-200ml" title="Dầu Gội Khô Colab Dry Shampoo (200ml)" tabindex="0">
		








<img class="product-frame " src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/frame_1.png?1692086228721" alt="" data-image-scale="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

">




		<img width="480" height="480" style="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

" src="//bizweb.dktcdn.net/thumb/large/100/426/076/products/dau-goi-kho.png?v=1631850497793" alt="Dầu Gội Khô Colab Dry Shampoo (200ml)">
		
	</a>
			
	<div class="product-action">
					<div class="group_action" data-url="/dau-goi-kho-colab-dry-shampoo-200ml">
							
			<a title="Xem nhanh" href="/dau-goi-kho-colab-dry-shampoo-200ml" data-handle="dau-goi-kho-colab-dry-shampoo-200ml" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view" tabindex="0">
				<i class="fas fa-search"></i>
			</a>
			
		</div>
				</div>
</div>
<div class="product-info">
	
	<span class="product-vendor">Colab</span>
			<h3 class="product-name"><a href="/dau-goi-kho-colab-dry-shampoo-200ml" title="Dầu Gội Khô Colab Dry Shampoo (200ml)" tabindex="0">Dầu Gội Khô Colab Dry Shampoo (200ml)</a></h3>
	
	<div class="product-item-cta position-relative">
		<div class="price-box">
        
        
			<span class="price">172.000₫</span>
			
			<span class="compare-price">215.000₫</span>
			
		<div class="label_product d-lg-none d-md-none d-xl-none d-inline-block">
			<div class="label_wrapper">
	-20% 
			</div>
		</div>
		
						
			
			
			
				
		</div>
						
				<input type="hidden" name="variantId" value="51260912">
				<button class="product-item-btn btn add_to_cart active " title="Thêm vào giỏ hàng">
				<svg class="icon">
	<use xlink:href="#icon-plus"></use>
	</svg>
				</button>
		
			
		
			
			
	</div>
					

																					
			
</div>
</form>
</div>
</div><div class="item   col-7 col-md-5 col-lg-15 slick-slide slick-active" style="width: 252px;" tabindex="-1" role="option" aria-describedby="slick-slide01" data-slick-index="1" aria-hidden="false">
<div class="item_product_main ">
	

























<form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-23009281" enctype="multipart/form-data">
<div class="product-thumbnail pos-relative">
	<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/dau-goi-herbal-essences-dau-tay-bac-ha-chai-400ml" title="Dầu Gội Herbal Essences Dâu Tây &amp; Bạc Hà Chai 400ml" tabindex="0">
		












		<img width="480" height="480" style="--image-scale: 1;" src="//bizweb.dktcdn.net/thumb/large/100/426/076/products/dau-goi-herbal-essences-dau-tay-bac-ha-chai-400ml1.jpg?v=1633838439133" alt="Dầu Gội Herbal Essences Dâu Tây &amp; Bạc Hà Chai 400ml">
		
	</a>
			
	<div class="product-action">
					<div class="group_action" data-url="/dau-goi-herbal-essences-dau-tay-bac-ha-chai-400ml">
							
			<a title="Xem nhanh" href="/dau-goi-herbal-essences-dau-tay-bac-ha-chai-400ml" data-handle="dau-goi-herbal-essences-dau-tay-bac-ha-chai-400ml" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view" tabindex="0">
				<i class="fas fa-search"></i>
			</a>
			
		</div>
				</div>
</div>
<div class="product-info">
	
	<span class="product-vendor">Herbal Essences</span>
			<h3 class="product-name"><a href="/dau-goi-herbal-essences-dau-tay-bac-ha-chai-400ml" title="Dầu Gội Herbal Essences Dâu Tây &amp; Bạc Hà Chai 400ml" tabindex="0">Dầu Gội Herbal Essences Dâu Tây &amp; Bạc Hà Chai 400ml</a></h3>
	
	<div class="product-item-cta position-relative">
	<div class="price-box">
		
		
		<span class="price">185.000₫</span>
		
		
		
			
	</div>
					
			<input type="hidden" name="variantId" value="51261242" tabindex="0">
			<button class="product-item-btn btn add_to_cart active " title="Thêm vào giỏ hàng" tabindex="0">
			<svg class="icon">
<use xlink:href="#icon-plus"></use>
</svg>
			</button>
			
			
	</div>
				

																					
			
</div>
</form>
</div>
</div><div class="item   col-7 col-md-5 col-lg-15 slick-slide slick-active" style="width: 252px;" tabindex="-1" role="option" aria-describedby="slick-slide02" data-slick-index="2" aria-hidden="false">
<div class="item_product_main ">
	






































<form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-23009243" enctype="multipart/form-data">
<div class="product-thumbnail pos-relative">
	<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/dau-duong-toc-dcash-horse-oil-healthy-elegant-80ml" title="DẦU DƯỠNG TÓC DCASH HORSE OIL HEALTHY ELEGANT 80ML" tabindex="0">
		








<img class="product-frame " src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/frame_1.png?1692086228721" alt="" data-image-scale="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

">




		<img width="480" height="480" style="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

" src="//bizweb.dktcdn.net/thumb/large/100/426/076/products/dau-duong-toc-dcash-horse-oil-healthy-elegant-80ml.png?v=1631849565787" alt="DẦU DƯỠNG TÓC DCASH HORSE OIL HEALTHY ELEGANT 80ML">
		
	</a>
			
	<div class="label_product ">
		<div class="label_wrapper">
-29% 
		</div>
	</div>
	
	<div class="product-action">
					<div class="group_action" data-url="/dau-duong-toc-dcash-horse-oil-healthy-elegant-80ml">
							
			<a title="Xem nhanh" href="/dau-duong-toc-dcash-horse-oil-healthy-elegant-80ml" data-handle="dau-duong-toc-dcash-horse-oil-healthy-elegant-80ml" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view" tabindex="0">
				<i class="fas fa-search"></i>
			</a>
			
		</div>
				</div>
</div>
<div class="product-info">
	
	<span class="product-vendor">Dcash</span>
			<h3 class="product-name"><a href="/dau-duong-toc-dcash-horse-oil-healthy-elegant-80ml" title="DẦU DƯỠNG TÓC DCASH HORSE OIL HEALTHY ELEGANT 80ML" tabindex="0">DẦU DƯỠNG TÓC DCASH HORSE OIL HEALTHY ELEGANT 80ML</a></h3>
	
	<div class="product-item-cta position-relative">
	<div class="price-box">
		
		
		<span class="price">99.000₫</span>
		
		<span class="compare-price">139.000₫</span>
		
	<div class="label_product d-lg-none d-md-none d-xl-none d-inline-block">
		<div class="label_wrapper">
-29% 
		</div>
	</div>
	
					
		
		
		
			
	</div>
					
			<input type="hidden" name="variantId" value="51261187" tabindex="0">
			<button class="product-item-btn btn add_to_cart active " title="Thêm vào giỏ hàng" tabindex="0">
			<svg class="icon">
<use xlink:href="#icon-plus"></use>
</svg>
			</button>
			
			
	</div>
					

																					
			
</div>
</form>
</div>
</div><div class="item   col-7 col-md-5 col-lg-15 slick-slide slick-active" style="width: 252px;" tabindex="-1" role="option" aria-describedby="slick-slide03" data-slick-index="3" aria-hidden="false">
<div class="item_product_main ">
	






































<form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-23009217" enctype="multipart/form-data">
<div class="product-thumbnail pos-relative">
	<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/dau-duong-toc-dcash-tsubaki-oil-essential-80ml" title="DẦU DƯỠNG TÓC DCASH TSUBAKI OIL ESSENTIAL 80ML" tabindex="0">
		








<img class="product-frame " src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/frame_1.png?1692086228721" alt="" data-image-scale="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

">




		<img width="480" height="480" style="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

" src="//bizweb.dktcdn.net/thumb/large/100/426/076/products/dau-duong-toc-dcash-tsubaki-oil-essential-80ml.png?v=1631849412993" alt="DẦU DƯỠNG TÓC DCASH TSUBAKI OIL ESSENTIAL 80ML">
		
	</a>
			
	<div class="label_product ">
		<div class="label_wrapper">
-29% 
		</div>
	</div>
	
	<div class="product-action">
					<div class="group_action" data-url="/dau-duong-toc-dcash-tsubaki-oil-essential-80ml">
							
			<a title="Xem nhanh" href="/dau-duong-toc-dcash-tsubaki-oil-essential-80ml" data-handle="dau-duong-toc-dcash-tsubaki-oil-essential-80ml" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view" tabindex="0">
				<i class="fas fa-search"></i>
			</a>
			
		</div>
				</div>
</div>
<div class="product-info">
	
	<span class="product-vendor">Dcash</span>
			<h3 class="product-name"><a href="/dau-duong-toc-dcash-tsubaki-oil-essential-80ml" title="DẦU DƯỠNG TÓC DCASH TSUBAKI OIL ESSENTIAL 80ML" tabindex="0">DẦU DƯỠNG TÓC DCASH TSUBAKI OIL ESSENTIAL 80ML</a></h3>
	
	<div class="product-item-cta position-relative">
	<div class="price-box">
		
		
		<span class="price">99.000₫</span>
		
		<span class="compare-price">139.000₫</span>
		
	<div class="label_product d-lg-none d-md-none d-xl-none d-inline-block">
		<div class="label_wrapper">
-29% 
		</div>
	</div>
	
					
		
		
		
			
	</div>
					
			<input type="hidden" name="variantId" value="51261148" tabindex="0">
			<button class="product-item-btn btn add_to_cart active " title="Thêm vào giỏ hàng" tabindex="0">
			<svg class="icon">
<use xlink:href="#icon-plus"></use>
</svg>
			</button>
			
			
	</div>
					

																					
			
</div>
</form>
</div>
</div><div class="item   col-7 col-md-5 col-lg-15 slick-slide" style="width: 252px;" tabindex="-1" role="option" aria-describedby="slick-slide04" data-slick-index="4" aria-hidden="true">
<div class="item_product_main ">
	






































<form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-23009122" enctype="multipart/form-data">
<div class="product-thumbnail pos-relative">
	<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/dau-xa-herbal-essences-tinh-dau-morocco-argan-400ml" title="Dầu xả Herbal Essences Tinh Dầu Morocco Argan 400ml" tabindex="-1">
		








<img class="product-frame " src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/frame_1.png?1692086228721" alt="" data-image-scale="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

">




		<img width="480" height="480" style="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

" src="//bizweb.dktcdn.net/thumb/large/100/426/076/products/dau-xa-herbal-essences-tinh-dau-morocco-argan-400ml-1.jpg?v=1631848759313" alt="Dầu xả Herbal Essences Tinh Dầu Morocco Argan 400ml">
		
	</a>
			
	<div class="label_product ">
		<div class="label_wrapper">
-9% 
		</div>
	</div>
	
	<div class="product-action">
					<div class="group_action" data-url="/dau-xa-herbal-essences-tinh-dau-morocco-argan-400ml">
							
			<a title="Xem nhanh" href="/dau-xa-herbal-essences-tinh-dau-morocco-argan-400ml" data-handle="dau-xa-herbal-essences-tinh-dau-morocco-argan-400ml" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view" tabindex="-1">
				<i class="fas fa-search"></i>
			</a>
			
		</div>
				</div>
</div>
<div class="product-info">
	
	<span class="product-vendor">Herbal Essences</span>
			<h3 class="product-name"><a href="/dau-xa-herbal-essences-tinh-dau-morocco-argan-400ml" title="Dầu xả Herbal Essences Tinh Dầu Morocco Argan 400ml" tabindex="-1">Dầu xả Herbal Essences Tinh Dầu Morocco Argan 400ml</a></h3>
	
	<div class="product-item-cta position-relative">
	<div class="price-box">
		
		
		<span class="price">215.000₫</span>
		
		<span class="compare-price">235.000₫</span>
		
	<div class="label_product d-lg-none d-md-none d-xl-none d-inline-block">
		<div class="label_wrapper">
-9% 
		</div>
	</div>
	
					
		
		
		
			
	</div>
					
			<input type="hidden" name="variantId" value="51260990" tabindex="-1">
			<button class="product-item-btn btn add_to_cart active " title="Thêm vào giỏ hàng" tabindex="-1">
			<svg class="icon">
<use xlink:href="#icon-plus"></use>
</svg>
			</button>
			
			
	</div>
					

																					
			
</div>
</form>
</div>
</div><div class="item   col-7 col-md-5 col-lg-15 slick-slide" style="width: 252px;" tabindex="-1" role="option" aria-describedby="slick-slide05" data-slick-index="5" aria-hidden="true">
<div class="item_product_main ">
	

























<form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-23009100" enctype="multipart/form-data">
<div class="product-thumbnail pos-relative">
	<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/vedette-mat-na-u-toc-bo-vedet-110g" title="Vedette Mặt Nạ Ủ Tóc Bơ Vedet 110G" tabindex="-1">
		












		<img width="480" height="480" style="--image-scale: 1;" src="//bizweb.dktcdn.net/thumb/large/100/426/076/products/vedette-mat-na-u-toc-bo-vedet-110g.png?v=1631848516097" alt="Vedette Mặt Nạ Ủ Tóc Bơ Vedet 110G">
		
	</a>
			
	<div class="product-action">
					<div class="group_action" data-url="/vedette-mat-na-u-toc-bo-vedet-110g">
							
			<a title="Xem nhanh" href="/vedette-mat-na-u-toc-bo-vedet-110g" data-handle="vedette-mat-na-u-toc-bo-vedet-110g" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view" tabindex="-1">
				<i class="fas fa-search"></i>
			</a>
			
		</div>
				</div>
</div>
<div class="product-info">
	
	<span class="product-vendor">Vedet</span>
			<h3 class="product-name"><a href="/vedette-mat-na-u-toc-bo-vedet-110g" title="Vedette Mặt Nạ Ủ Tóc Bơ Vedet 110G" tabindex="-1">Vedette Mặt Nạ Ủ Tóc Bơ Vedet 110G</a></h3>
	
	<div class="product-item-cta position-relative">
	<div class="price-box">
		
		
		<span class="price">54.000₫</span>
		
		
		
			
	</div>
					
			<input type="hidden" name="variantId" value="51260954" tabindex="-1">
			<button class="product-item-btn btn add_to_cart active " title="Thêm vào giỏ hàng" tabindex="-1">
			<svg class="icon">
<use xlink:href="#icon-plus"></use>
</svg>
			</button>
			
			
	</div>
				

																					
			
</div>
</form>
</div>
</div></div></div><button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;" aria-disabled="false">Next</button></div>
</div>


	</div>

<script>
function relatedProductSlide(){
	if(window.matchMedia('(min-width: 768px)').matches && $('.slickrelated .item').length >= 6){
		$('.slickrelated').slick({
			autoplay: false,
			autoplaySpeed: 6000,
			dots: false,
			arrows: true,
			infinite: false,
			speed: 300,
			slidesToShow: 5,
			slidesToScroll: 5,
			centerMode: false,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 4
					}
				},
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				}
			]
		});
	}
}
function initProductsRelated() {
	const tag = ""
	const relatedType = "tag"
	const id= "23009191"
	if(relatedType === 'tag' && tag !== '') {
		$.get(`/search?q= NOT id:${id} AND tags:(${tag})&view=related`).then(resposne => {
			if(resposne && resposne.length) {
				$('.slickrelated').append(resposne)
				relatedProductSlide()
				$('.related-product .heading-bar__title a').attr('href', `search?q=tags:(${tag})`)
			} else {
				
				$('.slickrelated').append(`









<div class="item   col-7 col-md-5 col-lg-15 ">
<div class="item_product_main ">
	






























<form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-23009374" enctype="multipart/form-data">
<div class="product-thumbnail pos-relative">
	<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/dau-goi-kho-colab-dry-shampoo-200ml" title="Dầu Gội Khô Colab Dry Shampoo (200ml)">
		








<img class="product-frame " 
 src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/frame_1.png?1692086228721" alt=""
 data-image-scale="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

"
 loading="lazy"
 />




		<img loading="lazy" 
			 width="480"
			 height="480"
			 style="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

"
			 src="//bizweb.dktcdn.net/thumb/large/100/426/076/products/dau-goi-kho.png?v=1631850497793" alt="Dầu Gội Khô Colab Dry Shampoo (200ml)">
		
	</a>
			
	<div class="product-action">
					<div class="group_action" data-url="/dau-goi-kho-colab-dry-shampoo-200ml">
							
			<a title="Xem nhanh" href="/dau-goi-kho-colab-dry-shampoo-200ml" data-handle="dau-goi-kho-colab-dry-shampoo-200ml" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
				<i class="fas fa-search"></i>
			</a>
			
		</div>
				</div>
</div>
<div class="product-info">
	
	<span class="product-vendor">Colab</span>
			<h3 class="product-name"><a href="/dau-goi-kho-colab-dry-shampoo-200ml" title="Dầu Gội Khô Colab Dry Shampoo (200ml)">Dầu Gội Khô Colab Dry Shampoo (200ml)</a></h3>
	
	<div class="product-item-cta position-relative" >
	<div class="price-box">
		
		
		<span class="price">195.000₫</span>
		
		
		
			
	</div>
					
			<input class="hidden" type="hidden" name="variantId" value="51261451" />
							
		<button data-href="/dau-goi-kho-colab-dry-shampoo-200ml" data-handle="dau-goi-kho-colab-dry-shampoo-200ml" class="product-item-btn btn left-to  quick-view" title="Tùy chọn" type="button" >
					<svg class="icon">
<use xlink:href="#icon-cart" />
</svg>
			</button>
		
			
		
			
			
	</div>
					

																					
			
</div>
</form>
</div>
</div>




<div class="item   col-7 col-md-5 col-lg-15 ">
<div class="item_product_main ">
	

























<form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-23009281" enctype="multipart/form-data">
<div class="product-thumbnail pos-relative">
	<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/dau-goi-herbal-essences-dau-tay-bac-ha-chai-400ml" title="Dầu Gội Herbal Essences Dâu Tây & Bạc Hà Chai 400ml">
		












		<img loading="lazy" 
			 width="480"
			 height="480"
			 style="--image-scale: 1;"
			 src="//bizweb.dktcdn.net/thumb/large/100/426/076/products/dau-goi-herbal-essences-dau-tay-bac-ha-chai-400ml1.jpg?v=1633838439133" alt="Dầu Gội Herbal Essences Dâu Tây & Bạc Hà Chai 400ml">
		
	</a>
			
	<div class="product-action">
					<div class="group_action" data-url="/dau-goi-herbal-essences-dau-tay-bac-ha-chai-400ml">
							
			<a title="Xem nhanh" href="/dau-goi-herbal-essences-dau-tay-bac-ha-chai-400ml" data-handle="dau-goi-herbal-essences-dau-tay-bac-ha-chai-400ml" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
				<i class="fas fa-search"></i>
			</a>
			
		</div>
				</div>
</div>
<div class="product-info">
	
	<span class="product-vendor">Herbal Essences</span>
			<h3 class="product-name"><a href="/dau-goi-herbal-essences-dau-tay-bac-ha-chai-400ml" title="Dầu Gội Herbal Essences Dâu Tây & Bạc Hà Chai 400ml">Dầu Gội Herbal Essences Dâu Tây & Bạc Hà Chai 400ml</a></h3>
	
	<div class="product-item-cta position-relative" >
	<div class="price-box">
		
		
		<span class="price">185.000₫</span>
		
		
		
			
	</div>
					
			<input type="hidden" name="variantId" value="51261242" />
			<button class="product-item-btn btn add_to_cart active " title="Thêm vào giỏ hàng">
			<svg class="icon">
<use xlink:href="#icon-plus" />
</svg>
			</button>
			
			
	</div>
				

																					
			
</div>
</form>
</div>
</div>




<div class="item   col-7 col-md-5 col-lg-15 ">
<div class="item_product_main ">
	






































<form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-23009243" enctype="multipart/form-data">
<div class="product-thumbnail pos-relative">
	<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/dau-duong-toc-dcash-horse-oil-healthy-elegant-80ml" title="DẦU DƯỠNG TÓC DCASH HORSE OIL HEALTHY ELEGANT 80ML">
		








<img class="product-frame " 
 src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/frame_1.png?1692086228721" alt=""
 data-image-scale="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

"
 loading="lazy"
 />




		<img loading="lazy" 
			 width="480"
			 height="480"
			 style="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

"
			 src="//bizweb.dktcdn.net/thumb/large/100/426/076/products/dau-duong-toc-dcash-horse-oil-healthy-elegant-80ml.png?v=1631849565787" alt="DẦU DƯỠNG TÓC DCASH HORSE OIL HEALTHY ELEGANT 80ML">
		
	</a>
			
	<div class="label_product ">
		<div class="label_wrapper">
-29% 
		</div>
	</div>
	
	<div class="product-action">
					<div class="group_action" data-url="/dau-duong-toc-dcash-horse-oil-healthy-elegant-80ml">
							
			<a title="Xem nhanh" href="/dau-duong-toc-dcash-horse-oil-healthy-elegant-80ml" data-handle="dau-duong-toc-dcash-horse-oil-healthy-elegant-80ml" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
				<i class="fas fa-search"></i>
			</a>
			
		</div>
				</div>
</div>
<div class="product-info">
	
	<span class="product-vendor">Dcash</span>
			<h3 class="product-name"><a href="/dau-duong-toc-dcash-horse-oil-healthy-elegant-80ml" title="DẦU DƯỠNG TÓC DCASH HORSE OIL HEALTHY ELEGANT 80ML">DẦU DƯỠNG TÓC DCASH HORSE OIL HEALTHY ELEGANT 80ML</a></h3>
	
	<div class="product-item-cta position-relative" >
	<div class="price-box">
		
		
		<span class="price">99.000₫</span>
		
		<span class="compare-price">139.000₫</span>
		
	<div class="label_product d-lg-none d-md-none d-xl-none d-inline-block">
		<div class="label_wrapper">
-29% 
		</div>
	</div>
	
					
		
		
		
			
	</div>
					
			<input type="hidden" name="variantId" value="51261187" />
			<button class="product-item-btn btn add_to_cart active " title="Thêm vào giỏ hàng">
			<svg class="icon">
<use xlink:href="#icon-plus" />
</svg>
			</button>
			
			
	</div>
					

																					
			
</div>
</form>
</div>
</div>




<div class="item   col-7 col-md-5 col-lg-15 ">
<div class="item_product_main ">
	






































<form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-23009217" enctype="multipart/form-data">
<div class="product-thumbnail pos-relative">
	<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/dau-duong-toc-dcash-tsubaki-oil-essential-80ml" title="DẦU DƯỠNG TÓC DCASH TSUBAKI OIL ESSENTIAL 80ML">
		








<img class="product-frame " 
 src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/frame_1.png?1692086228721" alt=""
 data-image-scale="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

"
 loading="lazy"
 />




		<img loading="lazy" 
			 width="480"
			 height="480"
			 style="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

"
			 src="//bizweb.dktcdn.net/thumb/large/100/426/076/products/dau-duong-toc-dcash-tsubaki-oil-essential-80ml.png?v=1631849412993" alt="DẦU DƯỠNG TÓC DCASH TSUBAKI OIL ESSENTIAL 80ML">
		
	</a>
			
	<div class="label_product ">
		<div class="label_wrapper">
-29% 
		</div>
	</div>
	
	<div class="product-action">
					<div class="group_action" data-url="/dau-duong-toc-dcash-tsubaki-oil-essential-80ml">
							
			<a title="Xem nhanh" href="/dau-duong-toc-dcash-tsubaki-oil-essential-80ml" data-handle="dau-duong-toc-dcash-tsubaki-oil-essential-80ml" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
				<i class="fas fa-search"></i>
			</a>
			
		</div>
				</div>
</div>
<div class="product-info">
	
	<span class="product-vendor">Dcash</span>
			<h3 class="product-name"><a href="/dau-duong-toc-dcash-tsubaki-oil-essential-80ml" title="DẦU DƯỠNG TÓC DCASH TSUBAKI OIL ESSENTIAL 80ML">DẦU DƯỠNG TÓC DCASH TSUBAKI OIL ESSENTIAL 80ML</a></h3>
	
	<div class="product-item-cta position-relative" >
	<div class="price-box">
		
		
		<span class="price">99.000₫</span>
		
		<span class="compare-price">139.000₫</span>
		
	<div class="label_product d-lg-none d-md-none d-xl-none d-inline-block">
		<div class="label_wrapper">
-29% 
		</div>
	</div>
	
					
		
		
		
			
	</div>
					
			<input type="hidden" name="variantId" value="51261148" />
			<button class="product-item-btn btn add_to_cart active " title="Thêm vào giỏ hàng">
			<svg class="icon">
<use xlink:href="#icon-plus" />
</svg>
			</button>
			
			
	</div>
					

																					
			
</div>
</form>
</div>
</div>






<div class="item   col-7 col-md-5 col-lg-15 ">
<div class="item_product_main ">
	






































<form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-23009122" enctype="multipart/form-data">
<div class="product-thumbnail pos-relative">
	<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/dau-xa-herbal-essences-tinh-dau-morocco-argan-400ml" title="Dầu xả Herbal Essences Tinh Dầu Morocco Argan 400ml">
		








<img class="product-frame " 
 src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/frame_1.png?1692086228721" alt=""
 data-image-scale="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

"
 loading="lazy"
 />




		<img loading="lazy" 
			 width="480"
			 height="480"
			 style="--image-scale: 0.8;--img-left: 0;
transform: translate(0,-50%) scale(var(--image-scale));
transform-origin: left center;

"
			 src="//bizweb.dktcdn.net/thumb/large/100/426/076/products/dau-xa-herbal-essences-tinh-dau-morocco-argan-400ml-1.jpg?v=1631848759313" alt="Dầu xả Herbal Essences Tinh Dầu Morocco Argan 400ml">
		
	</a>
			
	<div class="label_product ">
		<div class="label_wrapper">
-9% 
		</div>
	</div>
	
	<div class="product-action">
					<div class="group_action" data-url="/dau-xa-herbal-essences-tinh-dau-morocco-argan-400ml">
							
			<a title="Xem nhanh" href="/dau-xa-herbal-essences-tinh-dau-morocco-argan-400ml" data-handle="dau-xa-herbal-essences-tinh-dau-morocco-argan-400ml" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
				<i class="fas fa-search"></i>
			</a>
			
		</div>
				</div>
</div>
<div class="product-info">
	
	<span class="product-vendor">Herbal Essences</span>
			<h3 class="product-name"><a href="/dau-xa-herbal-essences-tinh-dau-morocco-argan-400ml" title="Dầu xả Herbal Essences Tinh Dầu Morocco Argan 400ml">Dầu xả Herbal Essences Tinh Dầu Morocco Argan 400ml</a></h3>
	
	<div class="product-item-cta position-relative" >
	<div class="price-box">
		
		
		<span class="price">215.000₫</span>
		
		<span class="compare-price">235.000₫</span>
		
	<div class="label_product d-lg-none d-md-none d-xl-none d-inline-block">
		<div class="label_wrapper">
-9% 
		</div>
	</div>
	
					
		
		
		
			
	</div>
					
			<input type="hidden" name="variantId" value="51260990" />
			<button class="product-item-btn btn add_to_cart active " title="Thêm vào giỏ hàng">
			<svg class="icon">
<use xlink:href="#icon-plus" />
</svg>
			</button>
			
			
	</div>
					

																					
			
</div>
</form>
</div>
</div>




<div class="item   col-7 col-md-5 col-lg-15 ">
<div class="item_product_main ">
	

























<form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-23009100" enctype="multipart/form-data">
<div class="product-thumbnail pos-relative">
	<a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/vedette-mat-na-u-toc-bo-vedet-110g" title="Vedette Mặt Nạ Ủ Tóc Bơ Vedet 110G">
		












		<img loading="lazy" 
			 width="480"
			 height="480"
			 style="--image-scale: 1;"
			 src="//bizweb.dktcdn.net/thumb/large/100/426/076/products/vedette-mat-na-u-toc-bo-vedet-110g.png?v=1631848516097" alt="Vedette Mặt Nạ Ủ Tóc Bơ Vedet 110G">
		
	</a>
			
	<div class="product-action">
					<div class="group_action" data-url="/vedette-mat-na-u-toc-bo-vedet-110g">
							
			<a title="Xem nhanh" href="/vedette-mat-na-u-toc-bo-vedet-110g" data-handle="vedette-mat-na-u-toc-bo-vedet-110g" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
				<i class="fas fa-search"></i>
			</a>
			
		</div>
				</div>
</div>
<div class="product-info">
	
	<span class="product-vendor">Vedet</span>
			<h3 class="product-name"><a href="/vedette-mat-na-u-toc-bo-vedet-110g" title="Vedette Mặt Nạ Ủ Tóc Bơ Vedet 110G">Vedette Mặt Nạ Ủ Tóc Bơ Vedet 110G</a></h3>
	
	<div class="product-item-cta position-relative" >
	<div class="price-box">
		
		
		<span class="price">54.000₫</span>
		
		
		
			
	</div>
					
			<input type="hidden" name="variantId" value="51260954" />
			<button class="product-item-btn btn add_to_cart active " title="Thêm vào giỏ hàng">
			<svg class="icon">
<use xlink:href="#icon-plus" />
</svg>
			</button>
			
			
	</div>
				

																					
			
</div>
</form>
</div>
</div>



`)
				relatedProductSlide()
				
			}
		})
	} else {
		relatedProductSlide()
	}
}
initProductsRelated()
</script>
</section>

</section>



<script> 
var ww = $(window).width();
var getLimit = 3;
var productDetail = {"id":23009191,"name":"Combo Dầu gội và Dầu xả Tsubaki sạch dầu mát lạnh 490ml","alias":"combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml","vendor":"Tsubaki","type":"Chăm sóc tóc","content":"<p><strong><em>Thành phần:</em></strong></p>\n<p>-&nbsp; Sữa ong chúa, Protein đậu nành, Tinh dầu hoa trà<br />\n- Thành phần nuôi tóc bóng mượt: hợp chất Squalane<br />\n- Công thức chứa bạc hà mang đến cảm giác mát lạnh sảng khoái suốt ngày dài.<br />\n- Mùi hương hoa cỏ &amp; bạc hà sang trọng, thanh mát</p>\n<p><strong><em>Công dụng:</em></strong>&nbsp;</p>\n<p>1. Dầu gội: Làm sạch bụi bẩn, bã nhờn, dầu thừa, không gây khô hay tổn hại cho mái tóc hay da đầu, giúp hạn chế các vấn đề của da đầu như ngứa, khô, hạn chế tình trạng da đầu bị đổ dầu gây bết tóc &amp; gây mùi khó chịu.</p>\n<p>2. Dầu xả:&nbsp;Nuôi dưỡng &amp; phục hồi mái tóc hư tổn, mang lại mái tóc mềm mại &amp; bóng mượt, hạn chế tình trạng tóc gãy rụng do khô rối. Đồng thời, giúp loại bỏ các vấn đề của da đầu như ngứa, khô, hạn chế tình trạng da đầu bị đổ dầu gây bết tóc &amp; gây mùi khó chịu.</p>\n<p>Xuất Xứ Thương Hiệu: Nhật Bản</p>\n<p>Nơi Sản Xuất: Nhật Bản</p>\n<p>Ngày sản xuất: Xem trên bao bì sản phẩm</p>\n<p>Hạn Sử Dụng: 3 Năm Kể Từ NSX</p>","summary":"<p>Làm sạch bụi bẩn, bã nhờn, dầu thừa, không gây khô hay tổn hại cho mái tóc hay da đầu, giúp hạn chế các vấn đề của da đầu như ngứa, khô, hạn chế tình trạng da đầu bị đổ dầu gây bết tóc &amp; gây mùi khó chịu.</p>","template_layout":null,"available":true,"tags":["cham soc toc","frame1"],"price":415000.0000,"price_min":415000.0000,"price_max":415000.0000,"price_varies":false,"compare_at_price":455000.0000,"compare_at_price_min":455000.0000,"compare_at_price_max":455000.0000,"compare_at_price_varies":false,"variants":[{"id":51261092,"barcode":null,"sku":null,"title":"Default Title","options":["Default Title"],"option1":"Default Title","option2":null,"option3":null,"available":true,"taxable":false,"price":415000.0000,"compare_at_price":455000.0000,"inventory_management":"","inventory_policy":"deny","inventory_quantity":0,"weight_unit":"g","weight":0,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/426/076/products/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml.jpg?v=1631849168343"}}],"featured_image":{"src":"https://bizweb.dktcdn.net/100/426/076/products/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml.jpg?v=1631849168343"},"images":[{"src":"https://bizweb.dktcdn.net/100/426/076/products/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml.jpg?v=1631849168343"}],"options":["Title"],"created_on":"2021-09-17T10:26:07","modified_on":"2023-04-24T17:55:01","published_on":"2021-09-17T10:26:00"}

	function validate(evt) {
		var theEvent = evt || window.event;
		var key = theEvent.keyCode || theEvent.which;
		key = String.fromCharCode( key );
		var regex = /[0-9]|\./;
		if( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) theEvent.preventDefault();
		}
	}
function changeContactFormBody  (sku){
	$('#comment').val(`Đăng ký nhận thông báo khi có hàng. Sản phảm: Combo Dầu gội và Dầu xả Tsubaki sạch dầu mát lạnh 490ml. SKU: ${sku}`)

}
changeContactFormBody('')
var selectCallback = function (variant, selector) {
	if (variant) {
		var form = jQuery('#' + selector.domIdPrefix).closest('form');

		for (var i = 0, length = variant.options.length; i < length; i++) {

			var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
			if (radioButton.size()) {
				radioButton.get(0).checked = true;
			}
		}
	}
	var addToCart = jQuery('.form-product .add_to_cart'),
		buyNow = jQuery('.form-product .buynow'),
		group = jQuery('.form_product_content'),
		form = jQuery('.form-product .button_actions'),
		form2 = jQuery('.soluong'),
		product_sku = jQuery('.details-pro .product_sku .status_name'),
		productPrice = jQuery('.details-pro .special-price .product-price'),
		qty = jQuery('.first_status .availabel'),
		sale = jQuery('.details-pro .old-price .product-price-old'),
		comparePrice = jQuery('.details-pro .old-price .product-price-old'),
		discountLabel= jQuery('.details-pro .label_product'),
		savePrice = jQuery('.details-pro .save-price'),
		vat = jQuery('.form-group .vat');

	/* SKU */
	if (variant && variant.sku != "" && variant.sku != null) {
		product_sku.html(variant.sku);
				changeContactFormBody(variant.sku)

	} else {
		product_sku.html('Đang cập nhật');
				changeContactFormBody('')

	}
	/*** VAT ***/
	if (variant) {
		if (variant.taxable) {
			$('.form-group').removeClass('hidden').find('.vat').text('(Đã bao gồm VAT)');
		} else {
			$('.form-group').removeClass('hidden').find('.vat').text('(Chưa bao gồm VAT)');
		}
	}

	if (variant && variant.available) {
		if (variant.inventory_management == "bizweb" || variant.inventory_management == "sapo") {
			if (variant.inventory_quantity != 0  ) {
				qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Còn hàng');
			} else if (variant.inventory_quantity == '') {
				qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Hết hàng');
			}
		} else {
			qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Còn hàng');
		}

		group.removeClass('hidden');
		addToCart.html('<span class="text_1">Thêm vào giỏ </span>').removeAttr('disabled').removeAttr('disabled').removeClass('hidden');;
		buyNow.html('<span class="text_1">Mua ngay</span>').removeAttr('disabled').removeClass('hidden');
		$('#stock-notify').addClass('hidden')
		if (variant.price == 0) {
			productPrice.html('Liên hệ');
			comparePrice.hide();
			discountLabel.hide();
			savePrice.hide();
			form.addClass('hidden');
			vat.addClass('hidden');
			form2.addClass('hidden');
			sale.removeClass('sale');
			group.addClass('hidden');
			$('#stock-notify').addClass('hidden')

			if (variant.inventory_management == "bizweb" || variant.inventory_management == "sapo") {
				if (variant.inventory_quantity != 0) {
					qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
				} else if (variant.inventory_quantity == '') {
					qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Hết hàng');
				}
			} else {
				qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
			}
		} else {
			form.removeClass('hidden');
			productPrice.html(Bizweb.formatMoney(variant.price, "{{150000}}₫"));
												 // Also update and show the product's compare price if necessary
												 if (variant.compare_at_price > variant.price) {
							  let save = variant.compare_at_price - variant.price
							  discountLabel.html(`-${Math.ceil(save / variant.compare_at_price * 100)}%`).show()
savePrice.html(`(Tiết kiệm <span>${Bizweb.formatMoney(save, "{{150000}}₫")}</span>)`).show();
			 comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{150000}}₫")).show();
			 sale.addClass('sale');

		if (variant.inventory_management == "bizweb" || variant.inventory_management == "sapo") {
			if (variant.inventory_quantity != 0) {
				qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
				form2.removeClass('hidden');
				form.removeClass('hidden');
				vat.removeClass('hidden');
			} else if (variant.inventory_quantity == '') {
				qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
				form2.removeClass('hidden');
				form.removeClass('hidden');
				vat.removeClass('hidden');
			}
		} else {
			qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
			form2.removeClass('hidden');
			form.removeClass('hidden');
			vat.removeClass('hidden');
		}

	} else {
		comparePrice.hide();
		discountLabel.hide();
		savePrice.hide();
		sale.removeClass('sale');
		form2.removeClass('hidden');
		vat.removeClass('hidden');
		if (variant.inventory_management == "bizweb" || variant.inventory_management == "sapo") {
			if (variant.inventory_quantity != 0) {
				qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
				form2.removeClass('hidden');
				form.removeClass('hidden');
			} else if (variant.inventory_quantity == '') {
				qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
				form2.removeClass('hidden');
				form.removeClass('hidden');
			}
		} else {
			qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
			form2.removeClass('hidden');
			form.removeClass('hidden');
		}
	}
}

} else {
	addToCart.html('<span class="text_1">Hết hàng</span>').attr('disabled', 'disabled');
	buyNow.html('<span class="text_1">Hết hàng</span>').attr('disabled', 'disabled').addClass('hidden');

	qty.html('Hết hàng');
	$('#stock-notify').removeClass('hidden')
	form.removeClass('hidden');
	form2.addClass('hidden');
	group.removeClass('hidden');
	vat.removeClass('hidden');

	if (variant) {
		if (variant.price != 0) {

			form.removeClass('hidden');
			productPrice.html(Bizweb.formatMoney(variant.price, "{{150000}}₫"));
												 // Also update and show the product's compare price if necessary
												 if (variant.compare_at_price > variant.price) {
							  form.addClass('hidden');
			let save = variant.compare_at_price - variant.price
			discountLabel.html(`-${Math.ceil(save / variant.compare_at_price * 100)}%`).show()
			savePrice.html(`(Tiết kiệm <span>${Bizweb.formatMoney(save, "{{150000}}₫")}</span>)`).show();
																  comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{150000}}₫")).show();
																  sale.addClass('sale');
						   addToCart.html('<span class="text_1">Hết hàng</span>').attr('disabled', 'disabled').removeClass('hidden');
			buyNow.html('<span class="text_1">Hết hàng</span>').attr('disabled', 'disabled').addClass('hidden')
			$('#stock-notify').removeClass('hidden')
			if (variant.inventory_management == "bizweb" || variant.inventory_management == "sapo") {

				if (variant.inventory_quantity != 0 && variant.available) {
					qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
				} else {
					qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Hết hàng');
					form2.addClass('hidden');
					form.removeClass('hidden');
				}
			} else {
				qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
			}

		} else {
			discountLabel.hide();
			savePrice.hide();
			comparePrice.hide();
			vat.removeClass('hidden');
			sale.removeClass('sale');
			form.addClass('hidden');
			addToCart.html('<span class="text_1">Hết hàng</span>').attr('disabled', 'disabled').removeClass('hidden');
			buyNow.html('<span class="text_1">Hết hàng</span>').attr('disabled', 'disabled')
			$('#stock-notify').removeClass('hidden')
			if (variant.inventory_management == "bizweb" || variant.inventory_management == "sapo") {
				if (variant.inventory_quantity != 0 && variant.available) {
					qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
				} else{
					form2.addClass('hidden');
					qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Hết hàng');
					form.removeClass('hidden');
				}
			} else {
				qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
			}
		}
	} else {
		productPrice.html('Liên hệ');
		form2.addClass('hidden');
		vat.addClass('hidden');
		comparePrice.hide();
		discountLabel.hide();
		savePrice.hide();
		form.removeClass('hidden');
		sale.removeClass('sale');
		$('#stock-notify').addClass('hidden')
	}
} else {
	productPrice.html('Liên hệ');
	form2.addClass('hidden');
	vat.addClass('hidden');
	comparePrice.hide();
	discountLabel.hide();
	savePrice.hide();
	form.addClass('hidden');
	sale.removeClass('sale');
				$('#stock-notify').addClass('hidden')

}
}
/*begin variant image*/
if (variant && variant.image) {
	var originalImage = jQuery(".large-image img");
	var newImage = variant.image;
	var element = originalImage[0];
	Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {

		$('.slider-nav .slick-slide').each(function () {
			var $this = $(this);
			var imgThis = $this.find('img').attr('data-img');
			if (newImage.src.split("?")[0] == imgThis.split("?")[0]) {
				var pst = $this.attr('data-slick-index');
				jQuery(".slider-for").slick('slickGoTo', pst);
				$('.pict.image').attr('src',newImage.src)
			}
		});
	});

	setTimeout(function () {
		$('.checkurl').attr('href', $(this).attr('src'));

		if (ww >= 1200) {
			
		}
	}, 200);

}
};
jQuery('.swatch .swatch-element  :radio').change(function() {
	var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
	var optionValue = jQuery(this).val();
	$(`.single-option-selector[data-option="option${+optionIndex+1}"]`)
		.val(optionValue)
		.trigger('change');
});
$('#ega-sticky-addcart').on('change','.single-option-selector',function(e){
		var optionIndex = jQuery(e.target).data('option')
		var optionValue  = jQuery(e.target).val()
	$(`.form-product .single-option-selector[data-option="${optionIndex}"]`)
		.val(optionValue)
		.trigger('change');
})
$(".dp-flex img").click(function(e){
	e.preventDefault();
	var hr = $(this).attr('data-src');
	$('.checkurl ').attr('src',hr);
	$('.large-image a').attr('data-href',hr);
});

if (ww >= 1200){
	
}


/*For recent product*/
var alias = 'combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml';
/*end*/
if (ww >= 1200){
	
}

</script>

<script>

var productDetail = {"id":23009191,"name":"Combo Dầu gội và Dầu xả Tsubaki sạch dầu mát lạnh 490ml","alias":"combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml","vendor":"Tsubaki","type":"Chăm sóc tóc","content":"<p><strong><em>Thành phần:</em></strong></p>\n<p>-&nbsp; Sữa ong chúa, Protein đậu nành, Tinh dầu hoa trà<br />\n- Thành phần nuôi tóc bóng mượt: hợp chất Squalane<br />\n- Công thức chứa bạc hà mang đến cảm giác mát lạnh sảng khoái suốt ngày dài.<br />\n- Mùi hương hoa cỏ &amp; bạc hà sang trọng, thanh mát</p>\n<p><strong><em>Công dụng:</em></strong>&nbsp;</p>\n<p>1. Dầu gội: Làm sạch bụi bẩn, bã nhờn, dầu thừa, không gây khô hay tổn hại cho mái tóc hay da đầu, giúp hạn chế các vấn đề của da đầu như ngứa, khô, hạn chế tình trạng da đầu bị đổ dầu gây bết tóc &amp; gây mùi khó chịu.</p>\n<p>2. Dầu xả:&nbsp;Nuôi dưỡng &amp; phục hồi mái tóc hư tổn, mang lại mái tóc mềm mại &amp; bóng mượt, hạn chế tình trạng tóc gãy rụng do khô rối. Đồng thời, giúp loại bỏ các vấn đề của da đầu như ngứa, khô, hạn chế tình trạng da đầu bị đổ dầu gây bết tóc &amp; gây mùi khó chịu.</p>\n<p>Xuất Xứ Thương Hiệu: Nhật Bản</p>\n<p>Nơi Sản Xuất: Nhật Bản</p>\n<p>Ngày sản xuất: Xem trên bao bì sản phẩm</p>\n<p>Hạn Sử Dụng: 3 Năm Kể Từ NSX</p>","summary":"<p>Làm sạch bụi bẩn, bã nhờn, dầu thừa, không gây khô hay tổn hại cho mái tóc hay da đầu, giúp hạn chế các vấn đề của da đầu như ngứa, khô, hạn chế tình trạng da đầu bị đổ dầu gây bết tóc &amp; gây mùi khó chịu.</p>","template_layout":null,"available":true,"tags":["cham soc toc","frame1"],"price":415000.0000,"price_min":415000.0000,"price_max":415000.0000,"price_varies":false,"compare_at_price":455000.0000,"compare_at_price_min":455000.0000,"compare_at_price_max":455000.0000,"compare_at_price_varies":false,"variants":[{"id":51261092,"barcode":null,"sku":null,"title":"Default Title","options":["Default Title"],"option1":"Default Title","option2":null,"option3":null,"available":true,"taxable":false,"price":415000.0000,"compare_at_price":455000.0000,"inventory_management":"","inventory_policy":"deny","inventory_quantity":0,"weight_unit":"g","weight":0,"requires_shipping":true,"image":{"src":"https://bizweb.dktcdn.net/100/426/076/products/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml.jpg?v=1631849168343"}}],"featured_image":{"src":"https://bizweb.dktcdn.net/100/426/076/products/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml.jpg?v=1631849168343"},"images":[{"src":"https://bizweb.dktcdn.net/100/426/076/products/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml.jpg?v=1631849168343"}],"options":["Title"],"created_on":"2021-09-17T10:26:07","modified_on":"2023-04-24T17:55:01","published_on":"2021-09-17T10:26:00"}
	function onQtyChange(){
		let qty = parseInt($('.pd-qtym').val())
		let variantId = parseInt($('#product-selectors').val()) || parseInt($('.details-product [name="variantId"]').val())
		let validQty = validateQty(productDetail,variantId, qty)
		validQty && $('.pd-qtym').val(validQty)
	}
function onQtyCRChange(){
	let qty = parseInt($('.cr-qty-input').val())
	console.log(qty)
	let variantId = window.EGACRAddonSettings.variantId
	let validQty = validateQty(productDetail,variantId, qty)
	if(validQty){
		window.EGACRAddon.updateQty(validQty)
	}
}
let isProductInit = false

$(document).ready(function (e) {
		$('#gallery_02').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: false,
			arrows: false,
			focusOnSelect: true,
			infinite: false,

		});
	$(window).on('scroll mousemove touchstart',()=>{
		if(isProductInit) return
		isProductInit = true
								$('#gallery_1').lightGallery({
			thumbnail: false,
					  youtubePlayerParams: { autoplay: 1 }
		});

				var wDW = $(window).width();
		$('#gallery_1').slick({
			autoplay: false,
			autoplaySpeed: 6000,
			dots: false,
			arrows: true,
			infinite: false,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			asNavFor: '#gallery_02'
		})
		let prevPos = 0
		$('#gallery_1 .item').on('mousedown', function(e){
			prevPos = e.pageX
			$(this).one('mouseup', function(e){
				$(this).off('mousemove');
				$('#gallery_1 .item').css('pointer-events','initial')

			}).on('mousemove', function(e){
				if(prevPos !== e.pageX){ 
					prev = e.pageX
					$('#gallery_1 .item').css('pointer-events','none')
					e.preventDefault()
				}
			});

		});
		$('#gallery_1').on('swipe', function(event, slick, currentSlide, nextSlide){

			$('#gallery_1 .item').css('pointer-events','none')
		});
		$('#gallery_1').on('beforeChange', function(event, slick, currentSlide, nextSlide){
			$('#gallery_1 .item').css('pointer-events','initial')
		});
		$('#gallery_1').on('afterChange', function(event, slick, currentSlide, nextSlide){
			$('#gallery_1 .item').css('pointer-events','initial')
		});

	
		jQuery(function($) {
			

			// Add label if only one product option and it isn't 'Title'. Could be 'Size'.
			

			// Hide selectors if we only have 1 variant and its title contains 'Default'.
			
						 $('.selector-wrapper').hide();
			 
			$('.selector-wrapper').css({
				'text-align':'left',
				'margin-bottom':'15px'
			});
			
			$('#ega-sticky-addcart .box-variant').append($('.selector-wrapper').clone())
		});


		// load more content
		var $proContent = $('#content');

		if($proContent.height() > 625){
			$('.ega-pro__seemore').show();
			$('.ega-pro__seemore').click(function(){
				$(this).toggleClass("show");
				if($(this).hasClass('show')){
					$('.product_getcontent').css("maxHeight","none");
					$(this).find('a').html('Thu gọn')
				}else{
					$('.product_getcontent').css("maxHeight","500px");
					$(this).find('a').html('Xem thêm')
				}
			})
		}else{
			$('.ega-pro__seemore').hide();
		}

		// set recent view
		function  setProductRecent(){
			try{
				let productUrl = 'combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml'
				let storage =  JSON.parse(localStorage.getItem('recentProduct')) || []
				if(storage  && !storage.includes(productUrl) ){
					storage =	[productUrl].concat(storage)
					storage.length > 7 && storage.pop()
					localStorage.setItem('recentProduct', JSON.stringify(storage))
				}}catch(e){
					console.log(e)
				}
		}
		setProductRecent()
		$(document).on('change', '#qtym',onQtyChange)
		$(document).on('click', '.btn_num',onQtyChange)
		$(document).on('click', '.cr-qty-btn',onQtyCRChange)
		$(document).on('change','.cr-qty-input',onQtyCRChange)
		$(document).on('click','.sapo-product-reviews-badge', function(){ 
			$('html,body').animate({scrollTop: $('#section-review').offset().top},300)
		})

	})

	$(".action-buy").click(function(){
		$("#add-to-cart-form .add_to_cart").trigger("click");
	})
	$("#qtym").change(function(){
		debugger;
	})
	
	$('#ega-sticky-addcart .add_to_cart').click(()=>{
		$('.details-product .add_to_cart').trigger('click');
	})

});



</script>

	











<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" media="all"><link rel="stylesheet" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/fonts.css?1692084315105" media="all">




<div class="modal fade" id="ega-modal-banner" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-md align-vertical" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<a href="/collections/all">
				<img class="img-fluid" src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/banner_popup_img.png?1692086228721" alt="welcome popup" width="765" height="765">
			</a>
			<button class="btn-form-close close" type="button" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
		</div>
	</div>
</div>
</div>

<script type="text/x-custom-template" data-template="navigation">

<nav class="h-100">
<ul  class="navigation list-group list-group-flush scroll">
	


		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Ưu đãi hot 49%">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_1.png?1692086228721" alt="Ưu đãi hot 49%" />
								<span>Ưu đãi hot 49%</span>
		
		</a>			
		
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc da mặt">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_2.png?1692086228721" alt="Chăm sóc da mặt" />
								<span>Chăm sóc da mặt</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Chăm sóc da mặt </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dưỡng ẩm">Dưỡng ẩm</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Toner">Toner</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Mặt nạ">Mặt nạ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Serum - Tinh chất">Serum - Tinh chất</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kem dưỡng - Dầu dưỡng">Kem dưỡng - Dầu dưỡng</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Làm sạch da mặt">Làm sạch da mặt</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy trang">Tẩy trang</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Làm sạch da mặt">Làm sạch da mặt</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết">Tẩy tế bào chết</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Xịt khoáng">Xịt khoáng</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước hoa hồng">Nước hoa hồng</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Trang điểm">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_3.png?1692086228721" alt="Trang điểm" />
								<span>Trang điểm</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Trang điểm </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Trang điểm mặt">Trang điểm mặt</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kem lót">Kem lót</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kem nền">Kem nền</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn phủ">Phấn phủ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn nước Cushion">Phấn nước Cushion</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Che khuyết điểm">Che khuyết điểm</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tạo khối - Highlighter">Tạo khối - Highlighter</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn má hồng">Phấn má hồng</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Trang điểm vùng mắt">Trang điểm vùng mắt</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kẻ chân mày">Kẻ chân mày</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kẻ mắt">Kẻ mắt</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Mascara">Mascara</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn mắt">Phấn mắt</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Trang điểm môi">Trang điểm môi</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son môi">Son môi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son dưỡng">Son dưỡng</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son lì">Son lì</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son bóng">Son bóng</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết môi">Tẩy tế bào chết môi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Mặt nạ môi">Mặt nạ môi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kẻ viền môi">Kẻ viền môi</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Móng">Móng</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Sơn móng">Sơn móng</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phụ kiện làm móng">Phụ kiện làm móng</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Tẩy Trang mắt - môi">Tẩy Trang mắt - môi</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ trang điểm">Dụng cụ trang điểm</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cơ thể">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_4.png?1692086228721" alt="Chăm sóc cơ thể" />
								<span>Chăm sóc cơ thể</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Chăm sóc cơ thể </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Làm sạch cơ thể">Làm sạch cơ thể</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Sữa tắm - xà phòng tắm">Sữa tắm - xà phòng tắm</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Muối tắm">Muối tắm</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết toàn thân">Tẩy tế bào chết toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Gel rửa tay">Gel rửa tay</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dưỡng thể">Dưỡng thể</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng ẩm toàn thân">Dưỡng ẩm toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng trắng toàn thân">Dưỡng trắng toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Chống nắng toàn thân">Chống nắng toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng tay chân">Dưỡng tay chân</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Khử mùi">Khử mùi</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Khử mùi cho nam">Khử mùi cho nam</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Khử mùi cho nữ">Khử mùi cho nữ</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Vệ sinh phụ nữ">Vệ sinh phụ nữ</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dung dịch vệ sinh">Dung dịch vệ sinh</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Băng vệ sinh">Băng vệ sinh</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Kem massage - chăm sóc ngực">Kem massage - chăm sóc ngực</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Giảm mỡ/tan mỡ">Giảm mỡ/tan mỡ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Giảm rạn da">Giảm rạn da</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Nở ngực - săn chắc ngực">Nở ngực - săn chắc ngực</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Tẩy lông">Tẩy lông</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cá nhân">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_5.png?1692086228721" alt="Chăm sóc cá nhân" />
								<span>Chăm sóc cá nhân</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Chăm sóc cá nhân </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc răng miệng">Chăm sóc răng miệng</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Khẩu trang">Khẩu trang</a>
			</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/collections/all" title="Nước hoa nam">Nước hoa nam</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Nước hoa Eau De Parfum">Nước hoa Eau De Parfum</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước hoa nữ">Nước hoa nữ</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Nước hoa Eau De Toilrttee">Nước hoa Eau De Toilrttee</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước súc miệng">Nước súc miệng</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Sản phẩm thiên nhiên">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_6.png?1692086228721" alt="Sản phẩm thiên nhiên" />
								<span>Sản phẩm thiên nhiên</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Sản phẩm thiên nhiên </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Tinh dầu các loại">Tinh dầu các loại</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tinh dầu thiên nhiên">Tinh dầu thiên nhiên</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dầu dừa thiên nhiên">Dầu dừa thiên nhiên</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Đèn xông hương">Đèn xông hương</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Sản phẩm thiên nhiên làm đẹp">Sản phẩm thiên nhiên làm đẹp</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nến thơm">Nến thơm</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc tóc">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_7.png?1692086228721" alt="Chăm sóc tóc" />
								<span>Chăm sóc tóc</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Chăm sóc tóc </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dầu gội">Dầu gội</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Trị gàu">Trị gàu</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Ngăn rụng tóc">Ngăn rụng tóc</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Giảm dầu nhờn">Giảm dầu nhờn</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng tóc khô xơ">Dưỡng tóc khô xơ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Chăm sóc tóc nhuộm">Chăm sóc tóc nhuộm</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Mặt nạ - Kem ủ tóc">Mặt nạ - Kem ủ tóc</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dầu dưỡng tóc">Dầu dưỡng tóc</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Thuốc nhuộm - uốn - duỗi">Thuốc nhuộm - uốn - duỗi</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dầu xả">Dầu xả</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Bộ sản phẩm làm đẹp">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_8.png?1692086228721" alt="Bộ sản phẩm làm đẹp" />
								<span>Bộ sản phẩm làm đẹp</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Bộ sản phẩm làm đẹp </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc da mặt">Bộ chăm sóc da mặt</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ trang điểm">Bộ trang điểm</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc cơ thể">Bộ chăm sóc cơ thể</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc tóc và da đầu">Bộ chăm sóc tóc và da đầu</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Thiết bị làm đẹp">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_9.png?1692086228721" alt="Thiết bị làm đẹp" />
								<span>Thiết bị làm đẹp</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Thiết bị làm đẹp </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ làm đẹp">Dụng cụ làm đẹp</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Bút điện di massage">Bút điện di massage</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy tỉa lông mũi">Máy tỉa lông mũi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy massage nâng cơ mặt">Máy massage nâng cơ mặt</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ tạo kiểu tóc">Dụng cụ tạo kiểu tóc</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy sấy tóc">Máy sấy tóc</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy ép, duỗi tóc">Máy ép, duỗi tóc</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy uốn tóc">Máy uốn tóc</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Massage thư giãn và làm đẹp">Massage thư giãn và làm đẹp</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Massage mặt">Massage mặt</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Làm thon gọn cơ thể">Làm thon gọn cơ thể</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Máy xông da mặt">Máy xông da mặt</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ tẩy lông">Dụng cụ tẩy lông</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Sản phẩm định hình">Sản phẩm định hình</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cá nhân">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_10.png?1692086228721" alt="Chăm sóc cá nhân" />
								<span>Chăm sóc cá nhân</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Chăm sóc cá nhân </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc cơ thể">Chăm sóc cơ thể</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc tóc">Chăm sóc tóc</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc sức khoẻ">Chăm sóc sức khoẻ</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước hoa">Nước hoa</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dưỡng tay chân">Dưỡng tay chân</a>
			</li>
		
		
	</ul>
	</div>
		</li>

</ul>
</nav>

</script>

<script type="text/x-custom-template" data-template="menuMobile">
<div id="mobile-menu" class="scroll">
<div class='media d-flex user-menu'>

	<i class="fas fa-user-circle mr-3 align-self-center"></i>
	<div class="media-body d-md-flex flex-column ">
					<a rel="nofollow" href="/account/login" class="d-block" title="Tài khoản" >
			Tài khoản
		</a>
		<small>
			<a href="/account/login" title="Đăng nhập" class="font-weight: light">
				Đăng nhập
			</a> </small>
		
	</div>
</div>
<div class="mobile-menu-body scroll">
	<nav class="h-100">
<ul  class="navigation list-group list-group-flush scroll">
	


		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Ưu đãi hot 49%">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_1.png?1692086228721" alt="Ưu đãi hot 49%" />
								<span>Ưu đãi hot 49%</span>
		
		</a>			
		
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc da mặt">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_2.png?1692086228721" alt="Chăm sóc da mặt" />
								<span>Chăm sóc da mặt</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Chăm sóc da mặt </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dưỡng ẩm">Dưỡng ẩm</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Toner">Toner</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Mặt nạ">Mặt nạ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Serum - Tinh chất">Serum - Tinh chất</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kem dưỡng - Dầu dưỡng">Kem dưỡng - Dầu dưỡng</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Làm sạch da mặt">Làm sạch da mặt</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy trang">Tẩy trang</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Làm sạch da mặt">Làm sạch da mặt</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết">Tẩy tế bào chết</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Xịt khoáng">Xịt khoáng</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước hoa hồng">Nước hoa hồng</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Trang điểm">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_3.png?1692086228721" alt="Trang điểm" />
								<span>Trang điểm</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Trang điểm </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Trang điểm mặt">Trang điểm mặt</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kem lót">Kem lót</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kem nền">Kem nền</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn phủ">Phấn phủ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn nước Cushion">Phấn nước Cushion</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Che khuyết điểm">Che khuyết điểm</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tạo khối - Highlighter">Tạo khối - Highlighter</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn má hồng">Phấn má hồng</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Trang điểm vùng mắt">Trang điểm vùng mắt</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kẻ chân mày">Kẻ chân mày</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kẻ mắt">Kẻ mắt</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Mascara">Mascara</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phấn mắt">Phấn mắt</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Trang điểm môi">Trang điểm môi</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son môi">Son môi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son dưỡng">Son dưỡng</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son lì">Son lì</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Son bóng">Son bóng</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết môi">Tẩy tế bào chết môi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Mặt nạ môi">Mặt nạ môi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Kẻ viền môi">Kẻ viền môi</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Móng">Móng</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Sơn móng">Sơn móng</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Phụ kiện làm móng">Phụ kiện làm móng</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Tẩy Trang mắt - môi">Tẩy Trang mắt - môi</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ trang điểm">Dụng cụ trang điểm</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cơ thể">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_4.png?1692086228721" alt="Chăm sóc cơ thể" />
								<span>Chăm sóc cơ thể</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Chăm sóc cơ thể </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Làm sạch cơ thể">Làm sạch cơ thể</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Sữa tắm - xà phòng tắm">Sữa tắm - xà phòng tắm</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Muối tắm">Muối tắm</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết toàn thân">Tẩy tế bào chết toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Gel rửa tay">Gel rửa tay</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dưỡng thể">Dưỡng thể</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng ẩm toàn thân">Dưỡng ẩm toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng trắng toàn thân">Dưỡng trắng toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Chống nắng toàn thân">Chống nắng toàn thân</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng tay chân">Dưỡng tay chân</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Khử mùi">Khử mùi</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Khử mùi cho nam">Khử mùi cho nam</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Khử mùi cho nữ">Khử mùi cho nữ</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Vệ sinh phụ nữ">Vệ sinh phụ nữ</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dung dịch vệ sinh">Dung dịch vệ sinh</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Băng vệ sinh">Băng vệ sinh</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Kem massage - chăm sóc ngực">Kem massage - chăm sóc ngực</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Giảm mỡ/tan mỡ">Giảm mỡ/tan mỡ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Giảm rạn da">Giảm rạn da</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Nở ngực - săn chắc ngực">Nở ngực - săn chắc ngực</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Tẩy lông">Tẩy lông</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cá nhân">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_5.png?1692086228721" alt="Chăm sóc cá nhân" />
								<span>Chăm sóc cá nhân</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Chăm sóc cá nhân </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc răng miệng">Chăm sóc răng miệng</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Khẩu trang">Khẩu trang</a>
			</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/collections/all" title="Nước hoa nam">Nước hoa nam</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Nước hoa Eau De Parfum">Nước hoa Eau De Parfum</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước hoa nữ">Nước hoa nữ</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Nước hoa Eau De Toilrttee">Nước hoa Eau De Toilrttee</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước súc miệng">Nước súc miệng</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Sản phẩm thiên nhiên">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_6.png?1692086228721" alt="Sản phẩm thiên nhiên" />
								<span>Sản phẩm thiên nhiên</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Sản phẩm thiên nhiên </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Tinh dầu các loại">Tinh dầu các loại</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Tinh dầu thiên nhiên">Tinh dầu thiên nhiên</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dầu dừa thiên nhiên">Dầu dừa thiên nhiên</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Đèn xông hương">Đèn xông hương</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Sản phẩm thiên nhiên làm đẹp">Sản phẩm thiên nhiên làm đẹp</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nến thơm">Nến thơm</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc tóc">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_7.png?1692086228721" alt="Chăm sóc tóc" />
								<span>Chăm sóc tóc</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Chăm sóc tóc </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dầu gội">Dầu gội</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Trị gàu">Trị gàu</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Ngăn rụng tóc">Ngăn rụng tóc</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Giảm dầu nhờn">Giảm dầu nhờn</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Dưỡng tóc khô xơ">Dưỡng tóc khô xơ</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Chăm sóc tóc nhuộm">Chăm sóc tóc nhuộm</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Mặt nạ - Kem ủ tóc">Mặt nạ - Kem ủ tóc</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dầu dưỡng tóc">Dầu dưỡng tóc</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Thuốc nhuộm - uốn - duỗi">Thuốc nhuộm - uốn - duỗi</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dầu xả">Dầu xả</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Bộ sản phẩm làm đẹp">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_8.png?1692086228721" alt="Bộ sản phẩm làm đẹp" />
								<span>Bộ sản phẩm làm đẹp</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Bộ sản phẩm làm đẹp </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc da mặt">Bộ chăm sóc da mặt</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ trang điểm">Bộ trang điểm</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc cơ thể">Bộ chăm sóc cơ thể</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc tóc và da đầu">Bộ chăm sóc tóc và da đầu</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Thiết bị làm đẹp">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_9.png?1692086228721" alt="Thiết bị làm đẹp" />
								<span>Thiết bị làm đẹp</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Thiết bị làm đẹp </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ làm đẹp">Dụng cụ làm đẹp</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Bút điện di massage">Bút điện di massage</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy tỉa lông mũi">Máy tỉa lông mũi</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy massage nâng cơ mặt">Máy massage nâng cơ mặt</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ tạo kiểu tóc">Dụng cụ tạo kiểu tóc</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy sấy tóc">Máy sấy tóc</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy ép, duỗi tóc">Máy ép, duỗi tóc</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Máy uốn tóc">Máy uốn tóc</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__col">
			<span class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Massage thư giãn và làm đẹp">Massage thư giãn và làm đẹp</a>
			</span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Massage mặt">Massage mặt</a>
			 </span>
			
			 <span class="submenu__item submenu__item">
				 <a class="link" href="/san-pham-noi-bat" title="Làm thon gọn cơ thể">Làm thon gọn cơ thể</a>
			 </span>
			
		</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Máy xông da mặt">Máy xông da mặt</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dụng cụ tẩy lông">Dụng cụ tẩy lông</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Sản phẩm định hình">Sản phẩm định hình</a>
			</li>
		
		
	</ul>
	</div>
		</li>



		<li class="menu-item list-group-item">
	<a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cá nhân">
					<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_10.png?1692086228721" alt="Chăm sóc cá nhân" />
								<span>Chăm sóc cá nhân</span>
		
		<i class='float-right' data-toggle-submenu>
		

<svg class="icon" >
<use xlink:href="#icon-arrow" />
</svg>
		</i>
		</a>			
		
			<div class="submenu scroll">
		<div class='toggle-submenu d-lg-none d-xl-none'>
			<i class='mr-3'>
				

<svg class="icon" style="transform: rotate(180deg)"
>
<use xlink:href="#icon-arrow" />
</svg>
			</i>
			<span>Chăm sóc cá nhân </span>
		</div>
		<ul class="submenu__list">
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc cơ thể">Chăm sóc cơ thể</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc tóc">Chăm sóc tóc</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Chăm sóc sức khoẻ">Chăm sóc sức khoẻ</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Nước hoa">Nước hoa</a>
			</li>
		
		
		
		
		<li class="submenu__item submenu__item--main">
				<a class="link" href="/san-pham-noi-bat" title="Dưỡng tay chân">Dưỡng tay chân</a>
			</li>
		
		
	</ul>
	</div>
		</li>

</ul>
</nav>

	<ul class="shop-policises list-unstyled  d-flex align-items-center flex-wrap m-0 pr-0">
						<li>
	<div class="">
		<img class="img-fluid " 
			 src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_header_image_1.png?1692086228721" 
			 loading="lazy"
			 width="32"
			 height="32"
			 alt="Chính sách đổi trả">
	</div>
	<a class="link" href="/chinh-sach" title="Chính sách đổi trả">Chính sách đổi trả</a>
</li>
							<li>
	<div class="">
		<img class="img-fluid " 
			 src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_header_image_2.png?1692086228721" 
			 loading="lazy"
			 width="32"
			 height="32"
			 alt="Hệ thống cửa hàng">
	</div>
	<a class="link" href="/he-thong-cua-hang" title="Hệ thống cửa hàng">Hệ thống cửa hàng</a>
</li>
							<li>
	<div class="">
		<img class="img-fluid " 
			 src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_header_image_3.png?1692086228721" 
			 loading="lazy"
			 width="32"
			 height="32"
			 alt="Kiểm tra đơn hàng">
	</div>
	<a class="link" href="/apps/kiem-tra-don-hang" title="Kiểm tra đơn hàng">Kiểm tra đơn hàng</a>
</li>
		
</ul>	</div>

<div class="mobile-menu-footer border-top w-100 d-flex align-items-center text-center">
	<div class="hotline  w-50   p-2 ">
		<a  href="tel:19006750" title="19006750">
			Gọi điện <i class="fas fa-phone ml-3"></i>
		</a>
	</div>
			<div class="messenger border-left p-2 w-50 border-left">
					
		<a  href="https://m.me/abcd" title="https://m.me/abcd">
			Nhắn tin
			<i class="fab fa-facebook-messenger ml-3"></i>
		</a>
	</div>
	
</div>
</div>
<div class='menu-overlay'>

</div>
</script>		<svg style="display:none">
<defs>
<symbol class="icon " id="icon-cart" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.594 16.39a.703.703 0 0 1-.703.704h-.704v.703a.703.703 0 0 1-1.406 0v-.703h-.703a.703.703 0 0 1 0-1.407h.703v-.703a.703.703 0 1 1 1.406 0v.704h.704c.388 0 .703.314.703.703Zm0-10.968v6.75a.703.703 0 0 1-1.406 0V6.125H12.78v2.11a.703.703 0 1 1-1.406 0v-2.11h-6.75v2.11a.703.703 0 1 1-1.406 0v-2.11H1.813v10.969h7.453a.703.703 0 1 1 0 1.406H1.109a.703.703 0 0 1-.703-.703V5.422c0-.388.315-.703.703-.703h2.143A4.788 4.788 0 0 1 8 .5a4.788 4.788 0 0 1 4.748 4.219h2.143c.388 0 .703.315.703.703Zm-4.266-.703A3.38 3.38 0 0 0 8 1.906 3.38 3.38 0 0 0 4.672 4.72h6.656Z" fill="currentColor"></path></symbol>
</defs>
</svg>
<svg style="display:none">
<defs>
<symbol id="icon-minus" class="icon icon-minus" viewBox="0 0 16 2" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.375 0H0.625C0.279813 0 0 0.279813 0 0.625C0 0.970187 0.279813 1.25 0.625 1.25H15.375C15.7202 1.25 16 0.970187 16 0.625C16 0.279813 15.7202 0 15.375 0Z" fill="#8C9196"></path>
</symbol>
</defs>
</svg>

<svg style="display:none">
<defs>
<symbol id="icon-plus" class="icon icon-plus" viewBox="0 0 93.562 93.562" fill="none" xmlns="http://www.w3.org/2000/svg">
<path xmlns="http://www.w3.org/2000/svg" d="M87.952,41.17l-36.386,0.11V5.61c0-3.108-2.502-5.61-5.61-5.61c-3.107,0-5.61,2.502-5.61,5.61l0.11,35.561H5.61   c-3.108,0-5.61,2.502-5.61,5.61c0,3.107,2.502,5.609,5.61,5.609h34.791v35.562c0,3.106,2.502,5.61,5.61,5.61   c3.108,0,5.61-2.504,5.61-5.61V52.391h36.331c3.108,0,5.61-2.504,5.61-5.61C93.562,43.672,91.032,41.17,87.952,41.17z" fill="currentColor"></path>
  </symbol>
</defs>
</svg>

<svg style="display:none">
<defs>
<symbol class="icon icon-arrow" id="icon-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490.8 490.8" fill="none" aria-hidden="true" focusable="false" role="presentation">
<path d="M135.685 3.128c-4.237-4.093-10.99-3.975-15.083.262-3.992 4.134-3.992 10.687 0 14.82l227.115 227.136-227.136 227.115c-4.237 4.093-4.354 10.845-.262 15.083 4.093 4.237 10.845 4.354 15.083.262.089-.086.176-.173.262-.262l234.667-234.667c4.164-4.165 4.164-10.917 0-15.083L135.685 3.128z" fill="currentColor"></path>
<path d="M128.133 490.68a10.667 10.667 0 01-7.552-18.219l227.136-227.115L120.581 18.232c-4.171-4.171-4.171-10.933 0-15.104 4.171-4.171 10.933-4.171 15.104 0l234.667 234.667c4.164 4.165 4.164 10.917 0 15.083L135.685 487.544a10.663 10.663 0 01-7.552 3.136z"></path>
</symbol>
</defs>
</svg>

<svg style="display:none">
<defs>
<symbol id="icon-search" class="icon icon-search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904">
<path d="M190.707 180.101l-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 005.303 2.197 7.498 7.498 0 005.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z"></path>
</symbol>
</defs>
</svg>		<link rel="preload" as="script" href="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js">

	<script src="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js" type="text/javascript"></script>
	<script src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/plugin.js?1692086228721" type="text/javascript"></script>		
	

<div id="quick-view-product" class="quickview-product" style="display:none;">
<div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
<div class="quick-view-product align-verticle"></div>
<div id="quickview-modal" style="display:none;">
	<div class="block-quickview primary_block details-product">
		<div class="row">
			<div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-6">
				<div class="image-block large-image col_large_default">
					<span class="view_full_size">
						<a class="img-product d-block  pos-relative embed-responsive embed-responsive-1by1" title="" href="javascript:;">
							<img src="https://bizweb.dktcdn.net/thumb/grande/assets/themes_support/noimage.gif" id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview" alt="quickview">
						</a>
					</span>
					<div class="loading-imgquickview" style="display:none;"></div>
				</div>
				<div class="more-view-wrapper clearfix">
					<div class="thumbs_quickview owl_nav_custome1" id="thumbs_list_quickview">
						<ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq" id="thumblist_quickview"></ul>
					</div>
				</div>
			</div>
			<div class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-6 details-pro style_product style_border">
				<div class="head-qv group-status">
					<h3 class="qwp-name title-product">abc</h3>
					<div class="vend-qv group-status">
						<div class="left_vend">
							<div class="first_status  d-inline-block">Thương hiệu:
								<span class="vendor_ status_name"></span>
							</div>		
							<span class="line_tt ">|</span>
							<div class="top_sku first_status d-inline-block">Mã sản phẩm:
								<span class="sku_ status_name"></span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="quickview-info">
					<span class="prices price-box">
						<span class="price product-price"></span>
						<del class="old-price"></del>
						<span class="label_product"></span>
					</span>
				</div>
				
				<div class="product-description product-summary">
					<div class="rte">

					</div>
				</div>
				
				<form action="/cart/add" method="post" enctype="multipart/form-data" class="quick_option variants form-ajaxtocart form-product">
					<span class="price-product-detail hidden" style="opacity: 0;">
						<span class=""></span>
					</span>
					<select name="variantId" class="hidden" style="display:none"></select>
					
					<div class="form-group form_product_content">
						<div class="count_btn_style quantity_wanted_p">
							<div class="custom input_number_product soluong1">									
								<button class="btn_num btn num_1 button button_qty" onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv > 1 ) result.value--;return false;">
									<svg class="icon">
<use xlink:href="#icon-minus"></use>
</svg></button>
								<input type="text" id="quantity-detail" name="quantity" value="1" maxlength="2" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
								<button class="btn_num  btn num_2 button button_qty" onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">
									<svg class="icon">
<use xlink:href="#icon-plus"></use>
</svg>									</button>
							</div>
							<div class="button_actions clearfix">
								<button type="submit" class="btn_cool btn btn_base fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart_detail">
									<span class="btn-content text_1">Thêm vào giỏ hàng</span>
								</button>
							</div>
						</div>
					</div>

				</form>

			</div>
		</div>
	</div>      
	<a title="Close" class="quickview-close close-window" href="javascript:;"><i class="fas fa-times"></i></a>
</div>    
</div>
<script type="text/javascript">  
Bizweb.doNotTriggerClickOnThumb = false;
function changeImageQuickView(img, selector) {
	var src = $(img).attr("src");
	src = src.replace("_compact", "");
	
	var $videoEl = $(selector).parent();
	
	if($(img).hasClass('video')){
		$(selector).parent().find('img').hide()
		var codevideo = $(img).parent().data().videocode.split("_")[1];
		var videoHtml = `<iframe class="img-responsive " width="560" height="315" src="https://www.youtube.com/embed/${codevideo}?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
		$videoEl.append(videoHtml);
	}else{
		$videoEl.find("iframe").remove();
		$(selector).parent().find('img').show()

		$(selector).attr("src", src);
	}
}
function validate(evt) {
	var theEvent = evt || window.event;
	var key = theEvent.keyCode || theEvent.which;
	key = String.fromCharCode( key );
	var regex = /[0-9]|\./;
	if( !regex.test(key) ) {
		theEvent.returnValue = false;
		if(theEvent.preventDefault) theEvent.preventDefault();
	}
}
var selectCallbackQuickView = function(variant, selector) {
	$('#quick-view-product form').show();
	var productItem = jQuery('.quick-view-product .product-item'),
		addToCart = productItem.find('.add_to_cart_detail'),
		productPrice = productItem.find('.price'),
		comparePrice = productItem.find('.old-price'),
		discountLabel= productItem.find('.label_product'),
		form2 = jQuery('.soluong1'),
		status = productItem.find('.soluong'),
		sku = productItem.find('.sku_'),
		totalPrice = productItem.find('.total-price span');

	if(variant && variant.sku ){
		sku.text(variant.sku);
	}else{
		sku.text('Đang cập nhật');
	}
	if (variant && variant.available) {

		var form = jQuery('#' + selector.domIdPrefix).closest('form');
		for (var i=0,length=variant.options.length; i<length; i++) {
			var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');
			if (radioButton.size()) {
				radioButton.get(0).checked = true;
			}
		}

		addToCart.removeClass('disabled').removeAttr('disabled');
		addToCart.html('<span class="btn-image"></span><span class="btn-content text_1">Thêm vào giỏ hàng</span>').removeAttr('disabled');
		status.text('Còn hàng');
		if(variant.price < 1){			   
			$("#quick-view-product .price").html('Liên hệ');
			$("#quick-view-product del, #quick-view-product .quantity_wanted_p").hide();
			$("#quick-view-product .prices .old-price").hide();
			
							discountLabel.hide()

			form2.hide();
		}else{
			productPrice.html(Bizweb.formatMoney(variant.price, "{{150000}}₫"));
												 if ( variant.compare_at_price > variant.price ) {
							  comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{150000}}₫")).show();         
							  let save = variant.compare_at_price - variant.price
							  discountLabel.html('-'+Math.ceil(save / variant.compare_at_price * 100)+ "%").show()

			productPrice.addClass('on-sale');
		} else {
			comparePrice.hide();
			discountLabel.hide()
			productPrice.removeClass('on-sale');
		}

		$(".quantity_wanted_p").show();
		$(".input_qty_qv_").show();
		form2.show();
	}


	
	updatePricingQuickView();
	
						/*begin variant image*/
						if (variant && variant.featured_image) {

		var originalImage = $("#product-featured-image-quickview");
		var newImage = variant.featured_image;
		var element = originalImage[0];
		Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
			$('#thumblist_quickview img').each(function() {
				var parentThumbImg = $(this).parent();
				var productImage = $(this).parent().data("image");
				
				if (newImageSizedSrc.includes(productImage)) {
					$(this).parent().trigger('click');
					return false;
				}
			});

		});
		$('#product-featured-image-quickview').attr('src',variant.featured_image.src);
	}
} else {
	addToCart.addClass('disabled').attr('disabled', 'disabled');
	addToCart.removeClass('hidden').addClass('btn_buy').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>').show();
	status.text('Hết hàng');
	$(".quantity_wanted_p").show();
	if(variant){
		if(variant.price < 1){			   
			$("#quick-view-product .price").html('Liên hệ');
			$("#quick-view-product del").hide();
			//$("#quick-view-product .quantity_wanted_p").hide();
			$("#quick-view-product .prices .old-price").hide();
							discountLabel.hide()

			form2.hide();
			comparePrice.hide();
			discountLabel.hide();
			productPrice.removeClass('on-sale');
			addToCart.addClass('disabled').attr('disabled', 'disabled');
			addToCart.removeClass('hidden').addClass('btn_buy').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>').show();			   
		}else{
			if ( variant.compare_at_price > variant.price ) {
				comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{150000}}₫")).show();         
				productPrice.addClass('on-sale');
				let save = variant.compare_at_price - variant.price
				discountLabel.html('-'+Math.ceil(save / variant.compare_at_price * 100)+ "%").show()
			} else {
				comparePrice.hide();
				productPrice.removeClass('on-sale');
				$("#quick-view-product .prices .old-price").html('');
				discountLabel.hide()
			}
			$("#quick-view-product .price").html(Bizweb.formatMoney(variant.price, "{{150000}}₫"));
			$("#quick-view-product del ").hide();
			$("#quick-view-product .prices .old-price").show();
			discountLabel.show()

			$(".input_qty_qv_").hide();
			form2.hide();
			addToCart.addClass('disabled').attr('disabled', 'disabled');
			addToCart.removeClass('hidden').addClass('btn_buy').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>').show();
		}
	}else{
		$("#quick-view-product .price").html('Liên hệ');
		$("#quick-view-product del").hide();
		$("#quick-view-product .quantity_wanted_p").hide();
		$("#quick-view-product .prices .old-price").hide();
						discountLabel.hide()

		form2.hide();
		comparePrice.hide();
		discountLabel.hide();

		productPrice.removeClass('on-sale');
		addToCart.addClass('disabled').attr('disabled', 'disabled');
		addToCart.removeClass('hidden').addClass('btn_buy').attr('disabled','disabled').html('<div class="disabled">Hết hàng</div>').show();
	}
}
/*begin variant image*/
if (variant && variant.featured_image) {

	var originalImage = $("#product-featured-image-quickview");
	var newImage = variant.featured_image;
	var element = originalImage[0];
	Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
		$('#thumblist_quickview img').each(function() {
			var parentThumbImg = $(this).parent();
			var productImage = $(this).parent().data("image");
			if (newImageSizedSrc.includes(productImage)) {
				$(this).parent().trigger('click');
				return false;
			}
		});

	});
	$('#product-featured-image-quickview').attr('src',variant.featured_image.src);
}

};
</script>		<script type="text/javascript" defer="" src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/quickview.js?1692086228721"></script>
					<script type="text/x-custom-template" data-template="ItemDropCart">
<li class="item productid-${id_item}">
	<div class="border_list"><div class="image_drop">
		<a class="product-image pos-relative embed-responsive embed-responsive-1by1" href="${url}" title="${title}">
			<img alt="${title}" src="${image_url}"width="'+ '100' +'"\>
		</a>
		</div>
		<div class="detail-item">
			<div class="product-details">
				<span href="javascript:;" data-id="${id_item}" title="Xóa" class="remove-item-cart fa fa-times"></span>
				<p class="product-name"> <a href="${url}" title="${title}">${title}</a></p></div>
				<span class="variant-title">${variant_title}</span>
			<div class="product-details-bottom"><span class="price">${price}</span>
				<span class="quanlity">x ${quanty}</span>
				<div class="quantity-select qty_drop_cart d-none">
					<input class="variantID" type="hidden" name="variantId" value="${id_item}">
					<button onClick="var result = document.getElementById('qty${id_item}'); var qty${id_item} = result.value; if( !isNaN( qty${id_item} ) &amp;&amp; qty${id_item} &gt; 1 ) result.value--;return false;" class="btn btn_reduced reduced items-count btn-minus" ${buttonQty} type="button">–</button>
					<input type="text" maxlength="3" min="1" readonly class="form-control input-text number-sidebar qty${id_item}" id="qty${id_item}" name="Lines" id="updates_${id_item}" size="4" value="${quanty}">
					<button onClick="var result = document.getElementById('qty${id_item}'); var qty${id_item} = result.value; if( !isNaN( qty${id_item} )) result.value++;return false;" class=" btn btn_increase increase items-count btn-plus" type="button">+</button>
				</div>
			</div>
		</div>
	</div>
  </li>
</script>

<script type="text/x-custom-template" data-template="HeaderCartPc">
  <div class="cart page_cart hidden-xs hidden-sm row">
	<form action="/cart" method="post" novalidate class="formcartpage col-lg-12 col-md-12 margin-bottom-0">
		<div class="bg-scroll">
			<div class="cart-thead">
				<div style="width: 18%" class="a-center">Ảnh sản phẩm</div>
				<div style="width: 32%" class="a-center">Tên sản phẩm</div>
				<div style="width: 17%" class="a-center">Đơn giá</div>
				<div style="width: 14%" class="a-center">Số lượng</div>
				<div style="width: 14%" class="a-center">Thầnh tiền</div>
				<div style="width: 5%" class="a-center">Xóa</div>
			</div>
			<div class="cart-tbody">
			</div>
		</div>
	</form>
  </div>
</script>
<script type="text/x-custom-template" data-template="pageCartCheckout">
  <div class="col-lg-7 col-md-7">
	<a href="/" class="form-cart-continue">Tiếp tục mua hàng</a>
  </div>
  <div class="col-lg-5 col-md-5">
	<div class="section bg_cart shopping-cart-table-total">
		<div class="table-total">
			<table class="table">
				<tr>
					<td coldspan="20" class="total-text">Tổng tiền thanh toán: </td>
					<td class="txt-right totals_price price_end a-right">${price_total}</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="section continued">
		<a href="/checkout" class="btn-checkout-cart button_checkfor_buy">Tiến hành thanh toán</a>
	</div>
  </div>
</script>

<script type="text/x-custom-template" data-template="pageCartItem">
  <div class="item-cart productid-${id_item}">
	<div style="width: 18%" class="image">
		<a class="product-image a-left" title="${title}" href="${url}">
			<img width="75" height="auto" alt="${title}" src="${image_url}">
		</a>
	</div>
	<div style="width: 32%" class="a-center">
		<h3 class="product-name"> <a class="text2line" href="${url}" title="${title}">
		${title}</a> </h3>
		<span class="variant-title">${variant_title}</span>
		<a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="${id_item}">
			<span><i class="fa fa-times"></i></span>
		</a>
	</div>
	<div style="width: 17%" class="a-center">
		<span class="cart-prices">
			<span class="prices">${price}</span> 
		</span>
	</div>
	<div style="width: 14%" class="a-center">
		<div class="input_qty_pr">
			<input class="variantID" type="hidden" name="variantId" value="${id_item}">
			<button onClick="var result = document.getElementById('qtyItem${id_item}'); var qtyItem${id_item} = result.value; if( !isNaN( qtyItem${id_item} ) &amp;&amp; qtyItem${id_item} &gt; 1 ) result.value--;return false;" ${buttonQty} class="reduced_pop items-count btn-minus" type="button">-</button>
			<input type="text" maxlength="3" readonly min="0" class="check_number_here input-text number-sidebar input_pop input_pop qtyItem${id_item}" id="qtyItem${id_item}" name="Lines" id="updates_${id_item}" size="4" value="${quanty}">
			<button onClick="var result = document.getElementById('qtyItem${id_item}'); var qtyItem${id_item} = result.value; if( !isNaN( qtyItem${id_item} )) result.value++;return false;" class="increase_pop items-count btn-plus" type="button">+</button>
		</div>
	</div>
	<div style="width: 14%" class="a-center">
		<span class="cart-price">
			<span class="price">${price_quanty}</span> 
		</span>
	</div>
	<div style="width: 5%" class="a-center">
		<a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="${id_item}">
			<span><i class="fa fa-trash-alt"></i></span>
		</a>
	</div>
  </div>
</script>

<script type="text/x-custom-template" data-template="ItemCartMobile">
  <div class="item-product item productid-${id_item} ">
	<div class="text-center">
		<a class="remove-itemx remove-item-cart " title="Xóa" href="javascript:;" data-id="${id_item}">
			<svg  class="icon" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)">
<path d="M0.620965 12C0.462896 12 0.304826 11.9399 0.184729 11.8189C-0.0563681 11.5778 -0.0563681 11.1869 0.184729 10.9458L10.9497 0.180823C11.1908 -0.0602744 11.5817 -0.0602744 11.8228 0.180823C12.0639 0.421921 12.0639 0.8128 11.8228 1.05405L1.05795 11.8189C0.936954 11.9392 0.778884 12 0.620965 12Z" fill="#8C9196"/>
<path d="M11.3867 12C11.2287 12 11.0707 11.9399 10.9505 11.8189L0.184729 1.05405C-0.0563681 0.8128 -0.0563681 0.421921 0.184729 0.180823C0.425827 -0.0602744 0.816706 -0.0602744 1.05795 0.180823L11.8228 10.9458C12.0639 11.1869 12.0639 11.5778 11.8228 11.8189C11.7018 11.9392 11.5439 12 11.3867 12Z" fill="#8C9196"/>
</g>
<defs>
<clipPath id="clip0">
<rect width="12" height="12" fill="white"/>
</clipPath>
</defs>
</svg>
		</a>
	</div>
	<div class="item-product-cart-mobile">
		<a href="${url}">	
			<a class="product-images1  pos-relative embed-responsive embed-responsive-1by1" href=""  title="${title}">
				<img class="img-fluid" src="${image_url}" alt="${title}">
			</a>
		</a>
	</div>
	<div class="product-cart-infor">
	<div class="title-product-cart-mobile">
		<h3 class="product-name"> <a class="text2line" href="${url}" title="${title}">
		${title}</a>  </h3>
		<span class="variant-title">${variant_title}</span>
	</div>
	
	<div class="cart-price">
		<span class="product-price price">${price_quanty}</span>
	</div>
	<div class="select-item-qty-mobile">
		<div class="txt_center">
			<input class="variantID" type="hidden" name="variantId" value="${id_item}">
			<button onClick="var result = document.getElementById('qtyMobile${id_item}'); var qtyMobile${id_item} = result.value; if( !isNaN( qtyMobile${id_item} ) &amp;&amp; qtyMobile${id_item} &gt; 1 ) result.value--;return false;" class="reduced items-count btn-minus btn" type="button"><svg class="icon">
<use xlink:href="#icon-minus" />
</svg></button>
			<input type="text" maxlength="3" min="1" class="form-control input-text number-sidebar qtyMobile${id_item}" id="qtyMobile${id_item}" name="Lines" id="updates_${id_item}" size="4" value="${quanty}">
			<button onClick="var result = document.getElementById('qtyMobile${id_item}'); var qtyMobile${id_item} = result.value; if( !isNaN( qtyMobile${id_item} )) result.value++;return false;" class="increase items-count btn-plus btn" type="button"><svg class="icon">
<use xlink:href="#icon-plus" />
</svg></button>
		</div>
	</div>
	</div>
  </div>
</script>
	<script type="text/x-custom-template" data-template="pageCartCheckoutMobile">
  <div class="header-cart-price">
	  <div class="timedeli-modal">
	<div class="timedeli-modal-content">
	<button type="button" class="close window-close d-sm-none" 
	aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>
	<div class="timedeli d-sm-block"></div>
	<div class="timedeli-cta">
		<button class="btn btn-block timedeli-btn  d-sm-none" 
				type="button">
			<span>Xong</span>
		</button>		
	</div>
				</div>

		 <div class="timedeli-overaly">
		</div>
	</div>
	
<div class="r-bill">
<div class="checkbox">
	<input type="hidden" name="attributes[invoice]" id="re-checkbox-bill"
		   value='không'>
	<input type="checkbox" id="checkbox-bill" value="có" 
		   class="regular-checkbox" />
	<label for="checkbox-bill" class="box"></label>
	<label for="checkbox-bill" class="title">Xuất hóa đơn công ty</label>
</div>
<div class="bill-field">
	<div class="form-group">
		<label>Tên công ty</label>
		<input type="text" class="form-control val-f" 
			   name="attributes[company_name]" 
			   value=""
			   placeholder="Tên công ty" >
	</div>	
	<div class="form-group">
		<label>Mã số thuế</label>
		<input type="number" pattern=".{10,}" onkeydown="return FilterInput(event)" 
			   onpaste="handlePaste(event)" 
			   class="form-control val-f val-n" 
			   name="attributes[tax_code]" 
			   value="" 
			   placeholder="Mã số thuế">
	</div>
	<div class="form-group">
		<label>Địa chỉ công ty</label>
		<textarea type="text" class="form-control val-f" 
				  name="attributes[company_address]"
				  placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)"></textarea>
	</div>
	<div class="form-group">
		<label>Email nhận hoá đơn</label>
		<input type="email" class="form-control val-f val-email" 
			   name="attributes[invoice_email]" 
			   value="" 
			   placeholder="Email nhận hoá đơn">
	</div>
</div>
</div>


	<div class="title-cart d-none d-sm-flex ">
		<h3 class="text-xs-left">TỔNG CỘNG</h3>
		<span class="text-xs-right  totals_price_mobile">${price_total}</span>
		<i class="text-xs-right price_vat ">(Đã bao gồm VAT nếu có)</i>		</div>
	
		  <div class='cart-limit-alert d-xs-none'
				 >
				<i class="fa fa-info-circle mr-1" aria-hidden="true"></i> Đơn hàng của bạn chưa đạt giá trị tối thiểu 500.000đ. 
Vui lòng chọn mua thêm sản phẩm
		</div>
	
		

	<div class="checkout d-none d-sm-block">
		<button class="btn btn-block btn-proceed-checkout-mobile" title="Tiến hành thanh toán"
				type="button" onclick='goToCheckout(event)'>
			<span>Thanh Toán</span>
		</button>		
	</div>
			
	<div class="cart-trustbadge mt-3">
		<span class="title-menu">
Phương thức thanh toán 
</span>
<div class="product-trustbadge my-3">
<a href="/collections/all" 
   target="_blank"
   title="Phương thức thanh toán">
	<img class=" img-fluid" loading="lazy"
		 src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/footer_trustbadge.jpg?1692086228721" 
		 alt="Phương thức thanh toán"
		 width="246"
		 height="53"
		 >
</a>
</div>
	</div>
		  </div>

</script>
<script type="text/x-custom-template" data-template="templateStickyCheckout">
<div class="cart-sticky-cta">
	  

	  
		  <div class='cart-limit-alert '
				 >
				<i class="fa fa-info-circle mr-1" aria-hidden="true"></i> Đơn hàng của bạn chưa đạt giá trị tối thiểu 500.000đ. 
Vui lòng chọn mua thêm sản phẩm
		</div>
	
	<div class="cart-cta">

			<div class="toggle-delivery col-5 d-flex justify-content-start align-items-center flex-column px-2">
		<img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/delivery-icon.png?1692086228721" alt="delivery" ->
		<span>HẸN GIỜ NHẬN HÀNG</span>
	</div>
			<div>
			<button class="btn btn-block btn-proceed-checkout-mobile" title="Tiến hành thanh toán"
				type="button" onclick="goToCheckout(event)">
			<span>Thanh Toán</span> <span class="text-xs-right  totals_price_mobile">${price_total}</span>
		</button>	
				<i class="text-xs-right price_vat ">(Đã bao gồm VAT nếu có)</i>			</div>
	</div>
	</div>
</script>
<script type="text/x-custom-template" data-template="TemplateItemPopupCart">
<div class="item-popup productid-${id_item}">
	<div style="width: 13%;" class="height image_ text-left">
		<div class="item-image">
			<a class="product-image" href="${url}" title="${title}">
				<img alt="${title}" src="${image_url}"width="'+ '90' +'"\>
			</a>
		</div>
	</div>
	<div style="width:40%;" class="height text-left fix_info">
		<div class="item-info">
			<p class="item-name">
				<a class="text2line textlinefix" href="${url}" title="${title}">${title}</a>
			</p>
			<span class="variant-title-popup">${variant_title}</span>
			<a href="javascript:;" class="remove-item-cart" title="Xóa" data-id="${id_item}">
				<i class="fa fa-times"></i>&nbsp;&nbsp;Bỏ sản phẩm
			</a>
			<p class="addpass" style="color:#fff;margin:0px;">${id_item}</p>
		</div>
	</div>
	<div style="width: 15%;" class="height text-center">
		<div class="item-price">
			<span class="price">${price}</span>
		</div>
	</div>
	<div style="width: 15%;" class="height text-center">
		<div class="qty_h check_">
			<input class="variantID" type="hidden" name="variantId" value="${id_item}">
			<button onClick="var result = document.getElementById('qtyItemP${id_item}'); var qtyItemP${id_item} = result.value; if( !isNaN( qtyItemP${id_item} ) &amp;&amp; qtyItemP${id_item} &gt; 1 ) result.value--;return false;" ${buttonQty} class="num1 reduced items-count btn-minus" type="button">-</button>
			<input type="text" maxlength="3" min="0" readonly class="input-text number-sidebar qtyItemP${id_item}" id="qtyItemP${id_item}" name="Lines" id="updates_${id_item}" size="4" value="${quanty}">
			<button onClick="var result = document.getElementById('qtyItemP${id_item}'); var qtyItemP${id_item} = result.value; if( !isNaN( qtyItemP${id_item} )) result.value++;return false;" class="num2 increase items-count btn-plus" type="button">+</button>
		</div>
	</div>
	<div style="width: 17%;" class="height text-center">
		<span class="cart-price">
			<span class="price">${price_quanty}</span>
		</span>
	</div>
</div>
</script>
			<div id="popup-cart" class="popcart">
<div id="popup-cart-desktop" class="clearfix">
	<div class="title-popup-cart">
	</div>          
	<div class="wrap_popup">
		<div class="title-quantity-popup">
			<span class="cart_status" onclick="window.location.href='/cart';">
				Giỏ hàng của bạn có <span class="cart-popup-count">0</span> sản phẩm
			</span>
		</div>
		<div class="content-popup-cart">
			<!-- <div class="thead-popup">
				<div style="width: 53%;" class="text-left">Sản phẩm</div>
				<div style="width: 15%;" class="text-center">Đơn giá</div>
				<div style="width: 15%;" class="text-center">Số lượng</div>
				<div style="width: 17%;" class="text-center">Thành tiền</div>
			</div> -->
			<div class="tbody-popup scrollbar-dynamic"></div>
			<div class="tfoot-popup">
				<div class="tfoot-popup-1 clearfix">
					<div class="popup-ship">
					</div>
					<span class="total-p popup-total">Tổng tiền thanh toán: <span class="total-price">0₫</span></span>
				</div>
				<div class="tfoot-popup-2 clearfix">
					<a class="button btn-continue close-pop" title="Tiếp tục mua hàng" href="javascript:;" onclick="$('#popup-cart').modal('hide');"><span><span>Tiếp tục mua hàng</span></span></a>
					<a class="button checkout_ btn-proceed-checkout" title="Thực hiện thanh toán" href="/checkout"><span>Thực hiện thanh toán</span></a>
				</div>
			</div>
		</div>
		<a title="Close" class="close-modal quickview-close close-pop" href="javascript:;" onclick="$('#popup-cart').modal('hide');"><i class="fa fa-close"></i></a>
	</div>
</div>

</div>		<script>
window.Bizweb || (window.Bizweb = {}),
(Bizweb.mediaDomainName = "//bizweb.dktcdn.net/"),
(Bizweb.each = function(a, b) {
for (var c = 0; c < a.length; c++) b(a[c], c);
}),
(Bizweb.getClass = function(a) {
return Object.prototype.toString.call(a).slice(8, -1);
}),
(Bizweb.map = function(a, b) {
for (var c = [], d = 0; d < a.length; d++) c.push(b(a[d], d));
return c;
}),
(Bizweb.arrayContains = function(a, b) {
for (var c = 0; c < a.length; c++) if (a[c] == b) return !0;
return !1;
}),
(Bizweb.distinct = function(a) {
for (var b = [], c = 0; c < a.length; c++)
  Bizweb.arrayContains(b, a[c]) || b.push(a[c]);
return b;
}),
(Bizweb.getUrlParameter = function(a) {
var b = RegExp("[?&]" + a + "=([^&]*)").exec(window.location.search);
return b && decodeURIComponent(b[1].replace(/\+/g, " "));
}),
(Bizweb.uniq = function(a) {
for (var b = [], c = 0; c < a.length; c++)
  Bizweb.arrayIncludes(b, a[c]) || b.push(a[c]);
return b;
}),
(Bizweb.arrayIncludes = function(a, b) {
for (var c = 0; c < a.length; c++) if (a[c] == b) return !0;
return !1;
}),
(Bizweb.Product = (function() {
function a(a) {
  if ("undefined" != typeof a)
	for (property in a) this[property] = a[property];
}
return (
  (a.prototype.optionNames = function() {
	return "Array" == Bizweb.getClass(this.options) ? this.options : [];
  }),
  (a.prototype.optionValues = function(a) {
	if ("undefined" == typeof this.variants) return null;
	var b = Bizweb.map(this.variants, function(b) {
	  var c = "option" + (a + 1);
	  return "undefined" == typeof b[c] ? null : b[c];
	});
	return null == b[0] ? null : Bizweb.distinct(b);
  }),
  (a.prototype.getVariant = function(a) {
	var b = null;
	return a.length != this.options.length
	  ? null
	  : (Bizweb.each(this.variants, function(c) {
		  for (var d = !0, e = 0; e < a.length; e++) {
			var f = "option" + (e + 1);
			c[f] != a[e] && (d = !1);
		  }
		  if (d) return void (b = c);
		}),
		b);
  }),
  (a.prototype.getVariantById = function(a) {
	for (var b = 0; b < this.variants.length; b++) {
	  var c = this.variants[b];
	  if (c.id == a) return c;
	}
	return null;
  }),
  (a.name = "Product"),
  a
);
})()),
(Bizweb.money_format = " VND"),
(Bizweb.formatMoney = function(a, b) {
function f(a, b, c, d) {
  if (
	("undefined" == typeof b && (b = 2),
	"undefined" == typeof c && (c = "."),
	"undefined" == typeof d && (d = ","),
	"undefined" == typeof a || null == a)
  )
	return 0;
  a = a.toFixed(b);
  var e = a.split("."),
	f = e[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + c),
	g = e[1] ? d + e[1] : "";
  return f + g;
}
"string" == typeof a &&
  ((a = a.replace(/\./g, "")), (a = a.replace(/\,/g, "")));
var c = "",
  d = /\{\{\s*(\w+)\s*\}\}/,
  e = b || this.money_format;
switch (e.match(d)[1]) {
  case "amount":
	c = f(a, 2);
	break;
  case "150000":
	c = f(a, 0);
	break;
  case "amount_with_comma_separator":
	c = f(a, 2, ".", ",");
	break;
  case "150000":
	c = f(a, 0, ".", ",");
}
return e.replace(d, c);
}),
(Bizweb.OptionSelectors = (function() {
function a(a, b) {
  return (
	(this.selectorDivClass = "selector-wrapper"),
	(this.selectorClass = "single-option-selector"),
	(this.variantIdFieldIdSuffix = "-variant-id"),
	(this.variantIdField = null),
	(this.selectors = []),
	(this.domIdPrefix = a),
	(this.product = new Bizweb.Product(b.product)),
	"undefined" != typeof b.onVariantSelected
	  ? (this.onVariantSelected = b.onVariantSelected)
	  : (this.onVariantSelected = function() {}),
	this.replaceSelector(a),
	this.initDropdown(),
	!0
  );
}
return (
  (a.prototype.replaceSelector = function(a) {
	var b = document.getElementById(a),
	  c = b.parentNode;
	Bizweb.each(this.buildSelectors(), function(a) {
	  c.insertBefore(a, b);
	}),
	  (b.style.display = "none"),
	  (this.variantIdField = b);
  }),
  (a.prototype.buildSelectors = function() {
	for (var a = 0; a < this.product.optionNames().length; a++) {
	  var b = new Bizweb.SingleOptionSelector(
		this,
		a,
		this.product.optionNames()[a],
		this.product.optionValues(a)
	  );
	  (b.element.disabled = !1), this.selectors.push(b);
	}
	var c = this.selectorDivClass,
	  d = this.product.optionNames(),
	  e = Bizweb.map(this.selectors, function(a) {
		var b = document.createElement("div");
		if ((b.setAttribute("class", c), d.length > 1)) {
		  var e = document.createElement("label");
		  (e.htmlFor = a.element.id),
			(e.innerHTML = a.name),
			b.appendChild(e);
		}
		return b.appendChild(a.element), b;
	  });
	return e;
  }),
  (a.prototype.initDropdown = function() {
	var a = { initialLoad: !0 },
	  b = this.selectVariantFromDropdown(a);
	if (!b) {
	  var c = this;
	  setTimeout(function() {
		c.selectVariantFromParams(a) || c.selectors[0].element.onchange(a);
	  });
	}
  }),
  (a.prototype.selectVariantFromDropdown = function(a) {
	var b = document
	  .getElementById(this.domIdPrefix)
	  .querySelector("[selected]");
	return !!b && this.selectVariant(b.value, a);
  }),
  (a.prototype.selectVariantFromParams = function(a) {
	var b = Bizweb.getUrlParameter("variantid");
	return (
	  null == b && (b = Bizweb.getUrlParameter("variantId")),
	  this.selectVariant(b, a)
	);
  }),
  (a.prototype.selectVariant = function(a, b) {
	var c = this.product.getVariantById(a);
	if (null == c) return !1;
	for (var d = 0; d < this.selectors.length; d++) {
	  var e = this.selectors[d].element,
		f = e.getAttribute("data-option"),
		g = c[f];
	  null != g && this.optionExistInSelect(e, g) && (e.value = g);
	}
	return (
	  "undefined" != typeof jQuery
		? jQuery(this.selectors[0].element).trigger("change", b)
		: this.selectors[0].element.onchange(b),
	  !0
	);
  }),
  (a.prototype.optionExistInSelect = function(a, b) {
	for (var c = 0; c < a.options.length; c++)
	  if (a.options[c].value == b) return !0;
  }),
  (a.prototype.updateSelectors = function(a, b) {
	var c = this.selectedValues(),
	  d = this.product.getVariant(c);
	d
	  ? ((this.variantIdField.disabled = !1),
		(this.variantIdField.value = d.id))
	  : (this.variantIdField.disabled = !0),
	  this.onVariantSelected(d, this, b),
	  null != this.historyState &&
		this.historyState.onVariantChange(d, this, b);
  }),
  (a.prototype.selectedValues = function() {
	for (var a = [], b = 0; b < this.selectors.length; b++) {
	  var c = this.selectors[b].element.value;
	  a.push(c);
	}
	return a;
  }),
  (a.name = "OptionSelectors"),
  a
);
})()),
(Bizweb.SingleOptionSelector = function(a, b, c, d) {
(this.multiSelector = a),
  (this.values = d),
  (this.index = b),
  (this.name = c),
  (this.element = document.createElement("select"));
for (var e = 0; e < d.length; e++) {
  var f = document.createElement("option");
  (f.value = d[e]), (f.innerHTML = d[e]), this.element.appendChild(f);
}
return (
  this.element.setAttribute("class", this.multiSelector.selectorClass),
  this.element.setAttribute("data-option", "option" + (b + 1)),
  (this.element.id = a.domIdPrefix + "-option-" + b),
  (this.element.onchange = function(c, d) {
	(d = d || {}), a.updateSelectors(b, d);
  }),
  !0
);
}),
(Bizweb.Image = {
preload: function(a, b) {
  for (var c = 0; c < a.length; c++) {
	var d = a[c];
	this.loadImage(this.getSizedImageUrl(d, b));
  }
},
loadImage: function(a) {
  new Image().src = a;
},
switchImage: function(a, b, c) {
  if (a && b) {
	var d = this.imageSize(b.src),
	  e = this.getSizedImageUrl(a.src, d);
	c ? c(e, a, b) : (b.src = e);
  }
},
imageSize: function(a) {
  var b = a.match(
	/thumb\/(1024x1024|2048x2048|pico|icon|thumb|small|compact|medium|large|grande)\//
  );
  return null != b ? b[1] : null;
},
getSizedImageUrl: function(a, b) {
  if (null == b) return a;
  if ("master" == b) return this.removeProtocol(a);
  var c = a.match(/\.(jpg|jpeg|gif|png|bmp|bitmap|tiff|tif)(\?v=\d+)?$/i);
  if (null != c) {
	var d = Bizweb.mediaDomainName + "thumb/" + b + "/";
	return this.removeProtocol(a)
	  .replace(Bizweb.mediaDomainName, d)
	  .split("?")[0];
  }
  return null;
},
removeProtocol: function(a) {
  return a.replace(/http(s)?:/, "");
}
});
function floatToString(t, r) {
var e = t.toFixed(r).toString();
return e.match(/^\.\d+/) ? "0" + e : e;
}
function attributeToString(t) {
return (
"string" != typeof t && ((t += ""), "undefined" === t && (t = "")),
jQuery.trim(t)
);
}
"undefined" == typeof Bizweb && (Bizweb = {});
Bizweb.mediaDomainName = "//bizweb.dktcdn.net/";
(Bizweb.money_format = "$"),
(Bizweb.onError = function(XMLHttpRequest, textStatus) {
var data = eval("(" + XMLHttpRequest.responseText + ")");
alert(
  data.message
	? data.message + "(" + data.status + "): " + data.description
	: "Error : " + Bizweb.fullMessagesFromErrors(data).join("; ") + "."
);
}),
(Bizweb.fullMessagesFromErrors = function(t) {
var r = [];
return (
  jQuery.each(t, function(t, e) {
	jQuery.each(e, function(e, o) {
	  r.push(t + " " + o);
	});
  }),
  r
);
}),
(Bizweb.onCartUpdate = function(t) {
alert("There are now " + t.item_count + " items in the cart.");
}),
(Bizweb.onCartShippingRatesUpdate = function(t, r) {
var e = "";
r.zip && (e += r.zip + ", "),
  r.province && (e += r.province + ", "),
  (e += r.country),
  alert(
	"There are " +
	  t.length +
	  " shipping rates available for " +
	  e +
	  ", starting at " +
	  Bizweb.formatMoney(t[0].price) +
	  "."
  );
}),
(Bizweb.onItemAdded = function(t) {
alert(t.title + " was added to your shopping cart.");
}),
(Bizweb.onProduct = function(t) {
alert("Received everything we ever wanted to know about " + t.title);
}),
(Bizweb.formatMoney = function(amount, moneyFormat) {
function getDefault(value, defaultValue) {
  if (typeof value == "undefined") return defaultValue;
  return value;
}
function formatMoney(amount, decimal, thousandSeperate, decimalSeperate) {
  decimal = getDefault(decimal, 2);
  thousandSeperate = getDefault(thousandSeperate, ",");
  decimalSeperate = getDefault(decimalSeperate, ".");
  if (isNaN(amount) || null == amount) return 0;
  amount = amount.toFixed(decimal);
  var amountParts = amount.split(".");
  var integer = amountParts[0].replace(
	/(\d)(?=(\d\d\d)+(?!\d))/g,
	"$1" + thousandSeperate
  );
  var decimal = amountParts[1] ? decimalSeperate + amountParts[1] : "";
  return integer + decimal;
}
if (typeof amount == "string") {
  amount = amount.replace(".", "");
  amount = amount.replace(",", "");
}
var result = "";
var moneyRegex = /\{\{\s*(\w+)\s*\}\}/;
moneyFormat = moneyFormat || this.money_format;
switch (moneyFormat.match(moneyRegex)[1]) {
  case "amount":
	result = formatMoney(amount, 2);
	break;
  case "150000":
	result = formatMoney(amount, 0);
	break;
  case "amount_with_comma_separator":
	result = formatMoney(amount, 2, ".", ",");
	break;
  case "150000":
	result = formatMoney(amount, 0, ".", ",");
}
return moneyFormat.replace(moneyRegex, result);
}),
(Bizweb.resizeImage = function(t, r) {
try {
  if ("original" == r) return t;
  var thumbDomain = Bizweb.mediaDomainName + "thumb/" + r + "/";
  return t.replace(Bizweb.mediaDomainName, thumbDomain).split("?")[0];
} catch (o) {
  return t;
}
}),
(Bizweb.addItem = function(t, r, e) {
var r = r || 1,
  o = {
	type: "POST",
	url: "/cart/add.js",
	data: "quantity=" + r + "&VariantId=" + t,
	dataType: "json",
	success: function(t) {
	  "function" == typeof e ? e(t) : Bizweb.onItemAdded(t);
	},
	error: function(t, r) {
	  Bizweb.onError(t, r);
	}
  };
jQuery.ajax(o);
}),
(Bizweb.addItemFromForm = function(t, r) {
var e = {
  type: "POST",
  url: "/cart/add.js",
  data: jQuery("#" + t).serialize(),
  dataType: "json",
  success: function(t) {
	"function" == typeof r ? r(t) : Bizweb.onItemAdded(t);
  },
  error: function(t, r) {
	Bizweb.onError(t, r);
  }
};
jQuery.ajax(e);
}),
(Bizweb.getCart = function(t) {
jQuery.getJSON("/cart.js", function(r) {
  "function" == typeof t ? t(r) : Bizweb.onCartUpdate(r);
});
}),
(Bizweb.pollForCartShippingRatesForDestination = function(t, r, e) {
e = e || Bizweb.onError;
var o = function() {
  jQuery.ajax("/cart/async_shipping_rates", {
	dataType: "json",
	success: function(e, n, a) {
	  200 === a.status
		? "function" == typeof r
		  ? r(e.shipping_rates, t)
		  : Bizweb.onCartShippingRatesUpdate(e.shipping_rates, t)
		: setTimeout(o, 500);
	},
	error: e
  });
};
return o;
}),
(Bizweb.getCartShippingRatesForDestination = function(t, r, e) {
e = e || Bizweb.onError;
var o = {
  type: "POST",
  url: "/cart/prepare_shipping_rates",
  data: Bizweb.param({ shipping_address: t }),
  success: Bizweb.pollForCartShippingRatesForDestination(t, r, e),
  error: e
};
jQuery.ajax(o);
}),
(Bizweb.getProduct = function(t, r) {
jQuery.getJSON("/products/" + t + ".js", function(t) {
  "function" == typeof r ? r(t) : Bizweb.onProduct(t);
});
}),
(Bizweb.changeItem = function(t, r, e) {
var o = {
  type: "POST",
  url: "/cart/change.js",
  data: "quantity=" + r + "&variantId=" + t,
  dataType: "json",
  success: function(t) {
	"function" == typeof e ? e(t) : Bizweb.onCartUpdate(t);
  },
  error: function(t, r) {
	Bizweb.onError(t, r);
  }
};
jQuery.ajax(o);
}),
(Bizweb.removeItem = function(t, r) {
var e = {
  type: "POST",
  url: "/cart/change.js",
  data: "quantity=0&variantId=" + t,
  dataType: "json",
  success: function(t) {
	"function" == typeof r ? r(t) : Bizweb.onCartUpdate(t);
  },
  error: function(t, r) {
	Bizweb.onError(t, r);
  }
};
jQuery.ajax(e);
}),
(Bizweb.clear = function(t) {
var r = {
  type: "POST",
  url: "/cart/clear.js",
  data: "",
  dataType: "json",
  success: function(r) {
	"function" == typeof t ? t(r) : Bizweb.onCartUpdate(r);
  },
  error: function(t, r) {
	Bizweb.onError(t, r);
  }
};
jQuery.ajax(r);
}),
(Bizweb.updateCartFromForm = function(t, r) {
var e = {
  type: "POST",
  url: "/cart/update.js",
  data: jQuery("#" + t).serialize(),
  dataType: "json",
  success: function(t) {
	"function" == typeof r ? r(t) : Bizweb.onCartUpdate(t);
  },
  error: function(t, r) {
	Bizweb.onError(t, r);
  }
};
jQuery.ajax(e);
}),
(Bizweb.updateCartAttributes = function(t, r) {
var e = "";
jQuery.isArray(t)
  ? jQuery.each(t, function(t, r) {
	  var o = attributeToString(r.key);
	  "" !== o &&
		(e += "attributes[" + o + "]=" + attributeToString(r.value) + "&");
	})
  : "object" == typeof t &&
	null !== t &&
	jQuery.each(t, function(t, r) {
	  e +=
		"attributes[" +
		attributeToString(t) +
		"]=" +
		attributeToString(r) +
		"&";
	});
var o = {
  type: "POST",
  url: "/cart/update.js",
  data: e,
  dataType: "json",
  success: function(t) {
	"function" == typeof r ? r(t) : Bizweb.onCartUpdate(t);
  },
  error: function(t, r) {
	Bizweb.onError(t, r);
  }
};
jQuery.ajax(o);
}),
(Bizweb.updateCartNote = function(t, r) {
var e = {
  type: "POST",
  url: "/cart/update.js",
  data: "note=" + attributeToString(t),
  dataType: "json",
  success: function(t) {
	"function" == typeof r ? r(t) : Bizweb.onCartUpdate(t);
  },
  error: function(t, r) {
	Bizweb.onError(t, r);
  }
};
jQuery.ajax(e);
}),
jQuery.fn.jquery >= "1.4"
? (Bizweb.param = jQuery.param)
: ((Bizweb.param = function(t) {
	var r = [],
	  e = function(t, e) {
		(e = jQuery.isFunction(e) ? e() : e),
		  (r[r.length] =
			encodeURIComponent(t) + "=" + encodeURIComponent(e));
	  };
	if (jQuery.isArray(t) || t.jquery)
	  jQuery.each(t, function() {
		e(this.name, this.value);
	  });
	else for (var o in t) Bizweb.buildParams(o, t[o], e);
	return r.join("&").replace(/%20/g, "+");
  }),
  (Bizweb.buildParams = function(t, r, e) {
	jQuery.isArray(r) && r.length
	  ? jQuery.each(r, function(r, o) {
		  rbracket.test(t)
			? e(t, o)
			: Bizweb.buildParams(
				t +
				  "[" +
				  ("object" == typeof o || jQuery.isArray(o) ? r : "") +
				  "]",
				o,
				e
			  );
		})
	  : null != r && "object" == typeof r
	  ? Bizweb.isEmptyObject(r)
		? e(t, "")
		: jQuery.each(r, function(r, o) {
			Bizweb.buildParams(t + "[" + r + "]", o, e);
		  })
	  : e(t, r);
  }),
  (Bizweb.isEmptyObject = function(t) {
	for (var r in t) return !1;
	return !0;
  }));

</script>
	<script>
var GLOBAL = {
common : {
	init: function(){
		$(document).on('click', '.add_to_cart',addToCart )
		$(document).on('click', '.buynow',buynow )
	}
},
templateIndex : {
	init: function(){
	}
},
templateProduct : {
	init: function(){
	}
},
templateCart : {
	init: function(){
	}
}
}
var UTIL = {
fire : function(func,funcname, args){
	var namespace = GLOBAL;
	funcname = (funcname === undefined) ? 'init' : funcname;
	if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function'){
		namespace[func][funcname](args);
	}
},
loadEvents : function(){
	var bodyId = document.body.id;
	UTIL.fire('common');
	$.each(document.body.className.split(/\s+/),function(i,classnm){
		UTIL.fire(classnm);
		UTIL.fire(classnm,bodyId);
	});
}
};
$(document).ready(UTIL.loadEvents);
Number.prototype.formatMoney = function(c, d, t){
var n = this, 
	c = isNaN(c = Math.abs(c)) ? 2 : c, 
	d = d == undefined ? "." : d, 
	t = t == undefined ? "." : t, 
	s = n < 0 ? "-" : "", 
	i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
	j = (j = i.length) > 3 ? j % 3 : 0;
return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};
function addToCart(e){
if (typeof e !== 'undefined') e.preventDefault();
var $this = $(this);
var form = $this.parents('form');		
$.ajax({
	type: 'POST',
	url: '/cart/add.js',
	async: false,
	data: form.serialize(),
	dataType: 'json',
	error: addToCartFail,
	beforeSend: function() {  
	},
	success: addToCartSuccess,
	cache: false
});
}
function buynow(e){
if (typeof e !== 'undefined') e.preventDefault();
var $this = $(this);
var form = $this.parents('form');		
const callback = (cart) => {
	location.href = '/checkout';
}

$.ajax({
	type: 'POST',
	url: '/cart/add.js',
	async: false,
	data: form.serialize(),
	dataType: 'json',
	error: addToCartFail,
	beforeSend: function() {  
	},
	success: (jqXHR, textStatus, errorThrown) => {
		addToCartSuccess(jqXHR, textStatus, errorThrown,callback)
	},
	cache: false
});
}
function qty(){	
var dqty = $('#qtym').val();	
	if (dqty == undefined){
	return 1;
}
return dqty;
}

function checkCartLimit(e, totalPrice) {
	e.preventDefault();
	
	 if ((totalPrice) < Number('500000')) {
		 swal({
			 title: `Thông báo`,
			 text: `Đơn hàng của bạn chưa đạt giá trị tối thiểu 500.000đ. 
Vui lòng chọn mua thêm sản phẩm`,
			 type: "warning",
			 className: 'cart-limit-modal',
			 button: 'Xác nhận'
		 })
		 return;
	 } else {
		 location.href = '/checkout';
	 }
	 
}
function addToCartSuccess (jqXHR, textStatus, errorThrown,callback){
$.ajax({
	type: 'GET',
	url: '/cart.js',
	async: false,
	cache: false,
	dataType: 'json',
	success: function (cart){
		
		awe.hidePopup('.loading');
		var url_product = jqXHR['url'];
		var class_id = jqXHR['product_id'];
		var name = jqXHR['name'];
		var textDisplay = ('<i style="margin-right:5px; color:red; font-size:13px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm vào giỏ hàng');
		var id = jqXHR['variant_id'];
		var dataList = $(".item-name a").map(function() {
			var plus = $(this).text();
			return plus;
		}).get();
		$('.title-popup-cart .cart-popup-name').html('<a href="'+ url_product +'" title="'+name+'">'+ name + '</a> ');
		var nameid = dataList,
			found = $.inArray(name, nameid);
		var textfind = found;

		var src = '';
		if(Bizweb.resizeImage(jqXHR['image'], 'small') == null || Bizweb.resizeImage(jqXHR['image'], 'small') =="null" || Bizweb.resizeImage(jqXHR['image'], 'small') ==''){
			src= 'https://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif'
		}
		else
		{
			src=  Bizweb.resizeImage(jqXHR['image'], 'small')
		}
		$(".item-info > p:contains("+id+")").html('<span class="add_sus" style="color:#898989;"><i style="margin-right:5px; color:#3cb878; font-size:14px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm</span>');
		
		var va_title = jqXHR['variant_title'];

		if (va_title == 'Default Title') {
			va_title = "";
		}else {
			va_title = jqXHR['variant_title'];
		}
			var windowW = $(window).width();
			$('#popup-cart').addClass('opencart');
			$('body').addClass('opacitycart');
			$('#popup-cart').addClass('opencart');
			$('body').addClass('opacitycart');
			$('#popupCartModal').html('');
		const limit = Number('500000')
		const  cart_action = cart.total_price >= limit ? `
		<a href="/checkout" class="btn btn-main btn-full">Thanh toán</a>
		<a  href="/cart" class="btn btn-main checkout_button btn-full">Xem giỏ hàng</a>
		`: `
		<button type="button" class="btn btn-main" data-dismiss="modal" data-backdrop="false"
				aria-label="Close" >Mua thêm</button>
		<a  href="/cart" class="btn btn-main  checkout_button btn-full">Xem giỏ hàng</a>
		`
		let limit_message  = `Đơn hàng của bạn chưa đạt giá trị tối thiểu 500.000đ. 
Vui lòng chọn mua thêm sản phẩm`
			limit_message = limit_message ? `<span class="mr-2"><i class="fa fa-info-circle" aria-hidden="true"></i></span> ${limit_message}`  : ''
			var $popupMobile = `<div class="modal-dialog align-vertical">
<div class="modal-content "><button type="button" class="close" data-dismiss="modal" data-backdrop="false"
	aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>
  <div class="row row-noGutter">
	<div class="modal-left col-sm-12 col-lg-12 col-md-12">
	  <h3 class="modal-title"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M8.00006 15.3803C12.0761 15.3803 15.3804 12.076 15.3804 7.99995C15.3804 3.92391 12.0761 0.619629 8.00006 0.619629C3.92403 0.619629 0.619751 3.92391 0.619751 7.99995C0.619751 12.076 3.92403 15.3803 8.00006 15.3803Z" fill="#2EB346"/>
		<path d="M8 16C3.58916 16 0 12.4115 0 8C0 3.58916 3.58916 0 8 0C12.4115 0 16 3.58916 16 8C16 12.4115 12.4115 16 8 16ZM8 1.23934C4.27203 1.23934 1.23934 4.27203 1.23934 8C1.23934 11.728 4.27203 14.7607 8 14.7607C11.728 14.7607 14.7607 11.7273 14.7607 8C14.7607 4.27203 11.728 1.23934 8 1.23934Z" fill="#2EB346"/>
		<path d="M7.03336 10.9434C6.8673 10.9434 6.70865 10.8771 6.59152 10.7582L4.30493 8.43438C4.06511 8.19023 4.06821 7.7986 4.31236 7.55816C4.55652 7.31898 4.94877 7.32145 5.18858 7.5656L7.0154 9.42213L10.7948 5.25979C11.0259 5.00635 11.4176 4.98838 11.6698 5.21766C11.9232 5.44757 11.9418 5.8392 11.7119 6.09326L7.49193 10.7408C7.3773 10.8672 7.21618 10.9403 7.04577 10.944C7.04143 10.9434 7.03771 10.9434 7.03336 10.9434Z" fill="white"/>
		</svg>
		<span>Thêm vào giỏ hàng thành công</span></h3>
	  <div class="modal-body">
		<div class="media">
		  <div class="media-left thumb_img">
			<div class="thumb-1x1"><img
				src="${src}"
				alt="${jqXHR['title']}"></div>
		  </div>
		  <div class="media-body body_content">
			<div class="product-title">${jqXHR['title']}</div>
			<div class="variant_title font-weight-light"><span>${va_title}</span></div>
			  
		  </div>
		</div>
	  </div>
	</div>
	<div class="modal-right margin-top-10 col-sm-12 col-lg-12 col-md-12">
	  <div class="title right_title d-flex justify-content-between" ><a href="/cart"> Giỏ hàng hiện có </a>
	<div class="text-right">
		<span class="price">${Bizweb.formatMoney(cart.total_price, '{{150000}}₫')}</span>
		<div class="count font-weight-light">
			(<span
		class="cart-popup-count">4</span>) sản phẩm 
		</div>
	</div>
		
  
	  </div>
		
		${cart.total_price < limit ? `  <div class="cart-message">${limit_message}</div>`:'' }
		  
		  <div class="cart-action">
						${cart_action}

		  </div>
	</div>
  </div>
</div>
</div>`;
			$('#popupCartModal').html($popupMobile);
		
		if(typeof callback == 'function' &&  cart.total_price >= limit){
		return	callback(cart)
		}
			$('#popupCartModal').modal(); 
		Bizweb.updateCartFromForm(cart, '.top-cart-content .mini-products-list');
		Bizweb.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');
			
		
	}
});
}
function addToCartFail(jqXHR, textStatus, errorThrown){
var response = $.parseJSON(jqXHR.responseText);
var $info = '<div class="error">'+ response.description +'</div>';
}
function getDelivery(){
if(!$('.ega-delivery').length && window.egaDeliveryValid){
	   var head = document.getElementsByTagName('head').item(0);
	var script = document.createElement('script');
	script.setAttribute('src', 'https://mixcdn.egany.com/themes/delivery-builtin/index.min.js');
	head.appendChild(script);
   }

}
$(document).on('click', ".remove-item-cart", function () {
var variantId = $(this).attr('data-id');
removeItemCart(variantId);
});
$(document).on('click', ".items-count", function () {
$(this).parent().children('.items-count').prop('disabled', true);
var thisBtn = $(this);
var variantId = $(this).parent().find('.variantID').val();
var qty =  $(this).parent().children('.number-sidebar').val();
updateQuantity(qty, variantId);
});
$(document).on('change', ".number-sidebar", function () {
var variantId = $(this).parent().children('.variantID').val();
var qty =  $(this).val();
updateQuantity(qty, variantId);
});
function updateQuantity (qty, variantId){
var variantIdUpdate = variantId;
$.ajax({
	type: "POST",
	url: "/cart/change.js",
	data: {"quantity": qty, "variantId": variantId},
	dataType: "json",
	success: function (cart, variantId) {
		Bizweb.onCartUpdateClick(cart, variantIdUpdate);
		cart_min();
	},
	error: function (qty, variantId) {
		Bizweb.onError(qty, variantId)
	}
})
}
function removeItemCart (variantId){
var variantIdRemove = variantId;
$.ajax({
	type: "POST",
	url: "/cart/change.js",
	data: {"quantity": 0, "variantId": variantId},
	dataType: "json",
	success: function (cart, variantId) {
		Bizweb.onCartRemoveClick(cart, variantIdRemove);
		$('.productid-'+variantIdRemove).remove();
		if($('.tbody-popup>div').length == '0' ){
			$('#popup-cart').removeClass('opencart');
			$('body').removeClass('opacitycart');
		}
		if($('.list-item-cart>li').length == '0' ){
			$('.mini-products-list').html('<div class="no-item"><p>Không có sản phẩm nào.</p></div>');
		}
		if($('.cart-mobile .item-product').length == '0' ){
			$('.page_cart').empty();
			$('.header-cart-content').empty();
			$('.cart-mobile .header-cart').hide()
			$('.title_cart_pc').html('<p class="hidden-xs-down">Không có sản phẩm nào. Quay lại <a href="/" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>');
			$('.cart-empty').show()
			$('.cart-sticky-cta').remove()
		}
		cart_min()
	},
	error: function (variantId, r) {
		Bizweb.onError(variantId, r)
	}
})
}
function render(props) {
	return function(tok, i) {
		return (i % 2) ? props[tok] : tok;
	};
}
Bizweb.updateCartFromForm = function(cart, cart_summary_id, cart_count_id) {
	if ((typeof cart_summary_id) === 'string') {
		var cart_summary = jQuery(cart_summary_id);
		if (cart_summary.length) {
			// Start from scratch.
			cart_summary.empty();
			// Pull it all out.        
			jQuery.each(cart, function(key, value) {
				if (key === 'items') {
					var table = jQuery(cart_summary_id);           
					if (value.length) {   
						jQuery('<ul class="list-item-cart"></ul>').appendTo(table);
						jQuery.each(value, function(i, item) {	
							var buttonQty = "";
							if(item.quantity == '1'){
								buttonQty = 'disabled';
							}else{
								buttonQty = '';
							}
							var link_img0 = Bizweb.resizeImage(item.image, 'compact');
							if(link_img0=="null" || link_img0 =='' || link_img0 ==null){
								link_img0 = 'https://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif';
							}
							if(item.variant_title == 'Default Title'){
							var ItemDropCart = [{
							  url: item.url,
							  image_url: link_img0,
							  price: Bizweb.formatMoney(item.price, '{{150000}}₫'),
							  title: item.title,
							  buttonQty: buttonQty,
							  quanty: item.quantity,
							  id_item: item.variant_id,
							  variant_title: ''
							}]
							}else {
							var ItemDropCart = [{
							  url: item.url,
							  image_url: link_img0,
							  price: Bizweb.formatMoney(item.price, '{{150000}}₫'),
							  title: item.title,
							  buttonQty: buttonQty,
							  quanty: item.quantity,
							  id_item: item.variant_id,
							  variant_title: item.variant_title,
							}];
														}
							$(function() {
								var TemplateItemDropCart = $('script[data-template="ItemDropCart"]').text().split(/\$\{(.+?)\}/g);
								$('.list-item-cart').append(ItemDropCart.map(function(item) {
									return TemplateItemDropCart.map(render(item)).join('');
								}));
							});
						}); 
						jQuery('<div class="pd"><div class="top-subtotal">Tổng tiền tạm tính: <span class="price price_big">' + Bizweb.formatMoney(cart.total_price, "{{150000}}₫") + '</span></div></div>').appendTo(table);
						jQuery('<div class="pd right_ct"><a href="/cart" class="btn btn-white"><span>Tiến hành thanh toán</span></a></div>').appendTo(table);
					}
					else {
						jQuery('<div class="no-item"><p>Không có sản phẩm nào.</p></div>').appendTo(table);

					}
				}
			});
		}
	}
	updateCartDesc(cart);
	var numInput = document.querySelector('#cart-sidebar input.input-text');
	if (numInput != null){
		// Listen for input event on numInput.
		numInput.addEventListener('input', function(){
			// Let's match only digits.
			var num = this.value.match(/^\d+$/);
			if (num == 0) {
				// If we have no match, value will be empty.
				this.value = 1;
			}
			if (num === null) {
				// If we have no match, value will be empty.
				this.value = "";
			}
		}, false)
	}
}

Bizweb.updateCartPageForm = function(cart, cart_summary_id, cart_count_id) {
	if ((typeof cart_summary_id) === 'string') {
		var cart_summary = jQuery(cart_summary_id);
		if (cart_summary.length) {
			// Start from scratch.
			cart_summary.empty();
			// Pull it all out.        
			jQuery.each(cart, function(key, value) {
				if (key === 'items') {
					var table = jQuery(cart_summary_id);           
					if (value.length) {  
		
						var HeaderCartPc = $('script[data-template="HeaderCartPc"]').text().split(/\$\{(.+?)\}/g);
						var pageCartCheckout = $('script[data-template="pageCartCheckout"]').text().split(/\$\{(.+?)\}/g);
						
						$(table).append((function() {
							return HeaderCartPc.map(render()).join('');
						}));
												
						jQuery.each(value, function(i, item) {
							var buttonQty = "";
							if(item.quantity == '1'){
								buttonQty = 'disabled';
							}else{
								buttonQty = '';
							}
							var link_img1 = Bizweb.resizeImage(item.image, 'compact');
							if(link_img1=="null" || link_img1 =='' || link_img1 ==null){
								link_img1 = 'https://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif';
							}
							
							
							if(item.variant_title == 'Default Title'){
								var ItemCartPage = [{
								  url: item.url,
								  image_url: link_img1,
								  price: Bizweb.formatMoney(item.price, '{{150000}}₫'),
								  title: item.title,
								  buttonQty: buttonQty,
								  quanty: item.quantity,
								  variant_title: item.variant_title,
								  price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{150000}}₫"),
								  id_item: item.variant_id,
								  variant_title: ''
								}]
							}else {
								var ItemCartPage = [{
								  url: item.url,
								  image_url: link_img1,
								  price: Bizweb.formatMoney(item.price, '{{150000}}₫'),
								  title: item.title,
								  buttonQty: buttonQty,
								  quanty: item.quantity,
								  variant_title: item.variant_title,
								  price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{150000}}₫"),
								  id_item: item.variant_id
								}]
							}
							
							$(function() {
								var pageCartItem = $('script[data-template="pageCartItem"]').text().split(/\$\{(.+?)\}/g);
								$(table.find('.cart-tbody')).append(ItemCartPage.map(function(item) {
									return pageCartItem.map(render(item)).join('');
									
								}));
							});
							
						}); 
						
						var PriceTotalCheckout = [{
							  price_total: Bizweb.formatMoney(cart.total_price, "{{150000}}₫")
						}];				
						$(table.children('.cart')).append(PriceTotalCheckout.map(function(item) {
							return pageCartCheckout.map(render(item)).join('');
						}));
					}else {
						jQuery('<p class="hidden-xs-down ">Không có sản phẩm nào. Quay lại <a href="/collections/all" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>').appendTo(table);
						 jQuery('.cart_desktop_page').css('min-height', 'auto');
					}
				}
			});
		}
	}
	updateCartDesc(cart);
	jQuery('#wait').hide();

}
Bizweb.updateCartPopupForm = function(cart, cart_summary_id, cart_count_id) {

	if ((typeof cart_summary_id) === 'string') {
		var cart_summary = jQuery(cart_summary_id);
		if (cart_summary.length) {
			// Start from scratch.
			cart_summary.empty();
			// Pull it all out.        
			jQuery.each(cart, function(key, value) {
				if (key === 'items') {
					var table = jQuery(cart_summary_id);           
					if (value.length) { 
						jQuery.each(value, function(i, item) {
							var src = item.image;
							if(src == null){
								src = "https://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
							}
							var buttonQty = "";
							if(item.quantity == '1'){
								buttonQty = 'disabled';
							}else{
								buttonQty = '';
							}
												  
							if(item.variant_title == 'Default Title'){				  
								var ItemPopupCart = [{
									  url: item.url,
									  image_url: src,
									  price: Bizweb.formatMoney(item.price, '{{150000}}₫'),
									  title: item.title,
									  quanty: item.quantity,
									  variant_title: '',
									  price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{150000}}₫"),
									  id_item: item.variant_id
								}];
							}else {
								var ItemPopupCart = [{
									  url: item.url,
									  image_url: src,
									  price: Bizweb.formatMoney(item.price, '{{150000}}₫'),
									  title: item.title,
									  quanty: item.quantity,
									  variant_title: item.variant_title,
									  price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{150000}}₫"),
									  id_item: item.variant_id
								}];
							}
							
					
							$(function() {
								var TemplateItemPopupCart = $('script[data-template="TemplateItemPopupCart"]').text().split(/\$\{(.+?)\}/g);
								$(table).append(ItemPopupCart.map(function(item) {
									return TemplateItemPopupCart.map(render(item)).join('');
								}));
							});					  
							
							$('.link_product').text();
						}); 
					}
				}
			});
		}
	}
	jQuery('.total-price').html(Bizweb.formatMoney(cart.total_price, "{{150000}}₫"));
		updateCartDesc(cart);
	}
Bizweb.updateCartPageFormMobile = function(cart, cart_summary_id, cart_count_id) {
		if ((typeof cart_summary_id) === 'string') {
			var cart_summary = jQuery(cart_summary_id);
			if (cart_summary.length) {
				// Start from scratch.
				cart_summary.empty();
				// Pull it all out.
				if (cart.items && cart.items.length) {
				  var table = jQuery(cart_summary_id);           
				  jQuery('<div class="cart_page_mobile content-product-list"></div>').appendTo(table);
				  jQuery.each(cart.items, function(i, item) {
								if ( item.image != null) {
									var src = Bizweb.resizeImage(item.image, 'compact');
								} else {
									var src = "https://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
								}
								var ItemCartPageMobile = [{
								  url: item.url,
								  image_url: src,
								  price: Bizweb.formatMoney(item.price, '{{150000}}₫'),
								  title: item.title,
								  quanty: item.quantity,
								  variant_title: item.variant_title !== 'Default Title'?item.variant_title : '',
								  price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{150000}}₫"),
								  id_item: item.variant_id
								}];
								
									var pageCartItemMobile = $('script[data-template="ItemCartMobile"]').text().split(/\$\{(.+?)\}/g);
								
									$(table.children('.content-product-list')).append(ItemCartPageMobile.map(function(item) {
										return pageCartItemMobile.map(render(item)).join('');
									}));

							})
							
							var pageCartCheckoutMobile = $('script[data-template="pageCartCheckoutMobile"]').text().split(/\$\{(.+?)\}/g);  
							var PriceTotalCheckoutMobile = [{
								price_total: Bizweb.formatMoney(cart.total_price, "{{150000}}₫")
							}];
							if(window.innerWidth < 767 ){
							var stickyCartCheckout = $('script[data-template="templateStickyCheckout"]').text().split(/\$\{(.+?)\}/g);  
							$('body').append(PriceTotalCheckoutMobile.map(function(item) {
								return stickyCartCheckout.map(render(item)).join('');
							}));
							}										
							$(table).append(PriceTotalCheckoutMobile.map(function(item) {
								return pageCartCheckoutMobile.map(render(item)).join('');
							}));
							
				
							
								
				$('.cart_page_mobile').append(`<div class="cart-note">
				<label for="note" class="note-label">Ghi chú đơn hàng</label>
				<textarea id="note" name="note" rows="8"></textarea>
			</div>`)
				  }
								
			}
		}
		updateCartDesc(cart);
}


function updateCartDesc(data){
	var $cartPrice = Bizweb.formatMoney(data.total_price, "{{150000}}₫"),
		$cartMobile = $('#header .cart-mobile .quantity-product'),
		$cartDesktop = $('.count_item_pr, .count_sidebar, .cart-popup-count'),
		$cartDesktopList = $('.cart-counter-list'),
		$cartPopup = $('.cart-popup-count');

	switch(data.item_count){
		case 0:
			$cartMobile.text('0');
			$cartDesktop.text('0');
			$cartDesktopList.text('0');
			$cartPopup.text('0');

			break;
		case 1:
			$cartMobile.text('1');
			$cartDesktop.text('1');
			$cartDesktopList.text('1');
			$cartPopup.text('1');

			break;
		default:
			$cartMobile.text(data.item_count);
			$cartDesktop.text(data.item_count);
			$cartDesktopList.text(data.item_count);
			$cartPopup.text(data.item_count);

			break;
	}
	$('.top-cart-content .top-subtotal .price, aside.sidebar .block-cart .subtotal .price, .popup-total .total-price').html($cartPrice);
	$('.popup-total .total-price').html($cartPrice);
	$('.shopping-cart-table-total .totals_price, .price_sidebar .price_total_sidebar').html($cartPrice);
	$('.totals_price_mobile').html($cartPrice);
	$('.cartCount, .cart-popup-count, #ega-cart-count').html(data.item_count);
															
														
}

Bizweb.onCartUpdate = function(cart) {
	Bizweb.updateCartFromForm(cart, '.mini-products-list');
	Bizweb.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');
	
	 };
	 Bizweb.onCartUpdateClick = function(cart, variantId) {
		 jQuery.each(cart, function(key, value) {
			 if (key === 'items') {    
				 jQuery.each(value, function(i, item) {	
					 if(item.variant_id == variantId){
						 $('.productid-'+variantId).find('.cart-price span.price').html(Bizweb.formatMoney(item.price * item.quantity, "{{150000}}₫"));
						 $('.productid-'+variantId).find('.items-count').prop("disabled", false);
						 $('.productid-'+variantId).find('.number-sidebar').prop("disabled", false);
						 $('.productid-'+variantId +' .number-sidebar').val(item.quantity);
						  $('.list-item-cart .item.productid-'+variantId).find( '.quanlity').text('x ' + item.quantity) 
							if(item.quantity == '1'){
							 $('.productid-'+variantId).find('.items-count.btn-minus').prop("disabled", true);
						 }
					 }
				 }); 
			 }
		 });
		 updateCartDesc(cart);
	 }
	 Bizweb.onCartRemoveClick = function(cart, variantId) {
		 jQuery.each(cart, function(key, value) {
			 if (key === 'items') {    
				 jQuery.each(value, function(i, item) {	
					 if(item.variant_id == variantId){
						 $('.productid-'+variantId).remove();
					 }
				 }); 
			 }
		 });
		 updateCartDesc(cart);
	 }
const initCart = ()=>{
						 $.ajax({
			 type: 'GET',
			 url: '/cart.js',
			 async: false,
			 cache: false,
			 dataType: 'json',
			 success: function (cart){
				 Bizweb.updateCartFromForm(cart, '.mini-products-list');
				 Bizweb.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup'); 
				 
					if(!cart.item_count){
																
					}
				  }
				 });
		 
		 var wDWs = $(window).width();
		if (wDWs < 1199) {
			$('.top-cart-content').remove();

		}									
															
	}														
	 $(window).ready(function(){
		

		$(window).one(' mousemove touchstart scroll',initCart)	
		
		 
});
															
//Check inventory
$(document).on('click', ".items-count", function () {
	$(this).parent().children('.items-count').prop('disabled', true);
	var variantId = $(this).parent().find('.variantID').val(),
		qty = $(this).parent().children('.number-sidebar').val(),
		url = $(this).parent().parent().parent().find('.product-name a').attr('href');
	CheckQtyCart(qty, variantId, url);
})
	function CheckQtyCart(qty, variantId, url) {
	if(!url) return																	
	$.ajax({
		type : 'GET',
		dataType : 'json',
		url: ""+url+".json",
		success : function(data) {
			locationData = data;
			for(var i = 0; i < locationData.variants.length; i++) {
				if(locationData.variants[i].id == variantId){
					var maxS = locationData.variants[i].inventory_quantity,
						allow = locationData.variants[i].inventory_management,
						continues = locationData.variants[i].inventory_policy;
					if (allow == 'bizweb'){
						$('.productid-'+variantId+'').find('.items-count.btn-plus').css("pointer-events","auto");
						if (continues == "deny") {
							$('.productid-'+variantId+'').find('.items-count.btn-plus').css("pointer-events","none");
							if (qty >= maxS) {
								updateQuantity(maxS, variantId);
								$('.productid-'+variantId+'').find('.quanlity').text(`x ${maxS}`)
								$('.productid-'+variantId+'').find('.items-count.btn-plus').css("pointer-events","none");
							}else {
								$('.productid-'+variantId+'').find('.items-count.btn-plus').css("pointer-events","auto");
							}
						} else if (continues == "continue") {
							$('.productid-'+variantId+'').find('.items-count.btn-plus').css("pointer-events","auto");
						} else{
							$('.productid-'+variantId+'').find('.items-count.btn-plus').css("pointer-events","auto");
						}
					}
				}
			}
		}
	})
}
function alertInvalidQty(qty){
	alert(`Bạn chỉ có thể mua tối đa ${qty} sản phẩm`)			
}
function validateQty(product, variantId, qty){
	let isInValidQty = false;
	/** check variant **/
	let variant = product && product.variants.find(item => item.id == variantId )
	if(variant && variant.inventory_management === "bizweb" && variant.inventory_policy == "deny" ){
		isInValidQty = qty > variant.inventory_quantity 
		isInValidQty && alertInvalidQty(variant.inventory_quantity)
		return isInValidQty ? variant.inventory_quantity: false
	}
	return 	isInValidQty

}
function cart_min() {
var sts = true;
$.ajax({
	type: 'GET',
	url: '/cart.js',
	async: false,
	success:function(data) {
		var cart = parseInt(data.total_price+'');
		var cart_compare = parseInt(500000);
		if(cart < cart_compare) {
			$('.btn-proceed-checkout-mobile').addClass('disabled');
			$('.cart-limit-alert').css('display', 'block');
			$('#template-cart').removeClass('cart-available')
			sts = false;
		} else {
			$('.btn-proceed-checkout-mobile').removeClass('disabled');
			$('.cart-limit-alert').css('display', 'none');
			$('#template-cart').addClass('cart-available')
		}
	}
})
return sts;
}


$(document).ready(function () {
  
	  $(window).one(' mousemove touchstart scroll',cart_min)	
	})


</script>		
	<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/main.js?1692086228721">
	<script src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/main.js?1692086228721" type="text/javascript"></script>
	
	<link rel="preload" as="script" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/ega-gateway-min.js?1692086228721">

	<script src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/ega-gateway-min.js?1692086228721" type="text/javascript"></script>
			<script>
var cro_show = true,
	cro_addcart_show = true,
	cro_cart_show = true,
	cro_addcart_title = "Thêm vào giỏ",
	cro_addcart_bg = "#d82e4d",
	cro_addcart_color = "#fff",
	cro_price_color = "#f3283d",
	cro_compare_price_color = "#979797"
	cro_variant_color = "#d82e4d",
	cro_variant_bg = "#fff",
	cro_cta_bg = "#d82e4d",
	cro_cta_color = "",
	cro_addcart_modal_mess = "Tiến hành thanh toán",
	cro_addcart_modal_redirect = "",
	cro_modal_btn_text = "",
	cro_modal_btn_bg = "",
	cro_modal_btn_color = "",
	cro_hotline_show =  true,
	cro_hotline_number = "19006750",
	cro_mess_show = true,
	cro_mess_url = "https://m.me/abcd",
	cro_home_show = 3,
	cro_home_title = "Ưu đãi",
	cro_home_url = "/san-pham-freeship",
	cro_coll_title = "Sản phẩm",
	cro_coll_url = "/collections/all",
	cro_blog_title = "Cửa hàng",
	cro_blog_url = "/lien-he",
	cro_general_color = "#d82e4d",
	cro_product_color = "#d82e4d",
	cro_background_color = "#fff",
	cro_label_background = " #fed632",
	cro_label_color = "#ee4d2d"

const crAddonScript = "//bizweb.dktcdn.net/100/426/076/themes/917889/assets/cro-btn.js?1692086228721"
window['cro-btn'] = {
	shop : 'ega-cosmetic.mysapo.net',
	platform: 'sapo',
	moneyFormat: '{{150000}}₫',
	currentTemplate: 'product',
	platformApi: Bizweb,
	scripts: [],
		lang: {
	"email_invalid": "Email không đúng định dạng",
	"phone_invalid": "Số điện thoại không đúng định dạng",
	"require_invalid": "Vui lòng điền trường này",
	"unavailable": "Liên hệ"
	}
}
	window['cro-btn'].productHandle = '/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml'
	 window.egany = 	window.egany || {}

window.egany["cro-btn"] = {

"mobile": {
	"enable": true,
	"general": {
		"enable": true,
		"design": {
			"template": "shoppee",
			"background": "#ffffff",
			"customCss": "",
			"croBorderRadius": 0,
			"ctaBorderRadius": 5
		},
		"buttons": [
			
			
			{
				"id": "cro-link-1",
				"className": "",
				"order": "4",
				"type": "link",
				"title": cro_coll_title,
				"link": cro_coll_url,
				"icon": "//bizweb.dktcdn.net/100/426/076/themes/917889/assets/icon-cro-coll.png?1692086228721",
				"background": "#fff",
				"color": cro_general_color,
				"action": "",
			},
											{
		
				"id": "cro-link-2",
				"className": "",
				"order": "5",
				"type": "link",
				"title": cro_blog_title,
				"link": cro_blog_url,
				"icon": "//bizweb.dktcdn.net/100/426/076/themes/917889/assets/icon-cro-blog.png?1692086228721",
				"background": "#fff",
				"color": cro_general_color,
				"action": "",

			},
							
			{

				"id": "cro-link-3",
				"className": "",
				"order": "3",
				"type": "link",
				"title": cro_home_title,
				"link": cro_home_url,
				"icon": "//bizweb.dktcdn.net/100/426/076/themes/917889/assets/cro-home-icon.png?1692086228721",
				"background": "#fff",
				"color": cro_general_color,
				"action": "",

			},
							 
			{

				"id": "cro-mess-1",
				"className": "",
				"order": "2",
				"type": "chat",
				"title": "Nhắn tin",
				"link": cro_mess_url,
				"icon": "//bizweb.dktcdn.net/100/426/076/themes/917889/assets/cro-mess-icon.png?1692086228721",
				"background": "#fff",
				"color": cro_general_color,

			},
							
			{

				"id": "cro-phone-1",
				"className": "",
				"order": "1",
				"type": "call",
				"title": "Gọi điện",
				"link": cro_hotline_number,
				"icon": "//bizweb.dktcdn.net/100/426/076/themes/917889/assets/cro-phone-icon.png?1692086228721",
				"background": "#fff",
				"color": cro_general_color,

			},
						   
		]
	},
	"product": {
		"enable": true,
		"buttons": [
			 
			{

				"id": "cro-mess-1",
				"className": "",
				"order": "2",
				"type": "chat",
				"title": "Nhắn tin",
				"link": cro_mess_url,
				"icon": "//bizweb.dktcdn.net/100/426/076/themes/917889/assets/cro-mess-icon.png?1692086228721",
				"background": "#fff",
				"color": cro_general_color,

			},
							
			{

				"id": "cro-phone-1",
				"className": "",
				"order": "1",
				"type": "call",
				"title": "Gọi điện",
				"link": cro_hotline_number,
				"icon": "//bizweb.dktcdn.net/100/426/076/themes/917889/assets/cro-phone-icon.png?1692086228721",
				"background": "#fff",
				"color": cro_general_color,

			},
							
			{
				"id": "cro-view-cart",
				"order": 3,
				"type": "cart",
				"title": "Giỏ hàng",
				"icon": "//bizweb.dktcdn.net/100/426/076/themes/917889/assets/cro-cart-icon.png?1692086228721",
				"background": "#ffff",
				"color": cro_general_color,
				"countColor": "red",
				"countBg": "yellow",
				"labelBackgorund": "#ff0000",
				"labelColor": "#fff",
				"labelBackground": "#ff0000"
			},
		   
			{
				"id": "cro-buy-add-cart",
				"order": 5,
				"type": "addtocart",
				"title": "Thêm vào giỏ",
				"subTitle": "Hết hàng",
				"icon": "",
				"background": cro_addcart_bg,
				"color": cro_addcart_color,
				"className": "",
				"border": "none",
				"borderColor": "transparent",
				"padding": "transparent",
				"borderRadius": "0px"
			}
		]
	}
},
"productPopup": {
	"variantInfo": {
	  "enable": false,
	  "title": "<p><u>Bảng quy đổi kích cỡ</u></p>",
	  "color": "#2E72D2",
	  "url": "/",
	  "action": "new_page",
	  "img": "https://mixcdn.egany.com/media/egaApp/cro-btn/maxcool-ao.jpg",
	  "review": {
		"enable": false
	  }
	},
	"design": {
	  "comparePriceColor": cro_compare_price_color,
	  "variantBg": cro_variant_bg,
	  "variantBorderColor": cro_variant_color,
	  "priceColor": cro_price_color,
	  "variantBorderRadius": 20,
	  "variantColor": cro_variant_color,
	  "variantBorder": "1px solid",
	  "ctaIcon": true,
	  "template": "default"
	},
	"saleLabel": {
	  "background": cro_label_background,
	  "priceColor": cro_price_color,
	  "color": cro_label_color,
	  "discountColor": "#000",
	  "title": "",
	  "template": "price"
	},
	"qty": {
	  "borderRadius": 20,
	  "background": "#fff",
	  "borderColor": "#D7D7D7",
	  "enable": true,
	  "title": "Số lượng",
	  "color": "#8C9196",
	  "border": "1px solid"
	},
	"cta": {
	  "animation": "",
	  "background": cro_addcart_bg,
	  "gaEventLabel": "",
	  "borderRadius": "4",
	  "color": cro_addcart_color,
	  "icon": "",
	  "id": "cro-product-cta",
	  "title": "Thêm vào giỏ",
	  "type": "cta",
	  "className": ""
	},
	"auto": false,
	"lang": {
	  "ctaDescription": "",
	  "contact": "Liên Hệ",
	  "soldout": "Hết hàng"
	},
	"enable": true
  },
"cartPopup": {
	"header": {
		"color": "#2EB346",
		"background": "#EBF6ED",
		"borderColor": "#2EB346",
		"border": "1px dashed",
		"icon": "http://theme.hstatic.net/1000406621/1000576502/14/cartpopup.header.icon-cro-icon.png?v=2134"
	},
	"cta": {
		"background": "#fe3945",
		"title": "Xem giỏ hàng",
		"color": "#fff",
		"link": "/checkout",
		"type": "cta",
		"id": "cro-popup-cta",
		"borderRadius": "4"

	},
	"subCta": {
		"borderColor": "#aeaeae",
		"title": "Mua thêm",
		"color": "#000000",
		"border": "1px solid",
		"id": "subCta",
		"borderRadius": "4",
		"link": "close",
		"type": "cta"
	},
	"title": "<p>Thêm vào giỏ hàng thành công</p>",
	"subCtaEnable": false,
	"closeCta": { "title": "Mua thêm", "color": "#212B36" },
	"enable": false
},

}



$(document).ready(function ($) {
	if(window.innerWidth <= 600){
	var isInit = false
	window.egany["cro-btn"].mobile.general.buttons.sort((a, b) => (a.order > b.order ? 1 : -1))
	$(window).on('scroll click mousemove touchstart',()=>{
		if(!isInit){
			isInit = true
			$("body").append(`<script src="${crAddonScript}" defer ><\/script>`);
		}
	})
	}
				document.addEventListener('cro:loaded', function (e) {
		window["cro-btn"].setCurrentVariant = 51261092;
		window["cro-btn"].qvAddToCartClick = function(){
			const id =   window["cro-btn"].getCurrProduct().selectedVariant.id
			const quantity = window["cro-btn"].getCurrProduct().quantity  || 1;
			window["cro-btn"].qvLoading(true)
			const n = {
				type: "POST",
				url: "/cart/add.js",
				data: "quantity=" + quantity + "&VariantId=" + id,
				dataType: "json",
				success: function(jqXHR, textStatus, errorThrown) {
					$('#crQVModal').trigger('click')
					$('#cr-addon-addtocart').removeClass('loading').removeAttr("disabled")
					addToCartSuccess(jqXHR, textStatus, errorThrown)
					window["cro-btn"].toggleQuickView()
					window["cro-btn"].qvLoading(false)

				  

				},
				error: function(a, r) {
					errHandle(a, r)
					window["cro-btn"].qvLoading(false)


				}
			};
			jQuery.ajax(n)
		}}
	);
		});

</script>
			<!-- Add to cart -->
	<div id="popupCartModal" class="modal fade" role="dialog">
	</div>

	
<link rel="stylesheet" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/sales-pop.css?1692086228721" media="all" onload="this.media='all'">

<noscript><link href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/sales-pop.css?1692086228721" rel="stylesheet" type="text/css" media="all" /></noscript>	

</div>
<script>
var salePopArr = [];
let timePerPop = 15000;
let timeDelay = 30000;
let salesPopDesc = `Khách hàng [name] tại [address] vừa mua sản phẩm cách đây [time]`;
let count = 0;
let fakerScript ="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/faker.js?1692086228721"
let customerGender = undefined;
	
	salePopArr = [		{
	"img_url": "//bizweb.dktcdn.net/thumb/small/100/426/076/products/chi-ke-mat-revlon-colorstay-glaze-stick-eye-shadow-871-1-04g.jpg?v=1631784154103",
	"pd_title": "Chì kẻ mắt Revlon ColorStay Glaze Stick Eye Shadow 1.04g",
	"pd_url": "/chi-ke-mat-revlon-colorstay-glaze-stick-eye-shadow-1-04g",
}, 			{
	"img_url": "//bizweb.dktcdn.net/thumb/small/100/426/076/products/phan-mat.jpg?v=1631782934577",
	"pd_title": "Bảng Phấn Mắt 6 Màu Silkygirl Truly Nude",
	"pd_url": "/bang-phan-mat-6-mau-silkygirl-truly-nude",
}, 			{
	"img_url": "//bizweb.dktcdn.net/thumb/small/100/426/076/products/cfd2b173087ae4641fab09b8ba4c3267.jpg?v=1627199014077",
	"pd_title": "Combo Essance Britening Foam Cleanser và Veil Fit Cushion SPF50+ PA+++",
	"pd_url": "/combo-sua-rua-mat-essance-britening-foam-cleanser-va-phan-nuoc-min-li-mo-khuyet-diem-veil-fit-cushion-spf50-pa",
}, 			{
	"img_url": "//bizweb.dktcdn.net/thumb/small/100/426/076/products/108557aac5dccc879fcfd4bfa53cbadf.jpg?v=1627198355377",
	"pd_title": "Combo Lemonade bút kẻ mắt SuperNatural 1g và chì kẻ mày 2 đầu Want It Got It 2.75g",
	"pd_url": "/combo-lemonade-but-ke-mat-supernatural-1g-va-chi-ke-may-2-dau-want-it-got-it-2-75g",
}, 			{
	"img_url": "//bizweb.dktcdn.net/thumb/small/100/426/076/products/52d6e894422c1b2ad92b066abbb0d5e5.jpg?v=1627197734267",
	"pd_title": "Son Dưỡng Có Màu Glow Tint Lip Balm 3.5g",
	"pd_url": "/son-duong-co-mau-glow-tint-lip-balm-3-5g",
}, 			{
	"img_url": "//bizweb.dktcdn.net/thumb/small/100/426/076/products/3485dcd9e35780a5ea2a700e6903231e-b8802248-1162-4493-9b8c-c06bba593b97.jpg?v=1627197086540",
	"pd_title": "Son dưỡng có màu Laneige Stained Glow Lip Balm (3g)",
	"pd_url": "/son-duong-co-mau-laneige-stained-glow-lip-balm-3g",
}, 			{
	"img_url": "//bizweb.dktcdn.net/thumb/small/100/426/076/products/0ae0ddad6134c95d2469a0b13315407c.jpg?v=1627196612227",
	"pd_title": "Phấn Nước Laneige Neo Cushion Glow 15G + Kèm Lõi Thay Thế",
	"pd_url": "/phan-nuoc-trang-diem-duong-am-the-he-moi-cho-lop-nen-bong-khoe-laneige-neo-cushion-glow-15g-kem-loi-thay-the",
}, 			{
	"img_url": "//bizweb.dktcdn.net/thumb/small/100/426/076/products/e2d33c1b406acd6da8d6d7e2b6d8a6f6.jpg?v=1627109630147",
	"pd_title": "Sữa rửa mặt Collagen Senka A.L.L Clear Oil 230ml",
	"pd_url": "/bo-doi-dau-tay-trang-va-sua-rua-mat-collagen-senka-a-l-l-clear-oil-230ml-pw-collagen-in-120g",
}				]	

	function showSalePop() {		
		if(!faker) return
		$('#ega-sale-pop.salepop-show').removeClass('salepop-show').addClass('salespop-close');
		let pdRanIndex = Math.floor(Math.random() * salePopArr.length),
			salePopProduct = salePopArr[pdRanIndex],
			randomMin = `${Math.floor(Math.random() * 59) + 1} phút`;
		const name= `${faker.name.lastName(customerGender)} ${faker.name.firstName(customerGender)}`
		const phone = `${faker.phone.phoneNumber().replace(' ')}`
		const address = faker.random.arrayElement(faker.locales.vi.address.city_root)
		const desc = salesPopDesc
		.replace(`[name]`, name)
		.replace(`[phone]`, `xxx${phone.substr(phone.length - 8)}`)
		.replace(`[time]`, randomMin)
		.replace('[address]', address)
		const salesPopContent = `	
		<div class="sale-pop-img">
		<img src="${salePopProduct.img_url}" class="img-fluid" loading="lazy" alt="${salePopProduct.title}" width="80" height="80"/>
			</div>
		<div class="sale-pop-body">
		<div class="sale-pop-name">
		<a href="${salePopProduct.pd_url}">${salePopProduct.pd_title}</a>
			</div>
		<span class="sale-pop-desc">${desc}</span>
			</div>
`
		$('.sale-pop-wrap').html(salesPopContent)
		setTimeout(()=>{
			$('#ega-sale-pop').addClass('salepop-show').removeClass('salespop-close');
			setTimeout(()=>{
				$('#ega-sale-pop.salepop-show').removeClass('salepop-show').addClass('salespop-close');
				setTimeout(()=>{
					showSalePop()
				},timeDelay)
			},10000)
		},3000)


	}


function initSalesPop() {
	if(!salePopArr.length) return;
	setTimeout(()=>{
	$.getScript(fakerScript).then(()=>{
	if(faker){
			showSalePop()
		}
	})
	
	},timeDelay)
	



}

$(document).ready(() => {
	$('#ega-sale-pop').removeClass('hidden');
		initSalesPop()
		$(".sale-pop-close").click(function () {
			$("#ega-sale-pop").removeClass('salepop-show').removeClass('salespop-close');
		})
		$(".sale-pop-cta").click(function (e) {
			e.preventDefault();
			$(".sale-pop-regis").show();
		})
		$(".regis-close").click(function () {
			$(".sale-pop-regis").hide();
		})
})


</script>

	<link rel="stylesheet" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/addthis-sharing.css?1692086228721" media="all" onload="this.media='all'">

<noscript><link href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/addthis-sharing.css?1692086228721" rel="stylesheet" type="text/css" media="all" /></noscript>	
<div class="addThis_listSharing ">

<a href="#" id="back-to-top" class="backtop back-to-top d-flex align-items-center justify-content-center show" title="Lên đầu trang">


<svg class="icon" style="transform: rotate(-90deg)">
<use xlink:href="#icon-arrow"></use>
</svg>
</a>


<ul class="addThis_listing list-unstyled  d-none d-sm-block">
	
	<li class="addThis_item">
		<a class="addThis_item--icon" href="tel:19006750" rel="nofollow">
			<img class="img-fluid" src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/addthis-phone.svg?1692086228721" alt="Gọi ngay cho chúng tôi" width="44" height="44">
			<span class="tooltip-text">Gọi ngay cho chúng tôi</span>
		</a>
	</li>
	<li class="addThis_item">
		<a class="addThis_item--icon" href="https://zalo.me/834141234794359440" target="_blank" rel="nofollow">
			<img class="img-fluid" src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/addthis-zalo.svg?1692086228721" alt="Gọi ngay cho chúng tôi" width="44" height="44">
			<span class="tooltip-text">Chat với chúng tôi qua Zalo</span>
		</a>
	</li>

</ul>
</div>
<!-- Messenger Plugin chat Code -->
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection