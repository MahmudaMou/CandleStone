@extends('frontend.layout.master')

@section('content')
<div class="wrapper">
        <div class="container">
          <div class="section-break"></div>
          <div class="fddoc__fund-factsheet">
            <div class="section-heading-with-bg">
              <h2>Fund Fact Sheet</h2>
            </div>
            <div>
              <div class="table_on_overflow featureDescriptionTable">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col" width="30%">Features</th>
                      <th scope="col">Description</th>
                    </tr>
                  </thead>
                    <tbody>
                    @foreach($sheet as $sheetItem)
                        <tr>
                            <td>{{$sheetItem->features}}</td>
                            <td>{{$sheetItem->description}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="section-break"></div>
          <div class="fddoc__formation-douments">
            <div class="section-heading-with-bg">
              <h2>Documents Of The Fund</h2>
            </div>
            <div>
              <nav>
                <div
                  class="nav nav-tabs documents-active-nav"
                  id="nav-tab-2"
                  role="tablist"
                >
                    @foreach($tab as $tabItem)
                  <button
                    onclick="documentFund(event, 1)"
                    class="nav-item nav-link documentsFundNav active show"
                    data-toggle="tab"
                    href="#fd_01"
                    role="tab"
                    aria-controls="fd_01"
                    aria-selected="true"
                  >

                          {{$tabItem->tab_name}}


                  </button>
                    @endforeach
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent-2">
                <div
                  class="tab-pane fade show active"
                  id="fd_01"
                  role="tabpanel"
                >
                  <div class="pdf-cards" id="documentpanel">
                      @foreach($tabname as $tabnameItem)
                    <a
                      href="{{$tabnameItem->file}}"
                      target="_blank"
                      class="pdf-card"
                    >
                      <h4>{{$tabnameItem->file_name}}</h4>
                    </a>
                      @endforeach

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section-break"></div>

          <div class="fddoc__firm-pc-editable">
            <div class="section-heading-with-bg">
              <h2>forms</h2>
            </div>
            <div>
              <nav>
                <div
                  class="nav nav-tabs documents-active-nav"
                  id="nav-tab-3"
                  role="tablist"
                >
                    @foreach($ntab as $ntabItem)
                  <button
                    onclick="formAgent(event, 2)"
                    class="nav-item nav-link documentsFundNav active show"
                    data-toggle="tab"
                    href="#fd_02"
                    role="tab"
                    aria-controls="fd_02"
                    aria-selected="true"
                  >
                      {{$ntabItem->tab_name}}

                  </button>
                    @endforeach
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent-3">
                <div
                  class="tab-pane fade show active"
                  id="fd_02"
                  role="tabpanel"
                >
                  <div class="pdf-cards" id="formscard">
                      @foreach($ntabname as $ntabnameItem)
                    <a
                      href="{{$ntabnameItem->file}}"
                      target="_blank"
                      class="pdf-card"
                    >
                      <h4>{{$ntabnameItem->file_name}}</h4>
                    </a>
                      @endforeach
                  </div>
                </div>
              </div>
            </div>
            <div class="section-break"></div>
            <div class="fddoc__fund-factsheet">
              <div class="section-heading-with-bg">
                <h2>Selling Agent List</h2>
              </div>
              <div>
                <nav>
                  <div
                    class="nav nav-tabs documents-active-nav"
                    id="nav-tab-3"
                    role="tablist"
                  >
                      @foreach($mtab as $mtabItem)
                    <button
                      onclick="formAgent(event, 6)"
                      class="nav-item nav-link documentsFundNav active show"
                      data-toggle="tab"
                      href="#sal_01"
                      data-id="6"
                      role="tab"
                      aria-controls="fd_02"
                      aria-selected="true"
                    >
                        {{$mtabItem->tab_name}}
                    </button>
                      @endforeach
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent-5">
                  <div
                    class="tab-pane fade show active"
                    id="sal_01"
                    role="tabpanel"
                    aria-labelledby="sal-01-tab"
                  >
                    <div class="section-break"></div>
                    <div class="table_on_onerflow featureDescriptionTable">
                      <table class="table table-bordered selling-table">
                        <thead>
                          <tr>
                            <th scope="col">#SL</th>
                            <th scope="col">Selling Agent List</th>
                            <th scope="col">Address</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $listItem)
                          <tr>
                            <td>{{$listItem->id}}</td>
                            <td>{{$listItem->agent_list}}</td>
                            <td>{{$listItem->address}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
