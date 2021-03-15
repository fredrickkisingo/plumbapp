@extends('layouts.admlayout')

@section('title')

Registered Users| MkulimaBora Admin
    
@endsection

@section('content')

  <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Registered Users</h4>
            <h6> Usertype = 1-Admin, 5-Artisan,4-Customer</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive" style="height:500px;overflow-y:scroll">
              <table class="table">
                <thead class=" text-primary">
                    <th>
                        ID
                    </th>
                  <th>
                    Name
                  </th>
                  
                  <th>
                  Email
                  </th>
                  <th>Usertype/Role</th>
                  <th class="text-right">
                    EDIT
                  </th>
                  <th class="text-right" >
                      DELETE
                    </th>
              </thead>
                <tbody>
                    @foreach($users as $row)
                  <tr>
                  <td>{{$row->id}}</td>
                    <td>{{$row->name}} </td>
                    <td>{{$row->email}} </td>
                  <td>{{$row->role_id}}</td>
                    <td class="text-right">
                    <a href="/role-edit/{{ $row->id}}" class="btn btn-success"> EDIT</a>
                    </td>
                    <td class="text-right">
                      <form action="{{ url('role-delete/'.$row->id)}}" method="post">
                        {{csrf_field() }}
                        {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger registdeletebtn"> DELETE</button>
                        </form></button>
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