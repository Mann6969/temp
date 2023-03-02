<section id="header" class="clearfix cd-secondary-nav">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="{{route('index')}}"> FooDO  </a>
            </div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav nav_1">
                    <li><a class="tag_m active_tab" href="{{route('index')}}">Home</a></li>
                    <li><a class="tag_m" href="{{route('about')}}">About Us</a></li>
                    <li><a class="tag_m" href="{{ route('product.index') }}">Products</a></li>
                    <li><a class="tag_m" href="{{ route('blog') }}">Blog</a></li>
                    <li><a class="tag_m" href="{{ route('contact') }}">Contact Us</a></li>
                    {{-- <li class="dropdown">
                        <a class="tag_m" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Blog<span class="caret"></span></a>
                        <ul class="dropdown-menu drop_1" role="menu">
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a class="border_none" href="{{route('blog_detail')}}">Blog Detail</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="dropdown">
                        <a class="tag_m" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Pages<span class="caret"></span></a>
                        <ul class="dropdown-menu drop_1" role="menu">
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a class="border_none" href="cart.html">Shopping Cart</a></li>
                            <li><a class="border_none" href="checkout.html">Checkout</a></li>
                        </ul>
                    </li> --}}
                    <li class="dropdown dropdown-large">
                        <a href="#" class="dropdown-toggle tag_m" data-toggle="dropdown">Dropdown<b class="caret"></b></a>

                        <ul class="dropdown-menu dropdown-menu-large row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Classic</li>
                                    <li><a href="#">Available glyphs</a></li>
                                    <li><a href="#">Examples</a></li>
                                    <li><a href="#">Example</a></li>
                                    <li><a href="#">Aligninment options</a></li>
                                    <li><a href="#">Headers</a></li>
                                    <li><a href="#">Disabled menu items</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Interactive</li>
                                    <li><a href="#">Basic example</a></li>
                                    <li><a href="#">Button toolbar</a></li>
                                    <li><a href="#">Sizing</a></li>
                                    <li><a href="#">Nesting</a></li>
                                    <li><a href="#">Vertical variation</a></li>
                                    <li><a href="#">Single button dropdowns</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Infographic</li>
                                    <li><a href="#">Basic example</a></li>
                                    <li><a href="#">Button toolbar</a></li>
                                    <li><a href="#">Sizing</a></li>
                                    <li><a href="#">Nesting</a></li>
                                    <li><a href="#">Vertical variation</a></li>
                                    <li><a href="#">Single button dropdowns</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Typography</li>
                                    <li><a href="#">Basic example</a></li>
                                    <li><a href="#">Button toolbar</a></li>
                                    <li><a href="#">Sizing</a></li>
                                    <li><a href="#">Nesting</a></li>
                                    <li><a href="#">Vertical variation</a></li>
                                    <li><a href="#">Single button dropdowns</a></li>
                                </ul>
                            </li>
                        </ul>

                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">
                        <i class="fa fa-search"></i></button>
                </span>
                        </div>
                    </li>
                    {{-- <li class="text-center"><a class="tag_m tag_m1" href="#"><i class="fa fa-heart-o"></i><br> Wishlist</a></li> --}}
                    <li class="dropdown text-center">
                        <a class="tag_m tag_m2" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-shopping-cart"></i><br> My Bag<span class=""></span></a>
                        <ul class="dropdown-menu drop_1 drop_2" role="menu">
                            <li>No products in the cart.</li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

</section>