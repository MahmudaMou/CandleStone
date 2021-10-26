@extends('admin.layout.master')

@section('title')
     Dashboard Sliders
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Slider Images
                <a href="{{route('addslider')}}" class= "btn btn-success pull-right">ADD</a></h4>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                      </th>
                      <th>
                      Title
                      </th>
                      <th>
                      Image
                      </th>
                      <th>
                      Status
                      </th>
                      </th>
                      <th>
                            Edit
                      </th>
                      <th>
                            DELETE
                      </th>
                    </thead>
                    <tbody>
                    @foreach($galary as $data)
                      <tr>
                    <td> {{$data->id}}</td>
                     <td> {{$data->title}}</td>


                    <td><img src="{{asset($data->image)}}" alt="image" width=300 height=100></td>

                    <div>
                        <td><h4>
                          @if($data->is_active == 1)
                             <p>Active</p>

                          @else

                             <p>InActive</p>
                          @endif
                              </h4></td>
                    </div>
                    <td>
                          <a href="{{route('edit.slider',$data)}}" class= "btn btn-success">EDIT</a>
                        </td>
                        <td >
                        <form action="{{route('deletetslider',$data)}}" method="post">
                             {{ csrf_field() }}
                             {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">DELETE</button></form>
                        </td>

                    @endforeach
                          </tr>
                    </tbody>
                  </table>

@endsection

@section('scripts')
@endsection
