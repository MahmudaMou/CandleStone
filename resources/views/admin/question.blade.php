@extends('admin.layout.master')
@section('title')
     Dashboard
@endsection
@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> FREQUENTLY ASKED QUESTION
                <a href="{{route('add.questions')}}" class= "btn btn-success pull-right">ADD</a></h4>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                  <thead class=" text-primary">
                    <th>ID</th>
                    <th>Tab Name</th>
                      <th>Questions</th>
                      <th>Answers</th>
                      <th>Edit</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                    @foreach($slng as $data)
                      <tr>
                    <td> {{$data->id}}</td>
                    <td> {{$data->tabs->tab_name}}</td>  
                     <td> {{$data->question}}</td>
                     <td> {!!$data->answer!!}</td>
                        <td>
                          <a href="{{route('edit.questions',$data)}}" class= "btn btn-success">EDIT</a>
                        </td>
                        <td >
                        <form action="{{route('delete.questions',$data)}}" method="post">
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