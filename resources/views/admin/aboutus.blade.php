@extends('layouts.admlayout')

@section('title')
        About Us | PLUMBAPP
@endsection

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add About Us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
                       
        </div>
            <form action="/save-aboutus" method="POST">
                {{csrf_field()}}
                <div class="modal-body">
                        <div class="mb-3">
                        <label for="title" class="col-form-label">Title:</label>
                        <input type="text" name="title" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="sub-title" class="col-form-label">Sub-title:</label>
                            <input type="text" name="subtitle" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description:</label>
                        <textarea name="description" class="form-control" id="message-text"></textarea>
                        </div>   
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
                </div>
        </form>
   
      </div>
    </div>
  </div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                <h4 class="card-title"> About Us
                                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >ADD</button>

                </h4>
              
         </div>

         <style>
             .w-10p{
                 width:10% !important;
             }
             </style>
            <div class="card-body" id="scrollable"style="height:500px;overflow-y:scroll">
                <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th class="w-10p">
                               Id
                                </th>
                                <th class="w-10p">
                                Title
                                </th>
                                <th class="w-10p">
                               Subtitle
                                </th>
                                <th class="w-10p">
                                Description
                                </th>
                                <th class="text-right">
                                    EDIT
                                  </th>
                                  <th class="text-right" >
                                      DELETE
                                    </th>
                            </thead>
                            <tbody>
                                @foreach($aboutus as $data)
                                    <tr>
                                    <td>
                                      {{$data->id}}              
                                      </td>
                                    <td>
                                        {{$data->title}}              
                                    </td>
                                    <td>
                                        {{$data->subtitle}}              

                                    </td>
                                    <td>
                                        <div style="height:80px; overflow:hidden">
                                        {{$data->description}}   
                                        </div>           
                                    </td>
                                    <td class="text-right"><a href="{{url('about-us/'.$data->id)}}" class="btn btn-success">EDIT</a>
                                    </td> 
                                 </td>
                                <td class="text-right">
                                    <form action="{{ url('delete-aboutus/'.$data->id)}}" method="post">
                                    {{csrf_field() }}
                                    {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger"> DELETE</button>
                                    </form></button>
                                </td>    
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