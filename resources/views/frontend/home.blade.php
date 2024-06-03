@extends('layouts.site')
@section('title', 'Trang chủ')
@section( 'content')
{{-- nội dung home --}}

<!-- subheader == mobile nav -->
<div class="subheader ">
    <div class="container ">
        @include('components.menu-cate', ['categories' => $categories])

        <ul class="shop-policises list-unstyled  d-flex align-items-center flex-wrap m-0 pr-0">
            @foreach ($menus as $menu )
                    @include('components.menu', ['menu' => $menu])
            @endforeach
        </ul>
        
        

    </div>
</div>

</script>
<h1 class="d-none">EGA Cosmetic - </h1>



<section class="section awe-section-1">
    <div class="container section mt-0">
        <div class="row ">

            <x-banner :banners="$banners" />


        </div>
    </div>
</section>


<section class="section awe-section-2">
    <section class="section_collections section">
        <div class="container card border-0">
            <div class="title_module_main heading-bar ">
                <h2 class="heading-bar__title ">
                    <a class='link' href="collections/all" title="DANH MỤC NỔI BẬT">DANH MỤC NỔI BẬT</a>
                </h2>
            </div>
            <div class="mt-2 text-center row flex-nowrap collections-slide">
                @include('components.category', ['categories' => $categories])
            </div>
            
        </div>
    </section>
</section>






<section class="section awe-section-3">
    <link rel="preload" as='style' type="text/css"
        href="Giaodien/100/426/076/themes/917889/assets/coupon.css?1692086228721">

    <link rel="stylesheet" href="Giaodien/100/426/076/themes/917889/assets/coupon.css?1692086228721">
    <!-- ℹ-->




</section>






<section class="section awe-section-4">
    <link rel="stylesheet" href="Giaodien/100/426/076/themes/917889/assets/flashsale.css?1692086228721" media="print"
        onload="this.media='all'">

    <noscript>
        <link href="Giaodien/100/426/076/themes/917889/assets/flashsale.css?1692086228721" rel="stylesheet"
            type="text/css" media="all" />
    </noscript>


    <section class="section_flashsale flashsale" style="--background-color: #d82e4d;
--countdown-background: #ffffff;
--countdown-color: #d82e4d;
--process-background: #fedfe2;
--process-color1: #eb395f;
--process-color2: #fabad3;
--stock-color: #242424;
--news-color: #d82e4d;
">
        <div class="container pt-3 py-2 card border-0 ">

            <div class="title_module_main row heading-bar d-flex justify-content-between align-items-center">
                <div class='d-flex align-items-center flex-wrap flashsale__header col-12 col-lg-6'>
                    <div>
                        <h2 class="heading-bar__title flashsale__title">
                            <a class='link' href="san-pham-flash-sale" title="ƯU ĐÃI HOT, ĐỪNG BỎ LỠ!!">ƯU ĐÃI HOT, ĐỪNG
                                BỎ LỠ!!</a>
                        </h2>
                    </div>

                    <div class="flashsale__countdown-wrapper">
                        <div class="flashsale__countdown" data-countdown-type="hours" data-countdown="">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row content-col">
                @php
                    $cout=0
                @endphp
                @foreach($products as $product)
                @if($cout<4 &&  $product->pricesale > 0)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 product-col">
                        @include('components.product-card', ['product' => $product])
                    </div>
                    @php
                    $cout++
                @endphp
                @endif
                
                @endforeach
            </div> 
                <div class="text-center mb-3 mt-1">
                    <a href="san-pham-flash-sale" title="Xem tất cả" class="btn btn-main btn-icon">
                        Xem tất cả
                        <svg class="icon">
                            <use xlink:href="#icon-arrow" />
                        </svg>
                    </a>
                    
                    
                </div>

            </div>

        </div>
    </section>

    <script src="Giaodien/100/426/076/themes/917889/assets/flashsale.js?1692086228721" defer></script>
</section>





