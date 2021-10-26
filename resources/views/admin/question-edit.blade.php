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
                         <form action="{{ route('update.questions', $slng)}}"method="post">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}
                         <div class="form-group">
                            <label>ID</label>
                             <input type="text" name="id" value="{{$slng->id}}" class="form-control">
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
                        <div class="form-group">
                            <label>Question</label>
                             <input type="text" name="question" value="{{$slng->question}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Answer</label>
                            <textarea rows="10" cols="80" name="answer"  id="task-textarea" class="form-control">
                            {{$slng->answer}}
                            </textarea>
                            </div>

                          <button type="submit" class="btn btn-success">Update</button>
                          <a href="{{route('questions')}}" class="btn btn-danger">Cancel</a>
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
<script>
    ClassicEditor
        .create( document.querySelector( '#task-textarea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection