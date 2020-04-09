@extends('dashboard.layouts.app')
@section('content')
<div class="content">
    <div class="field">
        <p class="control has-icons-left has-icons-right">
            <input class="input" placeholder="Title">
            <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
            </span>
        </p>
    </div>
    <div class="field">
        <p class="control has-icons-left">
            <input class="input" placeholder="Description">
            <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
            </span>
        </p>
    </div>
    <div class="field">
        <div class="file is-info has-name">
            <label class="file-label">
                <input class="file-input" type="file" name="resume">
                <span class="file-cta">
                    <span class="file-icon">
                        <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label">
                        Info file…
                    </span>
                </span>
                <span class="file-name">
                    Screen Shot 2017-07-29 at 15.54.25.png
                </span>
            </label>
        </div>
    </div>
    <div class="field">
        <p class="control">
            <button class="button is-success">
                Submit
            </button>
        </p>
    </div>
</div>
@endsection