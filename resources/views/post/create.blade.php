@extends('admin.main')

@section('content')
    <h1 class="mt-4">Create New Post</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/post">View All Post</a>
            </li>
        </ul>
    </nav>

    {{-- {{ dd(Session::get('category_create')) }}
    @if(Session::has('category_create'))
        <div class="alert alert-success"><em>{!! session('category_create') !!}</em>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
        </div>
    @endif --}}


    <div class="panel-body">
        {{-- NGE LIAT FORM/INPUT YANG ERROR --}}
        @include('common.errors')

        {{--  MEMBUAT KATEGORI BARU  --}}
        {!! Form::open(array('url'=>'post', 'files'=>'true')) !!}

        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', $categories, array('class'=>'form-control')) !!}

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, array('class'=>'form-control')) !!}
        
        {!! Form::label('author', 'Author:') !!}
        {!! Form::text('author', null, array('class'=>'form-control')) !!}
        
        {!! Form::label('image', 'Image:') !!}
        {!! Form::file('image', null, array('class'=>'form-control')) !!}
        
        {!! Form::label('short_desc', 'Short Desc:') !!}
        {!! Form::textarea('short_desc', null, array('class'=>'form-control')) !!}
        
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description', null, array('class'=>'form-control')) !!}

        {!! Form::submit('Create Post', array('class'=>'secondary-cart-btn')) !!}
        {!! Form::close() !!}
    </div>
@endsection