@extends('layouts.site')
@section('title', 'Chi tiết sản phẩm')
@section( 'content')

<body>

	<div class="opacity_menu"></div>

	<div class="top-banner position-relative" style="background: rgb(167, 2, 8); display: none;">
		<div class="container text-center px-0">
			<a class="position-relative  d-sm-none d-block" style="max-height: 39px;height:  calc( 39 * 100vw /414 )"
				href="/collections/all" title="Banner top">
				<img class="img-fluid position-absolute "
					src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/top_banner_mb.jpg?1692086228721"
					style="left:0" alt="Banner top" width="414" height="39">

			</a>
			<a class="position-relative   d-sm-block d-none " style="max-height: 70px;height:  calc( 70 * 100vw /1410 )"
				href="/collections/all" title="Banner top">
				<picture>

					<source media="(max-width: 480px)"
						srcset="//bizweb.dktcdn.net/thumb/large/100/426/076/themes/917889/assets/top_banner.jpg?1692086228721">

					<img class="img-fluid position-absolute"
						src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/top_banner.jpg?1692086228721"
						style="left:0" alt="Banner top" width="1410" height="70">
				</picture>

			</a>
			<button type="button" class="close " aria-label="Close" style="z-index: 9;"><span
					aria-hidden="true">×</span></button>
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
			@include('components.menu-cate', ['categories' => $categories])

			<ul class="shop-policises list-unstyled  d-flex align-items-center flex-wrap m-0 pr-0">
				@foreach ($menus as $menu )
				@include('components.menu', ['menu' => $menu])
				@endforeach
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




						<li><strong><span>{{ $product->name }}</span></strong></li>

					</ul>
				</div>
			</div>
		</div>
	</section>


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

									<div aria-live="polite" class="slick-list draggable">
										<div class="slick-track"
											style="opacity: 1; width: 473px; transform: translate3d(0px, 0px, 0px);"
											role="listbox">
											<a class="d-block pos-relative embed-responsive embed-responsive-1by1 slick-slide slick-current slick-active"
												data-src="//bizweb.dktcdn.net/thumb/1024x1024/100/426/076/products/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml.jpg?v=1631849168343"
												href="//bizweb.dktcdn.net/thumb/1024x1024/100/426/076/products/combo-dau-goi-va-dau-xa-tsubaki-sach-dau-mat-lanh-490ml.jpg?v=1631849168343"
												data-rel="prettyPhoto[product-gallery]" data-slick-index="0"
												aria-hidden="false" style="width: 100%; height: 100%;" tabindex="-1"
												role="option" aria-describedby="slick-slide20">
												<img class="checkurl img-fluid"
													style="--image-scale: 0.8;--img-left: 0;transform: translate(0,-50%) scale(var(--image-scale));transform-origin: left center; width: 100%; height: 100%;"
													src="{{ $product->image }}" alt="">
											</a>
										</div>
									</div>


								</div>



								<div class="hidden">

								</div>
							</div>


						</div>

						<div class="col-xs-12 col-sm-12 px-lg-5  col-lg-6  details-pro">

							<div class="">

								<div class="">

									<span class="first_status "><span class="status_name">

											<a href="/collections/all?q=vendor.filter_key:(%22Tsubaki%22)&amp;page=1&amp;view=grid"
												target="_blank" class="product-vendor" title="Tsubaki">
												{{ $brand->name }}
											</a>
										</span>


									</span>
									<h1 class="title-product">{{ $product->name }}</h1>
									<form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add"
										method="post" class="form_background  margin-bottom-0">


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
												<span class="status_name product-sku" itemprop="sku"
													content="Đang cập nhật">
													Đang cập nhật

												</span>
											</span>
										</div>
										<div class="price-box">
											@if ($product->pricesale > 0)
											<span class="special-price">
												<span class="price product-price">{{ number_format($product->pricesale,
													0, ',', '.') }}₫</span>
											</span> <!-- Giá Khuyến mại -->
											<span class="old-price">
												<del class="product-price-old sale">{{ number_format($product->price, 0,
													',', '.') }}₫</del>
											</span> <!-- Giá gốc -->

											<div class="label_product">
												-{{ round((($product->price - $product->pricesale) / $product->price) *
												100) }}%
											</div>
											<div class="save-price">
												(Tiết kiệm: <span>{{ number_format($product->price -
													$product->pricesale, 0, ',', '.') }}₫</span>)
											</div>
											@else
											<span class="price product-price">{{ number_format($product->price, 0, ',',
												'.') }}₫</span> <!-- Giá gốc -->
											@endif
										</div>






										<div class="form-product pt-3">

											<div class="box-variant clearfix ">

												<input type="hidden" name="variantId" value="51261092">

											</div>
											<div class="form_button_details margin-top-15 w-100">
												<div class="form_product_content type1 ">
													<div class="soluong soluong_type_1 show">
														<label>Số lượng:</label>
														<div class="custom input_number_product custom-btn-number ">
															<button
																class="btn btn_num num_1 button button_qty hover-btn"
																onclick="var result = document.getElementsByClassName('pd-qtym')[0];var stick_result = document.getElementsByClassName('pd-qtym')[1]; var qtypro = result.value; if(!isNaN( qtypro ) &amp;&amp; qtypro > 1){result.value--;stick_result.value--;}else{return false;}"
																type="button">
																<svg class="icon">
																	<use xlink:href="#icon-minus"></use>
																</svg>
															</button>
															<input type="text" id="qtym111" name="quantity" value="1"
																maxlength="3" class="form-control prd_quantity pd-qtym"
																onkeypress="if (isNaN(this.value + String.fromCharCode(event.keyCode))) return false;"
																onchange="var stick_result = document.getElementsByClassName('pd-qtym')[1];if(this.value == 0){this.value=1;}else{stick_result.value=this.value}"
																style=" color:#d82e4d;border-color: #d82e4d;">

															<button
																class="btn btn_num num_2 button button_qty hover-btn"
																onclick="var result = document.getElementsByClassName('pd-qtym')[0];var stick_result = document.getElementsByClassName('pd-qtym')[1]; var qtypro = result.value; if( !isNaN( qtypro )) result.value++;stick_result.value++;return false;"
																type="button">
																<svg class="icon">
																	<use xlink:href="#icon-plus"></use>
																</svg>
															</button>
														</div>
													</div>

													<style>
														.hover-btn {
															transition: background-color 0.3s ease, border-color 0.3s ease;
															border: 1px solid #d82e4d;
															/* Viền mặc định */
														}

														.hover-btn:hover {
															background-color: #d82e4d;
															border-color: #d82e4d;
														}
													</style>

													<div class="button_actions clearfix"
														style="grid-template-columns:1fr 1fr ">

														<button type="submit" class="btn btn_base  btn-main  buynow ">
															<span class="text_1">Mua ngay</span>
														</button>


														<button type="submit"
															class="btn btn_base btn_add_cart btn-cart add_to_cart ">
															<span class="text_1">Thêm vào giỏ </span>
														</button>


													</div>

												</div>
											</div>
										</div>
									</form>

								</div>
								<div class="product-policises-wrapper">
									<!--	<h5 class="m-0 mb-3">
