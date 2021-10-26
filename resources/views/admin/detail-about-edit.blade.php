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
                         <form action="{{ route('update.detail.about', $infm)}}"method="post">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}
                         <div class="form-group">
                            <label>Title</label>
                             <input type="text" name="title" value="{{$infm->title}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                             <input type="text" name="text" value="{{$infm->text}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>URL</label>
                             <input type="text" name="url" value="{{$infm->url}}" class="form-control">
                        </div>
                        <div class="form-group">
                        <select class="custom-select"  name="information_id"
                            style="width:150px;">
                         @foreach($informations as $item)
                   <option value="{{$item->id}}">{{$item->title}}</option>
                          @endforeach
                       </select> 
                    
                    
                    
                    </div>

                          <button type="submit" class="btn btn-success">Update</button>
                          <a href="{{route('detail.about')}}" class="btn btn-danger">Cancel</a>
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