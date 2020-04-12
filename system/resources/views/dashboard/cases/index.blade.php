@extends('dashboard.layouts.app')
@section('content')
<div class="dash-container">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Cases</div>
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                <a class="button is-info " href="{{ route('cases.create') }}"> <i class="fas fa-plus-circle fa-lg"></i></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>State</th>
            <th>City</th>
            <th>Date</th>
            <th>Cases</th>
            <th>Deaths</th>
            <th>Recovered</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($cases as $case)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $case->state }}</td>
            <td>{{ $case->city }}</td>
            <td>{{ $case->date_confirm }}</td>
            <td>{{ $case->confirm_case  }}</td>
            <td>{{ $case->deaths }}</td>
            <td>{{ $case->recovered }}</td>
            <td>
                <form action="{{ route('cases.destroy',$case->id) }}" method="POST">

                    <a class="button is-primary is-small" href="{{ route('cases.edit',$case->id) }}"><i class="far fa-edit fa-lg"></i></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="button is-danger is-small" onclick="return confirm('Are you sure want to delete?')"><i class="fas fa-trash fa-lg"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $cases->links() !!}
</div>

@endsection