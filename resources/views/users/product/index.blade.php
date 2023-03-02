@extends('users.home.index')

@section('head')
    <link href="{{ asset('user/assets/css/product.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section id="center" class="clearfix center_prod">
        <div class="container">
            <div class="row">
                <div class="center_prod_1 clearfix">
                    <div class="col-sm-12">
                        <h5 class="mgt"><a href="{{ route('index') }}">Home</a> | <span class="col_2">Product List</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="product_1 clearfix">
                    <div class="col-sm-9">
                        <div class="product_1l clearfix">
                            <div class="product_1li clearfix">
                                <div class="col-sm-6">
                                    <div class="product_1li1 clearfix">
                                        <p>We found 9 products available for you</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="product_1li2 text-right clearfix">
                                        <select class="form-control">
                                            <option>Default</option>
                                            <option>Popularity</option>
                                            <option>Latest</option>
                                            <option>Price: low to high</option>
                                            <option>Price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prod_home_2 clearfix">
                            <div class="col-sm-4">
                                <div class="prod_home_2m clearfix">
                                    <div class="prod_home_2m1 clearfix text-center">
                                        <a href="{{ route('product.display') }}"><img src="{{ asset('user/assets/img/7.jpg') }}" class="iw" alt="abc"></a>
                                        <h4><a href="{{ route('product.display') }}">Nulla Quis</a></h4>
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
                                        <h4 class="mgt"><a class="button mgt" href="{{ route('product.display') }}">Add to cart</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="prod_home_2m clearfix">
                                    <div class="prod_home_2m1 clearfix text-center">
                                        <a href="{{ route('product.display') }}"><img src="{{ asset('user/assets/img/8.jpg') }}" class="iw" alt="abc"></a>
                                        <h4><a href="{{ route('product.display') }}">Semper Porta</a></h4>
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
                                        <h4 class="mgt"><a class="button mgt" href="{{ route('product.display') }}">Add to cart</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="prod_home_2m clearfix">
                                    <div class="prod_home_2m1 clearfix text-center">
                                        <a href="{{ route('product.display') }}"><img src="{{ asset('user/assets/img/9.jpg') }}" class="iw" alt="abc"></a>
                                        <h4><a href="{{ route('product.display') }}">Eget Nulla</a></h4>
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
                                        <h4 class="mgt"><a class="button mgt" href="{{ route('product.display') }}">Add to cart</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prod_home_2 clearfix">
                            <div class="col-sm-4">
                                <div class="prod_home_2m clearfix">
                                    <div class="prod_home_2m1 clearfix text-center">
                                        <a href="{{ route('product.display') }}"><img src="{{ asset('user/assets/img/10.jpg') }}" class="iw" alt="abc"></a>
                                        <h4><a href="{{ route('product.display') }}">Nulla Quis</a></h4>
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
                                        <h4 class="mgt"><a class="button mgt" href="{{ route('product.display') }}">Add to cart</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="prod_home_2m clearfix">
                                    <div class="prod_home_2m1 clearfix text-center">
                                        <a href="{{ route('product.display') }}"><img src="{{ asset('user/assets/img/11.jpg') }}" class="iw" alt="abc"></a>
                                        <h4><a href="{{ route('product.display') }}">Semper Porta</a></h4>
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
                                        <h4 class="mgt"><a class="button mgt" href="{{ route('product.display') }}">Add to cart</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="prod_home_2m clearfix">
                                    <div class="prod_home_2m1 clearfix text-center">
                                        <a href="{{ route('product.display') }}"><img src="{{ asset('user/assets/img/12.jpg') }}" class="iw" alt="abc"></a>
                                        <h4><a href="{{ route('product.display') }}">Eget Nulla</a></h4>
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
                                        <h4 class="mgt"><a class="button mgt" href="{{ route('product.display') }}">Add to cart</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prod_home_2 clearfix">
                            <div class="col-sm-4">
                                <div class="prod_home_2m clearfix">
                                    <div class="prod_home_2m1 clearfix text-center">
                                        <a href="{{ route('product.display') }}"><img src="{{ asset('user/assets/img/13.jpg') }}" class="iw" alt="abc"></a>
                                        <h4><a href="{{ route('product.display') }}">Nulla Quis</a></h4>
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
                                        <h4 class="mgt"><a class="button mgt" href="{{ route('product.display') }}">Add to cart</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="prod_home_2m clearfix">
                                    <div class="prod_home_2m1 clearfix text-center">
                                        <a href="{{ route('product.display') }}"><img src="{{ asset('user/assets/img/14.jpg') }}" class="iw" alt="abc"></a>
                                        <h4><a href="{{ route('product.display') }}">Semper Porta</a></h4>
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
                                        <h4 class="mgt"><a class="button mgt" href="{{ route('product.display') }}">Add to cart</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="prod_home_2m clearfix">
                                    <div class="prod_home_2m1 clearfix text-center">
                                        <a href="{{ route('product.display') }}"><img src="{{ asset('user/assets/img/7.jpg') }}" class="iw" alt="abc"></a>
                                        <h4><a href="{{ route('product.display') }}">Eget Nulla</a></h4>
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
                                        <h4 class="mgt"><a class="button mgt" href="{{ route('product.display') }}">Add to cart</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product_1_last text-center clearfix">
                            <div class="col-sm-12">
                                <ul>
                                    <li class="act"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product_1r clearfix">
                            <div class="product_1r1 clearfix">
                                <h3 class="mgt">Categories</h3>
                                <ul class="normal">
                                    <li><i class="fa fa-circle col_2"></i> <a href="{{ route('product.display') }}">Babies</a></li>
                                    <li><i class="fa fa-circle col_2"></i> <a href="{{ route('product.display') }}">Child Care</a></li>
                                    <li><i class="fa fa-circle col_2"></i> <a href="{{ route('product.display') }}">Bags</a></li>
                                    <li><i class="fa fa-circle col_2"></i> <a href="{{ route('product.display') }}">Fluffy Animals</a></li>
                                    <li><i class="fa fa-circle col_2"></i> <a href="{{ route('product.display') }}">Clothes</a></li>
                                    <li><i class="fa fa-circle col_2"></i> <a href="{{ route('product.display') }}">Girls</a></li>
                                    <li><i class="fa fa-circle col_2"></i> <a href="{{ route('product.display') }}">Kids</a></li>
                                    <li><i class="fa fa-circle col_2"></i> <a href="{{ route('product.display') }}">Nurturing</a></li>
                                    <li><i class="fa fa-circle col_2"></i> <a href="{{ route('product.display') }}">Outfits</a></li>
                                </ul>
                            </div><br>
                            {{-- <div class="product_1r1 clearfix">
                                <h3 class="mgt">Recent Products</h3>
                                <div class="sold_1i clearfix">
                                    <div class="col-sm-5 space_left">
                                        <img src="{{ asset('user/assets/img/16.jpg') }}" class="iw" alt="abc">
                                    </div>
                                    <div class="col-sm-7 space_all">
                                        <div class="prod_home_2m1 clearfix">
                                            <h4 class="mgt"><a href="{{ route('product.display') }}">Lacinia Nunc</a></h4>
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
                                <div class="sold_1i clearfix">
                                    <div class="col-sm-5 space_left">
                                        <img src="{{ asset('user/assets/img/17.jpg') }}" class="iw" alt="abc">
                                    </div>
                                    <div class="col-sm-7 space_all">
                                        <div class="prod_home_2m1 clearfix">
                                            <h4 class="mgt"><a href="{{ route('product.display') }}">Nulla Quis</a></h4>
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
                                <div class="sold_1i clearfix">
                                    <div class="col-sm-5 space_left">
                                        <img src="{{ asset('user/assets/img/18.jpg') }}" class="iw" alt="abc">
                                    </div>
                                    <div class="col-sm-7 space_all">
                                        <div class="prod_home_2m1 clearfix">
                                            <h4 class="mgt"><a href="{{ route('product.display') }}">Eget Nulla</a></h4>
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
                            </div><br>
                            <div class="product_1r2 clearfix">
                                <h3 class="mgt">Archives</h3>
                                <ul class="normal">
                                    <li><a href="{{ route('product.display') }}"><i class="fa fa-chevron-right"></i> January</a></li>
                                    <li><a href="{{ route('product.display') }}"><i class="fa fa-chevron-right"></i> February</a></li>
                                    <li><a href="{{ route('product.display') }}"><i class="fa fa-chevron-right"></i> March</a></li>
                                    <li><a href="{{ route('product.display') }}"><i class="fa fa-chevron-right"></i> April</a></li>
                                    <li><a href="{{ route('product.display') }}"><i class="fa fa-chevron-right"></i> May</a></li>
                                    <li><a href="{{ route('product.display') }}"><i class="fa fa-chevron-right"></i> june</a></li>
                                    <li><a href="{{ route('product.display') }}"><i class="fa fa-chevron-right"></i> july</a></li>
                                    <li><a href="{{ route('product.display') }}"><i class="fa fa-chevron-right"></i> August</a></li>
                                    <li><a href="{{ route('product.display') }}"><i class="fa fa-chevron-right"></i> September</a></li>
                                    <li><a href="{{ route('product.display') }}"><i class="fa fa-chevron-right"></i> October</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
