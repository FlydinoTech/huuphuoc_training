@extends('template.booktour.master')
@section('main_content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(img/tour/background/5.jpg)">
        <div class="auto-container">
            <h2>Cart</h2>
            <ul class="page-breadcrumb">
                <li><a href="index-2.html">home</a></li>
                <li>Shoping Cart</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <!--Cart Section-->
    <section class="cart-section" style="background-color: white">
        <div class="auto-container">
            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th>Preview</th>
                                <th class="prod-column">product</th>
                                <th class="price">Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb"><a href="#"><img src="img/tour/resource/products/8.jpg" alt=""></a></figure>
                                    </div>
                                </td>
                                <td><h4 class="prod-title">Tool</h4></td>
                                <td class="sub-total">$25.00</td>
                                <td class="qty"><div class="item-quantity"><input class="quantity-spinner" type="text" value="2" name="quantity"></div></td>
                                <td class="total-price">$25.00</td>
                                <td><a href="#" class="remove-btn"><span class="fa fa-times"></span></a></td>
                            </tr>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb"><a href="#"><img src="img/tour/resource/products/8.jpg" alt=""></a></figure>
                                    </div>
                                </td>
                                <td><h4 class="prod-title">Tool</h4></td>
                                <td class="sub-total">$25.00</td>
                                <td class="qty"><div class="item-quantity"><input class="quantity-spinner" type="text" value="2" name="quantity"></div></td>
                                <td class="total-price">$25.00</td>
                                <td><a href="#" class="remove-btn"><span class="fa fa-times"></span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart-options clearfix">
                    <div class="pull-left">
                        <div class="apply-coupon clearfix">
                            <div class="form-group clearfix">
                                <input type="text" name="coupon-code" value="" placeholder="Coupon Code">
                            </div>
                            <div class="form-group clearfix">
                                <button type="button" class="theme-btn coupon-btn">Apply Coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="button" class="theme-btn cart-btn">Add to cart</button>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="column col-lg-7 col-md-5 col-sm-12"></div>
                    <div class="column col-lg-5 col-md-7 col-sm-12">
                        <!--Totals Table-->
                        <ul class="totals-table">
                            <li><h3>Cart Totals</h3></li>
                            <li class="clearfix"><span class="col">Sub Total</span><span class="col">$25.00</span></li>
                            <li class="clearfix total"><span class="col">Total</span><span class="col price">$25.00</span></li>
                            <li class="text-right"><button type="submit" class="theme-btn proceed-btn">Proceed to Checkout</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Cart Section-->
@stop