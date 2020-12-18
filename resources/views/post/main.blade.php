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

    @if(Session::has('post_create'))
    <div class="alert alert-success"><em>{!! session('post_create') !!}</em>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
    </div>
    @endif

    @if(Session::has('post_update'))
        <div class="alert alert-success"><em>{!! session('post_update') !!}</em>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
        </div>
    @endif

    @if(Session::has('post_delete'))
    <div class="alert alert-success"><em>{!! session('post_delete') !!}</em>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
    </div>
    @endif

    @if(count($posts) > 0)
    <div class="panel panel-default">
        All Posts
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">
            <thead>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Image</th>
                <th>Description</th>
                <th>&nbsp;</th>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>
                        <div>{!! $post->title !!}</div>
                    </td>
                    <td>
                        <div>{!! $post->author !!}</div>
                    </td>
                    <td>
                        <div>{!! $post->category_id !!}</div>
                    </td>
                    <td>
                        <div>{!! Html::image("/img/posts/".$post->image, $post->title, array('width'=>'60')) !!}</div>
                    </td>
                    <td>
                        <div>{!! $post->short_desc !!}</div>
                    </td>
                    <td>
                        <div>{!! $post->name !!}</div>
                    </td>

                    <td><a href="{!! url('post/' . $post->id . '/edit') !!}" class="btn btn-success">Edit</a></td>
                    <td>
                        {!! Form::open(array('url'=>'post/' . $post->id , 'method'=>'DELETE')) !!}
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
@endif

@endsection