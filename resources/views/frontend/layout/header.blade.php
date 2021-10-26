<header>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href=""><img src="/Image/Candlestone-typo.png" alt="Logo" /> </a>
            </div>
            <div class="menus" id="mobile_menu">
                <a class="mobilemenuclosebtn" onclick="menuclose">
                    <span class="icon-close"></span>
                </a>
                <div class="header-top">
                    <ul class="header-top__ul menu-link-line-progress-animation">
                        <li class="header-top__list">
                            <a href="" class="header-top__link"></a>
                            <a href="#" class="header-top__link">
                                <i class="fas fa-link"></i>QuickLinks</a
                            >
                        </li>
                        <li class="header-top__list">
                            <a href="#" class="header-top__link">
                                <i class="far fa-user"></i>
                                Login</a
                            >
                        </li>
                        <li class="header-top__list">
                            <a href="#" class="header-top__link">|+88 02 9820263</a>
                        </li>
                    </ul>
                </div>

                <ul class="menu">
                    <li class="menu-list">
                        <a href="{{route('frontend.home')}}" class="menu-link">Home</a>
                    </li>
                    <li class="menu-list">
                        <a href="{{route('frontend.performance')}}" class="menu-link"
                        >Performance&Reports</a
                        >
                    </li>
                    <li class="menu-list">
                        <a href="{{route('frontend.form')}}" class="menu-link">Forms&Documents</a>
                    </li>
                    <li class="menu-list">
                        <a href="{{route('frontend.sips')}}" class="menu-link">SIP</a>
                    </li>
                    <li class="menu-list">
                        <a href="{{route('frontend.knowledge')}}" class="menu-link"
                        >Knowledge Center</a
                        >
                    </li>
                    <li class="menu-list">
                        <a href="{{route('frontend.contacts')}}" class="menu-link">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="invest-now-btn">
            <a
              href="#"
              id="mobileMenuOpenButton"
              data-toggle="modal"
              data-target="#investNowModal"
            >
              <img
                src="https://csrbgf.com/assets/img/common/Red-card.png"
                alt="logo"
              />
            </a>
          </div>

            <div class="mobile-menu-btn">
                <a oneclick="menuOpen()">
                    <div></div>
                    <div></div>
                    <div></div>
                </a>
            </div>
        </div>
    </div>
</header>
