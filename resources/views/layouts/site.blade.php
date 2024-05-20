<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')</title>
    <link rel='stylesheet' href="{{asset('css/layoutsite.css')}}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    @yield('header')

    <meta name="theme-color" content="#f02b2b" />
	<link rel="canonical" href="">
	<meta name='revisit-after' content='2 days' />
	<meta name="robots" content="noodp,index,follow" />		
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<meta name="description" content="">
	<title>EGA Cosmetic</title>
	<meta name="keywords" content="egaCosmetic theme, EGANY Web, Theme EGANY, EGANY Responsive">		
	
	<meta property="og:type" content="website">
	<meta property="og:title" content="EGA Cosmetic">
	<meta property="og:image" content="{{asset('Giaodien/100/426/076/themes/917889/assets/share_fb_home.jpg?1692086228721')}}">
	<meta property="og:image:secure_url" content="{{asset('Giaodien/100/426/076/themes/917889/assets/share_fb_home.jpg?1692086228721')}}">

	<meta property="og:description" content="">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="EGA Cosmetic">
	
	<link rel="icon" href="{{asset('Giaodien/100/426/076/themes/917889/assets/favicon.png?1692086228721')}}" type="image/x-icon" />		
	<link rel="dns-prefetch" href="https://fonts.googleapis.com">
	<link rel="dns-prefetch" href="https://fonts.gstatic.com" >
	<link rel="dns-prefetch" href="https://bizweb.dktcdn.net" >
	<link rel="dns-prefetch" href="https://ega-cosmetic.mysapo.net">
	<link rel="preload" as='style' type="text/css" href="{{asset('Giaodien/100/426/076/themes/917889/assets/main.scss.css?1692086228721')}}">
	<link rel="preload" as='style' type="text/css" href="{{asset('Giaodien/100/426/076/themes/917889/assets/index.scss.css?1692086228721')}}">
	<link rel="preload" as='style' type="text/css" href="{{asset('Giaodien/100/426/076/themes/917889/assets/bootstrap-lite.css?1692086228721')}}">


	<link rel="preload" as='style' type="text/css" href="{{asset('Giaodien/100/426/076/themes/917889/assets/responsive.scss.css?1692086228721')}}">
	<link rel="preload" as='style' type="text/css" href="{{asset('Giaodien/100/426/076/themes/917889/assets/product_infor_style.scss.css?1692086228721')}}">
	<link rel="preload" as='style' type="text/css" href="{{asset('Giaodien/100/426/076/themes/917889/assets/quickviews_popup_cart.scss.css?1692086228721')}}">

	<link rel="preload" as="image" href="{{asset('Giaodien/thumb/large/100/426/076/themes/917889/assets/slider_1.jpg?1692086228721')}}" media="screen and (max-width: 480px)">
	<link rel="preload" as="image" href="{{asset('Giaodien/100/426/076/themes/917889/assets/slider_1.jpg?1692086228721')}}" media="screen and (min-width: 481px)" >



	<link rel="stylesheet" href="{{asset('Giaodien/100/426/076/themes/917889/assets/bootstrap-lite.css?1692086228721')}}">
    
	<style>
		:root{
			--text-color: #000000;
			--text-secondary-color:#666666;
			--primary-color: #d82e4d;
			--secondary-color:#fbd947;
			--price-color: #f3283d;
			--topbar-bg: #fdd835;
			--topbar-color: #000000;
			--subheader-background: #e5677d;
			--subheader-color: #f9f9f6;
			--label-background: #fed632;
			--label-color: #ee4d2d;
			--footer-bg:#efefef;
			--footer-color:#000000;
			--show-loadmore: none!important;				
			--order-loadmore: -1!important;				
			--sale-pop-color: #d82e4d;
			--buynow-color: #ffffff;
			--buynow-text-color: #d82e4d;
			--addtocart-color: #d82e4d;
			--addtocart-text-color: #ffffff;
			--cta-color: #d82e4d;
			--coupon-title-color: #d82e4d;
			--coupon-button-color: #d82e4d;
			--col-menu: 3;
			--link-color: #2F80ED;
		}
	</style>
		<link href="{{asset('Giaodien/100/426/076/themes/917889/assets/main.scss.css?1692086228721')}}" rel="stylesheet" type="text/css" media="all" />	

        <link href="{{asset('Giaodien/100/426/076/themes/917889/assets/product_infor_style.scss.css?1692086228721')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('Giaodien/100/426/076/themes/917889/assets/quickviews_popup_cart.scss.css?1692086228721')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('Giaodien/100/426/076/themes/917889/assets/index.scss.css?1692086228721')}}" rel="stylesheet" type="text/css" media="all" />																
    
        <link rel="preload" as="script" href="{{asset('public/Giaodien/100/426/076/themes/917889/assets/jquery.js?1692086228721')}}" />
        <script src="{{asset('public/Giaodien/100/426/076/themes/917889/assets/jquery.js?1692086228721')}}" type="text/javascript"></script>
        <link href="{{asset('public/Giaodien/100/426/076/themes/917889/assets/responsive.scss.css?1692086228721')}}" rel="stylesheet" type="text/css" media="all" />
</script>
<script>
	(function () {
		function asyncLoad() {
			var urls = ["https://combo.sapoapps.vn/assets/script.js?store=ega-cosmetic.mysapo.net","https://buyx-gety.sapoapps.vn/assets/script.v2.js?store=ega-cosmetic.mysapo.net","//newproductreviews.sapoapps.vn/assets/js/productreviews.min.js?store=ega-cosmetic.mysapo.net"];
			for (var i = 0; i < urls.length; i++) {
				var s = document.createElement('script');
				s.type = 'text/javascript';
				s.async = true;
				s.src = urls[i];
				var x = document.getElementsByTagName('script')[0];
				x.parentNode.insertBefore(s, x);
			}
		};
		window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
	})();
</script>


<script>
	window.BizwebAnalytics = window.BizwebAnalytics || {};
	window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
	window.BizwebAnalytics.meta.currency = 'VND';
	window.BizwebAnalytics.tracking_url = 's';

	var meta = {};
	
	
	for (var attr in meta) {
	window.BizwebAnalytics.meta[attr] = meta[attr];
	}
</script>

	
		<script src="dist/js/stats.min.js?v=96f2ff2"></script>
		<link href="Giaodien/100/426/076/themes/917889/assets/appcombo.css?1692086228721" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <header class="header header_menu">
        <div class="mid-header wid_100 d-flex align-items-center">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-3 header-right d-lg-none d-block">
                        <div class="toggle-nav btn menu-bar mr-4 ml-0 p-0  d-lg-none d-flex text-white">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 col-lg-3 header-left">
                        
                        <a href="/" class="logo-wrapper ">	
                            <img class="img-fluid" src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/logo.png?1692086228721" alt="logo EGA Cosmetic" width="248" height="53">
                        </a>
                        
                    
                    
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
    
                        <div class="toogle-nav-wrapper w-100 ">
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
                        <div class="sticky-overlay">
                            
                        </div>
                    </div>
                    <div class=" col-8 col-md-6 col-lg-4 col-xl-4 header-center py-1" id="search-header">
                        <form action="/search" method="get" class="input-group search-bar custom-input-group " role="search">
                            <input type="text" name="query" value="" autocomplete="off" class="input-group-field auto-search form-control " required="" data-placeholder="Tìm theo tên sản phẩm...; Tìm theo thương hiệu...;" >        <input type="hidden" name="type" value="product">
        <span class="input-group-btn btn-action">
            <button type="submit" aria-label="search" class="btn text-white icon-fallback-text h-100">
                <svg class="icon">
        <use xlink:href="#icon-search"></use>
    </svg>		</button>
        </span>
    
    </form>
    
    <div class="search-overlay">
    
    </div>
    
                    </div>
                    <div class="col-2 col-md-3 col-xl-5  col-lg-5 py-1">
                        <ul class="header-right mb-0 float-right list-unstyled  d-flex align-items-center">
        <li class="media d-lg-flex d-none hotline ">
                <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/phone_icon.png?1692086228721" width="32" height="32" class="mr-3 align-self-center" alt="phone_icon">
    
            <div class="media-body d-md-flex flex-column d-none ">
                <span>Hỗ trợ khách hàng</span>
                <a class="font-weight-bold d-block" href="tel:19006750" title="19006750">
                    19006750
                </a>
            </div>
        </li>
        <li class="ml-4 mr-4 mr-md-3 ml-md-3 media d-lg-flex d-none ">
            <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/account_icon.png?1692086228721" width="32" height="32" alt="account_icon" class="  mr-3 align-self-center">
            <div class="media-body d-md-flex flex-column d-none ">
                            <a rel="nofollow" href="/account/login" class="d-block" title="Tài khoản">
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
                <a class="img_hover_cart" href="/cart" title="Giỏ hàng">  
                            <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/cart_icon.png?1692086228721" width="24" height="24" alt="cart_icon">
    
                    <span class="mx-2 d-xl-block d-none">Giỏ hàng</span>
                    <span class="count_item count_item_pr">0</span>
                </a>
                
            </div>
        </li>
    
    </ul>
                    </div>
                </div>
            </div>
        </div>
    
    </header>
    </div>
                    <div class="col-xl-4 col-lg-4 col-12 header-center" id="search-header">
                        <form action="/search" method="get" class="input-group search-bar custom-input-group " role="search">
                            <input type="text" name="query" value="" autocomplete="off" class="input-group-field auto-search form-control " required="" data-placeholder="Tìm theo tên sản phẩm...; Tìm theo thương hiệu...;" placeholder="Tìm kiếm">        <input type="hidden" name="type" value="product">
        <span class="input-group-btn btn-action">
            <button type="submit" aria-label="search" class="btn text-white icon-fallback-text h-100">
                <svg class="icon">
        <use xlink:href="#icon-search"></use>
    </svg>		</button>
        </span>
    
    </form>
    
    <div class="search-overlay">
    
    </div>
    
                        
                                            
                                            <div class="search-dropdow">
                            <ul class="search__list pl-0 d-flex list-unstyled mb-0 flex-wrap">
                                <li class="mr-2">
                                    <a id="filter-search-kem-chong-nang" href="/search?q=tags:(Kem+ch%E1%BB%91ng+n%E1%BA%AFng)&amp;type=product">Kem chống nắng</a>
                                </li>	
                                <li class="mr-2">
                                    <a id="filter-search-son-moi" href="/search?q=tags:(+Son+m%C3%B4i)&amp;type=product"> Son môi</a>
                                </li>	
                                <li class="mr-2">
                                    <a id="filter-search-bong-tay-trang" href="/search?q=tags:(+B%C3%B4ng+t%E1%BA%A9y+trang)&amp;type=product"> Bông tẩy trang</a>
                                </li>	
                                <li class="mr-2">
                                    <a id="filter-search-serum" href="/search?q=tags:(+Serum)&amp;type=product"> Serum</a>
                                </li>	
                            </ul>
                        </div>
                                                            </div>
                    <div class="col-3 col-xl-5 col-lg-5 ">
                        <ul class="header-right mb-0 float-right list-unstyled  d-flex align-items-center">
        <li class="media d-lg-flex d-none hotline ">
                <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/phone_icon.png?1692086228721" width="32" height="32" class="mr-3 align-self-center" alt="phone_icon">
    
            <div class="media-body d-md-flex flex-column d-none ">
                <span>Hỗ trợ khách hàng</span>
                <a class="font-weight-bold d-block" href="tel:19006750" title="19006750">
                    19006750
                </a>
            </div>
        </li>
        <li class="ml-4 mr-4 mr-md-3 ml-md-3 media d-lg-flex d-none ">
            <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/account_icon.png?1692086228721" width="32" height="32" alt="account_icon" class="  mr-3 align-self-center">
            <div class="media-body d-md-flex flex-column d-none ">
                            <a rel="nofollow" href="/account/login" class="d-block" title="Tài khoản">
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
                <a class="img_hover_cart" href="/cart" title="Giỏ hàng">  
                            <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/cart_icon.png?1692086228721" width="24" height="24" alt="cart_icon">
    
                    <span class="mx-2 d-xl-block d-none">Giỏ hàng</span>
                    <span class="count_item count_item_pr">0</span>
                </a>
                
            </div>
        </li>
    
    </ul>
                    </div>
                </div>
            </div>
        </div>
    
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer bg-white" style="--footer-overlay: #f6f6f6">


        <div class="mid-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-xl-4 footer-click footer-1">
    
                        <h4 class="title-menu clicked">
                            Về chúng tôi 
                        </h4>
                        
                        <a href="/" class="logo-wrapper mb-3 d-block ">	
                            <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/logo-footer.png?1692086228721" alt="logo EGA Cosmetic" width="150" height="32">
                        </a>
                        
                                                                <p>
                            Cung cấp sản phẩm chất lượng từ các thương hiệu hàng đầu.
                        </p>
                                                                <div class="single-contact">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="content">Địa chỉ:
                                                            <span>150/8 Nguyễn Duy Cung, Phường 12, Tp.HCM</span>
                                
                            </div>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-mobile-alt"></i>
                            <div class="content">
                                Số điện thoại: <a class="link" title="19006750" href="tel:19006750">19006750</a>
                            </div>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-envelope"></i>
                            <div class="content">
                                Email: <a title="support@sapo.vn" class="link" href="mailto:support@sapo.vn">support@sapo.vn</a>
                            </div>
                        </div>
                        <div class="social-footer">
                            <!--<h4 class="title-menu">
    Theo dõi chúng tôi 
    </h4>-->
                            <ul class="follow_option d-flex flex-wrap align-items-center p-0 list-unstyled">	
                                
                                <li>
                                    <a class="facebook link" href="https://bikipweb.site" target="_blank" title="Theo dõi Facebook EGA Cosmetic">
                                        <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/facebook.png?1692086228721" width="24" height="24" alt="facebook">	
                                    
                                    </a>
                                </li>
                                
                                                            
                                <li>
                                    <a class="zalo link" href="https://zalo.me/834141234794359440" target="_blank" title="Theo dõi zalo EGA Cosmetic">
                                        <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/zalo.png?1692086228721" width="24" height="24" alt="zalo">	
                                    
                                    </a>
                                </li>
                                
                                
                                <li>
                                    <a class="instgram link" href="#" target="_blank" title="Theo dõi instgram EGA Cosmetic">
                                    <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/instagram.png?1692086228721" width="24" height="24" alt="instgram">	
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                                        </div>
                    <div class="col-xs-12 col-md-6 col-xl-2 footer-click">
                        <h4 class="title-menu clicked">
                            Chính sách <i class="fa fa-angle-down d-md-none d-inline-block"></i>
                        </h4>
                        <ul class="list-menu toggle-mn">
                            
                            <li class="li_menu">
                                <a class="link" href="https://docs.egany.com/sapo/ega-cosmetic" title="Giới thiệu">Giới thiệu</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link" href="/san-pham-flash-sale" title="Chương trình khuyến mãi">Chương trình khuyến mãi</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link" href="/he-thong-cua-hang" title="Hệ thống cửa hàng">Hệ thống cửa hàng</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link" href="/chinh-sach" title="Hướng dẫn đặt hàng">Hướng dẫn đặt hàng</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link" href="/apps/kiem-tra-don-hang" title="Kiểm tra đơn hàng">Kiểm tra đơn hàng</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-6 col-xl-2 footer-click">
                        <h4 class="title-menu clicked">
                            Hỗ trợ khách hàng <i class="fa fa-angle-down d-md-none d-inline-block"></i>
                        </h4>
                        <ul class="list-menu toggle-mn">
                            
                            <li class="li_menu">
                                <a class="link" href="/lien-he" title="Thông tin liên hệ">Thông tin liên hệ</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link" href="/chinh-sach-doi-tra" title="Chính sách giao hàng">Chính sách giao hàng</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link" href="/chinh-sach" title="Chính sách đổi hàng">Chính sách đổi hàng</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link" href="/chinh-sach" title="Chính sách bảo mật">Chính sách bảo mật</a>
                            </li>
                            
                            <li class="li_menu">
                                <a class="link" href="/chinh-sach" title="Điều khoản dịch vụ">Điều khoản dịch vụ</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-6 col-xl-4 footer-click">
                                            <h4 class="title-menu">
                            Đăng ký nhận tin
                        </h4>
                        <div class="form_register ">
                            <form id="mc-form" class="newsletter-form custom-input-group mb-3" data-toggle="validator" novalidate="true">
                                <input class="form-control input-group-field  " aria-label="Địa chỉ Email" type="email" placeholder="Nhập địa chỉ email" name="EMAIL" required="" autocomplete="off">
                                <div class="input-group-btn btn-action">
                                    <button class="h-100 btn text-white button_subscribe subscribe" type="submit" aria-label="Đăng ký nhận tin" name="subscribe">Đăng ký</button>
                                </div>
                            </form>
                            <div class="mailchimp-alerts ">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success mb-2"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error mb-2"></div><!-- mailchimp-error end -->
                            </div>
                        </div>
    
                        
                                        <span class="title-menu">
        Phương thức thanh toán 
    </span>
    <div class="product-trustbadge my-3">
        <a href="/collections/all" target="_blank" title="Phương thức thanh toán">
            <img class=" img-fluid" src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/footer_trustbadge.jpg?1692086228721" alt="Phương thức thanh toán" width="246" height="53">
        </a>
    </div>
                                                            </div>
                </div>
            </div>
        </div>
        <div class="bg-footer-bottom copyright clearfix py-2">
            <div class="container">
                <div class="row">
                    <div id="copyright" class=" col-xl-4 col-lg-12 col-md-12 col-xs-12 fot_copyright">
                                                                
                                            
                        
                        <span class="wsp">
                                                     © Bản quyền thuộc về <a href="https://egany.com" rel="nofollow" target="_blank">EGANY</a>
                         | Cung cấp bởi <a href="javascript:;">Sapo</a>
                        </span>
                    </div>
                </div>
    
            </div>
        </div>
    </footer>
    @yield('footer')
</body>
</html>