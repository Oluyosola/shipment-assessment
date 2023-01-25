@extends('layouts.new_app')
@section('content')
@include('admin.sidebar')
<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Manage Shipment</h3>
                            {{-- <p class="text-subtitle text-muted">For user to check they list</p> --}}
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Shipment</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Manange Shipment
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Recieved By</th>
                                        <th>Location</th>
                                        <th>Location Region</th>
                                        <th>Query Category</th>
                                        <th>Date of Shipment</th>
                                        <th>Time Recieved</th>
                                        <th>Batch Number</th>
                                        <th>Temperature</th>
                                        <th>Number of Sample Recieved</th>
                                        <th>Number of Sample With Query</th>
                                        <th>Query Details</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shipments as $shipment)
                                        
                                    
                                    <tr>
                                        <td>{{$shipment->admin->userName}}</td>
                                        <td>{{$shipment->location->name}}</td>
                                        <td>{{$shipment->locationRegion->name}}</td>
                                        <td>{{$shipment->queryCategory->name}}</td> 
                                        <td>{{$shipment->date_of_shipment}}</td>
                                        <td>{{$shipment->time_received}}</td>
                                        <td>{{$shipment->batch_number}}</td>
                                        <td>{{$shipment->temperature}}</td> 
                                        <td>{{$shipment->number_of_sample}}</td>
                                        <td>{{$shipment->number_of_sample_with_query}}</td>
                                        <td>{{$shipment->query_details}}</td> 

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; Synlab</p>
                    </div>
                    <div class="float-end">
                        {{-- <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p> --}}
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    

@endsection