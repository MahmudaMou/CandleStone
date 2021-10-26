@extends('frontend.layout.master')

@section('content')
<div class="wrapper">
        <div class="home__cover-image">
          <picture>
            <img
              src="{{$slider->image}}"
              alt="coverpage"
            />
          </picture>
        </div>
        <div class="container">
          <div class="section-break-thin"></div>
          <div class="sip">
            <div class="section-heading">
              <h2>WHAT IS SIP</h2>
            </div>
            <div class="what-is-sip">
              <p>
                  @foreach($whatsip as $whatsipItem)
                      {{$whatsipItem->text}}
                  @endforeach
              </p>
            </div>
            <div class="section-break-thin"></div>
            <div class="sip__reasons-to-invest">
              <div class="heading">
                <h3>
                  Systematic Investment Plan (SIP):
                  <br />
                  <span>Why the right Investment otion for you?</span>
                </h3>
              </div>
                @foreach($sips as $sipsItem)
              <div class="reason">
                <div class="img">
                  <img src="{{$sipsItem->image}}" alt="Image" />
                </div>
                <div class="text">
                  <h4>{{$sipsItem->title}}</h4>
                  <p>
                      {{$sipsItem->text}}
                  </p>
                </div>
              </div>
                @endforeach
            </div>
          </div>
          <div class="section-break"></div>
          <div class="sip__key_features">
            <div class="section-heading">
              <h2>KEY FEATURES OF SIP</h2>
            </div>
            <div class="features">

              <ul>
                  @foreach($key as $keyItem)
                <li>

                  <img src="./Image/Arrow.png" alt="Arrow" />
                  <p>{{$keyItem->key_features}}</p>
                </li>
                  @endforeach
              </ul>
            </div>
          </div>
          <div class="section-break"></div>
          <div class="what-to-invest">
            <div class="section-heading">
              <h2>what to invest! </h2>
            </div>
            <div class="sip__form-button">
                 <a href="{{$files->file}}" class="common-btn" target="_blank">SIP FORM</a>
            </div>
          </div>
          <div class="section-break"></div>
        </div>
      </div>
@endsection
