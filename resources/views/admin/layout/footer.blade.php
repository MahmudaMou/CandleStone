<footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="{{route('frontend.home')}}">
                  Home
                </a>
              </li>
              <li>
                <a href="{{route('frontend.performance')}}">
                Performance&Reports
                </a>
              </li>
              
              <li>
                <a href="{{route('frontend.form')}}">
                  Forms And Documents
                </a>
              </li>
              <li>
                <a href="{{route('frontend.sips')}}">
                  Sip
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, To know More<a href="{{route('frontend.knowledge')}}" target="_blank"> Knowledge Center</a>.Contact Us <a href="{{route('frontend.contacts')}}" target="_blank">Contact Us</a>.
          </div>
        </div>
      </footer>