@extends('layouts.admin-master')
@section('title') Product Add @endsection
@section('content')

<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="#">Star Hair BD</a>
    <span class="breadcrumb-item active">Product</span>
</nav>

<div class="sl-pagebody">
    <!-- form -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-lg-8">
            <form class="form-horizontal company-form" id="registration" method="post" action="{{ @$data? route('product.update',@$data->product_name_id):route('product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="card-title card_top_title">Add product</h3>
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

                        <div class="form-group row {{ $errors->has('product_name') ? ' has-error' : '' }}">
                            <label for="ProductType" class="col-sm-3 col-form-label">Product Name :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="product_name" value="{{(@$data)? @$data->product_name: old('product_name') }}" id="ProductType" placeholder="Product Name">
                                @if ($errors->has('product_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('product_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row {{ $errors->has('product_type_id') ? ' has-error' : '' }}">
                            <label for="ProductType" class="col-sm-3 col-form-label">Product Type :</label>
                            <div class="col-sm-7">
                                <select class="form-control" name="product_type_id" id="">
                                    <option value="">Select Type</option>
                                    @foreach($allType as $type)
                                    <option value="{{$type->product_type_id }}" {{($type->product_type_id==@$data->product_type_id)? 'selected':''}}>{{$type->product_type_name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('product_type_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('product_type_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row {{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="ProductType" class="col-sm-3 col-form-label">Product Code :</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="code" value="{{(@$data)? @$data->code: old('code') }}" id="ProductType" placeholder="Product code">
                                @if($errors->has('code'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('code')}}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row {{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="ProductType" class="col-sm-3 col-form-label">Product Price :</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="price" value="{{(@$data)? @$data->price: old('price') }}" placeholder="Product price">
                                @if($errors->has('price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('price')}}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="ProductType" class="col-sm-3 col-form-label">Description :</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" name="description" id="" cols="30" rows="5">{{(@$data)? @$data->description: old('description') }}</textarea>
                                @if($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('description')}}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row {{ $errors->has('img') ? ' has-error' : '' }}">
                            <label for="ProductType" class="col-sm-3 col-form-label">Image:</label>
                            <div class="col-sm-7">
                                <input type="file" class="form-control" name="img">
                                @if($errors->has('img'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('img')}}</strong>
                                </span>
                                @endif
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
                            <h3 class="card-title card_top_title"> Product List</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body card_form">

                    <div class="table-responsive">
                        <table id="alltableinfo" class="table table-bordered custom_table mb-0">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Type Name</th>
                                    <th>Product Name</th>
                                    <th>Product code</th>
                                    <th>Product Price</th>
                                    <th>Description</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allProduct as $item)
                                <tr>
                                    <td> <img height="60" width="45" src="{{ asset($item->imagePath) }}" alt="No Image" width="100"> </td>
                                    <td>{{ $item->product->product_type_name }}</td>
                                    <td>{{ $item->product_name }}</td>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="{{ route('product.edit',$item->product_name_id) }}" class="btn btn-primary mr-2">EDIT</a>
                                        <a href="{{ route('product.delete',$item->product_name_id) }}" id="confirm" class="btn btn-primary">DELETE</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                    </div>


                </div>

            </div>
        </div>
    </div>


    <!-- end list -->
</div>
@endsection