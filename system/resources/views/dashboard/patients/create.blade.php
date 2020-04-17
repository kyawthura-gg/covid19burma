@extends('dashboard.layouts.app')

@section('content')
<div class="dash-container">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Add Patient</div>
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                <a class="button is-info " href="{{ route('patient.index') }}"> <i class="fas fa-arrow-circle-left"></i> &nbsp;Back</a>
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

    <form action="{{ route('patient.store') }}" method="POST">
        @csrf
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
                <label class="label">Case Number:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="case_number" placeholder="12">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Status:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="select">
                        <select name="status">
                            <option value="Case">Case</option>
                            <option value="Death">Death</option>
                            <option value="Recovered">Recovered</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Age</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="age" placeholder="40">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Gender:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="select">
                        <select name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Unknown">Unknown</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Travel History:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="travel_history" placeholder="Thailand">
                    </p>
                </div>
            </div>
        </div>
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
                <label class="label">Hispital</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="current_hospital" placeholder="Waybagi">
                    </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Descriptions</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" name="description" placeholder="Enter patient description..">
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