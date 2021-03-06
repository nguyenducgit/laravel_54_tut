@extends('admin/layouts/default')

@section('content')
<h1 class="page-header">Dashboard</h1>
<div class="row placeholders">
    <div class="col-sm-12">
        <a href="{{ route('admin.setting.index') }}" class="btn btn-lg btn-danger"><i class="fa fa-cogs"></i> Settings</a>
        <a href="" class="btn btn-lg btn-info"><i class="fa fa-users"></i> Users</a>
        <a href="{{ route('admin.product.index') }}" class="btn btn-lg btn-success"><i class="fa fa-database"></i> Products</a>
        <a href="{{ route('admin.category.index') }}" class="btn btn-lg btn-default"><i class="fa fa-database"></i> Category</a>
        <a href="" class="btn btn-lg btn-default"><i class="fa fa-leaf"></i> Posts</a>
        <a href="{{ route('admin.order.index') }}" class="btn btn-lg btn-default"><i class="fa fa-database"></i> Orders</a>
    </div>
</div>
@stop