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
                        <h3>Edit The Item</h3>
                        
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <form action="{{route('sliderupdate',$performence)}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
         <div class="form-group">
             <level>Title</level>
             <input type="text" name="title" value="{{$performence->title}}" class="form-control">
             @if($errors->has('title'))
                             <p>{{$errors->first('title')}}</p>
                             @endif
         </div>
            <div class="form-group">
                <level>Status</level>
                <select name="is_active" class="form-control" name="is_active"style="width:150px;">
                    <option value ="0">Inactive</option>
                    <option value ="1">Active</option>
                    <option value =""></option>
                </select>


                @if($errors->has('is_active'))
                    <p>{{$errors->first('is_active')}}</p>
                @endif
            </div>
         <div class="input-group">
             <div class="custome-file">
             @if($performence->image)
          <p><img src="{{asset($performence->image)}}" alt="image" width=100 height=100></p>
                @endif
             <input type="file" name="image" class="custom-file-input<a class= "btn btn-primary" role="button">
             <level class="custom-file-level"></level>
             @if($errors->has('image'))
                             <p>{{$errors->first('image')}}</p>
                             @endif
             </div>
         </div>
         <button type="submit" class="btn btn-success">Update</button>
            <a href="/sliders" class="btn btn-danger">Cancel</a>
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
