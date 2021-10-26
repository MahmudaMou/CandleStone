@extends('admin.layout.master')

@section('title')
     Admin Dashboard 
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Contact Message    
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                      ID
                      </th>
                      <th>
                     Name
                      </th>
                      <th class="text-right">
                            Email
                      </th>
                      <th class="text-right">
                            Phone
                      </th>
                      <th class="text-right">
                            Message
                      </th>
                    </thead>
                    <tbody>
                    @foreach($note as $data)
                      <tr>
                        <td>
                          {{$data->id}}
                        </td>
                        <td>
                        {{$data->name}}
                        </td>
                        <td>
                        {{$data->email}}
                        </td>
                        <td>
                        {{$data->phone}}
                        </td>
                        <td>
                        {{$data->massage}}
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