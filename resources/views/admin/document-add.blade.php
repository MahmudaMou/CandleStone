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
                      <h3>Add an Itema</h3>
                  </div>
                  <div class="card-body">
                     <div class="row">
                         <div class="col-md-6">
                         <form action="{{route('save.documents')}}" method="post" enctype="multipart/form-data">
                             @csrf


                         <div class="form-group">
                            <label>id</label>
                             <input type="text" name="id"  class="form-control">
                             @if($errors->has('id'))
                             <p>{{$errors->first('id')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>File Name</label>
                             <input type="text" name="file_name"  class="form-control">
                             @if($errors->has('file_name'))
                             <p>{{$errors->first('file_name')}}</p>
                             @endif
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




                          <button type="submit" class="btn btn-success">ADD</button>
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
