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
                         <form action="{{route('save.fund.sheet')}}" method="post">
                             @csrf

                             
                         <div class="form-group">
                            <label>ID</label>
                             <input type="text" name="id"  class="form-control">
                             @if($errors->has('id'))
                             <p>{{$errors->first('id')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>	features</label>
                             <input type="text" name="features"  class="form-control">
                             @if($errors->has('features'))
                             <p>{{$errors->first('features')}}</p>
                             @endif
                                  </div>
                    
                        <div class="form-group">
                            <label>	Description</label>
                             <input type="text" name="description"  class="form-control">
                             @if($errors->has('description'))
                             <p>{{$errors->first('description')}}</p>
                             @endif
                        </div>
                        


                          <button type="submit" class="btn btn-success">ADD</button>
                          <a href="{{route('fund.sheet')}}" class="btn btn-danger">Cancel</a>
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