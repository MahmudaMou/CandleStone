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
                         <form action="{{ route('update.portfolio.report', $infm)}}"method="post" enctype="multipart/form-data">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}
                             <div class="form-group">
                            <label>ID</label>
                             <input type="text" name="id" value="{{$infm->id}}" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Title</label>
                             <input type="text" name="title" value="{{$infm->title}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Year</label>
                             <input type="text" name="year" value="{{$infm->year}}" class="form-control">
                        </div>
                        <div class="input-group">
                            <label>Download</label>
                            <input type="file" name="download" class="custom-file-input<a class= "btn btn-primary" role="button">
                             @if($errors->has('download'))
                             <p>{{$errors->first('download')}}</p>
                             @endif
                        </div>

                          <button type="submit" class="btn btn-success">Update</button>
                          <a href="{{route('portfolio.report')}}" class="btn btn-danger">Cancel</a>
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