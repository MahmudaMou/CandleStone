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
                         <form action="{{route('save.selling.agent')}}" method="post">
                             @csrf

                             
                         <div class="form-group">
                            <label>#Sl</label>
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
                            <label>Selling Agent list</label>
                             <input type="text" name="agent_list"  class="form-control">
                             @if($errors->has('agent_list'))
                             <p>{{$errors->first('agent_list')}}</p>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                             <input type="text" name="address"  class="form-control">
                             @if($errors->has('address'))
                             <p>{{$errors->first('address')}}</p>
                             @endif
                            </div>


                          <button type="submit" class="btn btn-success">ADD</button>
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