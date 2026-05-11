@extends('layouts.guest')

@section('title', 'Contact Us')

@section('keywords', '')

@section('description', '')

@section('content')
<style>
    @media screen and (max-width: 768px){
    .content-front:before{
        display: none;
    }
}
</style>
    <div class="content full-height no-mob-hidden2" data-pagetitle="contact">
        <div class="content-inner">
            <div class="content-front">
                <div class="cf-inner">
                    <div class="contact-details-title fl-wrap">
                        <h2>Contact Details</h2>
                    </div>
                    <div class="contact-details fl-wrap">
                        @if (session('success'))
                            <p style="color:green; font-weight:bold; max-width:250px;">{{ session('success') }}</p>
                        @endif
                        <ul>
                            <li><span>01. Mail :</span><a href="mailto:info@manywears.com">info@manywears.com</a></li>
                            <li><span>02. Adress :</span>
                                <a href="https://maps.app.goo.gl/DKEhUXWe3qDSRthX6" target="_blank">Flat- 5A, 4th Floor, House 113, Road 17 ,<br/> Sector 14, Uttara 1230,
                                    Bangladesh</a></li>
                            <li><span>China:</span><a href="https://maps.app.goo.gl/KnzQsy5wWfjJmLmN9" target="_blank">609, diamond mansion, no. 1227 Jinkeqiao <br/> Avenue, Keqiao, Shaoxing, Zhejiang, <br/>China-312030</a></li>
                            <li><span>UK :</span><a href="https://maps.app.goo.gl/aipdGo2sskjYSpCh9" target="_blank">15 Waterside Cl, Birmingham B9 4QJ</a></li>
                            <li><span>03. Phone & Whatsapp :</span><a href="https://wa.me/+8801811009788">+8801811009788</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn fl-btn color-bg show_contact-form"><span>Say Hello</span></a>
                    <div class="aside-show_cf show_contact-form"><i class="fal fa-envelope"></i>
                        <img src="{{asset('images/qr.png')}}" alt="QR-Code" style="width: 100px;height: auto;position: inherit;bottom: -152px;right: -40px;"/>
                    </div>
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
                        <form  class="custom-form" action="{{route('contact.store')}}" method="post" name="contactform">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" id="name" placeholder="Your Name *" required/>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text"  name="email" id="email" placeholder="Email Address *" required/>
                                    </div>
                                </div>
                                <textarea name="message"  id="comments" cols="40" rows="3" placeholder="Your Message:" class="cnt-anim"></textarea>
                                <button class="btn fl-btn color-bg" type="submit"><span>Send Message</span> </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-container">
            <div id="map-single" class="map" data-latlog="[23.8694 , 90.39226]" data-popuptext="Flat- 5A, 4th Floor, House 113, Road 17 ,
Sector 14, Uttara 1230, Bangladesh"></div>
        </div>
        <div class="main_social">
            <span class="main-social-title">Find on:</span>
            <ul>
                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
@endsection
