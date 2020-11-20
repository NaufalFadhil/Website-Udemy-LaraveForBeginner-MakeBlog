@if (count($errors) > 0)
{{-- FORM ERROR LIST --}}

<div class="alert alert-danger">
    <strong>Something is Wrong</strong>

    <br><br>

    <ul>
        @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
    </ul>
</div>

@endif