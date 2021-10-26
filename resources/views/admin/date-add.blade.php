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
                         <form action="{{route('savedate')}}" method="POST">
                             @csrf

                             
                         <div class="form-group">
                            <label>Title</label>
                             <input type="text" name="title"  class="form-control">
                             @if($errors->has('title'))
                             <p>{{$errors->first('title')}}</p>
                             @endif
                             <div class="form-group">
                            <label>Date</label>
                             <input type="text" name="date"  class="form-control">
                             @if($errors->has('date'))
                             <p>{{$errors->first('date')}}</p>
                             @endif
                        </div>
                          <button type="submit" class="btn btn-success">ADD</button>
                          <a href="{{route('date')}}" class="btn btn-danger">Cancel</a>
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