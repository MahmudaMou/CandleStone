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
                         <form action="{{route('undatenote',$note)}}"method="post">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}
                         <div class="form-group">
                            <label>Note Text</label>
                             <input type="text" name="note_text" value="{{$note->note_text}}" class="form-control">
                        </div>
                        

                          <button type="submit" class="btn btn-success">Update</button>
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