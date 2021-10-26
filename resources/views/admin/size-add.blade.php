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
                         <form action="{{route('savesize')}}" method="POST">
                             @csrf

                             
                         <div class="form-group">
                            <label>Title</label>
                             <input type="text" name="title"  class="form-control">
                             @if($errors->has('title'))
                             <p>{{$errors->first('title')}}</p>
                             @endif
                             <div class="form-group">
                            <label>Amount</label>
                             <input type="text" name="amount"  class="form-control">
                             @if($errors->has('amount'))
                             <p>{{$errors->first('amount')}}</p>
                             @endif
                        </div>
                          <button type="submit" class="btn btn-success">ADD</button>
                          <a href="{{route('size')}}" class="btn btn-danger">Cancel</a>
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