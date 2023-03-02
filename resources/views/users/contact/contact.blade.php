@extends('users.home.index')
@section('head')
    <link href="{{ asset('user/assets/css/contact.css') }}" rel="stylesheet">
    <style>
        .fontawesomesvg {
            width: 1em;
            height: 1em;
            color: blueviolet;
            margin-right: 5 px;
            float: left;
            vertical-align: -.125em;
        }
    </style>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> --}}
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
                            <span class="col_2">Contact Us</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="contact_1 clearfix">
                    <div class="col-sm-6">
                        <div class="contact_1l clearfix">
                            <h1 class="mgt">How to find Us?</h1>
                            <p>A professional babysitter referral service. Created by moms for moms. sollicitudin, lorem
                                quis bibendum dis.</p><br>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925916665!2d-80.29949920266738!3d25.782390733064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1530774403788"
                                width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact_1r text-center clearfix">
                            <h1 class="mgt col">Get in Touch!</h1>
                            <input class="form-control" placeholder="Your Name" type="text">
                            <input class="form-control" placeholder="Your Name" type="text">
                            <textarea class="form-control form_1" placeholder="Your Comment"></textarea>
                            <h4><a class="button" href="#">Submit</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact_us">
        <div class="container">
            <div class="row">
                <div class="contact_us_1 clearfix">
                    <div class="col-sm-3">
                        <div class="contact_us_1l clearfix">
                            <h3 class="mgt">Lavish Jain</h3><br>
                            <h5><a href="#"><i class="fa fa-phone col_2"></i>9549512341</a></h5>
                            <h5><a href="#"><i class="fa fa-envelope col_2"></i> lavishjain2002@gmail.com</a></h5>
                            <h5><a href="#"><i class="fa fa-user col_2"></i>Full Stack Developer</a></h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contact_us_1l clearfix">
                            <h3 class="mgt">Manashvee</h3><br>
                            <h5><a href="#"><i class="fa fa-phone col_2"></i> 8384953295</a></h5>
                            <h5><a href="#"><i class="fa fa-envelope col_2"></i> ryderg4ming@gmail.com</a></h5>
                            <h5><a href="#"><i class="fa fa-user col_2"></i>Full Stack Developer</a></h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contact_us_1l clearfix">
                            <h3 class="mgt">Ghu</h3><br>
                            <h5><a href="#"><i class="fa fa-phone col_2"></i> 7339917910</a></h5>
                            <h5><a href="#"><i class="fa fa-envelope col_2"></i> gungun@gmail.com</a></h5>

                            <h5><a href="#"><i class="fas fa-poop col_2"></i>
                                    <svg class='fontawesomesvg' xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M254.4 6.6c3.5-4.3 9-6.5 14.5-5.7C315.8 7.2 352 47.4 352 96c0 11.2-1.9 22-5.5 32H352c35.3 0 64 28.7 64 64c0 19.1-8.4 36.3-21.7 48H408c39.8 0 72 32.2 72 72c0 23.2-11 43.8-28 57c34.1 5.7 60 35.3 60 71c0 39.8-32.2 72-72 72H72c-39.8 0-72-32.2-72-72c0-35.7 25.9-65.3 60-71c-17-13.2-28-33.8-28-57c0-39.8 32.2-72 72-72h13.7C104.4 228.3 96 211.1 96 192c0-35.3 28.7-64 64-64h16.2c44.1-.1 79.8-35.9 79.8-80c0-9.2-1.5-17.9-4.3-26.1c-1.8-5.2-.8-11.1 2.8-15.4z" />
                                        </svg>Front-end Developer
                                </a></h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contact_us_1l clearfix">
                            <h3 class="mgt">Mann Sethi</h3><br>
                            <h5><a href="#"><i class="fa fa-phone col_2"></i> 7568333284</a></h5>
                            <h5><a href="#"><i class="fa fa-envelope col_2"></i> mann@gmail.com</a></h5>
                            <h5><a href="#"><i class="fa fa-coffee col_2"></i> Chotu ek cup chai</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="https://use.fontawesome.com/your-embed-code.js"></script>
@endsection
