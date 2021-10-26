@extends('admin.layout.master')

@section('id')
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
                         <form action="{{route('save.questions')}}" method="post">
                             @csrf

                             
                         <div class="form-group">
                            <label>ID</label>
                             <input type="text" name="id"  class="form-control">
                             @if($errors->has('id'))
                             <p>{{$errors->first('id')}}</p>
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
                    
                        <div class="form-group">
                            <label>Question</label>
                             <input type="text" name="question"  class="form-control">
                             @if($errors->has('question'))
                             <p>{{$errors->first('question')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>answer</label>
                            <textarea rows="10" cols="80" name="answer" id="task-textarea" class="form-control">
                
            </textarea>
                             
                             @if($errors->has('answer'))
                             <p>{{$errors->first('answer')}}</p>
                             @endif
                            </div>


                          <button type="submit" class="btn btn-success">ADD</button>
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