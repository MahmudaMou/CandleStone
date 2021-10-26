<div class="sidebar" data-color="blue">

      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          Admin
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Dashboard
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{'dashboard'== request()->path() ? 'active': ''}}">
            <a href="./dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{'sliders'== request()->path() ? 'active': ''}}">
            <a href="sliders">
              <i class="now-ui-icons education_atom"></i>
              <p>Sliders</p>
            </a>
          </li>
          <li class="{{'fndprmns'== request()->path() ? 'active': ''}}">
            <a href="{{route('fndprfm')}}">
              <i class="now-ui-icons location_map-big"></i>
              <p>FUND PERFORMANCE</p>
            </a>
          </li>
          <li class="{{'notes'== request()->path() ? 'active': ''}}">
            <a href="{{route('note')}}">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notes</p>
            </a>
          </li>
          <li class="{{'sizes'== request()->path() ? 'active': ''}}">
            <a href="{{route('size')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Amount Sizes</p>
            </a>
          </li>
          <li class="{{'dates'== request()->path() ? 'active': ''}}">
            <a href="{{route('date')}}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Important Dates</p>
            </a>
          </li>
          <li class="{{'infms'== request()->path() ? 'active': ''}}">
            <a href="/infms">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Fund Information</p>
            </a>
          </li>
          <li class="{{'users'== request()->path() ? 'active': ''}}">
            <a href="{{route('users')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Users</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>