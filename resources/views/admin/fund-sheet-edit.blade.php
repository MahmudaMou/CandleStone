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
                         <form action="{{ route('update.fund.sheet', $slng)}}"method="post">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}
                         <div class="form-group">
                            <label>ID</label>
                             <input type="text" name="id" value="{{$slng->id}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Features</label>
                             <input type="text" name="features" value="{{$slng->features}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                             <input type="text" name="description" value="{{$slng->description}}" class="form-control">
                        </div>

                          <button type="submit" class="btn btn-success">Update</button>
                          <a href="{{route('fund.sheet')}}" class="btn btn-danger">Cancel</a>
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