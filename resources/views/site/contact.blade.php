@extends('layouts.site')

@section('contact')

<section class="main">
    <h2 class="f36 text-center contactPageTitle mt-5 fBold" data-i18n="contactPageMailTitle">Have questions or need assistance? <br> Contact us today and let our team help you find the perfect Opportunities!</h2>

    <div class="contactForm flexCenter">

        <form action="{{ route('message') }}" method="POST" class="toRtl">
            @csrf
            @method('POST')
            <h2 class="f36 primaryColor fBold tright" data-i18n="contactUsNow">Contact Us Now</h2>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group tright toRtl">
                        <label for="name" data-i18n="name">Full Name</label>
                        <input type="text" name="name" data-i18n-placeholder="name" id="name" class="form-control" placeholder="Full Name ..." required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group tright toRtl">
                        <label for="email" data-i18n="email">Email Address</label>
                        <input type="email" name="email" data-i18n-placeholder="email" id="email" class="form-control" placeholder="Email Address ..." required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group tright toRtl">
                        <label for="subject" data-i18n="subject">Subject</label>
                        <input type="text" name="subject" data-i18n-placeholder="subject" id="subject" class="form-control" placeholder="Subject ..." required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group tright toRtl">
                        <label for="phone" data-i18n="phone">Phone</label>
                        <input type="text" name="phone" data-i18n-placeholder="phone" id="phone" class="form-control" placeholder="Phone ..." required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="form-group tright toRtl">
                        <label for="message" data-i18n="message">Message</label>
                        <textarea name="message" data-i18n-placeholder="message" id="message" class="form-control" placeholder="Message ..." required></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="makanBtn"  data-i18n="submit">Submit</button>
        </form>
    </div>
</section>

@endsection
