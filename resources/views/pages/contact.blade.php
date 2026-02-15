@extends('layouts.guest')

@section('title', 'Contact Us')

@section('keywords', '')

@section('description', '')

@section('content')
    <div class="content full-height no-mob-hidden2">
        <div class="content-inner">
            <div class="content-front">
                <div class="cf-inner">
                    <div class="contact-details-title fl-wrap">
                        <h2>Contact Detais</h2>
                    </div>
                    <div class="contact-details fl-wrap">
                        <ul>
                            <li><span>01. Mail :</span><a href="#" target="_blank">sales@mwsbd.net</a></li>
                            <li><span>02. Adress :</span><a href="#" target="_blank">Flat- 5A, 4th Floor, House 113, Road 17 ,<br/> Sector 14, Uttara 1230,
                                    Bangladesh</a></li>
                            <li><span>03. Phone :</span><a href="#">+8801811009788</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn fl-btn color-bg show_contact-form"><span>Say Hello</span></a>
                    <div class="aside-show_cf show_contact-form"><i class="fal fa-envelope"></i></div>
                </div>
            </div>
            <div class="content-back">
                <div class="hidden-contact_form-wrap_inner">
                    <div class="close-contact_form cnt-anim"><i class="fal fa-times"></i></div>
                    <div class="contact-details-title fl-wrap">
                        <h2>Get in Touch</h2>
                    </div>
                    <div id="contact-form" class="fl-wrap">
                        <div id="message"></div>
                        <form  class="custom-form" action="http://zonar.kwst.net/site/php/contact.php" name="contactform" id="contactform">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text"  name="email" id="email" placeholder="Email Address *" value=""/>
                                    </div>
                                </div>
                                <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:" class="cnt-anim"></textarea>
                                <button class="btn fl-btn color-bg" id="submit"><span>Send Message</span> </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-container">
            <div id="map-single" class="map" data-latlog="[40.714 , -74.005]" data-popuptext="My Location in New York ."></div>
        </div>
        <div class="main_social">
            <span class="main-social-title">Find on:</span>
            <ul>
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
            </ul>
        </div>
    </div>
@endsection
