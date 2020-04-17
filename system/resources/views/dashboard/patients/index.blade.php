@extends('dashboard.layouts.app')
@section('content')
<div class="dash-container">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Patients</div>
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                <a class="button is-info " href="{{ route('patient.create') }}"> <i class="fas fa-plus-circle fa-lg"></i></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="columns">
        <div class="column is-8">
            <table class="table table-bordered">
                <tr>
                    <th>Confirm Date</th>
                    <th>Case Number</th>
                    <th>Status</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Travel History</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Hospital</th>
                    <th>Descriptions</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->date_confirm }}</td>
                    <td>{{ $patient->case_number }}</td>
                    <td>{{ $patient->status }}</td>
                    <td>{{ $patient->age }}</td>
                    <td>{{ $patient->gender }}</td>
                    <td>{{ $patient->travel_history }}</td>
                    <td>{{ $patient->state }}</td>
                    <td>{{ $patient->city }}</td>
                    <td>{{ $patient->current_hospital }}</td>
                    <td>{{ $patient->description }}</td>
                    <td>
                        <form action="{{ route('patient.destroy',$patient->id) }}" method="POST">

                            <a class="button is-primary is-small" href="{{ route('patient.edit',$patient->id) }}"><i class="far fa-edit fa-lg"></i></a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="button is-danger is-small" onclick="return confirm('Are you sure want to delete?')"><i class="fas fa-trash fa-lg"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $patients->links() !!}
        </div>

    </div>
</div>

@endsection