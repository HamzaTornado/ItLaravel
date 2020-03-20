<div class="bg-top bg-white">
    <div class="container ">
        <div class="row  no-gutters d-flex align-items-center align-items-stretch">
            <div class="col-md-4 d-flex align-items-center ">
                <a class="navbar-brand" href="/">
                <img height="60px" width="60px" src="{{ asset('site/images/it6logo.png')}}" alt="" srcset="">
                </a>
            </div>
            <div class="col-lg-8 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <div class="text">
                            <span>Email</span>
                            <span>it6consulting@contact.com</span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <div class="text">
                            <span>Call</span>
                            <span>Call Us: + 1235 2355 98</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      </div>
</div>
  <nav class="navbar navbar-expand-lg navbar-dark .bg-main ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <form action="#" class="searchform order-lg-last">
      <div class="form-group d-flex">
        <input type="text" class="form-control pl-3" placeholder="Search">
        <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
      </div>
    </form>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ ucfirst(request()->segment(1)) == '' ? 'active' : '' }}"><a href="/" class="nav-link pl-0">Home</a></li>
            <li class="nav-item {{ ucfirst(request()->segment(1)) == 'About' ? 'active' : '' }}"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item {{ ucfirst(request()->segment(1)) == 'Project' ? 'active' : '' }}"><a href="/project" class="nav-link">Projects</a></li>
            <li class="nav-item {{ ucfirst(request()->segment(1)) == 'Services' ? 'active' : '' }}"><a href="/services" class="nav-link">Services</a></li>
            <li class="nav-item {{ ucfirst(request()->segment(1)) == 'Blog' ? 'active' : '' }}"><a href="/blog" class="nav-link">Blog</a></li>
          <li class="nav-item {{ ucfirst(request()->segment(1)) == 'Contact' ? 'active' : '' }}"><a   href="/contact" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
