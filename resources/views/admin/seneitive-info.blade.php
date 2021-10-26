@extends('admin.layout.master')
@section('title')
     Dashboard
@endsection
@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> PRICE SENSITIVE INFORMATION
                <a href="{{route('add.sensitive.info')}}" class= "btn btn-success pull-right">ADD</a></h4>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="example" class="display">
                  <thead class="text-primary">
                    <th>ID</th>
                     <th>Year</th>
                      <th>Title</th>
                      <th>Download</th>
                      <th>Edit</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                    @foreach($infm as $data)
                      <tr>
                    <td> {{$data->id}}</td> 
                    <td> {{$data->year}}</td> 
                     <td> {{$data->title}}</td>
                     
                     <td><a href="{{asset($data->download)}}" target="_blank" class= "btn btn-success">View file</a></td>
                        <td>
                          <a href="{{route('edit.sensitive.info',$data)}}" class= "btn btn-success">EDIT</a>
                        </td>
                        <td >
                        <form action="{{route('delete.sensitive.info',$data)}}" method="post">
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
<script>
  $(document).ready( function () {
    $('#example').DataTable();
} );
  </script>
@endsection