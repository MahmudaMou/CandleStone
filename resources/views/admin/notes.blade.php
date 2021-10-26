@extends('admin.layout.master')

@section('title')
     Admin Dashboard 
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Notes
                <a href="{{route('addnote')}}" class= "btn btn-success  pull-right">ADD</a></h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                      ID
                      </th>
                      <th>
                      Note Text
                      </th>
                      <th class="text-right">
                            Edit
                      </th>
                      <th class="text-right">
                            DELETE
                      </th>
                    </thead>
                    <tbody>
                    @foreach($note as $data)
                      <tr>
                        <td>
                          {{$data->id}}
                        </td>
                        <td>
                        {{$data->note_text}}
                        </td>
                        <td>
                          <a href="{{route('editnote',$data->id)}}" class= "btn btn-success">EDIT</a>
                        </td>
                        <td >
                        <form action="{{route('deletenote',$data->id)}}" method="post">
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