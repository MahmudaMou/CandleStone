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
                            <form action="{{route('saveinfm')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
         <div class="form-group">
             <level>Title</level>
             <input type="text" name="title" class="form-control" placeholder="Enter title">
             @if($errors->has('title'))
                             <p>{{$errors->first('title')}}</p>
                             @endif
         </div>
         
         <div class="input-group">
             <div class="custome-file">
             <input type="file" name="image" class="custom-file-input<a class= "btn btn-primary" role="button">
             <level class="custom-file-level"></level>
             @if($errors->has('image'))
                             <p>{{$errors->first('image')}}</p>
                             @endif
               
         </div>
         <div>
             <button type="submit" class="btn btn-success">ADD</button>
                          <a href="{{route('infm')}}" class="btn btn-danger">Cancel</a></div>
    </form>



                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </div>



@endsection

@section('scripts')


@endsection
