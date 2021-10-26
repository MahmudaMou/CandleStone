@extends('frontend.layout.master')

@section('content')
<div class="wrapper">
        <div class="container">
          <div class="section-break-thin"></div>
          <div class="p&r__historical-nav">
            <div class="section-heading">
              <h2>historical nav</h2>
            </div>
            <div class="historical_nav_search">
              <form
                action="{{route('nsearch')}}"
                              method="get"
                          >
                          <div class="row">
                              <div class="col-md-3">
                                  <h4>Choose Funds</h4>
                                  <select class="form-control" name="fund_category" type="search">
                                      <option value="">Please choose a category</option>
                                      @foreach($fundItem as $item)
                                          <option value="{{$item->fund_name}}">{{$item->fund_name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <div class="col-md-3">
                                  <h4>From</h4>
                                  <div class="form-group">
                                      <div class="input-group">
                                          <input
                                              name="from_date"
                                              class="form-control from_dat"
                                              id="datepicker"
                                          />
                                          <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendeer"></span>
                        </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <h4>To</h4>
                                  <div class="form-group">
                                      <div class="input-group">
                                          <input
                                              name="date"
                                              class="form-control from_dat"
                                              id="datepicker2"
                                          />
                                      </div>
                                  </div>
                              </div>
                  <div class="col-md-3">
                    <h4><br /></h4>
                    <div class="form-group">
                      <div class="input-group">
                        <input
                          type="submit"
                          value="search"
                          class="form-control btn btn-danger"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="table_on_overflow">
              <div class="section-break-thin"></div>
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
                @foreach($information as $searchitem)
                    <tr>
                        <td>{{$searchitem->fund_name}}</td>
                        <td>{{$searchitem->nav_as_on}}</td>
                        <td>{{$searchitem->nav_per_unit}}</td>
                        <td>{{$searchitem->investor_buy_Price}}</td>
                        <td>{{$searchitem->investor_sale_price}}</td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="text">
            <p>
              <strong>Note: </strong>@foreach($note as $noteItem)
                    {{$noteItem->note_text}}
                @endforeach
            </p>
          </div>
          <div class="section-break"></div>

          <div class="p&r__dividend-or-psi">
            <div class="section-heading">
              <h2>DIVIDEND/PRICE SENSITIVE INFORMATION</h2>
            </div>
            <div class="data-table-box table_on_overflow">
              <div
                id="dividendOrPriceSensitiveInformation_wrapper"
                class="dataTables_wrapper dt-bootstrap4 no-footer"
              >
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    
                     
                    
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div
                      id="dividendOrPriceSensitiveInformation_filter"
                      class="dataTables_filter"
                    >
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table
                      id="example"
                      class="
                        Table
                        dataTable
                        table-striped table-bordered
                        data-table
                        no-footter
                      "
                      style="width: 100%"
                      role="grid"
                      aria-describedby="dividendOrPriceSensitiveInformation_info"
                    >
                      <thead>
                        <tr role="row">
                          <th
                            class="sorting_asc"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-sort="ascending"
                            aria-label="#SL:active to sort column descending"
                            style="194px"
                          >
                            SL
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-label="Year: activate to sort column ascending"
                            style="width: 204px"
                          >
                            YEAR
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-label="Title: activate to sort column ascending"
                            style="width: 204px"
                          >
                            Title
                          </th>
                          <th
                            class="sorting_disabled"
                            rowspan="1"
                            colspan="1"
                            aria-label="Download"
                            style="width: 319px"
                          >
                            Download
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach($infm as $infmItem)
                          <tr>
                              <td>{{$infmItem->id}}</td>
                              <td>{{$infmItem->year}}</td>
                              <td>{{$infmItem->title}}</td>
                              <td><a href="{{asset($infmItem->download)}}" target="_blank" class="nav-item nav-link documentsFundNav active show">Download</a></td>

                          </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
          <div class="section-break"></div>
          <div class="p&r__quaterly-or-audited-finance">
            <div class="section-heading">
              <h2>Financials statements</h2>
            </div>
            <div class="data-table-box table_on_overflow">
              <div
                id="dividendOrPriceSensitiveInformation_wrapper"
                class="dataTables_wrapper dt-bootstrap4 no-footer"
              >
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    
                     
                    
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div
                      id="dividendOrPriceSensitiveInformation_filter"
                      class="dataTables_filter"
                    >
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table
                      id="example1"
                      class="
                        Table
                        dataTable
                        table-striped table-bordered
                        data-table
                        no-footter
                      "
                      style="width: 100%"
                      role="grid"
                      aria-describedby="dividendOrPriceSensitiveInformation_info"
                    >
                      <thead>
                        <tr role="row">
                          <th
                            class="sorting_asc"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-sort="ascending"
                            aria-label="#SL:active to sort column descending"
                            style="194px"
                          >
                            SL
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-label="Year: activate to sort column ascending"
                            style="width: 204px"
                          >
                            YEAR
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-label="Title: activate to sort column ascending"
                            style="width: 204px"
                          >
                            Title
                          </th>
                          <th
                            class="sorting_disabled"
                            rowspan="1"
                            colspan="1"
                            aria-label="Download"
                            style="width: 319px"
                          >
                            Download
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($statm as $statmItem)
                          <tr>
                              <td>{{$statmItem->id}}</td>
                              <td>{{$statmItem->year}}</td>
                              <td>{{$statmItem->title}}</td>
                              <td><a href="{{asset($statmItem->download)}}" target="_blank" class="nav-item nav-link documentsFundNav active show">Download</a></td>

                          </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          </div>
          <div class="section-break"></div>

          <div class="p&r__quaterly-or-audited-finance">
            <div class="section-heading">
              <h2>Annual Reports/Audited Financial</h2>
            </div>
            <div class="data-table-box table_on_overflow">
              <div
                id="dividendOrPriceSensitiveInformation_wrapper"
                class="dataTables_wrapper dt-bootstrap4 no-footer"
              >
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    
                     
                    
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div
                      id="dividendOrPriceSensitiveInformation_filter"
                      class="dataTables_filter"
                    >
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table
                      id="example2"
                      class="
                        Table
                        dataTable
                        table-striped table-bordered
                        data-table
                        no-footter
                      "
                      style="width: 100%"
                      role="grid"
                      aria-describedby="dividendOrPriceSensitiveInformation_info"
                    >
                      <thead>
                        <tr role="row">
                          <th
                            class="sorting_asc"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-sort="ascending"
                            aria-label="#SL:active to sort column descending"
                            style="194px"
                          >
                            SL
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-label="Year: activate to sort column ascending"
                            style="width: 204px"
                          >
                            YEAR
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-label="Title: activate to sort column ascending"
                            style="width: 204px"
                          >
                            Title
                          </th>
                          <th
                            class="sorting_disabled"
                            rowspan="1"
                            colspan="1"
                            aria-label="Download"
                            style="width: 319px"
                          >
                            Download
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($anul as $anulItem)
                          <tr>
                              <td>{{$anulItem->id}}</td>
                              <td>{{$anulItem->year}}</td>
                              <td>{{$anulItem->title}}</td>
                              <td><a href="{{asset($anulItem->download)}}" target="_blank" class="nav-item nav-link documentsFundNav active show">Download</a></td>

                          </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          </div>
          <div class="section-break"></div>

          <div class="p&r__quaterly-or-audited-finance">
            <div class="section-heading">
              <h2>Protfolio Reports</h2>
            </div>
              <div class="data-table-box table_on_overflow">
              <div
                id="dividendOrPriceSensitiveInformation_wrapper"
                class="dataTables_wrapper dt-bootstrap4 no-footer"
              >
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    
                     
                    
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div
                      id="dividendOrPriceSensitiveInformation_filter"
                      class="dataTables_filter"
                    >
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table
                      id="example3"
                      class="
                        Table
                        dataTable
                        table-striped table-bordered
                        data-table
                        no-footter
                      "
                      style="width: 100%"
                      role="grid"
                      aria-describedby="dividendOrPriceSensitiveInformation_info"
                    >
                      <thead>
                        <tr role="row">
                          <th
                            class="sorting_asc"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-sort="ascending"
                            aria-label="#SL:active to sort column descending"
                            style="194px"
                          >
                            SL
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-label="Year: activate to sort column ascending"
                            style="width: 204px"
                          >
                            YEAR
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-label="Title: activate to sort column ascending"
                            style="width: 204px"
                          >
                            Title
                          </th>
                          <th
                            class="sorting_disabled"
                            rowspan="1"
                            colspan="1"
                            aria-label="Download"
                            style="width: 319px"
                          >
                            Download
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($port as $portItem)
                          <tr>
                              <td>{{$portItem->id}}</td>
                              <td>{{$portItem->year}}</td>
                              <td>{{$portItem->title}}</td>
                              <td><a href="{{asset($portItem->download)}}" target="_blank" class="nav-item nav-link documentsFundNav active show">Download</a></td>

                          </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          </div>
          <div class="section-break"></div>

          <div class="p&r__fund-factsheet">
            <div class="section-heading">
              <h2>Fund Performance Reports</h2>
            </div>
            <div class="data-table-box table_on_overflow">
              <div
                id="dividendOrPriceSensitiveInformation_wrapper"
                class="dataTables_wrapper dt-bootstrap4 no-footer"
              >
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    
                     
                    
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div
                      id="dividendOrPriceSensitiveInformation_filter"
                      class="dataTables_filter"
                    >
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table
                      id="example4"
                      class="
                        Table
                        dataTable
                        table-striped table-bordered
                        data-table
                        no-footter
                      "
                      style="width: 100%"
                      role="grid"
                      aria-describedby="dividendOrPriceSensitiveInformation_info"
                    >
                      <thead>
                        <tr role="row">
                          <th
                            class="sorting_asc"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-sort="ascending"
                            aria-label="#SL:active to sort column descending"
                            style="194px"
                          >
                            SL
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-label="Year: activate to sort column ascending"
                            style="width: 204px"
                          >
                            YEAR
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            rowspan="1"
                            colspan="1"
                            aria-label="Title: activate to sort column ascending"
                            style="width: 204px"
                          >
                            Title
                          </th>
                          <th
                            class="sorting_disabled"
                            rowspan="1"
                            colspan="1"
                            aria-label="Download"
                            style="width: 319px"
                          >
                            Download
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($ninfm as $ninfmItem)
                          <tr>
                              <td>{{$ninfmItem->id}}</td>
                              <td>{{$ninfmItem->year}}</td>
                              <td>{{$ninfmItem->title}}</td>
                              <td><a href="{{asset($ninfmItem->download)}}" target="_blank" class="nav-item nav-link documentsFundNav active show">Download</a></td>

                          </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          </div>
          <div class="section-break"></div>
        </div>
      </div>
     
@endsection
