@extends('admin.layout.master')
@section('title')
     Dashboard
@endsection
@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Detail about
                <a href="{{route('add.detail.about')}}" class= "btn btn-success pull-right">ADD</a></h4>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                  <thead class=" text-primary">
                    <th>ID</th>
                      <th>Title</th>
                      <th>Text</th>
                      <th>URL</th>
                      <th>about ID</th>
                      <th>Edit</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                    @foreach($infm as $data)
                      <tr>
                    <td> {{$data->id}}</td>  
                     <td> {{$data->title}}</td>
                     <td> {{$data->text}}</td>
                     <td> {{$data->url}}</td>
                     <td> {{$data->about_id}}</td>
                        <td>
                          <a href="{{route('edit.detail.about',$data)}}" class= "btn btn-success">EDIT</a>
                        </td>
                        <td >
                        <form action="{{route('delete.detail.about',$data)}}" method="post">
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