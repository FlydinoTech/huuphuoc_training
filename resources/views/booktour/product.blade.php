@extends('template.booktour.master')
@section('main_content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(/img/tour/background/5.jpg)">
        <div class="auto-container">
            <h2>Product Details</h2>
            <ul class="page-breadcrumb">
                <li><a href="index-2.html">home</a></li>
                <li>Product Details</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <!--Shop Single Section-->
    <section class="shop-single-section" style="background-color: white">
        <div class="auto-container">
            <div class="shop-single" >
                <div class="product-details">
                    <!--Basic Details-->
                    <div class="basic-details">
                        <div class="row clearfix">
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <figure class="image-box"><a href="img/tour/resource/products/9.jpg" class="lightbox-image" title="Image Caption Here"><img src="img/tour/resource/products/9.jpg" alt=""></a></figure>
                            </div>
                            <div class="info-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h4>MULTI-WAY ULTRA</h4>
                                    <div class="text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequ untur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, </div>
                                    <div class="price">Price : <span>$24.5</span></div>
                                    
                                    <div class="other-options clearfix">
                                        <div class="item-quantity"><label class="field-label">Quantity :</label><input class="quantity-spinner" type="text" value="2" name="quantity"></div>
                                        <button type="button" class="theme-btn cart-btn">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Basic Details-->
                    
                    <!--Product Info Tabs-->
                    <div class="product-info-tabs" style="background-color: white">
                        <!--Product Tabs-->
                        <div class="prod-tabs tabs-box">
                            <!--Tab Btns-->
                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#prod-reviews" class="tab-btn">Review (2)</li>
                            </ul>
                            <!--Tabs Container-->
                            <div class="tabs-content">
                                <!--Tab-->
                                <div id="prod-reviews">
                                    <h2 class="title">2 Reviews For win Your Friends</h2>
                                    <!--Reviews Container-->
                                    <div class="comments-area">
                                        <!--Comment Box-->
                                        <div class="comment-box">
                                            <div class="comment">
                                                <div class="author-thumb"><img src="img/tour/resource/author-1.jpg" alt=""></div>
                                                <div class="comment-inner">
                                                    <div class="comment-info clearfix">Steven Rich – Sep 17, 2016:</div>
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star light"></span>
                                                    </div>
                                                    <div class="text">How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Comment Box-->
                                        <div class="comment-box reply-comment">
                                            <div class="comment">
                                                <div class="author-thumb"><img src="img/tour/resource/author-2.jpg" alt=""></div>
                                                <div class="comment-inner">
                                                    <div class="comment-info clearfix">William Cobus – Aug 21, 2016:</div>
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-half-empty"></span>
                                                    </div>
                                                    <div class="text">There anyone who loves or pursues or desires to obtain pain itself, because it is pain sed, because occasionally circumstances occur some great pleasure.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Comment Form -->
                                    <div class="shop-comment-form">	
                                        <h2>Add Your Review</h2>
                                        <div class="rating-box">
                                            <div class="text"> Your Rating:</div>
                                            <div class="rating">
                                                <a href="#"><span class="fa fa-star"></span></a>
                                            </div>
                                            <div class="rating">
                                                <a href="#"><span class="fa fa-star"></span><span class="fa fa-star"></span></a>
                                                <a href="#"></a>
                                            </div>
                                            <div class="rating">
                                                <a href="#"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></a>
                                            </div>
                                            <div class="rating">
                                                <a href="#"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></a>
                                            </div>
                                            <div class="rating">
                                                <a href="#"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></a>
                                            </div>
                                        </div>
                                        <form method="post" action="templateshub.net">
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <label>First Name *</label>
                                                    <input type="text" name="username" placeholder="" required>
                                                </div>
                                                
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <label>Last Name*</label>
                                                    <input type="email" name="email" placeholder="" required>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                                    <label>Email*</label>
                                                    <input type="text" name="number" placeholder="" required>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                    <label>Your Comments*</label>
                                                    <textarea name="message" placeholder=""></textarea>
                                                </div>
                                                
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                    <button class="theme-btn btn-style-four" type="submit" name="submit-form"><span class="txt">Submit now</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Product Info Tabs-->
                </div>
            </div>
        </div>
    </section>
    <!--End Shop Single Section-->
    <!-- Related Products -->
    <section class="related-products" style="background-color: white">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="title-box">
                <h2>Related Products</h2>
            </div>
            <div class="row clearfix">
                <!--Shop Item-->
                <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="product-detail.html"><img src="img/tour/resource/products/2.jpg" alt="" /></a>
                            <div class="overlay-box">
                                <ul class="option-box">
                                    <li><a href="#"><span class="far fa-heart"></span></a></li>
                                    <li><a href="#"><span class="fa fa-shopping-bag"></span></a></li>
                                    <li><a href="img/tour/resource/products/2.jpg" class="lightbox-image" data-fancybox="products"><span class="fa fa-search"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="product-detail.html">SIDE-TIE TANK</a></h3>
                            <div class="price">$39.32</div>
                        </div>
                    </div>
                </div>
                <!--Shop Item-->
                <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="product-detail.html"><img src="img/tour/resource/products/3.jpg" alt="" /></a>
                            <div class="overlay-box">
                                <ul class="option-box">
                                    <li><a href="#"><span class="far fa-heart"></span></a></li>
                                    <li><a href="#"><span class="fa fa-shopping-bag"></span></a></li>
                                    <li><a href="img/tour/resource/products/3.jpg" class="lightbox-image" data-fancybox="products"><span class="fa fa-search"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="product-detail.html">COLD CREWNECK</a></h3>
                            <div class="price">$21.00</div>
                        </div>
                    </div>
                </div>
                <!--Shop Item-->
                <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="product-detail.html"><img src="img/tour/resource/products/4.jpg" alt="" /></a>
                            <div class="overlay-box">
                                <ul class="option-box">
                                    <li><a href="#"><span class="far fa-heart"></span></a></li>
                                    <li><a href="#"><span class="fa fa-shopping-bag"></span></a></li>
                                    <li><a href="img/tour/resource/products/4.jpg" class="lightbox-image" data-fancybox="products"><span class="fa fa-search"></span></a></li>
                                </ul>
                            </div>
                            <div class="tag-banner">Trending</div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="product-detail.html">WINTER WALKING</a></h3>
                            <div class="price">$91.50</div>
                        </div>
                    </div>
                </div>
                <!--Shop Item-->
                <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="product-detail.html"><img src="img/tour/resource/products/1.jpg" alt="" /></a>
                            <div class="overlay-box">
                                <ul class="option-box">
                                    <li><a href="#"><span class="far fa-heart"></span></a></li>
                                    <li><a href="#"><span class="fa fa-shopping-bag"></span></a></li>
                                    <li><a href="img/tour/resource/products/1.jpg" class="lightbox-image" data-fancybox="products"><span class="fa fa-search"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="product-detail.html">MULTI-WAY ULTRA</a></h3>
                            <div class="price">$50.22</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop