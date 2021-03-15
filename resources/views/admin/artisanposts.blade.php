@extends('layouts.admlayout')

@section('title')

Artisan Posts | MkulimaBora Admin
    
@endsection

@section('content')

  <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Artisan's Posts </h4>
          </div>
          <div class="card-body">
            <div class="table-responsive" style="height:500px;overflow-y:scroll">
              <table class="table">
                <thead class=" text-primary">
                    <th>
                        ID
                    </th>
                  <th>
                  Artisan's ID
                  </th>  
                  <th>
                    Artisan's Name
                    </th>  
                  <th>
                  title
                  </th>
                  <th>Body</th>
                  
                  <th class="text-right" >
                      DELETE
                    </th>
              </thead>
                <tbody>
                    @foreach($posts as $row)
                  <tr>
                  <td>{{$row->id}}</td>
                    <td>{{$row->user_id}} </td>
                    <td>{{$row->user->name}} </td>

                    <td>{{$row->title}} </td>
                  <td>{{$row->body}}</td>
                    <td class="text-right">
                      <form action="{{ url('artisanpost-delete/'.$row->id)}}" method="post">
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