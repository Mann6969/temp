@extends('users.home.index')
@section('head')
    <link href="{{ asset('user/assets/css/detail.css') }}" rel="stylesheet">
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
                            <a href="{{ route('product.index') }}">Product List </a>
                            |
                            {{-- <a href="#"> Clothes</a> --}}
                            {{-- | --}}
                            <span class="col_2">Product Detail</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="detail" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="detail_1 clearfix">
                    <div class="col-sm-6">
                        <div class="carousel slide article-slide" id="article-photo-carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner cont-slider">

                                <div class="item">
                                    <div class="mag">
                                        <div class="magnify"><img data-toggle="magnify"
                                                src="{{ asset('user/assets/img/34.jpg') }}" alt="">
                                            <div class="magnify-large"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="mag">
                                        <div class="magnify"><img data-toggle="magnify"
                                                src="{{ asset('user/assets/img/35.jpg') }}" alt="">
                                            <div class="magnify-large"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="mag">
                                        <div class="magnify"><img data-toggle="magnify"
                                                src="{{ asset('user/assets/img/36.jpg') }}" alt="">
                                            <div class="magnify-large"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item active">
                                    <div class="mag">
                                        <div class="magnify"><img data-toggle="magnify"
                                                src="{{ asset('user/assets/img/37.jpg') }}" alt="">
                                            <div class="magnify-large"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li class="" data-slide-to="0" data-target="#article-photo-carousel">
                                    <img alt="" src="{{ asset('user/assets/img/38.jpg') }}">
                                </li>
                                <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                                    <img alt="" src="{{ asset('user/assets/img/39.jpg') }}">
                                </li>
                                <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                                    <img alt="" src="{{ asset('user/assets/img/40.jpg') }}">
                                </li>
                                <li class="active" data-slide-to="3" data-target="#article-photo-carousel">
                                    <img alt="" src="{{ asset('user/assets/img/41.jpg') }}">
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="detail_1r clearfix">
                            <h2 class="mgt">Semper Porta</h2>
                            <span class="col_1 span_1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </span>
                            <h1 class="col_2">$68</h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit nean commodo ligula eget dolor.
                                Aenean massa. Cum sociis Theme natoque penatibus et magnis dis. Etiam ultricies nisi vel
                                augue.</p><br>
                            <h5>Quantity</h5>
                            <div class="input-group number-spinner">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" data-dir="dwn"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </span>
                                <input type="text" class="form-control text-center" value="1">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" data-dir="up"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </span>
                            </div>
                            <h4><a class="button mgt" href="#">Add to cart</a></h4>
                            <ul>
                                <li>SKU: <span class="normal">2235</span></li>
                                <li>Category: <a class="normal" href="#">Clothes</a></li>
                                <li>Tags: <a class="normal" href="#">Blue</a>, <a class="normal"
                                        href="#">Cotton</a></li>
                            </ul>
                            <h6><a class="col_2" href="#"><i class="fa fa-check"></i> ADD TO WISHLIST</a></h6>
                        </div>
                    </div>
                </div>
                <div class="detail_2 clearfix">
                    <div class="detail_2i clearfix">
                        <ul class="nav nav-tabs mgt">
                            <li class="active"><a data-toggle="tab" href="#home_description">Description</a></li>
                            <li class=""><a data-toggle="tab" href="#menu_information">Shipping</a></li>
                            <li class=""><a data-toggle="tab" href="#menu_review">Reviews (1)</a></li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div id="home_description" class="tab-pane fade clearfix active in">
                                <div class="click clearfix">
                                    <div class="click_inner clearfix">
                                        <h4 class="mgt">Lorem Ipsum</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
                                            odio.Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at
                                            nibh elementum imperdiet. Duis sagittis ipsum.Praesent mauris. Fusce nec tellus
                                            sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class
                                            aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                            himenaeos. Curabitursodales ligula in libero.Sed dignissim lacinia nunc.</p>
                                    </div>
                                    <div class="click_inner clearfix">
                                        <h4>Adipiscing Elit</h4>
                                        <ul class="normal">
                                            <li>Sed cursus ante dapibus diam Sed nisi. </li>
                                            <li>Nulla quis sem at nibh elementum imperdiet.</li>
                                            <li>Duis sagittis ipsum Praesent mauris.</li>
                                            <li>Fusce nec tellus sed augue semper porta.</li>
                                            <li>Mauris massa Vestibulum lacinia arcu eget nulla.</li>
                                        </ul>
                                    </div>
                                    <div class="click_inner clearfix">
                                        <h4>Integer Nec </h4>
                                        <ul class="normal">
                                            <li>Sed cursus ante dapibus diam Sed nisi. </li>
                                            <li>Nulla quis sem at nibh elementum imperdiet.</li>
                                            <li>Duis sagittis ipsum Praesent mauris.</li>
                                            <li>Fusce nec tellus sed augue semper porta.</li>
                                            <li>Mauris massa Vestibulum lacinia arcu eget nulla.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="menu_information" class="tab-pane fade clearfix">
                                <div class="click clearfix">
                                    <div class="click_inner_1  clearfix">
                                        <p class="mgt">Nam tempus turpis at metus scelerisque placerat nulla deumantos
                                            solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut
                                            risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras
                                            loremos.Donec pretium egestas sapien et mollis. Mauris tincidunt urna eu neque
                                            feugiat vulputate. Morbi ut tempor lacus, ac pellentesque nibh.</p>
                                        <h4>Returns Policy</h4>
                                        <p>You may return most new, unopened items within 30 days of delivery for a full
                                            refund. We'll also pay the return shipping costs if the return is a result of
                                            our error (you received an incorrect or defective item, etc.)</p>
                                        <p>You should expect to receive your refund within four weeks of giving your package
                                            to the return shipper, however, in many cases you will receive a refund more
                                            quickly. This time period includes the transit time for us to receive your
                                            return from the shipper (5 to 10 business days), the time it takes us to process
                                            your return once we receive it (3 to 5 business days), and the time it takes
                                            your bank to process our refund request (5 to 10 business days).</p>
                                        <p>If you need to return an item, simply login to your account, view the order using
                                            the 'Complete Orders' link under the My Account menu and click the Return
                                            Item(s) button. We'll notify you via e-mail of your refund once we've received
                                            and processed the returned item</p>
                                        <h4>Shipping</h4>
                                        <p>We can ship to virtually any address in the world. Note that there are
                                            restrictions on some products, and some products cannot be shipped to
                                            international destinations.</p>
                                        <p>When you place an order, we will estimate shipping and delivery dates for you
                                            based on the availability of your items and the shipping options you choose.
                                            Depending on the shipping provider you choose, shipping date estimates may
                                            appear on the shipping quotes page.</p>
                                        <p>Please also note that the shipping rates for many items we sell are weight-based.
                                            The weight of any such item can be found on its detail page. To reflect the
                                            policies of the shipping companies we use, all weights will be rounded up to the
                                            next full pound.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="menu_review" class="tab-pane fade clearfix">
                                <div class="click clearfix">
                                    <div class="click_inner_2 clearfix">
                                        <div class="click_inner_2i clearfix">
                                            <h4 class="mgt">1 review for Semper Porta</h4><br>
                                            <img src="{{ asset('user/assets/img/42.jpg') }}" alt="abc">
                                            <span class="col_1 span_1">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </span>
                                            <h5>Semper Porta <span>– July 7, 2019</span></h5>
                                            <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                                lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh
                                                id elit. Duis sed odio sit amet nibh vulputate</p>
                                        </div><br>
                                        <div class="click_inner_2i1 clearfix">
                                            <h5 class="mgt">Add a review</h5>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                            <h5>Your rating</h5>
                                            <span class="col_1 span_1">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <h5>Your review *</h5>
                                            <textarea class="form-control form_1"></textarea>
                                            <h5>Name *</h5>
                                            <input class="form-control" type="text">
                                            <h5>Email *</h5>
                                            <input class="form-control" type="text">
                                            <p>
                                                <input type="checkbox">
                                                <span>Save my name, email, and website in this browser for the next time I
                                                    comment.</span>
                                            </p>
                                            <h4><a class="button" href="#">Submit</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail_3 clearfix">
                    <div class="col-sm-12">
                        <h2 class="mgt">Related products</h2>
                    </div>
                </div>
                <div class="prod_home_2 clearfix">
                    <div class="col-sm-3">
                        <div class="prod_home_2m clearfix">
                            <div class="prod_home_2m1 clearfix text-center">
                                <a href="#"><img src="{{ asset('user/assets/img/7.jpg') }}" class="iw"
                                        alt="abc"></a>
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
                                <a href="#"><img src="{{ asset('user/assets/img/8.jpg') }}" class="iw"
                                        alt="abc"></a>
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
                                <a href="#"><img src="{{ asset('user/assets/img/9.jpg') }}" class="iw"
                                        alt="abc"></a>
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
                                <a href="#"><img src="{{ asset('user/assets/img/10.jpg') }}" class="iw"
                                        alt="abc"></a>
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
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).on('click', '.number-spinner button', function() {
            var btn = $(this),
                oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                newVal = 0;

            if (btn.attr('data-dir') == 'up') {
                newVal = parseInt(oldValue) + 1;
            } else {
                if (oldValue > 1) {
                    newVal = parseInt(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            btn.closest('.number-spinner').find('input').val(newVal);
        });
    </script>

    <script type="text/javascript">
        /*
    Credits:
    https://github.com/marcaube/bootstrap-magnify
    */


        ! function($) {

            "use strict"; // jshint ;_;


            /* MAGNIFY PUBLIC CLASS DEFINITION
             * =============================== */

            var Magnify = function(element, options) {
                this.init('magnify', element, options)
            }

            Magnify.prototype = {

                constructor: Magnify

                    ,
                init: function(type, element, options) {
                        var event = 'mousemove',
                            eventOut = 'mouseleave';

                        this.type = type
                        this.$element = $(element)
                        this.options = this.getOptions(options)
                        this.nativeWidth = 0
                        this.nativeHeight = 0

                        this.$element.wrap('<div class="magnify" \>');
                        this.$element.parent('.magnify').append('<div class="magnify-large" \>');
                        this.$element.siblings(".magnify-large").css("background", "url('" + this.$element.attr("src") +
                            "') no-repeat");

                        this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
                        this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
                    }

                    ,
                getOptions: function(options) {
                        options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

                        if (options.delay && typeof options.delay == 'number') {
                            options.delay = {
                                show: options.delay,
                                hide: options.delay
                            }
                        }

                        return options
                    }

                    ,
                check: function(e) {
                    var container = $(e.currentTarget);
                    var self = container.children('img');
                    var mag = container.children(".magnify-large");

                    // Get the native dimensions of the image
                    if (!this.nativeWidth && !this.nativeHeight) {
                        var image = new Image();
                        image.src = self.attr("src");

                        this.nativeWidth = image.width;
                        this.nativeHeight = image.height;

                    } else {

                        var magnifyOffset = container.offset();
                        var mx = e.pageX - magnifyOffset.left;
                        var my = e.pageY - magnifyOffset.top;

                        if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
                            mag.fadeIn(100);
                        } else {
                            mag.fadeOut(100);
                        }

                        if (mag.is(":visible")) {
                            var rx = Math.round(mx / container.width() * this.nativeWidth - mag.width() / 2) * -1;
                            var ry = Math.round(my / container.height() * this.nativeHeight - mag.height() / 2) * -
                            1;
                            var bgp = rx + "px " + ry + "px";

                            var px = mx - mag.width() / 2;
                            var py = my - mag.height() / 2;

                            mag.css({
                                left: px,
                                top: py,
                                backgroundPosition: bgp
                            });
                        }
                    }

                }
            }


            /* MAGNIFY PLUGIN DEFINITION
             * ========================= */

            $.fn.magnify = function(option) {
                return this.each(function() {
                    var $this = $(this),
                        data = $this.data('magnify'),
                        options = typeof option == 'object' && option
                    if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
                    if (typeof option == 'string') data[option]()
                })
            }

            $.fn.magnify.Constructor = Magnify

            $.fn.magnify.defaults = {
                delay: 0
            }


            /* MAGNIFY DATA-API
             * ================ */

            $(window).on('load', function() {
                $('[data-toggle="magnify"]').each(function() {
                    var $mag = $(this);
                    $mag.magnify()
                })
            })

        }(window.jQuery);
    </script>
@endsection
