@extends('frontend.layout.master')

@section('content')
    <div class="coverimage">
        <img src="{{$slider->image}}" alt="cover Image" />
    </div>
    <div>
        <div class="container">
            <div class="section-break-thin"></div>
            <div class="fundperformance">
                <h2>FUND PERFORMANCE</h2>
            </div>
            <div>
                <div class="table_on_overflow">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Fund Name</th>
                            <th scope="col">Nav as on</th>
                            <th scope="col">Nav Per Unit(BDT)</th>
                            <th scope="col">Investor's Buy Price(bdt)</th>
                            <th scope="col">Investor's Sale Price(bdt)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($fundPerformance as $performanceItem)
                        <tr>
                            <td>{{$performanceItem->fund_name}}</td>
                            <td>{{$performanceItem->nav_as_on}}</td>
                            <td>{{$performanceItem->nav_per_unit}}</td>
                            <td>{{$performanceItem->investor_buy_Price}}</td>
                            <td>{{$performanceItem->investor_sale_price}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="text">
                <p>
                    <strong>Note: </strong> @foreach($note as $noteItem)
                                        {{$noteItem->note_text}}
                                        @endforeach
                </p>
            </div>
            <div class="fund_information">
                <div class="section-heading">
                    <h2>FUND INFORMATION</h2>
                </div>
                <div class="growth-fund_cards">
                    <div class="growth-fund_cards__heading">
                        <h2>CANDLESTONE RUPALI BANK GROWTH FUND</h2>
                    </div>

                    <div></div>
                    <div class="initial-size">
                        <span><h3> @foreach($amountsize as $amountsizeitem)
                                    {{$amountsizeitem->title}} : {{$amountsizeitem->amount}}
                                @endforeach</h3></span>
                    </div>
                    <div class="section-break-thin"></div>
                    <div class="text-center subscriptionheading">
                        <h4>@foreach($date as $dateitem)
                                {{$dateitem->title}} : {{$dateitem->date}}

                            @endforeach </h4>
                    </div>



                    <div class="section-break-thin"></div>
                    <div></div>
                    <div
                        class="row justify-cintent-around padding-left-right-20px"
                    >
                        @foreach($information as $infoitem)
                        <div class="col-3 text-justify">
                            <div class="growth-fund_card">
                                <a
                                    data-toggle="modal"
                                    data-target=".bd-example-modal-lg{{$infoitem->id}}">
                                    <div class="heading text-center text-uppercase">
                                        <h3>{{$infoitem->title}}</h3>
                                    </div>
                                    <div class="icon text-center">
                                        <img
                                            src="{{$infoitem->image}}"
                                            alt="{{$infoitem->title}}"
                                        />
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    @foreach($information as $item)

<div
      class="modal fade bd-example-modal-lg{{$item->id}}"
      id="exampleModalLong"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLongTitle">{{$item->information->title}}</h4>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>{{$item->information->text}}</p>
          </div>
          <div class="modal-footer">
            <p>
              To know more about the
              <span style="text-transform: lowercase" class="aboutTitle"
                >{{$item->information->title}}</span
              >
              &nbsp;<a
                id="redirection_link"
                href="{{$item->information->url}}"
                target="_blank"
                >Click here</a
              >
            </p>
          </div>
        </div>
      </div>
    </div>
    @endforeach


                    <div class="section-break-thin"></div>
                </div>
            </div>
            <div class="section-break-thin"></div>

            <div class="home__about">
                <div class="section-heading">
                    <h3>ABOUT</h3>
                </div>

                <div class="row justify-content-center">
                    @foreach($about as $aboutitem)
                    <div class="col-md-3 text-justify">
                        <div class="home__about_card text-center">
                            <div class="icon">
                                <img
                                    src="{{$aboutitem->image}}"
                                    alt="Logo"
                                />
                            </div>

                            <h4>{{$aboutitem->title}}</h4>
                            <p>
                                {{$aboutitem->text}}
                            </p>
                            <div class="home__about_card_button">
                                <a class="common-btn"
                                   type="button"
                                   data-toggle="modal"
                                   data-target=".nbd-example-modal-lg{{$aboutitem->id}}">Read More</a>
                            </div>

                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
            <div class="section-break-thin"></div>
        </div>
    </div>
    @foreach($about as $aboutitem)
<div
    class="modal fade nbd-example-modal-lg{{$aboutitem->id}}"
    id="exampleModalLong"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myLargeModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle">{{$aboutitem->nabout->title}}</h4>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    {{$aboutitem->nabout->text}}
                </p>
            </div>
            <div class="modal-footer">
                <p>
                    To know more about the
                    <span style="text-transform: lowercase" class="aboutTitle"
                    >{{$aboutitem->nabout->title}}</span
                    >
                    &nbsp;<a
                        id="redirection_link"
                        href="{{$aboutitem->nabout->url}}"
                        target="_blank"
                    >Click here</a
                    >
                </p>
            </div>
        </div>
    </div>
</div>
@endforeach



@endsection


