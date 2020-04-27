@extends('dashboard.layouts.app')
@section('content')
<div class="dash-container">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <div class="title">Blogs</div>
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                <a class="button is-info " href="{{ route('blogs.create') }}"> <i class="fas fa-plus-circle fa-lg"></i></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="columns">
        <div class="column is-12">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Detials</th>
                    <th>Source</th>
                    <th>Date</th>
                    <th>Source Link</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($blogs as $blog)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>
                        <figure class="image is-48x48">
                            <img src="{{ URL::to('/') }}/uploads/news/{{ $blog->source_image}}" alt="" class="image">
                        </figure>
                    </td>
                    <td>{{ $blog->details}}</td>
                    <td>{{ $blog->source}}</td>
                    <td>{{ $blog->source_date}}</td>
                    <td>{{ $blog->source_link}}</td>
                    <td>
                        <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                            <a class="button is-primary is-small" href="{{ route('blogs.edit',$blog->id) }}"><i class="far fa-edit fa-lg"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger is-small" onclick="return confirm('Are you sure want to delete?')"><i class="fas fa-trash fa-lg"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $blogs->links() !!}
        </div>
    </div>
</div>

@endsection