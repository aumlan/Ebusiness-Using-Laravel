
@extends('layouts.adminMain')

@section('content')
            <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">RUNNING EVENT</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                        <div class="small text-white"><h1><%= runningEvent.name %> </h1></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">TOTAL USER</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                       
                                        <div class="small text-white"><h1><%= userInfo.length %> </h1></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Email</th>
                                                <th>type</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Email</th>
                                                <th>type</th>
                                            </tr>
                                        </tfoot>
                                    <tbody>
                                        <% userInfo.forEach(u=>{%>
                                            
                                            <tr>
                                                <td><%= u.user_id %> </td>
                                                <td><%= u.email %> </td>
                                                <td><%= u.type %> </td>
                                            </tr>
                                            <%}) %> 
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endSection
                