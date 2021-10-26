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
                      <h3>Add an Item</h3>
                  </div>
                  <div class="card-body">
                     <div class="row">
                         <div class="col-md-6">
                         <form action="{{route('save.fund.perfprmance')}}" method="post">
                             @csrf

                             
                         <div class="form-group">
                            <label>Fund Name</label>
                             <input type="text" name="fund_name"  class="form-control">
                             @if($errors->has('fund_name'))
                             <p>{{$errors->first('fund_name')}}</p>
                             @endif
                        </div>
                        
                        <div class="form-group">
                            <label>NAV as on</label>
                             <input type="text" name="nav_as_on"  class="form-control">
                             @if($errors->has('nav_as_on'))
                             <p>{{$errors->first('nav_as_on')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>NAV Per Unit(BDT)</label>
                             <input type="text" name="nav_per_unit"  class="form-control">
                             @if($errors->has('nav_per_unit'))
                             <p>{{$errors->first('nav_per_unit')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>Investor's Buy Price(BDT)</label>
                             <input type="text" name="investor_buy_Price"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Investor's Sale Price(BDT)</label>
                             <input type="text" name="investor_sale_price"  class="form-control">
                        </div>

                          <button type="submit" class="btn btn-success">ADD</button>
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