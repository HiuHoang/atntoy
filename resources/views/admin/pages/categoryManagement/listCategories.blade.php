@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                	<ul class="nav navbar-nav">
                        <h1>Manage Category Page</h1>
                        <li><a class="btn btn-success" href={{"addCategory"}}>Add New Category</a></li>
                	</ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
        	<table class="table table-striped">
            	<tr id="tbl-first-row">
                    <td width="25%">ID</td>
                    <td width="25%">Name</td>
                    <td width="25%">Description</td>
                    <td width="25%">Function</td>
                </tr>
                @foreach($category as $cat)
                    <tr>
                        <td>{{$cat->category_id}}</td>
                        <td>{{$cat->category_name}}</td>
                        <td>{{$cat->category_description}}</td>
                        <td>
                            <a class="btn btn-danger" href={{"deleteCategory/".$cat['category_id']}}>Delete</a>
                            <a class="btn btn-primary" href={{"updateCategory/".$cat['category_id']}}>Update</a>
                        </td>
                    </tr>
                @endforeach
			</table>
        </div>
    </div>
</div>
@stop
