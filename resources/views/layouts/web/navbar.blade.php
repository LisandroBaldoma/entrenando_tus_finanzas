<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <a href="/home" class="logo m-0 float-start"><img src="{{asset('img/logo.jpg')}}" alt="" style="height:px; width:40px "><span class="text-primary"></span></a>
                    </div>
                    <div class="col-8 text-center ">
                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li class="active"><a href="/home">Home</a></li>
                            <li class="has-children">
                                <a href="/asesoramiento">Asesoramiento</a>
                                <ul class="dropdown">
                                    <li><a href="/asesoramiento">Basico</a></li>
                                    <li><a href="/asesoramiento">Intermedio</a></li>
                                    <li><a href="/asesoramiento">Avanzado</a></li>
                                </ul>
                            </li>
                            <li><a href="/cursos">Cursos</a></li>
                            <li><a href="/about">Sobre Mí</a></li>
                            <li><a href="/faq">Faqs</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="{{ route('contacto') }}">Contacto</a></li>
                            <li><a href="/login">Login</a></li>

                        </ul>
                    </div>
                    <div class="col-2 text-end">
                        <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>

                        <a href="#" class="call-us d-flex align-items-center">
                            <span class="icon-phone"></span>
                            <span>( 0341 ) 156-864621</span>
                        </a>
                        {{-- <button class="btn btn-primary me-md-2 call-us" type="button">Button</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
