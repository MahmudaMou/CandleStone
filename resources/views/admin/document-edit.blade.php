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
                         <form action="{{ route('update.documents', $infm)}}"method="post">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}
                             <div class="form-group">
                            <label>ID</label>
                             <input type="text" name="id" value="{{$infm->id}}" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Title</label>
                             <input type="text" name="file_name" value="{{$infm->file_name}}" class="form-control">
                        </div>
                        <div>
                        <label>View Privious File:</label>
                          <a href="{{asset($infm->file)}}" target="_blank" class= "btn btn">View</a>
                         </div>
                        <div class="input-group">
                            <label>File</label>
                            <input type="file" name="file" class="custom-file-input<a class= "btn btn-primary" role="button">
                             @if($errors->has('file'))
                             <p>{{$errors->first('file')}}</p>
                             @endif
                        </div>
                        
                        <div class="form-group">
                            <label>Tab Name</label>
                        <select class="custom-select"  name="tab_id"
                            style="width:150px;">
                         @foreach($informations as $item)

                   <option value="{{$item->id}}">{{$item->tab_name}}</option>
                          @endforeach
                       </select>
                    </div>

                          <button type="submit" class="btn btn-success">Update</button>
                          <a href="{{route('documents')}}" class="btn btn-danger">Cancel</a>
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