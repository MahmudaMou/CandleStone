@extends('frontend.layout.master')

@section('content')
<div class="wrapper">
<div class="home__cover-image knowledgeCenterCover">
          <div class="container kCSlider" id="container kCSlider">
            <ul
              style="
                position: relative;
                width: 850px;
                height: 297px;
                list-style: none;
                padding: 0px;
                margin: 0px 0px 0px 50%;
                left: -425px;
                top: 1.5px;
              "
            >
                @foreach($video as $vitem)
              <li
                style="
                  display: block;
                  position: absolute;
                  z-index: 9998;
                  overflow: hidden;
                  width: 270px;
                  height: 178.2px;
                  left: 580px;
                  top: 59.4px;
                "
              >

                <a
                  data-fancybox=""
                  href="{{$vitem->url}}"
                >
                  <img
                    src="{{$vitem->video_img}}"
                    alt=""
                    style="width: 100%; height: 100%"
                  />
                </a>
                  <h4 class="slide-title text-center">{{$vitem->note}}</h4>
              </li>
                @endforeach

              <span class="left">
                <img
                  style="
                    position: absolute;
                    left: -80px;
                    top: 0%;
                    z-index: 10003;
                  "
                  src="https://csrbgf.com/assets/img/knowledge-center/left-arrow.png"
                />
              </span>
              <span class="right">
                <img
                  style="
                    position: absolute;
                    right: -80px;
                    top: 0%;
                    z-index: 10003;
                  "
                  src="https://csrbgf.com/assets/img/knowledge-center/right-arrow.png"
                />
              </span>
            </ul>
          </div>
        </div>
        <div class="container">
          <div class="section-break-thin"></div>
          <div class="cSCalculator">
            <div class="heading text-center">
              <h2>MF Calculator</h2>
            </div>
            <div class="body">
              <div>
                <nav>
                  <div class="nav nav-tabs" id="nav-tab-3" role="tablist">
                    <a
                      class="nav-item nav-link active"
                      id="pc-editable-01-tab"
                      data-toggle="tab"
                      href="#pc-editable-01"
                      role="tab"
                      aria-controls="pc-editable-01"
                      aria-selected="false"
                      >Systematic Investment Planner
                    </a>
                    <a
                      class="nav-item nav-link"
                      id="pc-editable-02-tab"
                      data-toggle="tab"
                      href="#pc-editable-02"
                      role="tab"
                      aria-controls="pc-editable-02"
                      aria-selected="true"
                      >Mutual Fund
                    </a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent-3">
                  <div
                    class="tab-pane fade show active"
                    id="pc-editable-01"
                    role="tabpanel"
                    aria-labelledby="pc-editable-01-tab"
                  >
                    <br />
                    <div class="row">
                      <div class="col-md-6">
                        <p>
                          A simple tool to get an idea of the returns on your
                          mutual fund investments made through SIP
                        </p>
                        <div class="row">
                          <div class="col">
                            <input
                              type="radio"
                              name="sip-cal-radio-01"
                              checked
                              value="sipIKnowMyGoal"
                            />
                            <label for="sip-radio-01">I Know My Goal</label>
                          </div>
                          <div class="col">
                            <input
                              type="radio"
                              name="sip-cal-radio-02"
                              value="sipIKnowMyGoal"
                            />
                            <label for="sip-radio-02">I want to invest</label>
                          </div>
                        </div>
                        <div class="sipIWantToInvest">
                          <div class="cal-input">
                            <div class="row justify-content-space-button">
                              <div class="col">
                                <label for="sipIWantToInvestAmount"
                                  >Goal Amount</label
                                >
                              </div>
                              <div class="col text-right">
                                <strong class="input_value">
                                  <span class="sipIWantToInvestAmount"
                                    >500</span
                                  >
                                  BDT
                                </strong>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <input
                                  type="range"
                                  min="500"
                                  max="500000"
                                  name="sipIWantToInvestAmount"
                                  value="500"
                                  id="sipIWantToInvestAmount"
                                  class="rangeslider"
                                />
                              </div>
                            </div>
                            <div class="row justify-content-space-button">
                              <div class="col">
                                <span class="min-max-value">500</span>
                              </div>
                              <div class="col text-right">5lac</div>
                            </div>
                          </div>
                          <div class="cal-input">
                            <div class="row justify-content-space-button">
                              <div class="col">
                                <label for="sipIWantToInvestAmount"
                                  >Tenure</label
                                >
                              </div>
                              <div class="col text-right">
                                <strong class="input_value">
                                  <span class="sipIWantToInvestAmount">2</span>
                                  Years
                                </strong>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <input
                                  type="range"
                                  min="2"
                                  max="10"
                                  name="sipIWantToInvestAmount"
                                  value="2"
                                  id="sipIWantToInvestAmount"
                                  class="rangeslider"
                                />
                              </div>
                            </div>
                            <div class="row justify-content-space-button">
                              <div class="col">
                                <span class="min-max-value">2</span>
                                Years
                              </div>
                              <div class="col text-right">10 Years</div>
                            </div>
                          </div>
                          <div class="cal-input">
                            <div class="row justify-content-space-button">
                              <div class="col">
                                <label for="sipIWantToInvestAmount"
                                  >Expected Rate of Return</label
                                >
                              </div>
                              <div class="col text-right">
                                <strong class="input_value">
                                  <span class="sipIWantToInvestAmount">1%</span>
                                </strong>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <input
                                  type="range"
                                  min="1"
                                  max="40"
                                  name="sipIWantToInvestAmount"
                                  value="1"
                                  id="sipIWantToInvestAmount"
                                  class="rangeslider"
                                />
                              </div>
                            </div>
                            <div class="row justify-content-space-button">
                              <div class="col">
                                <span class="min-max-value">1</span>
                                %
                              </div>
                              <div class="col text-right">40%</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div
                          class="calculated-result resultOfSipIWantToInvest"
                          style="display: none"
                        >
                          <img
                            src="./Image/savings-icon.png"
                            alt="savings-icon"
                          />
                          <p>Total Value of Investment</p>
                          <h4>
                            <span class="sipIWantToInvestReturn">12382</span>
                            BDT
                          </h4>
                          <a class="investButtonInCal" href="#">Start SIP</a>
                        </div>
                        <div class="calculated-result resultOfSipIKnowMyGoal">
                          <img
                            src="./Image/savings-icon.png"
                            alt="savings-icon"
                          />
                          <p>Required Investment</p>
                          <h4>
                            <span class="sipIWantToInvestReturn">20</span> BDT
                          </h4>
                          <a class="investButtonInCal" href="#">Strat SIP</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-break"></div>
        <div class="cSFAQ">
          <div class="container">
            <div class="section-heading">
              <h2>Frequently Asked Question</h2>
            </div>
            <div>

              <nav>
                <div class="nav nav-tabs" id="nav-tab-4" role="tablist">
                    @foreach($tab as $tabItem)
                  <a
                    class="nav-item nav-link {{$loop->iteration == 1 ? 'active' : ''}}"
                    id="fAQ_{{$loop->iteration}}-tab" data-toggle="tab"
                    href="#faq_{{$loop->iteration}}"
                    role="tab"
                    aria-controls="pc-editable-1"
                    aria-selected="false"
                    >{{$tabItem->tab_name}}</a
                  >
                    @endforeach

                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent-4">
                  @foreach($tab as $tabItem)
                      <div
                          class="tab-pane fade {{$loop->iteration == 1 ? 'active' : ''}} show"
                          id="faq_{{$loop->iteration}}"
                          role="tabpanel"
                          aria-labelledby="faq_{{$loop->iteration}}-tab"
                      >
                          <br />

                          <div class="accordion">
                              @foreach($tabItem->questions as $questionItem)
                                  <div class="card">
                                      <div class="card-header">

                                          <a
                                              class="card-link collapsed"
                                              data-toggle="collapse"
                                              href="#collapse{{$loop->iteration}}"
                                              aria-expanded="false"
                                          >
                                              {{$questionItem->question}}
                                          </a>
                                      </div>
                                      <div
                                          id="collapse{{$loop->iteration}}"
                                          class="collapse"
                                          data-parent=".accordion"
                                      >
                                          <div class="card-body">
                                              <p>
                                                  {!!$questionItem->answer!!}
                                              </p>

                                          </div>
                                      </div>
                                  </div>
                              @endforeach

                          </div>
                      </div>

                  @endforeach


              </div>
            </div>
          </div>
        </div>
        <div class="section-break"></div>
        <div class="container">
          <div class="section-heading">
            <h2>other Documents</h2>
          </div>
          <div class="kcUpload">
            <a
              href="{{$dfiles->file}}"
              class="kcUploadbtn common-btn"
              target="_blank"
              >Download
              <i class="fas fa-file-download"></i>
              </a>
          </div>
        </div>
      </div>
      <div class="section-break"></div>
      @endsection

