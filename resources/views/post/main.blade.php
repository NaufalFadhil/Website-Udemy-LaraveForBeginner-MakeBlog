@extends('admin.main')

@section('content')
<h1 class="mt-4">All Post</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Static Navigation</li>
</ol>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/post/create">Create New Post</a>
            </li>
        </ul>
    </div>
</nav>

{{--    @if(Session::has('category_update'))
        <div class="alert alert-success"><em>{!! session('category_update') !!}</em>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
        </div>
    @endif

@if(count($categories) > 0)
    <div class="panel panel-default">
        All Categories
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">
            <thead>
                <th>Category</th>
                <th>&nbsp;</th>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>
                        <div>{!! $category->name !!}</div>
                    </td>

                    <td><a href="{!! url('category/' . $category->id . '/edit') !!}" class="btn btn-success">Edit</a></td>
                    <td>
                        {!! Form::open(array('url'=>'category/' . $category->id , 'method'=>'DELETE')) !!}
                        {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}
                            <button class="btn btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
@endif --}}

@endsection