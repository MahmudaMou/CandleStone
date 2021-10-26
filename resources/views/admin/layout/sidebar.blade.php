<div class="sidebar" data-color="blue">

      <div class="logo">
        <a href="" class="simple-text logo-mini">
         ADMIN
        </a>
        <a href="" class="simple-text logo-normal">
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
            <li class="{{'users'== request()->path() ? 'active': ''}}">
            <a href="{{route('users')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Users</p>
            </a>
          </li>
          </li>
          <li class="{{'sliders'== request()->path() ? 'active': ''}}">
            <a href="sliders">
              <i class="now-ui-icons education_atom"></i>
              <p>Sliders</p>
            </a>
          </li>
          <li class="{{'fund-perfprmance'== request()->path() ? 'active': ''}}">
            <a href="{{route('fund.perfprmance')}}">
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
          <li class="{{'detail-informations'== request()->path() ? 'active': ''}}">
            <a href="{{route('detail.information')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Detail Fund Informations</p>
            </a>
          </li>
          <li class="{{'abouts'== request()->path() ? 'active': ''}}">
            <a href="{{route('about')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Abouts</p>
            </a>
          </li>
          
          <li class="{{'detail-abouts'== request()->path() ? 'active': ''}}">
            <a href="{{route('detail.about')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>About Details</p>
            </a>
          </li>
          <li class="{{'sensitive-info'== request()->path() ? 'active': ''}}">
            <a href="{{route('sensitive.info')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>PRICE SENSITIVE INFORMATION</p>
            </a>
          </li>
          <li class="{{'finencial-statement'== request()->path() ? 'active': ''}}">
            <a href="{{route('finencia.statement')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>FINANCIAL STATEMENTS</p>
            </a>
          </li>
          <li class="{{'annual-repoet'== request()->path() ? 'active': ''}}">
            <a href="{{route('annual.repoet')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>ANNUAL REPORTS/AUDITED FINANCIALS</p>
            </a>
          </li>
          <li class="{{'portfolio-report'== request()->path() ? 'active': ''}}">
            <a href="{{route('portfolio.report')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>PORTFOLIO REPORTS</p>
            </a>
          </li>
          <li class="{{'performance-report'== request()->path() ? 'active': ''}}">
            <a href="{{route('performance.report')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>FUND PERFORMANCE REPORTS</p>
            </a>
          </li>
          <li class="{{'contact-massage'== request()->path() ? 'active': ''}}">
            <a href="{{route('contact.massage')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Contact Message</p>
            </a>
          </li>
          <li class="{{'selling-agent'== request()->path() ? 'active': ''}}">
            <a href="{{route('selling.agent')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>SELLING AGENT LIST</p>
            </a>
          </li>
          <li class="{{'sip-slider'== request()->path() ? 'active': ''}}">
            <a href="{{route('sip.slider')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Sip Sliders</p>
            </a>
          </li>
          <li class="{{'what-is-sip'== request()->path() ? 'active': ''}}">
            <a href="{{route('what.is.sip')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>What is Sip</p>
            </a>
          </li>
          <li class="{{'sip'== request()->path() ? 'active': ''}}">
            <a href="{{route('sips')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Sips</p>
            </a>
          </li>
          <li class="{{'key-features'== request()->path() ? 'active': ''}}">
            <a href="{{route('key.features')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>KEY FEATURES OF SIP</p>
            </a>
             </li>
             <li class="{{'document-tab'== request()->path() ? 'active': ''}}">
            <a href="{{route('document.tab')}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>All Document Tabs</p>
            </a>
             </li>

             <li class="{{'document'== request()->path() ? 'active': ''}}">
            <a href="{{route('documents')}}">
              <i class="now-ui-icons text_caps-small"></i>
                   <p>Documents</p>
            </a>
             </li>
             <li class="{{'fund-sheet'== request()->path() ? 'active': ''}}">
            <a href="{{route('fund.sheet')}}">
              <i class="now-ui-icons text_caps-small"></i>
                   <p>FUND FACT SHEET</p>
            </a>
             </li>

             <li class="{{'question'== request()->path() ? 'active': ''}}">
            <a href="{{route('questions')}}">
              <i class="now-ui-icons text_caps-small"></i>
                   <p>FREQUENTLY ASKED QUESTION</p>
            </a>
             </li>

             <li class="{{'video'== request()->path() ? 'active': ''}}">
            <a href="{{route('videos')}}">
              <i class="now-ui-icons text_caps-small"></i>
                   <p>Knowledge Page Videos</p>
            </a>
             </li>
             
             

          
          
        </ul>
      </div>
    </div>