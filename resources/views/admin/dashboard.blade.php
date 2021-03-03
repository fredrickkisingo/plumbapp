@extends('layouts.admlayout')

@section('title')
        Dashboard | PLUMBAPP
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                <h4 class="card-title"> PLUMBAPP Admin Panel</h4>
                </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                Name
                                </th>
                                <th>
                                Country
                                </th>
                                <th>
                                City
                                </th>
                                <th>
                                Role
                                </th>
                            </thead>
                            <tbody>
                                    <tr>
                                    <td>
                                        Fredrick Kisingo
                                    </td>
                                    <td>
                                    Kenya
                                    </td>
                                    <td>
                                        Nairobi
                                    </td>
                                    <td>
                                    Administrator
                                    </td>
                                    </tr>             
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