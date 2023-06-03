@extends('landing.layouts.app')


@section('content')



<section class="header bg-white" id="header">
    <div class="row align-items-center">
        <div class="col-sm-6 animation-element bounce-up header-content-left">
            <h3 class="text-dark mb-3">Explore with us</h3>
            <p class="yellow text-36 font-weight-bold">Make Everything
                <span class="light">Digitally</span> Possible With <span class="light">Metroverse</span>
            </p>
            <p class="secondary-light text-16 mb-3">Whatever challenges you face, Metroverse can be a trusted software
                development partner
                for your business in the digital world</p>
            <a target="_blank"
                href="https://api.whatsapp.com/send?phone=6285772868402&text=Hallo%2C%20saya%20ingin%20kerja%20sama%20dengan%20Metroverse%20mengenai%20project%20yang%20ingin%20saya%20buat"
                class="btn btn-large bg-secondary-light text-20 pl-3 pr-3">Let's Talk</a>
        </div>
        <div class="col-sm-6 text-center animation-element bounce-up header-content-right bounce-up">
            <img src="{{asset('landing/assets/img/banner-1.png')}}" class="img-fluid" alt="Responsive image banner-img">
        </div>

    </div>
</section>

<section class="whatismetroverse bg-white" id="whatismetroverse">
    <div class="metroverse-content my-50" id="metroverse-content">
        <div class="row m-remove text-left justify-content-between align-items-center animation-element bounce-up">
            <div class="col-sm-7 px-10 py-5 whatismetroverse-content-left">
                <p class="text-white font-weight-bold text-36">We are the right partner to</p>
                <p class="text-white text-16">we are the right partner for you if you need us to</p>
                <ul class="list-group whatismetroverse-partner-list mt-5">
                    <li class="list-group-item text-white">Optimize Digital Business Process</li>
                    <li class="list-group-item text-white">Manage and Maintain your IT/Application Support for you
                        bussiness</li>
                    <li class="list-group-item text-white">Develop Web and Mobile App</li>
                    <li class="list-group-item text-white">UI/UX Professional</li>
                </ul>
                <a target="_blank"
                    href="https://api.whatsapp.com/send?phone=6285772868402&text=Hallo%2C%20saya%20ingin%20kerja%20sama%20dengan%20Metroverse%20mengenai%20project%20yang%20ingin%20saya%20buat"
                    class="btn btn-large bg-transparent border-white text-white text-20 mt-4">Let's
                    Talk</a>
            </div>
            <div class="col-sm p-remove">
                <img src="{{asset('landing/assets/asset-2.png')}}" class="rounded float-right banner-metroverse"
                    alt="banner-metroverse">
            </div>
        </div>
    </div>
</section>

<section class="section about-me bg-white" id="about-me">
    <div class="row m-remove px-10 py-10 align-items-center bg-white justify-content-between">
        <div class="col-sm-6">
            <div class="card card-for-you animation-element bounce-up">
                <div class="card-body">
                    <img src="{{asset('landing/assets/img/about.jpg')}}" width="100%" class="rounded float-right"
                        alt="banner-metroverse">
                </div>
            </div>
        </div>
        <div class="col-sm-5 text-left bounce-up animation-element about-content-text">
            <p class="font-weight-bold text-36">About <span class="yellow">Metroverse</span></p>
            <p class="text-muted text-16">Metroverse is one of the best compliance software houses in Indonesia.
                Metroverse
                is also an IT consulting company that provides software development services, website maintenance,
                mobile applications and desktop applications, as well as IT developer outsourcing. Starting in 2019
                with skilled IT kids with critical and innovative thinking, we formed a software house with the aim
                of participating in advancing the digital world, especially in the business field, because in our
                opinion, business and digital develop simultaneously and cannot be separated, now Metroverse is
                still working on various digital projects for Indonesian companies.</p>
        </div>
    </div>

    <!-- <div class="row m-remove">
            <div class="col-sm-12 text-center">
                <img src="{{asset('landing/assets/img/experiences.png')}}" class="img-fluid" alt="Responsive image">
            </div>
        </div> -->
</section>

