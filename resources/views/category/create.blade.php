@extends('admin.main')

@section('content')
    <h1 class="mt-4">Create New Category</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>


    {{-- {{ dd(Session::get('category_create')) }} --}}
    @if(Session::has('category_create'))
        <div class="alert alert-success"><em>{!! session('category_create') !!}</em>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
        </div>
    @endif


    <div class="panel-body">
        {{-- NGE LIAT FORM/INPUT YANG ERROR --}}
        @include('common.errors')

        {{--  MEMBUAT KATEGORI BARU  --}}
        {!! Form::open(array('url'=>'category')) !!}

        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, array('class'=>'form-control')) !!}

        {!! Form::submit('Create Category', array('class'=>'secondary-cart-btn')) !!}
        {!! Form::close() !!}
    </div>
@endsection