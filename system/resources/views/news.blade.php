@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Developers -->
    <div class="columns is-multiline">
        <div class="column is-4 is-mobile">
            @foreach ($blogs as $blog)
            <div class="custom-card">
                <div class="card-image">
                    <figure class="image">
                        <img src="{{$blog->source_image}}" alt="Image">
                    </figure>
                </div>
                <div class="custom-content">
                    <div class="level">
                        <div class="level-left">
                            <div class="item-author is-size-4"><a href="{{$blog->source_link}}">{{$blog->source}}</a></div>
                        </div>
                        <div class="level-right">
                            <time datetime="2018-06-07">{{$blog->source_date}}</time>
                        </div>
                    </div>
                    <p class="mb-10">{{$blog->details}}</p>
                    <a href="{{$blog->source_link}}">Read More</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End Developers -->
</div>
@endsection