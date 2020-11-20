@extends('admin.main')

@section('content')
    <h1 class="mt-4">Create New Category</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit category</li>
    </ol>

    <div class="panel-body">
        {{-- NGE LIAT FORM/INPUT YANG ERROR --}}
        @include('common.errors')

        {{--  MEMBUAT KATEGORI BARU  --}}
        {!! Form::model($categories, array('route' => array('category.update', $categories->id), 'method'=>'PUT')) !!}

        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, array('class'=>'form-control')) !!}

        {!! Form::submit('Update Category', array('class'=>'secondary-cart-btn')) !!}
        {!! Form::close() !!}
    </div>
@endsection