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
                         <form action="{{ route('update.document.tab', $performence)}}"method="post">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}
                         <div class="form-group">
                            <label>ID</label>
                             <input type="text" name="id" value="{{$performence->id}}" class="form-control">
                             @if($errors->has('id'))
                             <p>{{$errors->first('id')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>Tab Name</label>
                             <input type="text" name="tab_name" value="{{$performence->tab_name}}" class="form-control">
                             @if($errors->has('tab_name'))
                             <p>{{$errors->first('tab_name')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>Tab Type</label>
                             <input type="text" name="tab_type" value="{{$performence->tab_type}}" class="form-control">
                             @if($errors->has('tab_type'))
                             <p>{{$errors->first('tab_type')}}</p>
                             @endif

                          <button type="submit" class="btn btn-success">Update</button>
                          <a href="{{route('document.tab')}}" class="btn btn-danger">Cancel</a>
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