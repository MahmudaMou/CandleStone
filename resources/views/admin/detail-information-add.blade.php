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
                         <form action="{{route('save.detail.information')}}" method="post">
                             @csrf

                             
                         <div class="form-group">
                            <label>Title</label>
                             <input type="text" name="title"  class="form-control">
                             @if($errors->has('title'))
                             <p>{{$errors->first('title')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                             <input type="text" name="text"  class="form-control">
                             @if($errors->has('text'))
                             <p>{{$errors->first('text')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>URL</label>
                             <input type="text" name="url"  class="form-control">
                             @if($errors->has('url'))
                             <p>{{$errors->first('url')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                        <select class="custom-select"  name="information_id"
                            style="width:150px;">
                         @foreach($informations as $item)
                   <option value="{{$item->id}}">{{$item->title}}</option>
                          @endforeach
                       </select> 
                    
                    
                    
                    </div>


                          <button type="submit" class="btn btn-success">ADD</button>
                          <a href="{{route('detail.information')}}" class="btn btn-danger">Cancel</a>
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