@extends('admin.main')

@section('content')
    <h1 class="mt-4">Static Navigation</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Static Navigation</li>
    </ol>

    <div class="card mb-4">
        <div class="card-body">
            <h1>Selamat Datang Administrator</h1>
        </div>
    </div>

    @if(Session::has('user_update'))
        <div class="alert alert-success"><em>{!! session('user_update') !!}</em>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
        </div>
    @endif

    <div style="height: 100vh"></div>
    <div class="card mb-4">
        <div class="card-body">
            When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.
        </div>
    </div>
@endsection