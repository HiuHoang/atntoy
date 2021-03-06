@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                	<ul class="nav navbar-nav">
                        <h1 class="mt-4">Manage Product Page</h1>
                        <li><a class="btn btn-success" href="{{ url('addProduct') }}">Add New Product</a></li>
                	</ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
        	<table class="table table-striped">
            	<tr id="tbl-first-row">
                    <td width="16%">ID</td>
                    <td width="16%">Name</td>
                    <td width="16%">Description</td>
                    <td width="16%">Price</td>
                    <td width="16%">Image</td>
                    <td width="16%">Operation</td>
                </tr>
                @foreach($product as $cat)
                    <tr class="">
                        <td>{{$cat->product_id + 1}}</td>
                        <td>{{$cat->product_name}}</td>
                        <td>{{$cat->product_description}}</td>
                        <td>{{$cat->product_price}}</td>
                        <td>
                            <img  src="{{ asset('img/'. $cat->product_image) }}" class="img-fluid img-thumbnail" alt="">
                        </td>
                        <td><a class="btn btn-danger" href={{"deleteProduct/".$cat['product_id']}}>Delete</a>
                            <a class="btn btn-primary" href={{"updateProduct/".$cat['product_id']}}>Update</a></td>
                    </tr>
                @endforeach
			</table>
            <div aria-label="Page navigation">
            	<ul class="pagination">
                	<li>
                    	<a aria-label="Previous" href="#">
                        	<span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li>
                    	<a href="#" aria-label="Next">
        					<span aria-hidden="true">&raquo;</span>
      					</a>
      				</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop
