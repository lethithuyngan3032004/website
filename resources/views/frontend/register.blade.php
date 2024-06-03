@extends('layouts.site')
@section('title', 'Đăng nhập')
@section( 'content')

<body>




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
                                    <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_1.png?1692086228721"
                                        alt="Ưu đãi hot 49%">
                                    <span>Ưu đãi hot 49%</span>

                                </a>

                            </li>



                            <li class="menu-item list-group-item">
                                <a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc da mặt">
                                    <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_2.png?1692086228721"
                                        alt="Chăm sóc da mặt">
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
                                                <a class="link" href="/san-pham-noi-bat" title="Serum - Tinh chất">Serum
                                                    - Tinh chất</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Kem dưỡng - Dầu dưỡng">Kem dưỡng - Dầu dưỡng</a>
                                            </span>

                                        </li>




                                        <li class="submenu__col">
                                            <span class="submenu__item submenu__item--main">
                                                <a class="link" href="/san-pham-noi-bat" title="Làm sạch da mặt">Làm
                                                    sạch da mặt</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Tẩy trang">Tẩy trang</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Làm sạch da mặt">Làm
                                                    sạch da mặt</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết">Tẩy tế
                                                    bào chết</a>
                                            </span>

                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Xịt khoáng">Xịt khoáng</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Nước hoa hồng">Nước hoa
                                                hồng</a>
                                        </li>


                                    </ul>
                                </div>
                            </li>



                            <li class="menu-item list-group-item">
                                <a href="/san-pham-noi-bat" class="menu-item__link" title="Trang điểm">
                                    <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_3.png?1692086228721"
                                        alt="Trang điểm">
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
                                                <a class="link" href="/san-pham-noi-bat" title="Trang điểm mặt">Trang
                                                    điểm mặt</a>
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
                                                <a class="link" href="/san-pham-noi-bat" title="Phấn nước Cushion">Phấn
                                                    nước Cushion</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Che khuyết điểm">Che
                                                    khuyết điểm</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Tạo khối - Highlighter">Tạo khối - Highlighter</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Phấn má hồng">Phấn má
                                                    hồng</a>
                                            </span>

                                        </li>




                                        <li class="submenu__col">
                                            <span class="submenu__item submenu__item--main">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Trang điểm vùng mắt">Trang điểm vùng mắt</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Kẻ chân mày">Kẻ chân
                                                    mày</a>
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
                                                <a class="link" href="/san-pham-noi-bat" title="Trang điểm môi">Trang
                                                    điểm môi</a>
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
                                                <a class="link" href="/san-pham-noi-bat" title="Tẩy tế bào chết môi">Tẩy
                                                    tế bào chết môi</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Mặt nạ môi">Mặt nạ
                                                    môi</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Kẻ viền môi">Kẻ viền
                                                    môi</a>
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
                                                <a class="link" href="/san-pham-noi-bat" title="Phụ kiện làm móng">Phụ
                                                    kiện làm móng</a>
                                            </span>

                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Tẩy Trang mắt - môi">Tẩy
                                                Trang mắt - môi</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Dụng cụ trang điểm">Dụng cụ
                                                trang điểm</a>
                                        </li>


                                    </ul>
                                </div>
                            </li>



                            <li class="menu-item list-group-item">
                                <a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cơ thể">
                                    <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_4.png?1692086228721"
                                        alt="Chăm sóc cơ thể">
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
                                                <a class="link" href="/san-pham-noi-bat" title="Làm sạch cơ thể">Làm
                                                    sạch cơ thể</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Sữa tắm - xà phòng tắm">Sữa tắm - xà phòng tắm</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Muối tắm">Muối tắm</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Tẩy tế bào chết toàn thân">Tẩy tế bào chết toàn thân</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Gel rửa tay">Gel rửa
                                                    tay</a>
                                            </span>

                                        </li>




                                        <li class="submenu__col">
                                            <span class="submenu__item submenu__item--main">
                                                <a class="link" href="/san-pham-noi-bat" title="Dưỡng thể">Dưỡng thể</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Dưỡng ẩm toàn thân">Dưỡng ẩm toàn thân</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Dưỡng trắng toàn thân">Dưỡng trắng toàn thân</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Chống nắng toàn thân">Chống nắng toàn thân</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Dưỡng tay chân">Dưỡng
                                                    tay chân</a>
                                            </span>

                                        </li>




                                        <li class="submenu__col">
                                            <span class="submenu__item submenu__item--main">
                                                <a class="link" href="/san-pham-noi-bat" title="Khử mùi">Khử mùi</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Khử mùi cho nam">Khử mùi
                                                    cho nam</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Khử mùi cho nữ">Khử mùi
                                                    cho nữ</a>
                                            </span>

                                        </li>




                                        <li class="submenu__col">
                                            <span class="submenu__item submenu__item--main">
                                                <a class="link" href="/san-pham-noi-bat" title="Vệ sinh phụ nữ">Vệ sinh
                                                    phụ nữ</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Dung dịch vệ sinh">Dung
                                                    dịch vệ sinh</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Băng vệ sinh">Băng vệ
                                                    sinh</a>
                                            </span>

                                        </li>




                                        <li class="submenu__col">
                                            <span class="submenu__item submenu__item--main">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Kem massage - chăm sóc ngực">Kem massage - chăm sóc ngực</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Giảm mỡ/tan mỡ">Giảm
                                                    mỡ/tan mỡ</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Giảm rạn da">Giảm rạn
                                                    da</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Nở ngực - săn chắc ngực">Nở ngực - săn chắc ngực</a>
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
                                    <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_5.png?1692086228721"
                                        alt="Chăm sóc cá nhân">
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
                                            <a class="link" href="/san-pham-noi-bat" title="Chăm sóc răng miệng">Chăm
                                                sóc răng miệng</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Khẩu trang">Khẩu trang</a>
                                        </li>




                                        <li class="submenu__col">
                                            <span class="submenu__item submenu__item--main">
                                                <a class="link" href="/collections/all" title="Nước hoa nam">Nước hoa
                                                    nam</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Nước hoa Eau De Parfum">Nước hoa Eau De Parfum</a>
                                            </span>

                                        </li>




                                        <li class="submenu__col">
                                            <span class="submenu__item submenu__item--main">
                                                <a class="link" href="/san-pham-noi-bat" title="Nước hoa nữ">Nước hoa
                                                    nữ</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Nước hoa Eau De Toilrttee">Nước hoa Eau De Toilrttee</a>
                                            </span>

                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Nước súc miệng">Nước súc
                                                miệng</a>
                                        </li>


                                    </ul>
                                </div>
                            </li>



                            <li class="menu-item list-group-item">
                                <a href="/san-pham-noi-bat" class="menu-item__link" title="Sản phẩm thiên nhiên">
                                    <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_6.png?1692086228721"
                                        alt="Sản phẩm thiên nhiên">
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
                                                <a class="link" href="/san-pham-noi-bat" title="Tinh dầu các loại">Tinh
                                                    dầu các loại</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Tinh dầu thiên nhiên">Tinh dầu thiên nhiên</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Dầu dừa thiên nhiên">Dầu
                                                    dừa thiên nhiên</a>
                                            </span>

                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Đèn xông hương">Đèn xông
                                                hương</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat"
                                                title="Sản phẩm thiên nhiên làm đẹp">Sản phẩm thiên nhiên làm đẹp</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Nến thơm">Nến thơm</a>
                                        </li>


                                    </ul>
                                </div>
                            </li>



                            <li class="menu-item list-group-item">
                                <a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc tóc">
                                    <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_7.png?1692086228721"
                                        alt="Chăm sóc tóc">
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
                                                <a class="link" href="/san-pham-noi-bat" title="Ngăn rụng tóc">Ngăn rụng
                                                    tóc</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Giảm dầu nhờn">Giảm dầu
                                                    nhờn</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Dưỡng tóc khô xơ">Dưỡng
                                                    tóc khô xơ</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Chăm sóc tóc nhuộm">Chăm
                                                    sóc tóc nhuộm</a>
                                            </span>

                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Mặt nạ - Kem ủ tóc">Mặt nạ -
                                                Kem ủ tóc</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Dầu dưỡng tóc">Dầu dưỡng
                                                tóc</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat"
                                                title="Thuốc nhuộm - uốn - duỗi">Thuốc nhuộm - uốn - duỗi</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Dầu xả">Dầu xả</a>
                                        </li>


                                    </ul>
                                </div>
                            </li>



                            <li class="menu-item list-group-item">
                                <a href="/san-pham-noi-bat" class="menu-item__link" title="Bộ sản phẩm làm đẹp">
                                    <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_8.png?1692086228721"
                                        alt="Bộ sản phẩm làm đẹp">
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
                                            <a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc da mặt">Bộ chăm
                                                sóc da mặt</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Bộ trang điểm">Bộ trang
                                                điểm</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Bộ chăm sóc cơ thể">Bộ chăm
                                                sóc cơ thể</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat"
                                                title="Bộ chăm sóc tóc và da đầu">Bộ chăm sóc tóc và da đầu</a>
                                        </li>


                                    </ul>
                                </div>
                            </li>



                            <li class="menu-item list-group-item">
                                <a href="/san-pham-noi-bat" class="menu-item__link" title="Thiết bị làm đẹp">
                                    <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_9.png?1692086228721"
                                        alt="Thiết bị làm đẹp">
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
                                                <a class="link" href="/san-pham-noi-bat" title="Dụng cụ làm đẹp">Dụng cụ
                                                    làm đẹp</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Bút điện di massage">Bút
                                                    điện di massage</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Máy tỉa lông mũi">Máy
                                                    tỉa lông mũi</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Máy massage nâng cơ mặt">Máy massage nâng cơ mặt</a>
                                            </span>

                                        </li>




                                        <li class="submenu__col">
                                            <span class="submenu__item submenu__item--main">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Dụng cụ tạo kiểu tóc">Dụng cụ tạo kiểu tóc</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Máy sấy tóc">Máy sấy
                                                    tóc</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Máy ép, duỗi tóc">Máy
                                                    ép, duỗi tóc</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Máy uốn tóc">Máy uốn
                                                    tóc</a>
                                            </span>

                                        </li>




                                        <li class="submenu__col">
                                            <span class="submenu__item submenu__item--main">
                                                <a class="link" href="/san-pham-noi-bat"
                                                    title="Massage thư giãn và làm đẹp">Massage thư giãn và làm đẹp</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Massage mặt">Massage
                                                    mặt</a>
                                            </span>

                                            <span class="submenu__item submenu__item">
                                                <a class="link" href="/san-pham-noi-bat" title="Làm thon gọn cơ thể">Làm
                                                    thon gọn cơ thể</a>
                                            </span>

                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Máy xông da mặt">Máy xông da
                                                mặt</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Dụng cụ tẩy lông">Dụng cụ
                                                tẩy lông</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Sản phẩm định hình">Sản phẩm
                                                định hình</a>
                                        </li>


                                    </ul>
                                </div>
                            </li>



                            <li class="menu-item list-group-item">
                                <a href="/san-pham-noi-bat" class="menu-item__link" title="Chăm sóc cá nhân">
                                    <img src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/menu_icon_10.png?1692086228721"
                                        alt="Chăm sóc cá nhân">
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
                                            <a class="link" href="/san-pham-noi-bat" title="Chăm sóc cơ thể">Chăm sóc cơ
                                                thể</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Chăm sóc tóc">Chăm sóc
                                                tóc</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Chăm sóc sức khoẻ">Chăm sóc
                                                sức khoẻ</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Nước hoa">Nước hoa</a>
                                        </li>




                                        <li class="submenu__item submenu__item--main">
                                            <a class="link" href="/san-pham-noi-bat" title="Dưỡng tay chân">Dưỡng tay
                                                chân</a>
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
                        <img class="img-fluid "
                            src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_header_image_1.png?1692086228721"
                            width="32" height="32" alt="Chính sách đổi trả">
                    </div>
                    <a class="link" href="/chinh-sach" title="Chính sách đổi trả">Chính sách đổi trả</a>
                </li>
                <li>
                    <div class="">
                        <img class="img-fluid "
                            src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_header_image_2.png?1692086228721"
                            width="32" height="32" alt="Hệ thống cửa hàng">
                    </div>
                    <a class="link" href="/he-thong-cua-hang" title="Hệ thống cửa hàng">Hệ thống cửa hàng</a>
                </li>
                <li>
                    <div class="">
                        <img class="img-fluid "
                            src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_header_image_3.png?1692086228721"
                            width="32" height="32" alt="Kiểm tra đơn hàng">
                    </div>
                    <a class="link" href="/apps/kiem-tra-don-hang" title="Kiểm tra đơn hàng">Kiểm tra đơn hàng</a>
                </li>

            </ul>

        </div>
    </div>

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

                        <li><strong><span>Đăng ký tài khoản</span></strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container margin-bottom-20 card py-2">
            <div class="wrap_background_aside margin-bottom-40 page_login">
                <div class="heading-bar text-center">
                    <h1 class="title_page mb-0">Đăng kí tài khoản</h1>
                    <p class="mb-0">Bạn đã có tài khoản ?
                        <a href="/LeThiThuyNgan_CDWeb1/public/dang-nhap" class="btn-link-style btn-register" style="text-decoration: underline; color: blue;"> Đăng nhập tại đây</a>

                    </p>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-5 offset-md-3 py-3 mx-auto">
                        <div class="page-login py-3 ">
                            <div id="login">
                                <h2 class="text-center">
                                    Thông tin cá nhân
                                </h2>
                                <form method="post" action="/account/register" id="customer_register"
                                    accept-charset="UTF-8"><input name="FormType" type="hidden"
                                        value="customer_register"><input name="utf8" type="hidden" value="true"><input
                                        type="hidden" id="Token-a0ec974ad31641a0abac18f143097428" name="Token"
                                        value="03AFcWeA4KeIsLMDuvROLc4tlD6HdZPKXOlM3W_Tt5J-wFc967NV9FdUFRtDVf-2yYDnJpA6BZNmxJ1r9o7mLksgG0BiBcLW7cQDsAnwMhbZ04l5mMUjf7LK4vnVRT1BMRSCU7h_Dy0boYpcYclRC5kKHV6iyNjFDPcOBk88tmZbUSUa_vD0RCEvApKxcwWjl8PExs69XlOJEaCT3x4RuDr0GOr90ueN8yGixW2bKw1eHQ5eJxPH5BP5H364Lii03s8H3f858liDfoFPQ3tSpDqBUr27lI1wA4Bh8d8LOkSOHXhjExFCQ3Q2q1fRvIYk3F5zF652DcQRpfkp0b2ZBDL0mj2Ar5KOfkla5bXl4CXwUP3dyy3zwKCJ_eEgblmqm0nNi5uRpgjAlbzbqjouvEUJQVLGsfskGF5SL46R4cfk9kqqQ40H7KbA2dUHrY-A6xtFYbwmxG2MOHqB6VEQXo2RtUnGXqgPHHN-RtTNxH0qd0mmbco9WLbll2zIyTtTSHsQ2XGO5npTVcu--zB0iHIdCfOKSSsKiE-QA3rbm4MMQ5zndTNaUrkKO1Bua7B3ZQDHb6miXl_ez_30Qw4RU4a9TxkiZ1q18g8Y_iVoGQ2cqOYoCbu7e5vg6-GQ24Ew38xFALJSmCsSyZiPMgJfp4Pdo_9D9ocSvhfdk5Yo1sAXy3dmpVOWUlGOU4fQReZP_kf_tBeNjxLnEW">
                                    <script
                                        src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK">
                                    </script>
                                    <script>
                                        grecaptcha.ready(function() {grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "customer_register"}).then(function(token) {document.getElementById("Token-a0ec974ad31641a0abac18f143097428").value = token});});
                                    </script>
                                    <div class="form-signup " style="color:red;">

                                    </div>
                                    <div class="form-signup clearfix">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Họ <span class="required">*</span></label>
                                                    <input type="text" class="form-control form-control-lg" value=""
                                                        name="lastName" id="lastName" placeholder="Họ" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-12">
                                                <fieldset class="form-group">
                                                    <label>Tên <span class="required">*</span></label>
                                                    <input type="text" class="form-control form-control-lg" value=""
                                                        name="firstName" id="firstName" placeholder="Tên" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Số điện thoại <span class="required">*</span></label>
                                                    <input placeholder="Số điện thoại" type="text" pattern="\d+"
                                                        id="Phone"
                                                        class="form-control form-control-comment form-control-lg"
                                                        name="Phone" required="">
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="email"
                                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                        class="form-control form-control-lg" value="" name="email"
                                                        id="email" placeholder="Email" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                <fieldset class="form-group">
                                                    <label>Mật khẩu <span class="required">*</span> </label>
                                                    <div class="input-group" style="position: relative;">
                                                        <input type="password" class="form-control" value="" name="password"
                                                            id="customer_password" placeholder="Mật khẩu" required="" maxlength="16"
                                                            style="padding-right: 40px;">
                                                        <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility()"
                                                            style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);">
                                                            <i class="fa fa-eye" id="togglePasswordIcon"></i>
                                                        </button>
                                                    </div>
                                                    <small class="d-block my-2">Quên mật khẩu? Nhấn vào <a href="#"
                                                            class="btn-link-style text-primary"
                                                            onclick="showRecoverPasswordForm();return false;"> đây </a></small>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <script>
                                            function togglePasswordVisibility() {
                                                var passwordField = document.getElementById("customer_password");
                                                var togglePasswordIcon = document.getElementById("togglePasswordIcon");
                                                if (passwordField.type === "password") {
                                                    passwordField.type = "text";
                                                    togglePasswordIcon.classList.remove("fa-eye");
                                                    togglePasswordIcon.classList.add("fa-eye-slash");
                                                } else {
                                                    passwordField.type = "password";
                                                    togglePasswordIcon.classList.remove("fa-eye-slash");
                                                    togglePasswordIcon.classList.add("fa-eye");
                                                }
                                            }
                                        </script>
                                        <div class="section margin-top-10 button_bottom mt-3">
                                            <button type="submit" value="Đăng ký"
                                                class="btn  btn-style  btn_register btn-block">Đăng ký</button>

                                        </div>
                                    </div>
                                </form>
                                <div class="block social-login--facebooks text-center">
                                    <p class="a-center text-secondary">
                                        Hoặc đăng nhập bằng
                                    </p>
                                    <script>
                                        function loginFacebook(){var a={client_id:"947410958642584",redirect_uri:"https://store.mysapo.net/account/facebook_account_callback",state:JSON.stringify({redirect_url:window.location.href}),scope:"email",response_type:"code"},b="https://www.facebook.com/v3.2/dialog/oauth"+encodeURIParams(a,!0);window.location.href=b}function loginGoogle(){var a={client_id:"997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",redirect_uri:"https://store.mysapo.net/account/google_account_callback",scope:"email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",access_type:"online",state:JSON.stringify({redirect_url:window.location.href}),response_type:"code"},b="https://accounts.google.com/o/oauth2/v2/auth"+encodeURIParams(a,!0);window.location.href=b}function encodeURIParams(a,b){var c=[];for(var d in a)if(a.hasOwnProperty(d)){var e=a[d];null!=e&&c.push(encodeURIComponent(d)+"="+encodeURIComponent(e))}return 0==c.length?"":(b?"?":"")+c.join("&")}
                                    </script>
                                    <a href="javascript:void(0)" class="social-login--facebook"
                                        onclick="loginFacebook()"><img width="129px" height="37px"
                                            alt="facebook-login-button"
                                            src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
                                    <a href="javascript:void(0)" class="social-login--google"
                                        onclick="loginGoogle()"><img width="129px" height="37px"
                                            alt="google-login-button"
                                            src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>













    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" media="all">
    <link rel="stylesheet" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/fonts.css?1692084315105"
        media="all">




    <div class="modal fade" id="ega-modal-banner" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md align-vertical" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="/collections/all">
                        <img class="img-fluid"
                            src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/banner_popup_img.png?1692086228721"
                            alt="welcome popup" width="765" height="765">
                    </a>
                    <button class="btn-form-close close" type="button" data-dismiss="modal" aria-label="Close"><i
                            class="fa fa-times"></i></button>
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
    </script> <svg style="display:none">
        <defs>
            <symbol class="icon " id="icon-cart" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.594 16.39a.703.703 0 0 1-.703.704h-.704v.703a.703.703 0 0 1-1.406 0v-.703h-.703a.703.703 0 0 1 0-1.407h.703v-.703a.703.703 0 1 1 1.406 0v.704h.704c.388 0 .703.314.703.703Zm0-10.968v6.75a.703.703 0 0 1-1.406 0V6.125H12.78v2.11a.703.703 0 1 1-1.406 0v-2.11h-6.75v2.11a.703.703 0 1 1-1.406 0v-2.11H1.813v10.969h7.453a.703.703 0 1 1 0 1.406H1.109a.703.703 0 0 1-.703-.703V5.422c0-.388.315-.703.703-.703h2.143A4.788 4.788 0 0 1 8 .5a4.788 4.788 0 0 1 4.748 4.219h2.143c.388 0 .703.315.703.703Zm-4.266-.703A3.38 3.38 0 0 0 8 1.906 3.38 3.38 0 0 0 4.672 4.72h6.656Z"
                    fill="currentColor"></path>
            </symbol>
        </defs>
    </svg>
    <svg style="display:none">
        <defs>
            <symbol id="icon-minus" class="icon icon-minus" viewBox="0 0 16 2" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.375 0H0.625C0.279813 0 0 0.279813 0 0.625C0 0.970187 0.279813 1.25 0.625 1.25H15.375C15.7202 1.25 16 0.970187 16 0.625C16 0.279813 15.7202 0 15.375 0Z"
                    fill="#8C9196"></path>
            </symbol>
        </defs>
    </svg>

    <svg style="display:none">
        <defs>
            <symbol id="icon-plus" class="icon icon-plus" viewBox="0 0 93.562 93.562" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path xmlns="http://www.w3.org/2000/svg"
                    d="M87.952,41.17l-36.386,0.11V5.61c0-3.108-2.502-5.61-5.61-5.61c-3.107,0-5.61,2.502-5.61,5.61l0.11,35.561H5.61   c-3.108,0-5.61,2.502-5.61,5.61c0,3.107,2.502,5.609,5.61,5.609h34.791v35.562c0,3.106,2.502,5.61,5.61,5.61   c3.108,0,5.61-2.504,5.61-5.61V52.391h36.331c3.108,0,5.61-2.504,5.61-5.61C93.562,43.672,91.032,41.17,87.952,41.17z"
                    fill="currentColor"></path>
            </symbol>
        </defs>
    </svg>

    <svg style="display:none">
        <defs>
            <symbol class="icon icon-arrow" id="icon-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490.8 490.8"
                fill="none" aria-hidden="true" focusable="false" role="presentation">
                <path
                    d="M135.685 3.128c-4.237-4.093-10.99-3.975-15.083.262-3.992 4.134-3.992 10.687 0 14.82l227.115 227.136-227.136 227.115c-4.237 4.093-4.354 10.845-.262 15.083 4.093 4.237 10.845 4.354 15.083.262.089-.086.176-.173.262-.262l234.667-234.667c4.164-4.165 4.164-10.917 0-15.083L135.685 3.128z"
                    fill="currentColor"></path>
                <path
                    d="M128.133 490.68a10.667 10.667 0 01-7.552-18.219l227.136-227.115L120.581 18.232c-4.171-4.171-4.171-10.933 0-15.104 4.171-4.171 10.933-4.171 15.104 0l234.667 234.667c4.164 4.165 4.164 10.917 0 15.083L135.685 487.544a10.663 10.663 0 01-7.552 3.136z">
                </path>
            </symbol>
        </defs>
    </svg>

    <svg style="display:none">
        <defs>
            <symbol id="icon-search" class="icon icon-search" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 192.904 192.904">
                <path
                    d="M190.707 180.101l-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 005.303 2.197 7.498 7.498 0 005.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                </path>
            </symbol>
        </defs>
    </svg>
    <link rel="preload" as="script" href="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js">

    <script src="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js" type="text/javascript"></script>



    <div id="quick-view-product" class="quickview-product" style="display:none;">
        <div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
        <div class="quick-view-product align-verticle"></div>
        <div id="quickview-modal" style="display:none;">
            <div class="block-quickview primary_block details-product">
                <div class="row">
                    <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-6">
                        <div class="image-block large-image col_large_default">
                            <span class="view_full_size">
                                <a class="img-product d-block  pos-relative embed-responsive embed-responsive-1by1"
                                    title="" href="javascript:;">
                                    <img src="https://bizweb.dktcdn.net/thumb/grande/assets/themes_support/noimage.gif"
                                        id="product-featured-image-quickview"
                                        class="img-responsive product-featured-image-quickview" alt="quickview">
                                </a>
                            </span>
                            <div class="loading-imgquickview" style="display:none;"></div>
                        </div>
                        <div class="more-view-wrapper clearfix">
                            <div class="thumbs_quickview owl_nav_custome1" id="thumbs_list_quickview">
                                <ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq"
                                    id="thumblist_quickview"></ul>
                            </div>
                        </div>
                    </div>
                    <div
                        class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-6 details-pro style_product style_border">
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

                        <form action="/cart/add" method="post" enctype="multipart/form-data"
                            class="quick_option variants form-ajaxtocart form-product">
                            <span class="price-product-detail hidden" style="opacity: 0;">
                                <span class=""></span>
                            </span>
                            <select name="variantId" class="hidden" style="display:none"></select>

                            <div class="form-group form_product_content">
                                <div class="count_btn_style quantity_wanted_p">
                                    <div class="custom input_number_product soluong1">
                                        <button class="btn_num btn num_1 button button_qty"
                                            onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv > 1 ) result.value--;return false;">
                                            <svg class="icon">
                                                <use xlink:href="#icon-minus"></use>
                                            </svg></button>
                                        <input type="text" id="quantity-detail" name="quantity" value="1" maxlength="2"
                                            class="form-control prd_quantity"
                                            onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                            onchange="if(this.value == 0)this.value=1;">
                                        <button class="btn_num  btn num_2 button button_qty"
                                            onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">
                                            <svg class="icon">
                                                <use xlink:href="#icon-plus"></use>
                                            </svg> </button>
                                    </div>
                                    <div class="button_actions clearfix">
                                        <button type="submit"
                                            class="btn_cool btn btn_base fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart_detail">
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
   
    <script>
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
          case "15":
            c = f(a, 0);
            break;
          case "amount_with_comma_separator":
            c = f(a, 2, ".", ",");
            break;
          case "15":
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
          case "15":
            result = formatMoney(amount, 0);
            break;
          case "amount_with_comma_separator":
            result = formatMoney(amount, 2, ".", ",");
            break;
          case "15":
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
                <span class="price">${Bizweb.formatMoney(cart.total_price, '{{15}}₫')}</span>
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
                                      price: Bizweb.formatMoney(item.price, '{{15}}₫'),
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
                                      price: Bizweb.formatMoney(item.price, '{{15}}₫'),
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
                                jQuery('<div class="pd"><div class="top-subtotal">Tổng tiền tạm tính: <span class="price price_big">' + Bizweb.formatMoney(cart.total_price, "{{15}}₫") + '</span></div></div>').appendTo(table);
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
                                          price: Bizweb.formatMoney(item.price, '{{15}}₫'),
                                          title: item.title,
                                          buttonQty: buttonQty,
                                          quanty: item.quantity,
                                          variant_title: item.variant_title,
                                          price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{15}}₫"),
                                          id_item: item.variant_id,
                                          variant_title: ''
                                        }]
                                    }else {
                                        var ItemCartPage = [{
                                          url: item.url,
                                          image_url: link_img1,
                                          price: Bizweb.formatMoney(item.price, '{{15}}₫'),
                                          title: item.title,
                                          buttonQty: buttonQty,
                                          quanty: item.quantity,
                                          variant_title: item.variant_title,
                                          price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{15}}₫"),
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
                                      price_total: Bizweb.formatMoney(cart.total_price, "{{15}}₫")
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
                                              price: Bizweb.formatMoney(item.price, '{{15}}₫'),
                                              title: item.title,
                                              quanty: item.quantity,
                                              variant_title: '',
                                              price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{15}}₫"),
                                              id_item: item.variant_id
                                        }];
                                    }else {
                                        var ItemPopupCart = [{
                                              url: item.url,
                                              image_url: src,
                                              price: Bizweb.formatMoney(item.price, '{{15}}₫'),
                                              title: item.title,
                                              quanty: item.quantity,
                                              variant_title: item.variant_title,
                                              price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{15}}₫"),
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
            jQuery('.total-price').html(Bizweb.formatMoney(cart.total_price, "{{15}}₫"));
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
                                          price: Bizweb.formatMoney(item.price, '{{15}}₫'),
                                          title: item.title,
                                          quanty: item.quantity,
                                          variant_title: item.variant_title !== 'Default Title'?item.variant_title : '',
                                          price_quanty: Bizweb.formatMoney(item.price * item.quantity, "{{15}}₫"),
                                          id_item: item.variant_id
                                        }];
                                        
                                            var pageCartItemMobile = $('script[data-template="ItemCartMobile"]').text().split(/\$\{(.+?)\}/g);
                                        
                                            $(table.children('.content-product-list')).append(ItemCartPageMobile.map(function(item) {
                                                return pageCartItemMobile.map(render(item)).join('');
                                            }));
    
                                    })
                                    
                                    var pageCartCheckoutMobile = $('script[data-template="pageCartCheckoutMobile"]').text().split(/\$\{(.+?)\}/g);  
                                    var PriceTotalCheckoutMobile = [{
                                        price_total: Bizweb.formatMoney(cart.total_price, "{{15}}₫")
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
            var $cartPrice = Bizweb.formatMoney(data.total_price, "{{15}}₫"),
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
                                 $('.productid-'+variantId).find('.cart-price span.price').html(Bizweb.formatMoney(item.price * item.quantity, "{{15}}₫"));
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
    <script src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/main.js?1692086228721" type="text/javascript">
    </script>

    <link rel="preload" as="script"
        href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/ega-gateway-min.js?1692086228721">

    <script src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/ega-gateway-min.js?1692086228721"
        type="text/javascript"></script>
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
            moneyFormat: '{{15}}₫',
            currentTemplate: 'customers/register',
            platformApi: Bizweb,
            scripts: [],
                lang: {
            "email_invalid": "Email không đúng định dạng",
            "phone_invalid": "Số điện thoại không đúng định dạng",
            "require_invalid": "Vui lòng điền trường này",
            "unavailable": "Liên hệ"
            }
        }
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
                });
        
    </script>
    <!-- Add to cart -->
    <div id="popupCartModal" class="modal fade" role="dialog">
    </div>


    <link rel="stylesheet" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/sales-pop.css?1692086228721"
        media="all" onload="this.media='all'">

    <noscript>
        <link href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/sales-pop.css?1692086228721" rel="stylesheet"
            type="text/css" media="all" />
    </noscript>
    <div id="ega-sale-pop" class="sales-pop">
        <div class="sale-pop-wrap">
            <div class="sale-pop-img">
                <img src="//bizweb.dktcdn.net/thumb/small/100/426/076/products/52d6e894422c1b2ad92b066abbb0d5e5.jpg?v=1627197734267"
                    class="img-fluid" loading="lazy" alt="undefined" width="80" height="80">
            </div>
            <div class="sale-pop-body">
                <div class="sale-pop-name">
                    <a href="/son-duong-co-mau-glow-tint-lip-balm-3-5g">Son Dưỡng Có Màu Glow Tint Lip Balm 3.5g</a>
                </div>
                <span class="sale-pop-desc">Khách hàng Trịnh Thùy Dung tại Hải Dương vừa mua sản phẩm cách đây 16
                    phút</span>
            </div>
        </div>
        <div class="sale-pop-close">
            <i class="fa fa-times"></i>
        </div>

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

    <link rel="stylesheet" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/addthis-sharing.css?1692086228721"
        media="all" onload="this.media='all'">

    <noscript>
        <link href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/addthis-sharing.css?1692086228721"
            rel="stylesheet" type="text/css" media="all" />
    </noscript>

   



<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" media="all">
<link rel="stylesheet" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/fonts.css?1692084315105"
    media="all">
    <link rel="stylesheet" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/bootstrap-4-3-min.css?1692086228721">
    <link href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/main.scss.css?1692086228721" rel="stylesheet" type="text/css" media="all">
    <link href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/product_infor_style.scss.css?1692086228721" rel="stylesheet" type="text/css" media="all">
    <link href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/quickviews_popup_cart.scss.css?1692086228721" rel="stylesheet" type="text/css" media="all">
    <link href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/account_oder_style.scss.css?1692086228721" rel="stylesheet" type="text/css" media="all">
    <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/jquery.js?1692086228721">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


@endsection
@section('header')
<link rel="stylesheet" href="home.css">
@endsection