@extends('admin.layout.master')

@section('title')
     Admin Dashboard 
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Dates
                <a href="{{route('adddate')}}" class= "btn btn-success  pull-right">ADD</a></h4>
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
                      Date
                      </th>
                      <th>
                            Edit
                      </th>
                      <th>
                            DELETE
                      </th>
                    </thead>
                    <tbody>
                    @foreach($date as $data)
                      <tr>
                        <td>
                          {{$data->id}}
                        </td>
                        <td>
                        {{$data->title}}
                        </td>
                        <td>
                        {{$data->date}}
                        </td>
                        <td>
                          <a href="{{route('editdate',$data->id)}}" class= "btn btn-success">EDIT</a>
                        </td>
                        <td >
                        <form action="{{route('deletedate',$data->id)}}" method="post">
                             {{ csrf_field() }}
                             {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">DELETE</button></form>
                        </td>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('scripts')
@endsection