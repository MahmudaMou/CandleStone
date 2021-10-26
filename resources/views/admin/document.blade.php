@extends('admin.layout.master')
@section('title')
     Dashboard
@endsection
@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">DOCUMENTS
                <a href="{{route('add.documents')}}" class= "btn btn-success pull-right">ADD</a></h4>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                  <thead class=" text-primary">
                    <th>ID</th>
                      <th>File Name</th>
                      <th>Tab Name</th>

                      <th>File</th>
                      <th>Edit</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                    @foreach($infm as $data)
                      <tr>
                    <td> {{$data->id}}</td>
                     <td> {{$data->file_name}}</td>
                     <td> {{$data->tabs->tab_name}}</td>


                     <td>
                          <a href="{{asset($data->file)}}" target="_blank" class= "btn btn-success">View</a>
                        </td>
                        <td>
                          <a href="{{route('edit.documents',$data)}}" class= "btn btn-success">EDIT</a>
                        </td>
                        <td >
                        <form action="{{route('delete.documents',$data)}}" method="post">
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
