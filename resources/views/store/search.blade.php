@extends('layouts.app')

@section('content')
    {{-- <h1 class="my-4"> {!! $category->name !!}
    <small>Secondary Text</small>
    </h1> --}}

    <!-- Blog Entries Column -->
    <div class="col-md-8">
        <h1 class="my-4">Category
            <small>Secondary Text</small>
        </h1>

        @foreach ($posts as $post)
            <!-- Blog Post -->
        <div class="card mb-4">
            <a href="/store/view/{!! $post->id !!}">
                {!! Html::image('/img/posts/' . $post->image, $post->title, array('style' => 'width: 727px; height: 300px')) !!}
            </a>
            <div class="card-body">
                <h2 class="card-title">{!! $post->title !!}</h2>
                <p class="card-text">{!! $post->short_desc !!}</p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on {!! $post->created_at !!}
                <a href="#">{!! $post->author !!}</a>
            </div>
        </div>
        @endforeach
        
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
        {!! $posts->render() !!}
        </ul>
    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            {!! Form::open(array('url'=>'store/search', 'method'=>'get')) !!}
            <div class="card-body">
                <div class="input-group">
                    {!! Form::text('keyword', null, array('placeholder'=>'Search for...', 'class'=>'form-control')) !!}
                    <span class="input-group-append">
                        {!! Form::submit('Search', array('class'=>'btn btn-secondary')) !!}
                    </span>
                </div>
            </div>
            {!! Form::close() !!}
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="/store/category/{!! $category->id !!}">{!! $category->name !!}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
                You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
        </div>
    </div>
</div>
@endsection