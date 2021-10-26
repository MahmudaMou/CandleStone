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
                         <form action="{{route('update.key.features',$note)}}"method="post">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}

                             <div class="form-group">
                            <label>ID</label>
                             <input type="text" name="id" value="{{$note->id}}" class="form-control">
                             @if($errors->has('id'))
                             <p>{{$errors->first('id')}}</p>
                             @endif
                        </div>
                         <div class="form-group">
                            <label>KEY FEATURES</label>
                             <input type="text" name="key_features" value="{{$note->key_features}}" class="form-control">
                             @if($errors->has('key_features'))
                             <p>{{$errors->first('key_features')}}</p>
                             @endif
                        </div>
                        

                          <button type="submit" class="btn btn-success">Update</button>
                          <a href="{{route('key.features')}}" class="btn btn-danger">Cancel</a>
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