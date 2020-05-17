@extends('layouts.app')

@section('content')
<div class="container">
    <div id="quote" class="help-container">
        <p style="color:#c9c9f5">🧼လက်ကို ဆပ်ပြာနှင့် ရေဖြင့် မကြာခဏဆေးကြောပါ။</p>
    </div>
    <!-- Developers -->
    <div class="columns is-multiline">
        @foreach ($blogs as $blog)
        <div class="column is-4 news-mobile">
            <div class="custom-card">
                <div class="card-image">
                    <figure class="image">
                        <img src="{{ URL::to('/') }}/uploads/news/{{ $blog->source_image}}" alt="Image" style="border-radius: 10px">
                    </figure>
                </div>
                <div class="custom-content">
                    <div class="level">
                        <div class="level-left">
                            <div class="item-author is-size-4">{{$blog->source}}</div>
                        </div>
                        <div class="level-right">
                            <time datetime="2018-06-07">{{$blog->source_date}}</time>
                        </div>
                    </div>
                    <p class="mb-10">{{ $blog->details }}</p>
                    <div class="has-text-centered mt-10">
                        <a href="{{ $blog->source_link }}">{{__('news.readmore')}}</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <script src="./js/quota.js?v=c298c7fa213d"></script>
    <!-- End Developers -->
</div>
@endsection