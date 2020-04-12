@extends('dashboard.layouts.app')

@section('content')
<div class="dash-container">
    <h1>Coming soon</h1>
</div>
<!-- <div class="dash-container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cases.index') }}"> Back</a>
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

    <form action="{{ route('cases.update',$cases->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">State</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="select">
                        <select name="state">
                            <option>Select dropdown</option>
                            <option value="yangon">Yangon</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">City / District</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="city" placeholder="City or District">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Date</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="date_confirm" placeholder="Case Date">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">New Case</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="confirm_case" placeholder="0">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">New Death</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="deaths" placeholder="0">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">New Recovered</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="recovered" placeholder="0">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <button type="submit" class="button">Add</button>
        </div>

    </form>
</div> -->
@endsection