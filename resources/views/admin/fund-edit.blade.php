@extends('admin.layout.master')

@section('title')
      Eidt User
@endsection

@section('content')
  <div class="container">
      <div class = "row">
          <dive class = "col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h3>Edit The Items</h3>
                  </div>
                  <div class="card-body">
                     <div class="row">
                         <div class="col-md-6">
                         <form action="{{ route('update.fund.perfprmance', $performence)}}"method="post">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}
                         <div class="form-group">
                            <label>Fund Name</label>
                             <input type="text" name="fund_name" value="{{$performence->fund_name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NAV as on</label>
                             <input type="text" name="nav_as_on" value="{{$performence->nav_as_on}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>NAV Per Unit(BDT)</label>
                             <input type="text" name="nav_per_unit" value="{{$performence->nav_per_unit}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Investor's Buy Price(BDT)</label>
                             <input type="text" name="investor_buy_Price" value="{{$performence->investor_buy_Price}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Investor's Sale Price(BDT)</label>
                             <input type="text" name="investor_sale_price" value="{{$performence->investor_sale_price}}" class="form-control">
                        </div>

                          <button type="submit" class="btn btn-success">Update</button>
                          <a href="{{route('fund.perfprmance')}}" class="btn btn-danger">Cancel</a>
                        </form>

                         </div>
                     </div>
                      
                  </div>
              </div>
        </div>
      </div>
   </div>

@endsection

@section('scripts')


@endsection