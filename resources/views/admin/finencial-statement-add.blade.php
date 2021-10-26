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
                         <form action="{{route('save.finencia.statement')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <div class="form-group">
                            <label>ID</label>
                             <input type="text" name="id"  class="form-control">
                             @if($errors->has('id'))
                             <p>{{$errors->first('id')}}</p>
                             @endif
                        </div>
                         <div class="form-group">
                            <label>Title</label>
                             <input type="text" name="title"  class="form-control">
                             @if($errors->has('title'))
                             <p>{{$errors->first('title')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>Year</label>
                             <input type="text" name="year"  class="form-control">
                             @if($errors->has('year'))
                             <p>{{$errors->first('year')}}</p>
                             @endif
                        </div>
                        <div class="input-group">
                            <label>Download</label>
                            <input type="file" name="download" class="custom-file-input<a class= "btn btn-primary" role="button">
                             @if($errors->has('download'))
                             <p>{{$errors->first('download')}}</p>
                             @endif
                        </div>

                          <button type="submit" class="btn btn-success">ADD</button>
                          <a href="{{route('finencia.statement')}}" class="btn btn-danger">Cancel</a>
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