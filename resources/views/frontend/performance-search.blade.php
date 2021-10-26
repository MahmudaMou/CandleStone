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
                                      @foreach($information as $item)
                                          <option value="{{$item->fund_name}}">{{$item->fund_name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <div class="col-md-3">
                                  <h4>From</h4>
                                  <div class="form-group">
                                      <div class="input-group">
                                          <div
                                              role="wrapper"
                                              class="
                            gj-datepicker
                            gj-datepicker-bootstrap
                            gj-unselectable
                            input-group
                          "
                        >
                          <input
                            type="data"
                            name="from_date"
                            class="form-control from_date"
                            data-type="datepicker"
                            data-guid="3266bb4c-90cd-ad9d-5d1e-022eb9cf5f23"
                            data-datepicker="true"
                            role="input"
                          />
                          <span class="input-group-append" role="right-icon">
                            <button
                              class="btn btn-outline-secondary border-left-0"
                              type="button"
                            >
                              <i class="gj-icon">event</i>
                            </button>
                          </span>
                        </div>
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
                        <div
                          role="wrapper"
                          class="
                            gj-datepicker
                            gj-datepicker-bootstrap
                            gj-unselectable
                            input-group
                          "
                        >
                          <input
                            type="data"
                            name="from_date"
                            class="form-control from_date"
                            data-type="datepicker"
                            data-guid="3266bb4c-90cd-ad9d-5d1e-022eb9cf5f23"
                            data-datepicker="true"
                            role="input"
                          />
                          <span class="input-group-append" role="right-icon">
                            <button
                              class="btn btn-outline-secondary border-left-0"
                              type="button"
                            >
                              <i class="gj-icon">event</i>
                            </button>
                          </span>
                        </div>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendeer"></span>
                        </span>
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
                @foreach($search as $searchitem)
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
              <strong>Note: </strong> @foreach($note as $noteItem)
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
                    <div
                      class="dataTables_length"
                      id="dividendOrProceSensitiveInformation_length"
                    >
                      <label>
                        Show
                        <select
                          name="dividendOrPriceSensitiveInformation_length"
                          aria-controls="dividendOrPriceSensitiveInformation"
                          class="
                            custom-select custom-select-sm
                            form-control form-control-sm
                          "
                          id=""
                        >
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="75">75</option>
                        </select>
                        Entries
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div
                      id="dividendOrPriceSensitiveInformation_filter"
                      class="dataTables_filter"
                    >
                      <label for="">
                        Search:
                        <input
                          type="search"
                          class="form-control form-control-sm"
                          placeholder=""
                          aria-controls="dividendOrPriceSensitiveInformation"
                        />
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table
                      id="dividendOrPriceSensitiveInformation"
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
                <div class="row">
                  <div class=".col-sm-12 col-md-5">
                    <div
                      class="dataTables_info"
                      id="dividendOrPriceSensitiveInformation_info"
                      role="status"
                      aria-live="polite"
                    >
                      Showing 0 to 0 of 0 Entries
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div
                      class="dataTables_paginate paging_simple_numbers"
                      id="dividendOrPriceSensitiveInformation_paginaye"
                    >
                      <ul class="pagination">
                        <li
                          class="paginate_button page-item previous disabled"
                          id="dividendOrPriceSensitiveInformation_previous"
                        >
                          <a
                            href="#"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            data-dt-idx="0"
                            tabindex="0"
                            class="page-link"
                          >
                            Previous
                          </a>
                        </li>
                        <li
                          class="paginate_button page-item previous disabled"
                          id="dividendOrPriceSensitiveInformation_next"
                        >
                          <a
                            href="#"
                            aria-controls="dividendOrPriceSensitiveInformation"
                            data-dt-idx="1"
                            tabindex="0"
                            class="page-link"
                          >
                            Next
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
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
                id="financialStatements_wrapper"
                class="dataTables_wrapper dt-bootstrap4 no-footer"
              >
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div
                      class="dataTables_length"
                      id="financialStatements_length"
                    >
                      <label>
                        Show
                        <select
                          name="financialStatements_length"
                          aria-controls="financialStatements"
                          class="
                            custom-select custom-select-sm
                            form-control form-control-sm
                          "
                          id=""
                        >
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="75">75</option>
                        </select>
                        Entries
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div
                      id="financialStatements_filter"
                      class="dataTables_filter"
                    >
                      <label for="">
                        Search:
                        <input
                          type="search"
                          class="form-control form-control-sm"
                          placeholder=""
                          aria-controls="financialStatements"
                        />
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table
                      id="financialStatements"
                      class="
                        Table
                        dataTable
                        table-striped table-bordered
                        data-table
                        no-footter
                      "
                      style="width: 100%"
                      role="grid"
                      aria-describedby="financialStatements_info"
                    >
                      <thead>
                        <tr role="row">
                          <th
                            class="sorting_asc"
                            tabindex="0"
                            aria-controls="financialStatements"
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
                            aria-controls="financialStatements"
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
                            aria-controls="financialStatements"
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
                <div class="row">
                  <div class=".col-sm-12 col-md-5">
                    <div
                      class="dataTables_info"
                      id="financialStatements_info"
                      role="status"
                      aria-live="polite"
                    >
                      Showing 0 to 0 of 0 Entries
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div
                      class="dataTables_paginate paging_simple_numbers"
                      id="financialStatements_paginaye"
                    >
                      <ul class="pagination">
                        <li
                          class="paginate_button page-item previous disabled"
                          id="financialStatements_previous"
                        >
                          <a
                            href="#"
                            aria-controls="financialStatements"
                            data-dt-idx="0"
                            tabindex="0"
                            class="page-link"
                          >
                            Previous
                          </a>
                        </li>
                        <li
                          class="paginate_button page-item previous disabled"
                          id="financialStatements_next"
                        >
                          <a
                            href="#"
                            aria-controls="financialStatements"
                            data-dt-idx="1"
                            tabindex="0"
                            class="page-link"
                          >
                            Next
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
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
                id="annualReports_wrapper"
                class="dataTables_wrapper dt-bootstrap4 no-footer"
              >
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="annualReports_length">
                      <label>
                        Show
                        <select
                          name="annualReports_length"
                          aria-controls="annualReports"
                          class="
                            custom-select custom-select-sm
                            form-control form-control-sm
                          "
                          id=""
                        >
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="75">75</option>
                        </select>
                        Entries
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div id="annualReports_filter" class="dataTables_filter">
                      <label for="">
                        Search:
                        <input
                          type="search"
                          class="form-control form-control-sm"
                          placeholder=""
                          aria-controls="annualReports"
                        />
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table
                      id="annualReports"
                      class="
                        Table
                        dataTable
                        table-striped table-bordered
                        data-table
                        no-footter
                      "
                      style="width: 100%"
                      role="grid"
                      aria-describedby="annualReports_info"
                    >
                      <thead>
                        <tr role="row">
                          <th
                            class="sorting_asc"
                            tabindex="0"
                            aria-controls="annualReports"
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
                            aria-controls="annualReports"
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
                            aria-controls="annualReports"
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
                <div class="row">
                  <div class=".col-sm-12 col-md-5">
                    <div
                      class="dataTables_info"
                      id="annualReports_info"
                      role="status"
                      aria-live="polite"
                    >
                      Showing 0 to 0 of 0 Entries
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div
                      class="dataTables_paginate paging_simple_numbers"
                      id="annualReports_paginaye"
                    >
                      <ul class="pagination">
                        <li
                          class="paginate_button page-item previous disabled"
                          id="annualReports_previous"
                        >
                          <a
                            href="#"
                            aria-controls="annualReports"
                            data-dt-idx="0"
                            tabindex="0"
                            class="page-link"
                          >
                            Previous
                          </a>
                        </li>
                        <li
                          class="paginate_button page-item previous disabled"
                          id="annualReports_next"
                        >
                          <a
                            href="#"
                            aria-controls="annualReports"
                            data-dt-idx="1"
                            tabindex="0"
                            class="page-link"
                          >
                            Next
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
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
                id="portfolio_wrapper"
                class="dataTables_wrapper dt-bootstrap4 no-footer"
              >
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="portfolio_length">
                      <label>
                        Show
                        <select
                          name="portfolio_length"
                          aria-controls="portfolio"
                          class="
                            custom-select custom-select-sm
                            form-control form-control-sm
                          "
                          id=""
                        >
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="75">75</option>
                        </select>
                        Entries
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div id="portfolio_filter" class="dataTables_filter">
                      <label for="">
                        Search:
                        <input
                          type="search"
                          class="form-control form-control-sm"
                          placeholder=""
                          aria-controls="portfolio"
                        />
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table
                      id="portfolio"
                      class="
                        Table
                        dataTable
                        table-striped table-bordered
                        data-table
                        no-footter
                      "
                      style="width: 100%"
                      role="grid"
                      aria-describedby="portfolio_info"
                    >
                      <thead>
                        <tr role="row">
                          <th
                            class="sorting_asc"
                            tabindex="0"
                            aria-controls="portfolio"
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
                            aria-controls="portfolio"
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
                            aria-controls="portfolio"
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
                <div class="row">
                  <div class=".col-sm-12 col-md-5">
                    <div
                      class="dataTables_info"
                      id="portfolio_info"
                      role="status"
                      aria-live="polite"
                    >
                      Showing 0 to 0 of 0 Entries
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div
                      class="dataTables_paginate paging_simple_numbers"
                      id="portfolio_paginaye"
                    >
                      <ul class="pagination">
                        <li
                          class="paginate_button page-item previous disabled"
                          id="portfolio_previous"
                        >
                          <a
                            href="#"
                            aria-controls="portfolio"
                            data-dt-idx="0"
                            tabindex="0"
                            class="page-link"
                          >
                            Previous
                          </a>
                        </li>
                        <li
                          class="paginate_button page-item previous disabled"
                          id="portfolio_next"
                        >
                          <a
                            href="#"
                            aria-controls="portfolio"
                            data-dt-idx="1"
                            tabindex="0"
                            class="page-link"
                          >
                            Next
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
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
                id="fundFactSheetTable_wrapper"
                class="dataTables_wrapper dt-bootstrap4 no-footer"
              >
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div
                      class="dataTables_length"
                      id="fundFactSheetTable_length"
                    >
                      <label>
                        Show
                        <select
                          name="fundFactSheetTable_length"
                          aria-controls="fundFactSheetTable"
                          class="
                            custom-select custom-select-sm
                            form-control form-control-sm
                          "
                          id=""
                        >
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="75">75</option>
                        </select>
                        Entries
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div
                      id="fundFactSheetTable_filter"
                      class="dataTables_filter"
                    >
                      <label for="">
                        Search:
                        <input
                          type="search"
                          class="form-control form-control-sm"
                          placeholder=""
                          aria-controls="fundFactSheetTable"
                        />
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table
                      id="fundFactSheetTable"
                      class="
                        Table
                        dataTable
                        table-striped table-bordered
                        data-table
                        no-footter
                      "
                      style="width: 100%"
                      role="grid"
                      aria-describedby="fundFactSheetTable_info"
                    >
                      <thead>
                        <tr role="row">
                          <th
                            class="sorting_asc"
                            tabindex="0"
                            aria-controls="fundFactSheetTable"
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
                            aria-controls="fundFactSheetTable"
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
                            aria-controls="fundFactSheetTable"
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
                <div class="row">
                  <div class=".col-sm-12 col-md-5">
                    <div
                      class="dataTables_info"
                      id="fundFactSheetTable_info"
                      role="status"
                      aria-live="polite"
                    >
                      Showing 0 to 0 of 0 Entries
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div
                      class="dataTables_paginate paging_simple_numbers"
                      id="fundFactSheetTable_paginaye"
                    >
                      <ul class="pagination">
                        <li
                          class="paginate_button page-item previous disabled"
                          id="fundFactSheetTable_previous"
                        >
                          <a
                            href="#"
                            aria-controls="fundFactSheetTable"
                            data-dt-idx="0"
                            tabindex="0"
                            class="page-link"
                          >
                            Previous
                          </a>
                        </li>
                        <li
                          class="paginate_button page-item previous disabled"
                          id="fundFactSheetTable_next"
                        >
                          <a
                            href="#"
                            aria-controls="fundFactSheetTable"
                            data-dt-idx="1"
                            tabindex="0"
                            class="page-link"
                          >
                            Next
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section-break"></div>
        </div>
      </div>
@endsection
