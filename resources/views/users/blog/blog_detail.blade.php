@extends('users.home.index')
@section('head')
    <link href="{{ asset('user/assets/css/blog_detail.css') }}" rel="stylesheet">
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
                            <span class="col_2">Blog Detail</span>
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
                            <a href="#"><img src="{{ asset('user/assets/img/43.jpg') }}" class="iw" alt="abc"></a>
                            <h2>Future Parents</h2>
                            <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                                nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio
                                tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class
                                aptent taciti sociosqu ad litora torquent per conubianostra, per inceptos himenaeos. Mauris
                                in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque
                                elit. Sed ut.</p><br>
                            <blockquote>
                                <p class="mgt">“A warm and loving environment for your child.”</p>
                            </blockquote>
                            <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                                nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio
                                tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class
                                aptent taciti sociosqu ad litora torquent per conubianostra, per inceptos himenaeos. Mauris
                                in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque
                                elit. Sed ut.</p>
                            <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora
                                torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu
                                felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin
                                condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas
                                quam, ut aliquam massa nisl quis neque. Suspendisse in orci.</p>

                        </div><br>
                        <div class="blog_page_12 mgt  clearfix">
                            <div class="col-sm-4 space_left">
                                <div class="blog_page_12i clearfix">
                                    <img src="{{ asset('user/assets/img/7.jpg') }}" class="iw" alt="abc">
                                </div>
                            </div>
                            <div class="col-sm-4 space_left">
                                <div class="blog_page_12i clearfix">
                                    <img src="{{ asset('user/assets/img/8.jpg') }}" class="iw" alt="abc">
                                </div>
                            </div>
                            <div class="col-sm-4 space_left">
                                <div class="blog_page_12i clearfix">
                                    <img src="{{ asset('user/assets/img/9.jpg') }}" class="iw" alt="abc">
                                </div>
                            </div>
                        </div>
                        <div class="blog_page_12  clearfix">
                            <div class="col-sm-4 space_left">
                                <div class="blog_page_12i clearfix">
                                    <img src="{{ asset('user/assets/img/10.jpg') }}" class="iw" alt="abc">
                                </div>
                            </div>
                            <div class="col-sm-4 space_left">
                                <div class="blog_page_12i clearfix">
                                    <img src="{{ asset('user/assets/img/11.jpg') }}" class="iw" alt="abc">
                                </div>
                            </div>
                            <div class="col-sm-4 space_left">
                                <div class="blog_page_12i clearfix">
                                    <img src="{{ asset('user/assets/img/12.jpg') }}" class="iw" alt="abc">
                                </div>
                            </div>
                        </div>
                        <div class="blog_page_1l clearfix">
                            <p class="text-center">“Where quality childcare matters”</p>
                            <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
                                nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio
                                tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class
                                aptent taciti sociosqu ad litora torquent per conubianostra, per inceptos himenaeos. Mauris
                                in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque
                                elit. Sed ut imperdiet nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                eu, consequat vitae, eleifend ac, enim.</p>
                            <h5 class="normal"><a href="#"><span class="span_1">Jan 20, 2019</span></a> <span
                                    class="span_2">By <a href="#">Lacinia Arcu</a></span> <span class="span_3"><i
                                        class="fa fa-comment-o"></i> <a href="#">3</a></span> <span class="span_3"><i
                                        class="fa fa-heart-o"></i> <a href="#">5</a></span> <i
                                    class="fa fa-shopping-bag"></i> <a href="#">Kids</a> , <a
                                    href="#">Children</a></h5>
                        </div>
                        <div class="blog_page_1l3 clearfix">
                            <a href="#"><img src="{{ asset('user/assets/img/46.jpg') }}" class="img-circle" alt="abc"></a>
                            <h4>Previous Post</h4>
                        </div><br>
                        <div class="blog_page_1l3 border_none mgt clearfix">
                            <a href="#"><img src="{{ asset('user/assets/img/47.jpg') }}" alt="abc"></a>
                            <h4 class="mgt"> Lacinia Arcu</h4>
                            <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                                auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                            <ul class="social-network social-circle">
                                <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#" class="icoFacebook" title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#" class="icoGoogle" title="Google +"><i
                                            class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="icoLinkedin" title="Linkedin"><i
                                            class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="blog_detail_3 clearfix">
                            <div class="blog_page_1lin clearfix">
                                <h3>Comments</h3>
                            </div>
                            <div class="blog_page_1li clearfix">
                                <a href="#"><img src="{{ asset('user/assets/img/48.jpg') }}" alt="abc"></a>
                                <h4 class="bold mgt">Lacinia Arcu <span class="transform normal col_3">Last Week</span>
                                </h4>
                                <p> Fusce nec tellus sed augue semper porta.</p>
                                <h6><a href="#">Reply</a></h6>
                            </div>
                            <div class="blog_page_1li mgl clearfix">
                                <a href="#"><img src="{{ asset('user/assets/img/49.jpg') }}" alt="abc"></a>
                                <h4 class="bold mgt">Lacinia Arcu <span class="transform normal col_3">Last Week</span>
                                </h4>
                                <p> Fusce nec tellus sed augue semper porta.</p>
                                <h6><a href="#">Reply</a></h6>
                            </div>
                            <div class="blog_page_1li clearfix">
                                <a href="#"><img src="img/51.jpg" alt="abc"></a>
                                <h4 class="bold mgt">Lacinia Arcu <span class="transform normal col_3">Last Week</span>
                                </h4>
                                <p> Fusce nec tellus sed augue semper porta.</p>
                                <h6><a href="#">Reply</a></h6>
                            </div>
                            <div class="blog_page_1li mgl clearfix">
                                <a href="#"><img src="{{ asset('user/assets/img/50.jpg') }}" alt="abc"></a>
                                <h4 class="bold mgt">Lacinia Arcu <span class="transform normal col_3">Last Week</span>
                                </h4>
                                <p> Fusce nec tellus sed augue semper porta.</p>
                                <h6><a href="#">Reply</a></h6>
                            </div>
                        </div>
                        <div class="blog_page_1l4 clearfix">
                            <div class="blog_page_1l4ii clearfix">
                                <h3 class="mgt col">Post a Comment</h3>
                                <textarea class="form-control form_1" placeholder="Your Comment"></textarea>
                            </div>
                            <div class="blog_page_1l4i clearfix">
                                <div class="col-sm-4 space_left">
                                    <div class="blog_page_1l4i1 clearfix">
                                        <input class="form-control" placeholder="Your Name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4 space_all">
                                    <div class="blog_page_1l4i1 clearfix">
                                        <input class="form-control" placeholder="Your Email" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4 space_right">
                                    <div class="blog_page_1l4i1 clearfix">
                                        <input class="form-control" placeholder="Website" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="blog_page_1l4ii clearfix">
                                <p>
                                    <input type="checkbox">
                                    <span>Save my name, email, and website in this browser for the next time I
                                        comment.</span>
                                </p>
                                <h4><a class="button" href="#">Submit</a></h4>
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
                                <li><i class="fa fa-circle col_2"></i> <a href="#">Babies</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="#">Child Care</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="#">Bags</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="#">Fluffy Animals</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="#">Clothes</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="#">Girls</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="#">Kids</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="#">Nurturing</a></li>
                                <li><i class="fa fa-circle col_2"></i> <a href="#">Outfits</a></li>
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
                                        <h6 class="normal mgt"><a href="#">Jan 20, 2019</a></h6>
                                        <h5 class="normal"><a href="#">Future Parents</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="sold_1i clearfix">
                                <div class="col-sm-5 space_left">
                                    <img src="{{ asset('user/assets/img/19.jpg') }}" class="iw" alt="abc">
                                </div>
                                <div class="col-sm-7 space_all">
                                    <div class="prod_home_2m1 clearfix">
                                        <h6 class="normal mgt"><a href="#">Jan 20, 2019</a></h6>
                                        <h5 class="normal"><a href="#">Only the Best.</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="sold_1i clearfix">
                                <div class="col-sm-5 space_left">
                                    <img src="{{ asset('user/assets/img/17.jpg') }}" class="iw" alt="abc">
                                </div>
                                <div class="col-sm-7 space_all">
                                    <div class="prod_home_2m1 clearfix">
                                        <h6 class="normal mgt"><a href="#">Jan 20, 2019</a></h6>
                                        <h5 class="normal"><a href="#">Future Parents</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="sold_1i clearfix">
                                <div class="col-sm-5 space_left">
                                    <img src="{{ asset('user/assets/img/18.jpg') }}" class="iw" alt="abc">
                                </div>
                                <div class="col-sm-7 space_all">
                                    <div class="prod_home_2m1 clearfix">
                                        <h6 class="normal mgt"><a href="#">Jan 20, 2019</a></h6>
                                        <h5 class="normal"><a href="#">Only the Best.</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="product_1r2 clearfix">
                            <h3 class="mgt">Archives</h3>
                            <ul class="normal">
                                <li><a href="#"><i class="fa fa-chevron-right"></i> January</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i> February</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i> March</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i> April</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i> May</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i> june</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i> july</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i> August</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i> September</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i> October</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