Chỉ có ở EGA Cosmetic:
</h5> -->
									<ul class="product-policises list-unstyled row ">
										<li class="media col-12">
											<div class="mr-3">
												<img class="img-fluid " width="32" height="32"
													src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_product_image_1.png?1692086228721"
													alt="Giao hàng toàn quốc">
											</div>
											<div class="media-body">
												Giao hàng toàn quốc
											</div>
										</li>
										<li class="media col-12">
											<div class="mr-3">
												<img class="img-fluid " width="32" height="32"
													src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_product_image_2.png?1692086228721"
													alt="Tích điểm tất cả sản phẩm">
											</div>
											<div class="media-body">
												Tích điểm tất cả sản phẩm
											</div>
										</li>
										<li class="media col-12">
											<div class="mr-3">
												<img class="img-fluid " width="32" height="32"
													src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_product_image_3.png?1692086228721"
													alt="Giảm 5% khi thanh toán online">
											</div>
											<div class="media-body">
												Giảm 5% khi thanh toán online
											</div>
										</li>
										<li class="media col-12">
											<div class="mr-3">
												<img class="img-fluid " width="32" height="32"
													src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/policy_product_image_4.png?1692086228721"
													alt="Cam kết chính hãng">
											</div>
											<div class="media-body">
												Cam kết chính hãng
											</div>
										</li>

									</ul>
								</div>


							</div>


						</div>



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
					<div id="ega-uti-editable-content" data-platform="sapo" data-id="23009191"
						class="rte product_getcontent py-3 pos-relative border-top"
						style="border-color: var(--text-color)!important">

						<div id="content">
							{{ $product->detail }}
						</div>




					</div>
					<div class="ega-pro__seemore text-center pos-relative my-3" style="display: none;">
						<a href="javascript:void(0)" title="Xem thêm" class="btn btn-main  ">
							Xem thêm
						</a>
					</div>
				</div>
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
				<div
					class="section products product_related slick-product slickrelated row slick-initialized slick-slider">
					<button type="button" data-role="none" class="slick-prev slick-arrow slick-disabled"
						aria-label="Previous" role="button" aria-disabled="true"
						style="display: inline-block;">Previous</button>

					<div aria-live="polite" class="slick-list draggable">
						<div class="slick-track"
							style="opacity: 1; width: 1512px; transform: translate3d(0px, 0px, 0px);" role="listbox">
							@foreach($products as $product)
							<div class="item   col-7 col-md-5 col-lg-15 slick-slide slick-active" style="width: 252px;"
								tabindex="-1" role="option" aria-describedby="slick-slide01" data-slick-index="1"
								aria-hidden="false">
								@include('components.product-card', ['product' => $product])

							</div>
							@endforeach
						</div>
					</div>
					<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next"
						role="button" style="display: block;" aria-disabled="false">Next</button>
				</div>
			</div>


		</div>
	</section>

	</section>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" media="all">
	<link rel="stylesheet" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/fonts.css?1692084315105"
		media="all">

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
	<link rel="preload" as="script" href="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js">

	<script src="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js" type="text/javascript"></script>
	<script src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/plugin.js?1692086228721" type="text/javascript">
	</script>


	<link rel="preload" as="style" type="text/css"
		href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/lightbox.css?1692086228721">

	<link href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/lightbox.css?1692086228721" rel="stylesheet"
		type="text/css" media="all">
	<link rel="preload" as="script"
		href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/lightgallery.js?1692086228721">
	<script src="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/lightgallery.js?1692086228721"
		type="text/javascript"></script>


	<section class="product details-main" itemscope="" itemtype="http://schema.org/Product">

		<link rel="stylesheet" href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/flashsale.css?1692086228721"
			media="all" onload="this.media='all'">

		<noscript>
			<link href="//bizweb.dktcdn.net/100/426/076/themes/917889/assets/flashsale.css?1692086228721"
				rel="stylesheet" type="text/css" media="all" />
		</noscript>
		<!-- Messenger Plugin chat Code -->
		@endsection
		@section('header')
		<link rel="stylesheet" href="home.css">
		@endsection