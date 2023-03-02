@extends('users.home.index')
@section('head')
    <link href="{{ asset('user/assets/css/about.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section id="center" class="clearfix center_prod">
        <div class="container">
            <div class="row">
                <div class="center_prod_1 clearfix">
                    <div class="col-sm-12">
                        <h5 class="mgt">
                            <a href="{{ route('index') }}">Home</a>
                            |
                            <span class="col_2"> About Us</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="about_1 clearfix">
                    <div class="col-sm-4">
                        <div class="about_1l clearfix">
                            <img src="{{ asset('user/assets/img/52.jpg') }}" class="iw" alt="abc">
                            <h4>Creating children’s clothes inspires us in every aspect</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                Aenean massa. Cum sociis natoque dis Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque dis</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about_1m clearfix">
                            <img src="{{ asset('user/assets/img/53.jpg') }}" class="iw" alt="abc">
                            <p><i class="fa fa-check"></i> We make your life easier.</p>
                            <p><i class="fa fa-check"></i> Experience childcare.</p>
                            <p><i class="fa fa-check"></i> Daycare is great…</p>
                            <p><i class="fa fa-check"></i> We are childcare professionals.</p>
                            <p><i class="fa fa-check"></i> Babysitting with a loving heart.</p>
                            <p><i class="fa fa-check"></i> Your wishes just came true.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about_1r clearfix">
                            <h3 class="mgt">Working Hours</h3>
                            <p>Lorem ipsum dolor sit amet, elit consectetuer adipiscing aenean.</p>
                            <h5 class="normal">Monday <span class="pull-right">9AM - 6PM</span></h5>
                            <h5 class="normal">Tuesday <span class="pull-right">9AM - 6PM</span></h5>
                            <h5 class="normal">Wednesday <span class="pull-right">9AM - 6PM</span></h5>
                            <h5 class="normal">Thursday <span class="pull-right">9AM - 6PM</span></h5>
                            <h5 class="normal">Friday <span class="pull-right">9AM - 6PM</span></h5>
                            <h5 class="normal">Saturday <span class="pull-right">9AM - 5PM</span></h5>
                            <h4><a class="button" href="{{ route('contact') }}">Contact Us </a></h4>
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
    <section id="about_home">
        <div class="container">
            <div class="row">
                <div class="about_home_2 clearfix">
                    <div class="col-sm-5">
                        <div class="about_home_2l clearfix">
                            <img src="{{ asset('user/assets/img/54.jpg') }}" class="iw" alt="abc">
                        </div>
                    </div>
                    <div class="col-md-7 mb-3 py-3 px-0 p-md-5">
                        <div class="d-flex mb-3 px-3 px-md-0">
                            {{-- <div class="flex-shrink-0"> --}}
                                {{-- <img src=""
                                    data-src="https://dwj7p5r86o7zx.cloudfront.net/component_uploads/LuPQgXHBfIPHjYdxt8TXKLqjej8v5tVvLVjtpwGm.jpg"
                                    alt="Vineet Saraiwala, Founder &amp; CEO"
                                    class="rounded-circle comp2526-img-round lozad" data-loaded="true"> --}}
                            {{-- </div> --}}

                            <div class="ml-3 ml-md-4 text-dark">
                                <h3 class="mb-2 mb-md-3">Why we do what we do</h3>
                                <div style="font-weight: 500">Mango Mafia</div>
                            </div>
                        </div>

                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mM8nQwAAf8BMBdM7MUAAAAASUVORK5CYII="
                            data-src="https://dwj7p5r86o7zx.cloudfront.net/component_uploads/HlBoceiTxPFMjlQ6BXSxlAHSMdEIxmpaZ2hHuzu4.jpg"
                            alt="Why we do what we do" class="img-fluid mb-3 d-md-none w-100 lozad">

                        <p class="px-3 px-md-0 mb-md-4"></p>
                        <p>Did you recognize that 85% of humans with Disabilities do now not have get
                            admission to to full-time jobs? we've got a imaginative and prescient to create 1 million
                            opportunities for humans with Disabilities until 85% turns into 0%.</p>
                        <p>While talks about livelihood for Persons with Disabilities have exponentially increased, in
                            reality, job opportunities have decreased (Business Standard Analysis, 2022). We need to move
                            fast and move right now!</p>
                        <p></p>

                        {{-- <div class="px-3 px-md-0" style="font-size: 14px">
                            <a href="https://atypicaladvantage.in/ourstory" class="text-purple text-uppercase">OUR STORY</a>

                            <a href="https://atypicaladvantage.in/press" class="text-purple ml-3 text-uppercase">PRESS</a>
                        </div> --}}

                    </div>
                    {{-- <div class="col-sm-7">
                        <div class="about_home_2r clearfix">
                            <p class="mgt">Did you recognize that 85% of humans with Disabilities do now not have get
                                admission to to full-time jobs? we've got a imaginative and prescient to create 1 million
                                opportunities for humans with Disabilities until 85% turns into 0%.
                                while talks about livelihood for men and women with Disabilities have exponentially
                                accelerated, in reality, activity possibilities have reduced (business trendy evaluation,
                                2022). We need to transport fast and flow right now!</p>
                            <ul>
                                <li><i class="fa fa-check col_1"></i> Full-service electrical layout, design</li>
                                <li><i class="fa fa-check col_1"></i> Wiring and installation/upgrades</li>
                                <li><i class="fa fa-check col_1"></i> Emergency power solutions (generators)</li>
                                <li><i class="fa fa-check col_1"></i> Virtually any electrical needs you have – just ask!
                                </li>
                            </ul>
                            <h4><a class="button" href="#"> Know More</a></h4>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
