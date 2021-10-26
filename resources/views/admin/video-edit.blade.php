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
                            <form action="{{route('update.videos',$galary)}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
         <div class="form-group">
             <level>ID</level>
             <input type="text" name="id" value="{{$galary->id}}" class="form-control">
             @if($errors->has('id'))
                             <p>{{$errors->first('id')}}</p>
                             @endif
         </div>
         <div class="form-group">
             <level>Video Link</level>
             <input type="text" name="url" value="{{$galary->url}}" class="form-control">
             @if($errors->has('url'))
                             <p>{{$errors->first('url')}}</p>
                             @endif
         </div>
         <div class="form-group">
             <level>Note</level>
             <input type="text" name="note" value="{{$galary->note}}" class="form-control">
             @if($errors->has('note'))
                             <p>{{$errors->first('note')}}</p>
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
             @if($galary->video_img)
          <p><img src="{{asset($galary->video_img)}}" alt="video_img" width=100 height=100></p>
                @endif
             <input type="file" name="video_img" class="custom-file-input<a class= "btn btn-primary" role="button">
             <level class="custom-file-level"></level>
             @if($errors->has('video_img'))
                             <p>{{$errors->first('video_img')}}</p>
                             @endif
             </div>
         </div>
         <button type="submit" class="btn btn-success">Update</button>
            <a href="{{route('videos')}}" class="btn btn-danger">Cancel</a>
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
