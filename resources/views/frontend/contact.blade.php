@extends('frontend.layout.master')

@section('content')
      <div class="wrapper">
        <div class="container">
          <div class="section-break-thin"></div>
          <div class="contact-form">
            <div class="contact-image">
              <img src="/Image/rocket_contact.png" alt="Rocket" />
            </div>
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <form action="{{route('frontend.contacts.add')}}" method="POST">
                   @csrf
              
              <h3>Drop Us a Messsage</h3>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Your Name *"
                      value=""
                    >
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      name="email"
                      class="form-control"
                      placeholder="Your Email *"
                      value=""
                    >
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      name="phone"
                      class="form-control"
                      placeholder="Your Phone Number *"
                      value=""
                    >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <input
                      type="text"
                      name="massage"
                      class="form-control"
                      placeholder="Your Message *"
                      style="width: 100%; height: 150px"
                      value=""
                    >
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <button class="common-btn">Send Message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>






@endsection