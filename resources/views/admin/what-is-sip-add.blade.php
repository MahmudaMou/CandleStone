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
                         <form action="{{route('save.what.is.sip')}}" method="POST">
                             @csrf
                          
                             <div class="form-group">
                            <label>ID</label>
                             <input type="text" name="id"  class="form-control">
                             @if($errors->has('id'))
                             <p>{{$errors->first('id')}}</p>
                             @endif
                        </div>

                         <div class="form-group">
                            <label>Text</label>
                             <input type="text" name= "text"  class="form-control">
                             @if($errors->has('text'))
                             <p>{{$errors->first('text')}}</p>
                             @endif
                        </div>
                          <button type="submit" class="btn btn-success">ADD</button>
                          <a href="{{route('what.is.sip')}}" class="btn btn-danger">Cancel</a>
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