<section class="out-services bg-white py-10" id="our-service">
    <div class="row m-remove justify-content-center animation-element">
        <div class="col-sm-6 text-center">
            <p class="text-dark font-weight-bold text-36 ff-anton">Our Services</p>
            <small class="text-dark text-16">Focus more on your business. Let us handle your IT concerns.</small>
        </div>
    </div>
    <div class="row m-remove justify-content-around pt-80">
        <div class="col-sm-5 text-left card card-body mb-5 box-shadow card-service animation-element bounce-up">
            <div class="card-service-icon">
                <img src="{{asset('landing/assets/img/mobile-app.png')}}" class="rounded" alt="ideas">
            </div>
            <h3 class="yellow font-weight-bold mt-3">Mobile Apps</h3>
            <p class="text-dark">Build your own well-designed and optimized mobile application. Both for internal
                and mass use, to reach out to grow your business even further.
            </p>
        </div>
        <div class="col-sm-5 text-left card card-body mb-5 box-shadow card-service animation-element bounce-up">
            <div class="card-service-icon">
                <img src="{{asset('landing/assets/img/web-app.png')}}" class="rounded" alt="ideas">
            </div>
            <h3 class="yellow font-weight-bold mt-3">Web Apps</h3>
            <p class="text-dark">Build attractive and optimized websites. Both for internal and mass use, to reach
                further grow your business.
            </p>
        </div>
        <div class="col-sm-5 text-left card card-body mb-5 box-shadow card-service animation-element bounce-up">
            <div class="card-service-icon">
                <img src="{{asset('landing/assets/img/bussiness-app.png')}}" class="rounded" alt="ideas">
            </div>
            <h3 class="yellow font-weight-bold mt-3">Business Apps</h3>
            <p class="text-dark">build a system to support your business needs to make it easier for you to manage
                your business.
            </p>
        </div>
        <div class="col-sm-5 text-left card card-body mb-5 box-shadow card-service animation-element bounce-up">
            <div class="card-service-icon">
                <img src="{{asset('landing/assets/img/support-service.png')}}" class="rounded" alt="ideas">
            </div>
            <h3 class="yellow font-weight-bold mt-3">Support Service</h3>
            <p class="text-dark">If you also need service for your business clients, we can help create a service
                system for you to receive input or complaints from your clients
            </p>
        </div>
    </div>
</section>

<section class="development-prosess py-10" id="development-prosess">
    <div class="row m-remove justify-content-center">
        <div class="col-sm-6 text-center animation-element bounce-up">
            <h5 class="text-white font-weight-bold text-36">Development Process
            </h5>
            <small class="text-white text-16">All processes involve clients and related teams who are reliable in
                their
                respective fields</small>
        </div>

    </div>
    <div class="row m-remove justify-content-center pt-5">
        <div class="col-sm-3 text-center animation-element bounce-up">
            <div class="card-prosess">
                <img src="{{asset('landing/assets/img/idea-icon.png')}}" class="rounded" alt="ideas">
            </div>
            <h5 class="yellow font-weight-bold mt-3">Discover Ideas</h5>
            <p class="text-white">Ideate & brainstorm with the best software consultants to kick start your journey.
            </p>
        </div>
        <div class="col-sm-3 text-center animation-element bounce-up">
            <div class="card-prosess">
                <img src="{{asset('landing/assets/img/design-icon.png')}}" class="rounded" alt="ideas">
            </div>
            <h5 class="yellow font-weight-bold mt-3">Design System</h5>
            <p class="text-white">Simplifying UI and UX to curate a novel, user friendly product experience.
            </p>
        </div>
        <div class="col-sm-3 text-center animation-element bounce-up">
            <div class="card-prosess">
                <img src="{{asset('landing/assets/img/develop-icon.png')}}" class="rounded" alt="ideas">
            </div>
            <h5 class="yellow font-weight-bold mt-3">Develop</h5>
            <p class="text-white">Curated Development Framework with advanced Quality Assurance.
            </p>
        </div>
        <div class="col-sm-3 text-center animation-element bounce-up">
            <div class="card-prosess">
                <img src="{{asset('landing/assets/img/deliver-icon.png')}}" class="rounded" alt="ideas">
            </div>
            <h5 class="yellow font-weight-bold mt-3">Deliver</h5>
            <p class="text-white">Automated DevOps with CI CD Pipelines to hit the market with On Time Delivery.
            </p>
        </div>
    </div>
</section>


<section class="foryou" id="foryou">

    <div class="row m-remove px-10 py-10 align-items-center bg-white justify-content-between">
        <div class="col-sm-4">
            <div class="card card-for-you animation-element bounce-up">
                <div class="card-body">
                    <img src="{{asset('landing/assets/img/img-2.png')}}" width="100%" class="rounded float-right"
                        alt="banner-metroverse">
                </div>
            </div>
        </div>
        <div class="col-sm-7 animation-element bounce-up foryou-content-text">
            <p class="text-dark foryou-content-text-title font-weight-bold text-36">There is a lot of <span
                    class="yellow">feedback</span>
                that you
                will
                <span class="yellow">get
                    in the Metroverse</span> service
                namely
            </p>
            <div class="list-group mt-3">
                <div class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                        <h3 class="mb-1 fw-bold text-dark text-20 font-weight-bold light">Content Optimized</h3>
                    </div>
                    <p class="mb-1 text-dark">Multi-platform layout so that it can be accessed on a
                        mobile
                        phone or tablet, making it easier and more comfortable for visitors to access your
                        website.</p>
                </div>
                <div class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                        <h3 class="mb-1 fw-bold text-dark text-20 font-weight-bold light">User Friendly</h3>
                    </div>
                    <p class="mb-1 text-dark">Prioritizing user convenience, so that the website we
                        create is
                        easy to understand and digest its content so that it can attract your business
                        visitors.</p>
                </div>
                <div class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                        <h3 class="mb-1 text-dark text-20 font-weight-bold light">Interactive View</h3>
                    </div>
                    <p class="mb-1 text-dark ">The arrangement of interesting and clear content makes
                        your
                        business visitors better understand what you want to convey.</p>
                </div>

            </div>

        </div>
    </div>


</section>


