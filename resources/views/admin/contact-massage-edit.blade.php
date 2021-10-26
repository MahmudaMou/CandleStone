@extends('admin.layout.master')

@section('title')
      Eidt Contact Massage
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
                         <form action="{{route('update.contact.massage',$note)}}"method="post">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}
                         <div class="form-group">
                            <label>Name</label>
                             <input type="text" name="name" value="{{$note->name}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                             <input type="text" name="email" value="{{$note->email}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                             <input type="text" name="phone" value="{{$note->phone}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                             <input type="text" name="massage" value="{{$note->massage}}" class="form-control">
                        </div>
                        

                          <button type="submit" class="btn btn-success">Update</button>
                          <a href="{{route('contact.massage')}}" class="btn btn-danger">Cancel</a>
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