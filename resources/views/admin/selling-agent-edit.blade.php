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
                         <form action="{{ route('update.selling.agent', $slng)}}"method="post">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}
                         <div class="form-group">
                            <label>#Sl</label>
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
                            <label>Selling Agent list</label>
                             <input type="text" name="agent_list" value="{{$slng->agent_list}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                             <input type="text" name="address" value="{{$slng->address}}" class="form-control">
                        </div>

                          <button type="submit" class="btn btn-success">Update</button>
                          <a href="{{route('selling.agent')}}" class="btn btn-danger">Cancel</a>
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