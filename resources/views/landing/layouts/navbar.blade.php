<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="#home" style="padding-bottom: 0px;">
        <img src="{{asset('landing/assets/logo/logo-black.png')}}" class="brand-img" width="150px" alt="" srcset="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-4 active">
                <a class="nav-link home-nav page-scroll" href="#home">Home</a>
            </li>
            <li class="nav-item ml-4 dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    About Me
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item page-scroll about-nav" href="#about-me">About Us</a>
                    <a class="dropdown-item page-scroll dev-process-nav" href="#development-prosess">Development
                        Process</a>
                    <a class="dropdown-item page-scroll for-you-nav" href="#foryou">For You</a>
                    <!-- <div class="dropdown-divider"></div> -->
                    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
            </li>
            <li class="nav-item ml-4 service-nav">
                <a class="nav-link page-scroll" href="#our-service">Service</a>
            </li>
            <li class="nav-item ml-4 contact-nav">
                <a class="nav-link page-scroll btn btn-primary bg-yellow border-none text-14 font-weight-bold"
                    href="#contact-me">Contact Me</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link">Blog</a>
            </li> -->
        </ul>
    </div>

</nav>