<section class="section awe-section-5">


    <section class="section_product_tag section">

        <div class="container card border-0">
            <div
                class="title_module_main heading-bar e-tabs  d-flex justify-content-between align-items-center flex-wrap">
                <h2 class="heading-bar__title ">
                    <a class="link" href="sua-rua-mat" title="DÀNH RIÊNG CHO BẠN">
                        DÀNH RIÊNG CHO BẠN
                    </a>
                </h2>

            </div>
            <div class="row">

                <div class="col-lg-3 col-12">

                    <div class="d-lg-block d-none py-3">
                        <a class="banner" href="/collections/all" title=" best seller">
                            <img class="img-fluid"
                                src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/product_tag_banner.jpg?1692086228721"
                                width="330" height="463" alt=" best seller">
                        </a>
                    </div>
                    <div class="tag-list pb-3 " style="--tag-bg: #ffdb83;--tag-color: #2f4858">
                        <a class="tag-item" href="/search?q=tags:(Son+d%C6%B0%E1%BB%A1ng)" title="Son dưỡng">Son
                            dưỡng</a>
                        <a class="tag-item" href="/search?q=tags:(+Ph%E1%BA%A5n+ph%E1%BB%A7)" title=" Phấn phủ"> Phấn
                            phủ</a>
                        <a class="tag-item" href="/search?q=tags:(+Ph%E1%BA%A5n+m%E1%BA%AFt)" title=" Phấn mắt"> Phấn
                            mắt</a>
                        <a class="tag-item" href="/search?q=tags:(+Kem+n%E1%BB%81n)" title=" Kem nền"> Kem nền</a>
                        <a class="tag-item" href="/search?q=tags:(+Che+khuy%E1%BA%BFt+%C4%91i%E1%BB%83m)"
                            title=" Che khuyết điểm"> Che khuyết điểm</a>
                        <a class="tag-item" href="/search?q=tags:(+Giao+h%C3%A0ng+nhanh+4h)"
                            title=" Giao hàng nhanh 4h"> Giao hàng nhanh 4h</a>
                    </div>

                </div>


                <div class="col-lg-9 col-12">
                    <div class="row content-col">
                        @php
                            $cout=0
                        @endphp
                        @foreach($products as $product)
                        @if($cout<8 )
                            <div class="col-lg-3 col-md-3 col-sm-3 col-6 product-col">
                                @include('components.product-card', ['product' => $product])
                            </div>
                            @php
                            $cout++
                        @endphp
                        @endif
                        
                        @endforeach
                    </div> 
                    <div class="text-center mt-3 col-12">
                        <a href="sua-rua-mat" title="Xem tất cả" class="btn btn-main btn-icon  ">
                            Xem tất cả

                            <svg class="icon">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>

        </div>


    </section>
</section>

<section class="section awe-section-7">









    <section class="section_product_top section">
        <div class="container  card border-0 ">

            <div
                class="title_module_main heading-bar e-tabs  d-flex justify-content-between align-items-center flex-wrap">
                <h2 class="heading-bar__title ">
                    <a class="link" href="cham-soc-toc" title="CHĂM TÓC CHUẨN SALON">
                        CHĂM TÓC CHUẨN SALON
                    </a>
                </h2>

            </div>
            <div class="e-tabs">



                <div id="tab-1" class="tab-content  content_extab  current">
                    <div class="row content-col">
                        @php
                            $cout=0
                        @endphp
                        @foreach($products as $product)
                        @if($cout<8 )
                            <div class="col-lg-3 col-md-3 col-sm-3 col-6 product-col">
                                @include('components.product-card', ['product' => $product])
                            </div>
                            @php
                            $cout++
                        @endphp
                        @endif
                        
                        @endforeach
                    </div> 

                    <div class="text-center mt-3 col-12">
                        <a href="cham-soc-toc" title="Xem tất cả" class="btn btn-main btn-icon  ">
                            Xem tất cả

                            <svg class="icon">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>

                    </div>


                </div>




                <div id="tab-2" class="tab-content  content_extab   ">
                    <div class="row content-col">
                        @php
                            $cout=0
                        @endphp
                        @foreach($products as $product)
                        @if($cout<8 )
                            <div class="col-lg-3 col-md-3 col-sm-3 col-6 product-col">
                                @include('components.product-card', ['product' => $product])
                            </div>
                            @php
                            $cout++
                        @endphp
                        @endif
                        
                        @endforeach
                    </div> 

                    <div class="text-center mt-3 col-12">
                        <a href="xit-khoang" title="Xem tất cả" class="btn btn-main btn-icon  ">
                            Xem tất cả

                            <svg class="icon">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>

                    </div>


                </div>




                <div class="row content-col">
                    @php
                        $cout=0
                    @endphp
                    @foreach($products as $product)
                    @if($cout<8 )
                        <div class="col-lg-3 col-md-3 col-sm-3 col-6 product-col">
                            @include('components.product-card', ['product' => $product])
                        </div>
                        @php
                        $cout++
                    @endphp
                    @endif
                    
                    @endforeach
                </div> 

                    <div class="text-center mt-3 col-12">
                        <a href="cham-soc-co-the" title="Xem tất cả" class="btn btn-main btn-icon  ">
                            Xem tất cả

                            <svg class="icon">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>

                    </div>


                </div>


            </div>

        </div>
    </section>

</section>


