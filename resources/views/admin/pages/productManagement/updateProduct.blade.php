@extends('admin.layouts.master')
@section('content')

<div class="container">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	{{-- <nav class="navbar navbar-default">
  				<div class="container-fluid">
                	<ul class="nav navbar-nav">
                        <li><a href={{"listProducts"}}>Products</a></li>
                	</ul>
                </div>
            </nav> --}}
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <!-- Navbar Brand-->
                <a class="navbar-brand ps-3" href="">SEMI PROJECT</a>
                <!-- Sidebar Toggle-->
                <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                <!-- Navbar Search-->
                <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Settings</a></li>
                            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <form action="" method="post">
                                @csrf
                                <button type="submit">Logout</button>
                                </form></li>
                        </ul>
                    </li>
                </ul>
            </nav> 
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
        	<form action="{{ url('updateProduct') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$data['product_id']}}">
                </div>
                <div class="form-group">
                	<label>Name</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Username" value="{{$data['product_name']}}" required />
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="product_description" class="form-control" placeholder="Description" value="{{$data['product_description']}}" required />
                </div>
                <div class="form-group">
                	<label>Price</label>
                    <input type="text" name="product_price" class="form-control" placeholder="Product's price" value="{{$data['product_price']}}" required />
                </div>
                <div class="form-group">
                	<label>Image</label>
                    <input type="file" name="product_image" class="form-control" placeholder="Product's image" required />
                </div>
                <div class="form-group">
                	<label>Category</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->category_id}}">{{$category->category_id}}-{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" name="submit" value="Save" class="btn btn-primary" />
            </form>
        </div>
    </div>
</div>
@stop
