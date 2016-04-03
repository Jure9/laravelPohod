@extends('layouts.default')

@section('body')
    id="con"
    @stop

    @section('content')
            <!-- Contact section start -->
    <div class="container">
        <section id="contact">

            <div class="container">

            <div class="row">

                <div class="col-md-12 headline">
                    <h2>Contact us</h2>

                </div>

                <div class="col-md-6">
                    <p>Drop us a line or give us a ring. We would love to hear from you.</p>


                    <ul class="icon-list">
                        <li><i class="fa fa-fw fa-map-marker dol"></i>Donec sed massa 13, 1000 Ljubljana, Slovenija</li>
                        <li><i class="fa fa-fw fa-phone dol"></i>+386 09 66 69 99</li>
                        <li><i class="fa fa-fw fa-envelope-o dol"></i><a
                                    href="mailto:hello@cursus.com">hello@cursus.com</a></li>
                        <li><i class="fa fa-fw fa-globe dol"></i><a href="http://www.urskapetric.com">http://www.cursus.com</a>
                        </li>
                    </ul>
                    <ul class="widget-social">

                        <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    </ul>

                </div>

                <div class="col-md-6">

                    <form id="contact-form" role="form">


                        <div class="form-group">
                            <label class="sr-only" for="c_name">Name</label>
                            <input type="text" id="c_name" class="form-control" name="c_name" placeholder="Name">
                        </div>


                        <div class="form-group">
                            <label class="sr-only" for="c_email">Email address</label>
                            <input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="c_message" name="c_message" rows="7"
                                      placeholder="Your message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-custom-1">
                            <i class="fa fa-bullhorn icon-before"></i> Send it
                        </button>

                    </form>

                </div>

            </div><!-- .row -->

            </div>

        </section>
    </div>
    <!-- Contact section end -->
@stop