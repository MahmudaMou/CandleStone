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
                         <form action="{{route('savenote')}}" method="POST">
                             @csrf
                        
                             <div class="form-group">
                            <label>ID</label>
                             <input type="text" name="id"  class="form-control">
                             @if($errors->has('id'))
                             <p>{{$errors->first('id')}}</p>
                             @endif
                        </div>

                         <div class="form-group">
                            <label>Note Text</label>
                             <input type="text" name="note_text"  class="form-control">
                             @if($errors->has('note_text'))
                             <p>{{$errors->first('note_text')}}</p>
                             @endif
                        </div>
                          <button type="submit" class="btn btn-success">ADD</button>
                          <a href="{{route('note')}}" class="btn btn-danger">Cancel</a>
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