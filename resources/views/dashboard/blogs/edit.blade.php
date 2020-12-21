@extends('dashboard.layouts.app')

@section('content')
<div class="dash-container">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Edit Case</div>
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                <a class="button is-info " href="{{ route('blogs.index') }}"> <i class="fas fa-arrow-circle-left"></i> &nbsp;Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('blogs.update',$blogs->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Image</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input type="file" class="" value="{{ $blogs->source_image }}" name="source_image" />
                        <figure class="image is-48x48">
                            <img src="{{ URL::to('/') }}/uploads/news/{{ $blogs->source_image}}" alt="" class="image">
                        </figure>
                        <input type="hidden" name="hidden_image" value="{{ $blogs->source_image }}" />
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Details:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <textarea class="textarea" name="details">{{ $blogs->details }}</textarea>
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Source:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="source" placeholder="7 Days" value="{{ $blogs->source }}">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Source Date:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input selector" name="source_date" value="{{ $blogs->source_date }}">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Source Link:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="source_link" placeholder="google.com" value="{{ $blogs->source_link }}">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <button type="submit" class="button">Update</button>
        </div>
    </form>
</div>
<script>
    $(".edit-selector").flatpickr();
</script>
@endsection