<section class="section awe-section-9">
    <section class="section_product_new section">


        <div class="container  card border-0">
            <div class="title_module_main heading-bar  d-flex justify-content-between align-items-center">
                <h2 class="heading-bar__title mx-md-auto mx-lg-0">
                    <a class="link" href="sach-sau-am-min" title="SẠCH SÂU ẨM MỊN">SẠCH SÂU ẨM MỊN</a>
                </h2>

            </div>

            <div class="row mt-3" data-section="hot-section">
                <div class="col-12  col-xl-30 text-center pb-3 product-col">
                    <a class="banner" href="/collections/all" title="SẠCH SÂU ẨM MỊN">
                        <picture>
                            <source media="(max-width: 480px)"
                                srcset="//bizweb.dktcdn.net/thumb/large/100/426/076/themes/917889/assets/section_hot.jpg?1692086228721">
                            <img class=" img-fluid"
                                src="//bizweb.dktcdn.net/thumb/grande/100/426/076/themes/917889/assets/section_hot.jpg?1692086228721"
                                width="546" height="353" alt="SẠCH SÂU ẨM MỊN">

                        </picture>
                    </a>
                </div>
                <div class="row content-col">
                    @php
                        $cout=0
                    @endphp
                    @foreach($products as $product)
                    @if($cout<8 )
                        <div class="col-lg-3 col-md-3 col-sm-3 col-6 product-col">
                            @include('components.product-card', ['product' => $product])
                        </div>
                        @php
                        $cout++
                    @endphp
                    @endif
                    
                    @endforeach
                </div> 
            </div>
            <div class="text-center mt-3 col-12">
                <a href="sua-rua-mat" title="Xem tất cả" class="btn btn-main btn-icon  ">
                    Xem tất cả

                    <svg class="icon">
                        <use xlink:href="#icon-arrow"></use>
                    </svg>
                </a>
            </div>

        </div>


    </section>
</section>







<section class="section awe-section-10">
    <section class="section_brand section">
        <div class="container card border-0">
            <div class="title_module_main heading-bar ">
                <h2 class="heading-bar__title ">
                    <a class='link' href="" title="THƯƠNG HIỆU NỔI BẬT">THƯƠNG HIỆU NỔI BẬT</a>
                </h2>
            </div>
            <div class="row mx-0 hrz-scroll text-center flex-nowrap js-slider justify-content-start">
                @include('components.category-best', ['categories' => $categories])
            </div>
            
            


        </div>
    </section>
</section>






<section class="section awe-section-11">

    <section class="section_blog section">
        <div class="container card border-0 ">
            <div class="title_module_main heading-bar d-flex justify-content-between align-items-center">
                <h2 class="heading-bar__title ">
                    <a class='link' href="tin-tuc" title="TIN KHUYẾN MÃI">TIN KHUYẾN MÃI</a>
                </h2>
            </div>
            <div class="row mt-3">
                @php
                    $count = 0;
                @endphp
            
                @foreach ($posts as $post)
                    @if ($count < 4)
                        <div class="col-lg-3 col-6">
                            {{-- Đưa bài viết vào trong component để hiển thị --}}
                            @include('components.pro-post', ['post' => $post])
                        </div>
                        @php
                            $count++;
                        @endphp
                    @endif
                @endforeach
            </div>
            
            <div class="text-center">
                <a href="tin-tuc" title="Xem tất cả" class="btn btn-main btn-icon ">
                    Xem tất cả

                    <svg class="icon">
                        <use xlink:href="#icon-arrow" />
                    </svg>
                </a>
            </div>


        </div>
    </section>
</section>

<!--link css-->
<svg style="display:none">
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

<!--   

-->
<style>
    .btn-main.btn-icon {
        color: #d82e4d; /* Màu chữ ban đầu */
        border: 2px solid #d82e4d; /* Màu viền */
        padding: 10px 20px; /* Khoảng cách bên trong viền */
        border-radius: 5px; /* Bo góc viền */
        background-color: #f8f9fa; /* Màu nền ban đầu */
        text-decoration: none; /* Xóa gạch chân */
        display: inline-flex; /* Hiển thị inline-flex để căn chỉnh biểu tượng */
        align-items: center; /* Căn chỉnh biểu tượng và chữ */
        transition: background-color 0.3s, color 0.3s; /* Hiệu ứng chuyển đổi mượt mà */
    }
    .btn-main.btn-icon:hover {
        background-color: #d82e4d; /* Màu nền khi hover */
        color: #fff; /* Màu chữ khi hover */
    }
    .btn-main.btn-icon svg {
        margin-left: 5px; /* Khoảng cách giữa chữ và biểu tượng */
    }
</style>

<!--link footer-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" media="all">
<link rel="stylesheet" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/fonts.css?1692084315105" media="all">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
@section('header')
<link rel="stylesheet" href="home.css">
@endsection