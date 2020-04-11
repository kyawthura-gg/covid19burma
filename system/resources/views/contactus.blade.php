@extends('layouts.app')

@section('content')
<div class="container">
    <div class="center-div">
        <section class="mb-4">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-12 is-variable ">
                        <div class="column is-one-thirds has-text-left">
                            <h1 class="title is-1">Contact Us</h1>
                            <p class="is-size-6">Please send message directly for the further assistance.</p><br>
                        </div>
                        @if (Session::has('flash_message'))
                        <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                        @endif
                        <form action="{{ route('contactus.store') }}" method="POST">
                            {{ csrf_field()}}
                            <div class="column is-two-third has-text-left">
                                <div class="field">
                                    <label class="label">Name</label>
                                    <div class="control">
                                        <input class="input is-medium" type="text" name="name">
                                        @if ($errors->has('name'))
                                        <small class="form-text invalid-feedback"> {{$errors->first('name')}}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control">
                                        <input class="input is-medium" type="text" name="email">
                                        @if ($errors->has('email'))
                                        <small class="form-text invalid-feedback"> {{$errors->first('email')}}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Message</label>
                                    <div class="control">
                                        <textarea class="textarea is-medium" name="message"></textarea>
                                        @if ($errors->has('message'))
                                        <small class="form-text invalid-feedback"> {{$errors->first('message')}}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="control">
                                    <button type="submit" class="button is-link is-fullwidth has-text-weight-medium is-medium">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection