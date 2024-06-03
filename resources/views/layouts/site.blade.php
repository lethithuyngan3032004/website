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
    <meta property="og:image"
        content="{{asset('Giaodien/100/426/076/themes/917889/assets/share_fb_home.jpg?1692086228721')}}">
    <meta property="og:image:secure_url"
        content="{{asset('Giaodien/100/426/076/themes/917889/assets/share_fb_home.jpg?1692086228721')}}">

    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="EGA Cosmetic">

    <link rel="icon" href="{{asset('Giaodien/100/426/076/themes/917889/assets/favicon.png?1692086228721')}}"
        type="image/x-icon" />
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://bizweb.dktcdn.net">
    <link rel="dns-prefetch" href="https://ega-cosmetic.mysapo.net">
    <link rel="preload" as='style' type="text/css"
        href="{{asset('Giaodien/100/426/076/themes/917889/assets/main.scss.css?1692086228721')}}">
    <link rel="preload" as='style' type="text/css"
        href="{{asset('Giaodien/100/426/076/themes/917889/assets/index.scss.css?1692086228721')}}">
    <link rel="preload" as='style' type="text/css"
        href="{{asset('Giaodien/100/426/076/themes/917889/assets/bootstrap-lite.css?1692086228721')}}">


    <link rel="preload" as='style' type="text/css"
        href="{{asset('Giaodien/100/426/076/themes/917889/assets/responsive.scss.css?1692086228721')}}">
    <link rel="preload" as='style' type="text/css"
        href="{{asset('Giaodien/100/426/076/themes/917889/assets/product_infor_style.scss.css?1692086228721')}}">
    <link rel="preload" as='style' type="text/css"
        href="{{asset('Giaodien/100/426/076/themes/917889/assets/quickviews_popup_cart.scss.css?1692086228721')}}">

    <link rel="preload" as="image"
        href="{{asset('Giaodien/thumb/large/100/426/076/themes/917889/assets/slider_1.jpg?1692086228721')}}"
        media="screen and (max-width: 480px)">
    <link rel="preload" as="image"
        href="{{asset('Giaodien/100/426/076/themes/917889/assets/slider_1.jpg?1692086228721')}}"
        media="screen and (min-width: 481px)">



    <link rel="stylesheet"
        href="{{asset('Giaodien/100/426/076/themes/917889/assets/bootstrap-lite.css?1692086228721')}}">

    <style>
        :root {
            --text-color: #000000;
            --text-secondary-color: #666666;
            --primary-color: #d82e4d;
            --secondary-color: #fbd947;
            --price-color: #f3283d;
            --topbar-bg: #fdd835;
            --topbar-color: #000000;
            --subheader-background: #e5677d;
            --subheader-color: #f9f9f6;
            --label-background: #fed632;
            --label-color: #ee4d2d;
            --footer-bg: #efefef;
            --footer-color: #000000;
            --show-loadmore: none !important;
            --order-loadmore: -1 !important;
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
    <link href="{{asset('Giaodien/100/426/076/themes/917889/assets/main.scss.css?1692086228721')}}" rel="stylesheet"
        type="text/css" media="all" />

    <link href="{{asset('Giaodien/100/426/076/themes/917889/assets/product_infor_style.scss.css?1692086228721')}}"
        rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('Giaodien/100/426/076/themes/917889/assets/quickviews_popup_cart.scss.css?1692086228721')}}"
        rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('Giaodien/100/426/076/themes/917889/assets/index.scss.css?1692086228721')}}" rel="stylesheet"
        type="text/css" media="all" />

    <link rel="preload" as="script"
        href="{{asset('public/Giaodien/100/426/076/themes/917889/assets/jquery.js?1692086228721')}}" />
    <script src="{{asset('public/Giaodien/100/426/076/themes/917889/assets/jquery.js?1692086228721')}}"
        type="text/javascript"></script>
    <link href="{{asset('public/Giaodien/100/426/076/themes/917889/assets/responsive.scss.css?1692086228721')}}"
        rel="stylesheet" type="text/css" media="all" />
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
    <link href="Giaodien/100/426/076/themes/917889/assets/appcombo.css?1692086228721" rel="stylesheet" type="text/css"
        media="all" />
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
                            <img class="img-fluid"
                                src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/logo.png?1692086228721"
                                alt="logo EGA Cosmetic" width="248" height="53">
                        </a>



                        <header class="header header_sticky">

                            <div class="mid-header wid_100 d-flex align-items-center">
                                <div class="container">

                                    <div class="row align-items-center">
                                        <div class="col-2 col-md-3 header-left d-lg-none d-block py-1">
                                            <div
                                                class="toggle-nav btn menu-bar mr-4 ml-0 p-0  d-lg-none d-flex text-white">
                                                <span class="bar"></span>
                                                <span class="bar"></span>
                                                <span class="bar"></span>
                                            </div>
                                        </div>
                                        <div
                                            class="col-4 col-xl-3 col-lg-3  header-left d-none d-lg-flex align-items-center h-100">

                                            <div class="toogle-nav-wrapper w-100 ">
                                                <div class=" d-flex align-items-center"
                                                    style="height: 52px; font-size: 1rem; font-weight: 500">
                                                    <div class="icon-bar btn menu-bar mr-3 ml-0 p-0 d-inline-flex">
                                                        <span class="bar"></span>
                                                        <span class="bar"></span>
                                                        <span class="bar"></span>
                                                    </div>
                                                    Danh mục sản phẩm
                                                </div>

                                                <div class="navigation-wrapper">



                                                </div>

                                            </div>
                                            <div class="sticky-overlay">

                                            </div>
                                        </div>
                                        <div class=" col-8 col-md-6 col-lg-4 col-xl-4 header-center py-1"
                                            id="search-header">
                                            <form action="/search" method="get"
                                                class="input-group search-bar custom-input-group " role="search">
                                                <input type="text" name="query" value="" autocomplete="off"
                                                    class="input-group-field auto-search form-control " required=""
                                                    data-placeholder="Tìm theo tên sản phẩm...; Tìm theo thương hiệu...;">
                                                <input type="hidden" name="type" value="product">
                                                <span class="input-group-btn btn-action">
                                                    <button type="submit" aria-label="search"
                                                        class="btn text-white icon-fallback-text h-100">
                                                        <svg class="icon">
                                                            <use xlink:href="#icon-search"></use>
                                                        </svg> </button>
                                                </span>

                                            </form>

                                            <div class="search-overlay">

                                            </div>

                                        </div>
                                        <div class="col-2 col-md-3 col-xl-5  col-lg-5 py-1">
                                            <ul
                                                class="header-right mb-0 float-right list-unstyled  d-flex align-items-center">
                                                <li class="media d-lg-flex d-none hotline ">
                                                    <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/phone_icon.png?1692086228721"
                                                        width="32" height="32" class="mr-3 align-self-center"
                                                        alt="phone_icon">

                                                    <div class="media-body d-md-flex flex-column d-none ">
                                                        <span>Hỗ trợ khách hàng</span>
                                                        <a class="font-weight-bold d-block" href="tel:19006750"
                                                            title="19006750">
                                                            19006750
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="ml-4 mr-4 mr-md-3 ml-md-3 media d-lg-flex d-none ">
                                                    <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/account_icon.png?1692086228721"
                                                        width="32" height="32" alt="account_icon"
                                                        class="  mr-3 align-self-center">
                                                    <div class="media-body d-md-flex flex-column d-none ">
                                                        <a rel="nofollow" href="/account/login" class="d-block"
                                                            title="Tài khoản">
                                                            Tài khoản
                                                        </a>
                                                        <small>
                                                            <a href="/account/login" title="Đăng nhập"
                                                                class="font-weight: light">
                                                                Đăng nhập
                                                            </a> </small>

                                                    </div>
                                                </li>
                                                <li class="cartgroup  ml-0 mr-2 mr-md-0">
                                                    <div class="mini-cart text-xs-center">
                                                        <a class="img_hover_cart" href="/cart" title="Giỏ hàng">
                                                            <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/cart_icon.png?1692086228721"
                                                                width="24" height="24" alt="cart_icon">

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
                        <form action="/search" method="get" class="input-group search-bar custom-input-group "
                            role="search">
                            <input type="text" name="query" value="" autocomplete="off"
                                class="input-group-field auto-search form-control " required=""
                                data-placeholder="Tìm theo tên sản phẩm...; Tìm theo thương hiệu...;"
                                placeholder="Tìm kiếm"> <input type="hidden" name="type" value="product">
                            <span class="input-group-btn btn-action">
                                <button type="submit" aria-label="search"
                                    class="btn text-white icon-fallback-text h-100">
                                    <svg class="icon">
                                        <use xlink:href="#icon-search"></use>
                                    </svg> </button>
                            </span>

                        </form>

                        <div class="search-overlay">

                        </div>



                        <div class="search-dropdow">
                            <ul class="search__list pl-0 d-flex list-unstyled mb-0 flex-wrap">
                                <li class="mr-2">
                                    <a id="filter-search-kem-chong-nang"
                                        href="/search?q=tags:(Kem+ch%E1%BB%91ng+n%E1%BA%AFng)&amp;type=product">Kem
                                        chống nắng</a>
                                </li>
                                <li class="mr-2">
                                    <a id="filter-search-son-moi"
                                        href="/search?q=tags:(+Son+m%C3%B4i)&amp;type=product"> Son môi</a>
                                </li>
                                <li class="mr-2">
                                    <a id="filter-search-bong-tay-trang"
                                        href="/search?q=tags:(+B%C3%B4ng+t%E1%BA%A9y+trang)&amp;type=product"> Bông tẩy
                                        trang</a>
                                </li>
                                <li class="mr-2">
                                    <a id="filter-search-serum" href="/search?q=tags:(+Serum)&amp;type=product">
                                        Serum</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3 col-xl-5 col-lg-5 ">
                        <ul class="header-right mb-0 float-right list-unstyled  d-flex align-items-center">
                            <li class="media d-lg-flex d-none hotline ">
                                <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/phone_icon.png?1692086228721"
                                    width="32" height="32" class="mr-3 align-self-center" alt="phone_icon">

                                <div class="media-body d-md-flex flex-column d-none ">
                                    <span>Hỗ trợ khách hàng</span>
                                    <a class="font-weight-bold d-block" href="tel:19006750" title="19006750">
                                        19006750
                                    </a>
                                </div>
                            </li>
                            <li class="ml-4 mr-4 mr-md-3 ml-md-3 media d-lg-flex d-none ">
                                <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/account_icon.png?1692086228721"
                                    width="32" height="32" alt="account_icon" class="  mr-3 align-self-center">
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
                                        <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/cart_icon.png?1692086228721"
                                            width="24" height="24" alt="cart_icon">

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
        @yield('topmenu')
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
                            <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/logo-footer.png?1692086228721"
                                alt="logo EGA Cosmetic" width="150" height="32">
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
                                Email: <a title="support@sapo.vn" class="link"
                                    href="mailto:support@sapo.vn">support@sapo.vn</a>
                            </div>
                        </div>
                        <div class="social-footer">
                            <!--<h4 class="title-menu">
    Theo dõi chúng tôi 
    </h4>-->
                            <ul class="follow_option d-flex flex-wrap align-items-center p-0 list-unstyled">

                                <li>
                                    <a class="facebook link" href="https://bikipweb.site" target="_blank"
                                        title="Theo dõi Facebook EGA Cosmetic">
                                        <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/facebook.png?1692086228721"
                                            width="24" height="24" alt="facebook">

                                    </a>
                                </li>


                                <li>
                                    <a class="zalo link" href="https://zalo.me/834141234794359440" target="_blank"
                                        title="Theo dõi zalo EGA Cosmetic">
                                        <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/zalo.png?1692086228721"
                                            width="24" height="24" alt="zalo">

                                    </a>
                                </li>


                                <li>
                                    <a class="instgram link" href="#" target="_blank"
                                        title="Theo dõi instgram EGA Cosmetic">
                                        <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/instagram.png?1692086228721"
                                            width="24" height="24" alt="instgram">
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
                                <a class="link" href="https://docs.egany.com/sapo/ega-cosmetic" title="Giới thiệu">Giới
                                    thiệu</a>
                            </li>

                            <li class="li_menu">
                                <a class="link" href="/san-pham-flash-sale" title="Chương trình khuyến mãi">Chương trình
                                    khuyến mãi</a>
                            </li>

                            <li class="li_menu">
                                <a class="link" href="/he-thong-cua-hang" title="Hệ thống cửa hàng">Hệ thống cửa
                                    hàng</a>
                            </li>

                            <li class="li_menu">
                                <a class="link" href="/chinh-sach" title="Hướng dẫn đặt hàng">Hướng dẫn đặt hàng</a>
                            </li>

                            <li class="li_menu">
                                <a class="link" href="/apps/kiem-tra-don-hang" title="Kiểm tra đơn hàng">Kiểm tra đơn
                                    hàng</a>
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
                                <a class="link" href="/chinh-sach-doi-tra" title="Chính sách giao hàng">Chính sách giao
                                    hàng</a>
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
                            <form id="mc-form" class="newsletter-form custom-input-group mb-3" data-toggle="validator"
                                novalidate="true">
                                <input class="form-control input-group-field  " aria-label="Địa chỉ Email" type="email"
                                    placeholder="Nhập địa chỉ email" name="EMAIL" required="" autocomplete="off">
                                <div class="input-group-btn btn-action">
                                    <button class="h-100 btn text-white button_subscribe subscribe" type="submit"
                                        aria-label="Đăng ký nhận tin" name="subscribe">Đăng ký</button>
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
                                <img class=" img-fluid"
                                    src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/footer_trustbadge.jpg?1692086228721"
                                    alt="Phương thức thanh toán" width="246" height="53">
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

            </div>
        </div>

    </footer>
    @yield('footer')
</body>

</html>