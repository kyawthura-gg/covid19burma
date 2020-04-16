@extends('dashboard.layouts.app')

@section('content')
<div class="dash-container">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Add Case</div>
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                <a class="button is-info " href="{{ route('cases.index') }}"> <i class="fas fa-arrow-circle-left"></i> &nbsp;Back</a>
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

    <form action="{{ route('cases.store') }}" method="POST">
        @csrf

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">State:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="select">
                        <select name="state">
                            @foreach ($states as $state)
                            <option value="{{$state->name}}">{{$state->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">City / District:</label>
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
                <label class="label">Date:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input selector" name="date_confirm" placeholder="Case Date">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Number of Case:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="confirm_case" value="0">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Number of Death:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="deaths" value="0">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Number of Recovered:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="recovered" value="0">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <button type="submit" class="button">Add</button>
        </div>
    </form>
</div>
<script>
    $(".selector").flatpickr();
</script>
@endsection