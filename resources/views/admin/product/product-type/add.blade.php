@extends('layouts.admin-master')
@section('title') Product Add @endsection
@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="#">Star Hair BD</a>
    <span class="breadcrumb-item active">Product Type</span>
</nav>

<div class="sl-pagebody">
    <!-- form -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-lg-8">
            <form class="form-horizontal company-form" id="registration" method="post" action="{{ (@$data)? route('product-type.update'):route('product-type.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="card-title card_top_title">Add product Type</h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="card-body card_form">

                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-7">
                                @if(Session::has('success'))
                                <div class="alert alert-success alertsuccess" role="alert">
                                    <strong>Success!</strong> {{Session::get('success')}}
                                </div>
                                @endif
                                @if(Session::has('error'))
                                <div class="alert alert-danger alerterror" role="alert">
                                    <strong>Opps!</strong> {{Session::get('error')}}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                        <div class="form-group row {{ $errors->has('')? 'has-error' : 'product_type_name' }}">
                            <label for="ProductType" class="col-sm-3 col-form-label">Product Type Name :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="product_type_name" value="{{(@$data)? @$data->product_type_name: old('product_type_name') }}" id="ProductType" placeholder="Product Type Name">
                                <input type="hidden" name="id" value="{{@$data->product_type_id ?? ''}}" id="ProductType" placeholder="Product Type Name">
                                @if($errors->has('product_type_name'))
                                <samp class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('product_type_name')}}</strong>
                                </samp>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ProductType" class="col-sm-3 col-form-label">Product Type Image :</label>
                            <div class="col-sm-7">
                                <input type="file" class="form-control" name="product_type_photo" id="ProductTypeImage">

                            </div>
                        </div>



                    </div>
                    <div class="card-footer card_footer_button text-center">
                        <button type="submit" id="onSubmit" onclick="formValidation();" class="btn btn-primary waves-effect">{{ (@$data)?'UPDATE':'SAVE' }}</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
    <!-- list -->


    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="card-title card_top_title"> Product Type List</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body card_form">

                    <div class="table-responsive">
                        <table id="alltableinfo" class="table table-bordered custom_table mb-0">
                            <thead>
                                <tr>
                                    <th>Product Type Name</th>
                                    <th>Image</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allType as $item)
                                <tr>
                                    <td>{{ $item->product_type_name }}</td>
                                    <td> <img height="40" src="{{ asset($item->product_type_photo)}}" alt=""> </td>
                                    <td>
                                        <a href="{{ route('product-type.edit',$item->product_type_id) }}" class="btn btn-primary mr-2">EDIT</a>
                                        <a href="{{ route('product-type.delete',$item->product_type_id) }}" id="confirm" class="btn btn-primary">DELETE</a>

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