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
                         <form action="{{route('save.document.tab')}}" method="post">
                             @csrf

                             
                         <div class="form-group">
                            <label>ID</label>
                             <input type="text" name="id"  class="form-control">
                             @if($errors->has('id'))
                             <p>{{$errors->first('id')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>Tab Name</label>
                             <input type="text" name="tab_name"  class="form-control">
                             @if($errors->has('tab_name'))
                             <p>{{$errors->first('tab_name')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>Tab type</label>
                             <input type="text" name="tab_type"  class="form-control">
                             @if($errors->has('tab_type'))
                             <p>{{$errors->first('tab_type')}}</p>
                             @endif
                        </div>
                          <button type="submit" class="btn btn-success">ADD</button>
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