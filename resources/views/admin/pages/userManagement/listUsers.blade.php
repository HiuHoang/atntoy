@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                	<ul class="nav navbar-nav">
                        <h1 class="mt-4">Manage User Page</h1>
                        <li><a class="btn btn-success" href={{"addUser"}}>Add New User</a></li>
                	</ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
        	<table class="table table-striped">
            	<tr id="tbl-first-row">
                    <td width="20%">STT</td>
                    <td width="20%">Username</td>
                    <td width="20%">Email</td>
                    <td width="20%">Role</td>
                    <td width="20%">Operation</td>
                </tr>
                @foreach($user as $users)
                    <tr>
                        <td>{{$users->user_id + 1}}</td>
                        <td>{{$users->username}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->role}}</td>
                        <td><a class="btn btn-danger" href={{"deleteUser/".$users['user_id']}}>Delete</a>
                            <a class="btn btn-primary" href={{"updateUser/".$users['user_id']}}>Update</a></td>
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
