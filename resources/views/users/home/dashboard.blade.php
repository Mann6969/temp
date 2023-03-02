@extends('users.home.index')
@section('content')
    <section id="center" class="clearfix center_home">
        <div class="center clearfix">
            <div id="carousel" class="carousel slide carousel-fade">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div data-slide-no="0" class="item carousel-item active">
                        <img src="{{ asset('user/assets/img/1.jpg') }}" alt="">
                        <div class="carousel-caption carousel-caption_1">
                            <h1>Spring Collection</h1><br>
                            <h2>For Modern Kids</h2>
                        </div>
                    </div>
                    <div data-slide-no="1" class="item carousel-item">
                        <img src="{{ asset('user/assets/img/2.jpg') }}" alt="">
                        <div class="carousel-caption carousel-caption_2">
                            <h1>Summer Vibes</h1><br>
                            <h2>Holiday Mode On</h2>
                        </div>
                    </div>
                    <div data-slide-no="2" class="item carousel-item">
                        <img src="{{ asset('user/assets/img/3.jpg') }}" alt="">
                        <div class="carousel-caption carousel-caption_3">
                            <h1>Spring Collection</h1><br>
                            <h2>For Modern Kids</h2>
                        </div>
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class="left carousel-control kb_control_left" href="#carousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <!-- Right-Button -->
                <a class="right carousel-control kb_control_right" href="#carousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section id="collection">
        <div class="container">
            <div class="row">
                <div class="collect_1 clearfix">
                    <div class="col-sm-4">
                        <div class="collect_1i clearfix">
                            <div class="col-sm-8">
                                <h3 class="mgt col">Best Fashion </h3>
                                <p class="col">Sed Augue Semper Porta Vestibulum Lacinia Arcu</p>
                            </div>
                            <div class="col-sm-4 space_right">
                                <img src="{{ asset('user/assets/img/4.jpg') }}" alt="abc" class="iw">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="collect_1i1 clearfix">
                            <div class="col-sm-8">
                                <h3 class="mgt col">New Popular</h3>
                                <p class="col">Sed Augue Semper Porta Vestibulum Lacinia Arcu</p>
                            </div>
                            <div class="col-sm-4 space_right">
                                <img src="{{ asset('user/assets/img/5.jpg') }}" alt="abc" class="iw">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="collect_1i2 clearfix">
                            <div class="col-sm-8">
                                <h3 class="mgt col">Best Fashion</h3>
                                <p class="col">Sed Augue Semper Porta Vestibulum Lacinia Arcu</p>
                            </div>
                            <div class="col-sm-4 space_right">
                                <img src="{{ asset('user/assets/img/6.jpg') }}" alt="abc" class="iw">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="prod_home">
        <div class="container">
            <div class="row">
                <div class="prod_home_1 text-center clearfix">
                    <div class="col-sm-12">
                        <h1 class="mgt">Popular Products</h1>
                        <p>Made with care for your little ones, our products are perfect<br> for every occasion. Check it
                            out.</p>
                    </div>
                </div>
                <div class="prod_home_2 clearfix">
                    <div class="col-sm-3">
                        <div class="prod_home_2m clearfix">
                            <div class="prod_home_2m1 clearfix text-center">
                                <a href="#"><img src="{{ asset('user/assets/img/7.jpg') }}" class="iw" alt="abc"></a>
                                <h4><a href="#">Nulla Quis</a></h4>
                                <span class="col_1">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <h2 class="col_2">$68</h2>
                            </div>
                            <div class="prod_home_2m2 clearfix bg">
                                <h5 class="mgt">New</h5>
                            </div>
                            <div class="prod_home_2m3 clearfix text-center">
                                <h4 class="mgt"><a class="button mgt" href="#">Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="prod_home_2m clearfix">
                            <div class="prod_home_2m1 clearfix text-center">
                                <a href="#"><img src="{{ asset('user/assets/img/8.jpg') }}" class="iw" alt="abc"></a>
                                <h4><a href="#">Semper Porta</a></h4>
                                <span class="col_1">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <h2 class="col_2">$55</h2>
                            </div>
                            <div class="prod_home_2m2 clearfix bg2">
                                <h5 class="mgt">Sold</h5>
                            </div>
                            <div class="prod_home_2m3 clearfix text-center">
                                <h4 class="mgt"><a class="button mgt" href="#">Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="prod_home_2m clearfix">
                            <div class="prod_home_2m1 clearfix text-center">
                                <a href="#"><img src="{{ asset('user/assets/img/9.jpg') }}" class="iw" alt="abc"></a>
                                <h4><a href="#">Eget Nulla</a></h4>
                                <span class="col_1">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <h2 class="col_2">$42</h2>
                            </div>
                            <div class="prod_home_2m2 clearfix bg1">
                                <h5 class="mgt">Sale</h5>
                            </div>
                            <div class="prod_home_2m3 clearfix text-center">
                                <h4 class="mgt"><a class="button mgt" href="#">Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="prod_home_2m clearfix">
                            <div class="prod_home_2m1 clearfix text-center">
                                <a href="#"><img src="{{ asset('user/assets/img/10.jpg') }}" class="iw" alt="abc"></a>
                                <h4><a href="#">Lacinia Nunc</a></h4>
                                <span class="col_1">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <h2 class="col_2">$72</h2>
                            </div>
                            <div class="prod_home_2m2 clearfix bg">
                                <h5 class="mgt">New</h5>
                            </div>
                            <div class="prod_home_2m3 clearfix text-center">
                                <h4 class="mgt"><a class="button mgt" href="#">Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prod_home_2 clearfix">
                    <div class="col-sm-3">
                        <div class="prod_home_2m clearfix">
                            <div class="prod_home_2m1 clearfix text-center">
                                <a href="#"><img src="{{ asset('user/assets/img/11.jpg') }}" class="iw" alt="abc"></a>
                                <h4><a href="#">Nulla Quis</a></h4>
                                <span class="col_1">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <h2 class="col_2">$68</h2>
                            </div>
                            <div class="prod_home_2m2 clearfix bg">
                                <h5 class="mgt">New</h5>
                            </div>
                            <div class="prod_home_2m3 clearfix text-center">
                                <h4 class="mgt"><a class="button mgt" href="#">Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="prod_home_2m clearfix">
                            <div class="prod_home_2m1 clearfix text-center">
                                <a href="#"><img src="{{ asset('user/assets/img/12.jpg') }}" class="iw" alt="abc"></a>
                                <h4><a href="#">Semper Porta</a></h4>
                                <span class="col_1">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <h2 class="col_2">$55</h2>
                            </div>
                            <div class="prod_home_2m2 clearfix bg2">
                                <h5 class="mgt">Sold</h5>
                            </div>
                            <div class="prod_home_2m3 clearfix text-center">
                                <h4 class="mgt"><a class="button mgt" href="#">Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="prod_home_2m clearfix">
                            <div class="prod_home_2m1 clearfix text-center">
                                <a href="#"><img src="{{ asset('user/assets/img/13.jpg') }}" class="iw" alt="abc"></a>
                                <h4><a href="#">Eget Nulla</a></h4>
                                <span class="col_1">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <h2 class="col_2">$42</h2>
                            </div>
                            <div class="prod_home_2m2 clearfix bg1">
                                <h5 class="mgt">Sale</h5>
                            </div>
                            <div class="prod_home_2m3 clearfix text-center">
                                <h4 class="mgt"><a class="button mgt" href="#">Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="prod_home_2m clearfix">
                            <div class="prod_home_2m1 clearfix text-center">
                                <a href="#"><img src="{{ asset('user/assets/img/14.jpg') }}" class="iw" alt="abc"></a>
                                <h4><a href="#">Lacinia Nunc</a></h4>
                                <span class="col_1">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <h2 class="col_2">$72</h2>
                            </div>
                            <div class="prod_home_2m2 clearfix bg">
                                <h5 class="mgt">New</h5>
                            </div>
                            <div class="prod_home_2m3 clearfix text-center">
                                <h4 class="mgt"><a class="button mgt" href="#">Add to cart</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sale" class="clearfix">
        <div class="col-sm-6 space_all">
            <div class="sale_l clearfix">
                <img src="{{ asset('user/assets/img/15.jpg') }}" class="iw" alt="abc">
            </div>
        </div>
        <div class="col-sm-6 space_all">
            <div class="sale_r text-center clearfix">
                <h1 class="mgt head_1">50% Sale</h1><br>
                <h1 class="head_2">We make shopping easy.</h1>
                <p class="col">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
                <h4><a class="button" href="#">Learn More</a></h4>
            </div>
        </div>
    </section>

    <section id="sold">
        <div class="container">
            <div class="row">
                <div class="prod_home_1 text-center clearfix">
                    <div class="col-sm-12">
                        <h1 class="mgt">Best Sellers</h1>
                        <p>Made with care for your little ones, our products are perfect<br> for every occasion. Check it
                            out.</p>
                    </div>
                </div>
                <div class="sold_1 clearfix">
                    <div class="col-sm-3 space_left">
                        <div class="sold_1i clearfix">
                            <div class="col-sm-5 space_left">
                                <img src="{{ asset('user/assets/img/16.jpg') }}" class="iw" alt="abc">
                            </div>
                            <div class="col-sm-7 space_all">
                                <div class="prod_home_2m1 clearfix">
                                    <h4 class="mgt"><a href="#">Lacinia Nunc</a></h4>
                                    <span class="col_1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <h2 class="col_2">$68</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 space_left">
                        <div class="sold_1i clearfix">
                            <div class="col-sm-5 space_left">
                                <img src="{{ asset('user/assets/img/17.jpg') }}" class="iw" alt="abc">
                            </div>
                            <div class="col-sm-7 space_all">
                                <div class="prod_home_2m1 clearfix">
                                    <h4 class="mgt"><a href="#">Nulla Quis</a></h4>
                                    <span class="col_1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <h2 class="col_2">$48</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 space_left">
                        <div class="sold_1i clearfix">
                            <div class="col-sm-5 space_left">
                                <img src="{{ asset('user/assets/img/18.jpg') }}" class="iw" alt="abc">
                            </div>
                            <div class="col-sm-7 space_all">
                                <div class="prod_home_2m1 clearfix">
                                    <h4 class="mgt"><a href="#">Eget Nulla</a></h4>
                                    <span class="col_1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <h2 class="col_2">$55</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 space_left">
                        <div class="sold_1i clearfix">
                            <div class="col-sm-5 space_left">
                                <img src="{{ asset('user/assets/img/19.jpg') }}" class="iw" alt="abc">
                            </div>
                            <div class="col-sm-7 space_all">
                                <div class="prod_home_2m1 clearfix">
                                    <h4 class="mgt"><a href="#">Semper Porta</a></h4>
                                    <span class="col_1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <h2 class="col_2">$66</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sold_1 clearfix">
                    <div class="col-sm-3 space_left">
                        <div class="sold_1i clearfix">
                            <div class="col-sm-5 space_left">
                                <img src="{{ asset('user/assets/img/20.jpg') }}" class="iw" alt="abc">
                            </div>
                            <div class="col-sm-7 space_all">
                                <div class="prod_home_2m1 clearfix">
                                    <h4 class="mgt"><a href="#">Lacinia Nunc</a></h4>
                                    <span class="col_1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <h2 class="col_2">$68</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 space_left">
                        <div class="sold_1i clearfix">
                            <div class="col-sm-5 space_left">
                                <img src="{{ asset('user/assets/img/21.jpg') }}" class="iw" alt="abc">
                            </div>
                            <div class="col-sm-7 space_all">
                                <div class="prod_home_2m1 clearfix">
                                    <h4 class="mgt"><a href="#">Nulla Quis</a></h4>
                                    <span class="col_1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <h2 class="col_2">$48</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 space_left">
                        <div class="sold_1i clearfix">
                            <div class="col-sm-5 space_left">
                                <img src="{{ asset('user/assets/img/22.jpg') }}" class="iw" alt="abc">
                            </div>
                            <div class="col-sm-7 space_all">
                                <div class="prod_home_2m1 clearfix">
                                    <h4 class="mgt"><a href="#">Eget Nulla</a></h4>
                                    <span class="col_1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <h2 class="col_2">$55</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 space_left">
                        <div class="sold_1i clearfix">
                            <div class="col-sm-5 space_left">
                                <img src="{{ asset('user/assets/img/23.jpg') }}" class="iw" alt="abc">
                            </div>
                            <div class="col-sm-7 space_all">
                                <div class="prod_home_2m1 clearfix">
                                    <h4 class="mgt"><a href="#">Semper Porta</a></h4>
                                    <span class="col_1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <h2 class="col_2">$66</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sold_1 clearfix">
                    <div class="col-sm-3 space_left">
                        <div class="sold_1i clearfix">
                            <div class="col-sm-5 space_left">
                                <img src="{{ asset('user/assets/img/24.jpg') }}" class="iw" alt="abc">
                            </div>
                            <div class="col-sm-7 space_all">
                                <div class="prod_home_2m1 clearfix">
                                    <h4 class="mgt"><a href="#">Lacinia Nunc</a></h4>
                                    <span class="col_1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <h2 class="col_2">$68</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 space_left">
                        <div class="sold_1i clearfix">
                            <div class="col-sm-5 space_left">
                                <img src="{{ asset('user/assets/img/25.jpg') }}" class="iw" alt="abc">
                            </div>
                            <div class="col-sm-7 space_all">
                                <div class="prod_home_2m1 clearfix">
                                    <h4 class="mgt"><a href="#">Nulla Quis</a></h4>
                                    <span class="col_1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <h2 class="col_2">$48</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 space_left">
                        <div class="sold_1i clearfix">
                            <div class="col-sm-5 space_left">
                                <img src="{{ asset('user/assets/img/26.jpg') }}" class="iw" alt="abc">
                            </div>
                            <div class="col-sm-7 space_all">
                                <div class="prod_home_2m1 clearfix">
                                    <h4 class="mgt"><a href="#">Eget Nulla</a></h4>
                                    <span class="col_1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </span>
                                    <h2 class="col_2">$55</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 space_left">
                        <div class="sold_1i clearfix">
                            <div class="col-sm-5 space_left">
                                <img src="{{ asset('user/assets/img/27.jpg') }}" class="iw" alt="abc">
                            </div>
                            <div class="col-sm-7 space_all">
                                <div class="prod_home_2m1 clearfix">
                                    <h4 class="mgt"><a href="#">Semper Porta</a></h4>
                                    <span class="col_1">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <h2 class="col_2">$66</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="subscribe_1 clearfix">
                    <div class="col-sm-4">
                        <div class="subscribe_1i clearfix">
                            <h3 class="col">Subscribe to Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="subscribe_1i1 clearfix">
                            <input class="form-control" placeholder="Your Email..." type="text">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="subscribe_1i2 clearfix">
                            <h4 class="mgt"><a class="button mgt" href="#">Subscribe</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="clearfix">
        <div class="col-sm-2 space_all">
            <div class="portfolio_1 clearfix">
                <div class="prod_home_2m clearfix">
                    <div class="prod_home_2m1 clearfix text-center">
                        <a href="#"><img src="{{ asset('user/assets/img/28.jpg') }}" class="iw" alt="abc"></a>
                    </div>
                    <div class="prod_home_2m3 clearfix text-center">
                        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 space_all">
            <div class="portfolio_1 clearfix">
                <div class="prod_home_2m clearfix">
                    <div class="prod_home_2m1 clearfix text-center">
                        <a href="#"><img src="{{ asset('user/assets/img/29.jpg') }}" class="iw" alt="abc"></a>
                    </div>
                    <div class="prod_home_2m3 clearfix text-center">
                        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 space_all">
            <div class="portfolio_1 clearfix">
                <div class="prod_home_2m clearfix">
                    <div class="prod_home_2m1 clearfix text-center">
                        <a href="#"><img src="{{ asset('user/assets/img/30.jpg') }}" class="iw" alt="abc"></a>
                    </div>
                    <div class="prod_home_2m3 clearfix text-center">
                        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 space_all">
            <div class="portfolio_1 clearfix">
                <div class="prod_home_2m clearfix">
                    <div class="prod_home_2m1 clearfix text-center">
                        <a href="#"><img src="{{ asset('user/assets/img/31.jpg') }}" class="iw" alt="abc"></a>
                    </div>
                    <div class="prod_home_2m3 clearfix text-center">
                        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 space_all">
            <div class="portfolio_1 clearfix">
                <div class="prod_home_2m clearfix">
                    <div class="prod_home_2m1 clearfix text-center">
                        <a href="#"><img src="{{ asset('user/assets/img/32.jpg') }}" class="iw" alt="abc"></a>
                    </div>
                    <div class="prod_home_2m3 clearfix text-center">
                        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 space_all">
            <div class="portfolio_1 clearfix">
                <div class="prod_home_2m clearfix">
                    <div class="prod_home_2m1 clearfix text-center">
                        <a href="#"><img src="{{ asset('user/assets/img/33.jpg') }}" class="iw" alt="abc"></a>
                    </div>
                    <div class="prod_home_2m3 clearfix text-center">
                        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