<section class="section ourexperience bg-white" id="ourexperience">
    <div class="row m-remove animation-element bounce-up">
        <div class="col-sm-12 text-center">
            <h1 class="font-weight-bold ff-anton text-36">Our Experiences</h1>

        </div>
    </div>

    <div class="row m-remove animation-element bounce-up">
        <div class="col-sm-12 text-center">
            <img src="{{asset('landing/assets/img/experiences.png')}}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</section>

<section class="contact-me py-10" id="contact-me">
    <div class="row m-remove">
        <div class="col-sm-12">
            <div class="card r-10 card-contact p-5 animation-element bounce-up">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-sm">
                            <h6 class="light font-weight-bold ff-poppins">CONTACT US</h6>
                            <h2 class="text-dark ff-poppins">you need us urgently?</h2>
                            <p class="mt-3 mb-3 ff-poppins">Come tell us what you need! Fill out this form and our
                                solution
                                team
                                will response to
                                your email by maximum of 2×24 workday. Please be patient and wait for us.

                            </p>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.91235142941096!2d106.73553263534305!3d-6.184570689354759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f76dd848d7a9%3A0x525d684aed1f9b1d!2sKec.%20Kembangan%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1685285982472!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-sm">
                            {!! NoCaptcha::renderJs() !!}
                            <form method="POST" action="{{route('send.email')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control"
                                            id="name" placeholder="Enter Your Name">
                                        @error('name')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control"
                                            id="email" placeholder="Enter Your Email Address">
                                        @error('email')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control"
                                            id="phone" placeholder="Enter Your Phone Number">
                                        @error('phone')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="company">Company</label>
                                        <input type="text" name="company" value="{{old('company')}}"
                                            class="form-control" id="company" placeholder="Enter Your Company Name">
                                        @error('company')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" name="message" id="message"
                                        rows="7">{{old('name')}}</textarea>
                                    @error('message')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    {!! NoCaptcha::display() !!}
                                    @error('g-recaptcha-response')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                                <button type="submit" class="btn mt-3 r-5 text-14 px-5 py-2 bg-yellow">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer bg-light-me" id="footer">
    <div class="row m-remove py-2 justify-content-around">
        <div class="col-sm footer-feat justify-content-around d-flex text-left contact-us-Feedback">
            <ul class="list-group border-none">
                <li
                    class="list-group-item list-group-item-footer-title bg-transparent border-none font-weight-bold text-white text-24">
                    Feedback
                    for you</li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">
                    Content
                    optimized</li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">
                    Interactive view</li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">
                    User
                    Friendly</li>
            </ul>
        </div>
        <div class="col-sm footer-feat justify-content-around d-flex text-left contact-us-footer">
            <ul class="list-group border-none">
                <li
                    class="list-group-item list-group-item-footer-title bg-transparent border-none font-weight-bold text-white text-24">
                    Contact
                    Us</li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">Kec.
                    Kembangan Kota Jakarta
                    Barat Daerah Khusus Ibukota Jakarta</li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">
                    softcodeindonesia@gmail.com</li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">
                    088296562104</li>
            </ul>
        </div>
        <div class="col-sm footer-feat justify-content-around d-flex text-left explore-footer our-service-footer">
            <ul class="list-group border-none">
                <li
                    class="list-group-item list-group-item-footer-title bg-transparent border-none font-weight-bold text-white text-24">
                    Our Services
                </li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">Mobile
                    App</li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">Wen App
                </li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">
                    Bussiness App</li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">Support
                    Service</li>
            </ul>
        </div>
        <div class="col-sm footer-feat justify-content-around d-flex text-left explore-footer">
            <ul class="list-group border-none">
                <li
                    class="list-group-item list-group-item-footer-title bg-transparent border-none font-weight-bold text-white text-24">
                    Explore
                </li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">Home
                </li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">About
                    Me</li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">Service
                </li>
                <li class="list-group-item list-group-item-footer bg-transparent border-none text-white text-14">Contact
                    Me</li>
            </ul>
        </div>
    </div>
    <div class="row m-remove bg-secondary-light justify-content-between align-items-center py-2">
        <div class="col-sm-3 footer-left-logo">
            <img src="{{asset('landing/assets/logo/logo-1.png')}}" class="img-fluid logo-footer" width="50%" alt="logo">
        </div>
        <div class="col-sm-6 footer-right-text text-right">
            <ul class="social-list border-none">

                <li class="social-list text-white"><a href="https://www.facebook.com/faizal.fernandy.7"
                        class="text-white"><i class="fa fa-facebook"></i>
                </li></a>
                <li class="social-list text-white"><a href="https://www.instagram.com/faizal_fernandy/?next=%2F"
                        class="text-white"><i class="fa fa-instagram"></i></a>
                </li>
                <li class="social-list text-white">
                    <a href="https://www.linkedin.com/in/faizal-fernandi-52a826180/" class="text-white"><i
                            class="fa fa-linkedin"></i></a>

                </li>
                <li class="social-list bg-transparent border-none text-white text-14">&copy
                    copyright 2022 By SoftCode Indonesia</li>
            </ul>
        </div>
    </div>
</section>
@endsection