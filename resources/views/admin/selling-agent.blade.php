@extends('admin.layout.master')
@section('title')
     Dashboard
@endsection
@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> SELLING AGENT LIST
                <a href="{{route('add.selling.agent')}}" class= "btn btn-success pull-right">ADD</a></h4>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                  <thead class=" text-primary">
                    <th>#Sl</th>
                    <th>Tab Name</th>
                      <th>Selling Agent list</th>
                      <th>Address</th>
                      <th>Edit</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                    @foreach($slng as $data)
                      <tr>
                    <td> {{$data->id}}</td>
                    <td> {{$data->tabs->tab_name}}</td>  
                     <td> {{$data->agent_list}}</td>
                     <td> {{$data->address}}</td>
                        <td>
                          <a href="{{route('edit.selling.agent',$data)}}" class= "btn btn-success">EDIT</a>
                        </td>
                        <td >
                        <form action="{{route('delete.selling.agent',$data)}}" method="post">
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