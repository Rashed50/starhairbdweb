@extends('layouts.admin-master')
@section('title') Product Add @endsection
@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="#">Star Hair BD</a>
    <span class="breadcrumb-item active">Message</span>
</nav>

<div class="sl-pagebody">
 
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="card-title card_top_title"> MessageList</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body card_form">

                    <div class="table-responsive">
                        <table id="alltableinfo" class="table table-bordered custom_table mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <!-- <th>Address</th> -->
                                    <th>Meswsage</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($messages as $item)
                                <tr>
                                    <td>{{ $item->full_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <!-- <td>{{ $item->address }}</td> -->
                                    <td>{{ $item->message }}</td>
                                   <td>
                                        <a href="#" id="confirm" class="btn btn-primary">DELETE</a>

                                    </td>
                                </tr>
                                @empty

                                <p style="color:red"> Data Not found </p>
                                @endforelse
                            </tbody>

                    </div>


                </div>

            </div>
        </div>
    </div>


    <!-- end list -->
</div>
@endsection