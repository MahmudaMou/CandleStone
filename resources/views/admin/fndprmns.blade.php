@extends('admin.layout.master')

@section('title')
     Admin Dashboard 
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">FUND PERFORMANCE
                <a href="{{route('add.fund.perfprmance')}}" class= "btn btn-success  pull-right">ADD</a></h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                      ID
                      </th>
                      <th>
                      Fund Name
                      </th>
                      <th>
                      NAV as on
                      </th>
                      <th>
                      NAV Per Unit(BDT)
                      </th>
                      <th>
                        Investor's Buy Price(BDT)
                      </th>
                      <th>
                       Investor's Sale Price(BDT)
                      </th>
                      <th class="text-right">
                            Edit
                      </th>
                      <th class="text-right">
                            DELETE
                      </th>
                    </thead>
                    <tbody>
                    @foreach($fund as $data)
                      <tr>
                        <td>
                          {{$data->id}}
                        </td>
                        <td>
                        {{$data->fund_name}}
                        </td>
                        <td>
                        {{$data->nav_as_on}}
                        </td>
                        <td>
                        {{$data->nav_per_unit}}
                        </td>
                        <td>
                        {{$data->investor_buy_Price}}
                        </td>
                        <td>
                        {{$data->investor_sale_price}}
                        </td>
                        <td>
                          <a href="{{route('edit.fund.perfprmance',$data->id)}}" class= "btn btn-success">EDIT</a>
                        </td>
                        <td >
                        <form action="{{route('delete.fund.perfprmance',$data->id)}}" method="post">
                             {{ csrf_field() }}
                             {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">DELETE</button></form>

                        </td>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('scripts')
@endsection