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

    <form action="{{ route('patient.update',$patients->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Date:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input edit-selector" name="date_confirm" value="{{ $patients->date_confirm }}" placeholder="Case Date">
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
                        <input class="input" name="case_number" value="{{ $patients->case_number }}" placeholder="12">
                    </p>
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
                        <input class="input" name="age" placeholder="40" value="{{ $patients->age }}">
                    </p>
                </div>
            </div>
        </div>
        <div class=" field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Gender:</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="select">
                        <select name="gender">
                            <option value="Male" {{ $patients->gender == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ $patients->gender == 'Female' ? 'selected' : '' }}>Female</option>
                            <option value="Unknown" {{ $patients->gender == 'Unknown' ? 'selected' : '' }}>Unknown</option>
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
                        <input class="input" name="travel_history" value="{{ $patients->travel_history }}" placeholder="Thailand">
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
                            <option value="Yangon">Yangon</option>
                            <option value="Mandalay">Mandalay</option>
                            <option value="Magway">Magway</option>
                            <option value="Sagaing">Sagaing</option>
                            <option value="Tanintharyi">Tanintharyi</option>
                            <option value="Bago">Bago</option>
                            <option value="Naypyitaw">Naypyitaw</option>
                            <option value="Ayeyarwady">Ayeyarwady</option>
                            <option value="Kachin">Kachin</option>
                            <option value="Kayah">Kayah</option>
                            <option value="Kayin">Kayin</option>
                            <option value="Chin">Chin</option>
                            <option value="Mon">Mon</option>
                            <option value="Rakhine">Rakhine</option>
                            <option value="Shan">Shan</option>
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
                        <input class="input" name="city" value="{{ $patients->city }}" placeholder="City or District">
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
                        <input class="input" name="current_hospital" value="{{ $patients->current_hospital }}" placeholder="Waybagi">
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
                        <input class="input" name="description" value="{{ $patients->description }}" placeholder="Enter patient description..">
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