@extends('users.home.index')
@section('head')
    <link href="{{ asset('user/assets/css/blog.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section id="center" class="clearfix center_prod">
        <div class="container">
            <div class="row">
                <div class="center_prod_1 clearfix">
                    <div class="col-sm-12">
                        <h5 class="mgt">
                            <a href="{{route('index')}}">Home</a>
                            |
                            <span class="col_2">Blog Page</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog_page" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="blog_page_1 clearfix">
                    <div class="col-sm-9">
                        <div class="blog_page_1l mgt clearfix">
                            <a href="{{route('blog_detail')}}"><img src="{{ asset('user/assets/img/43.jpg') }}" class="iw" alt="abc"></a>
                            <h5 class="normal"><a href="{{route('blog_detail')}}"><span class="span_1">Jan 20, 2019</span></a> <span
                                    class="span_2">By <a href="{{route('blog_detail')}}">Lacinia Arcu</a></span> <span
                                    class="span_3"><i class="fa fa-comment-o"></i> <a href="{{route('blog_detail')}}">3</a></span>
                                <i class="fa fa-shopping-bag"></i> <a href="{{route('blog_detail')}}">Babysitting</a></h5><br>
                            <h2 class="mgt">Future Parents</h2>
                            <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                                nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio
                                tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class
                                aptent taciti sociosqu ad litora torquent per conubianostra, per inceptos...</p>
                            <h4><a class="button" href="{{route('blog_detail')}}">Read More</a></h4>
                        </div>
                        <div class="blog_page_1l clearfix">
                            <a href="{{route('blog_detail')}}"><img src="{{ asset('user/assets/img/44.jpg') }}" class="iw" alt="abc"></a>
                            <h5 class="normal"><a href="{{route('blog_detail')}}"><span class="span_1">Jan 20, 2019</span></a> <span
                                    class="span_2">By <a href="{{route('blog_detail')}}">Lacinia Arcu</a></span> <span
                                    class="span_3"><i class="fa fa-comment-o"></i> <a href="{{route('blog_detail')}}">3</a></span>
                                <i class="fa fa-shopping-bag"></i> <a href="{{route('blog_detail')}}">Babysitting</a></h5><br>
                            <h2 class="mgt">Only the Best</h2>
                            <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                                nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio
                                tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class
                                aptent taciti sociosqu ad litora torquent per conubianostra, per inceptos...</p>
                            <h4><a class="button" href="{{route('blog_detail')}}">Read More</a></h4>
                        </div>
                        <div class="blog_page_1l clearfix">
                            <a href="{{route('blog_detail')}}"><img src="{{ asset('user/assets/img/45.jpg') }}" class="iw" alt="abc"></a>
                            <h5 class="normal"><a href="{{route('blog_detail')}}"><span class="span_1">Jan 20, 2019</span></a> <span
                                    class="span_2">By <a href="{{route('blog_detail')}}">Lacinia Arcu</a></span> <span
                                    class="span_3"><i class="fa fa-comment-o"></i> <a href="{{route('blog_detail')}}">3</a></span>
                                <i class="fa fa-shopping-bag"></i> <a href="{{route('blog_detail')}}">Babysitting</a></h5><br>
                            <h2 class="mgt">Babysitting service</h2>
                            <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                                nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio
                                tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class
                                aptent taciti sociosqu ad litora torquent per conubianostra, per inceptos...</p>
                            <h4><a class="button" href="{{route('blog_detail')}}">Read More</a></h4>
                        </div>
                        <div class="product_1_last text-center clearfix">
                            <div class="col-sm-12">
                                <ul>
                                    <li class="act"><a href="{{route('blog_detail')}}">1</a></li>
                                    <li><a href="{{route('blog_detail')}}">2</a></li>
                                    <li><a href="{{route('blog_detail')}}">3</a></li>
                                    <li><a href="{{route('blog_detail')}}"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="blog_page_1r clearfix">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div><br>
                        <div class="product_1r1 clearfix">
                            <h3 class="mgt">Categories</h3>
                            <ul class="normal">
                                <li><i class="fa fa-circle col_2"></i> <a href="{{route('blog_detail')}}">Babies</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="{{route('blog_detail')}}">Child Care</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="{{route('blog_detail')}}">Bags</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="{{route('blog_detail')}}">Fluffy Animals</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="{{route('blog_detail')}}">Clothes</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="{{route('blog_detail')}}">Girls</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="{{route('blog_detail')}}">Kids</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="{{route('blog_detail')}}">Nurturing</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="{{route('blog_detail')}}">Outfits</a></li>
                            </ul>
                        </div><br>
                        {{-- <div class="product_1r1 clearfix">
                            <h3 class="mgt">Recent Posts</h3>
                            <div class="sold_1i clearfix">
                                <div class="col-sm-5 space_left">
                                    <img src="{{ asset('user/assets/img/16.jpg') }}" class="iw" alt="abc">
                                </div>
                                <div class="col-sm-7 space_all">
                                    <div class="prod_home_2m1 clearfix">
                                        <h6 class="normal mgt"><a href="{{route('blog_detail')}}">Jan 20, 2019</a></h6>
                                        <h5 class="normal"><a href="{{route('blog_detail')}}">Future Parents</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="sold_1i clearfix">
                                <div class="col-sm-5 space_left">
                                    <img src="{{ asset('user/assets/img/19.jpg') }}" class="iw" alt="abc">
                                </div>
                                <div class="col-sm-7 space_all">
                                    <div class="prod_home_2m1 clearfix">
                                        <h6 class="normal mgt"><a href="{{route('blog_detail')}}">Jan 20, 2019</a></h6>
                                        <h5 class="normal"><a href="{{route('blog_detail')}}">Only the Best.</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="sold_1i clearfix">
                                <div class="col-sm-5 space_left">
                                    <img src="{{ asset('user/assets/img/17.jpg') }}" class="iw" alt="abc">
                                </div>
                                <div class="col-sm-7 space_all">
                                    <div class="prod_home_2m1 clearfix">
                                        <h6 class="normal mgt"><a href="{{route('blog_detail')}}">Jan 20, 2019</a></h6>
                                        <h5 class="normal"><a href="{{route('blog_detail')}}">Future Parents</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="sold_1i clearfix">
                                <div class="col-sm-5 space_left">
                                    <img src="img/18.jpg" class="iw" alt="abc">
                                </div>
                                <div class="col-sm-7 space_all">
                                    <div class="prod_home_2m1 clearfix">
                                        <h6 class="normal mgt"><a href="{{route('blog_detail')}}">Jan 20, 2019</a></h6>
                                        <h5 class="normal"><a href="{{route('blog_detail')}}">Only the Best.</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="product_1r2 clearfix">
                            <h3 class="mgt">Archives</h3>
                            <ul class="normal">
                                <li><a href="{{route('blog_detail')}}"><i class="fa fa-chevron-right"></i> January</a></li>
                                <li><a href="{{route('blog_detail')}}"><i class="fa fa-chevron-right"></i> February</a></li>
                                <li><a href="{{route('blog_detail')}}"><i class="fa fa-chevron-right"></i> March</a></li>
                                <li><a href="{{route('blog_detail')}}"><i class="fa fa-chevron-right"></i> April</a></li>
                                <li><a href="{{route('blog_detail')}}"><i class="fa fa-chevron-right"></i> May</a></li>
                                <li><a href="{{route('blog_detail')}}"><i class="fa fa-chevron-right"></i> june</a></li>
                                <li><a href="{{route('blog_detail')}}"><i class="fa fa-chevron-right"></i> july</a></li>
                                <li><a href="{{route('blog_detail')}}"><i class="fa fa-chevron-right"></i> August</a></li>
                                <li><a href="{{route('blog_detail')}}"><i class="fa fa-chevron-right"></i> September</a></li>
                                <li><a href="{{route('blog_detail')}}"><i class="fa fa-chevron-right"></i> October</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            /*****Fixed Menu******/
            var secondaryNav = $('.cd-secondary-nav'),
                secondaryNavTopPosition = secondaryNav.offset().top;
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > secondaryNavTopPosition) {
                    secondaryNav.addClass('is-fixed');
                } else {
                    secondaryNav.removeClass('is-fixed');
                }
            });
        });
    </script>
@endsection
