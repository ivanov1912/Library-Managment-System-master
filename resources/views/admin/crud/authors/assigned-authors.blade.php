@extends('admin.home')
@section('title', 'Managment System - Assigned Authors')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        <div class="col-12 p-4">
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover dataTable" id="assigned-authors">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Име</th>
                                <th>Пол</th>
                                <th>Жанр</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $key => $author)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td> {{ $author->name }} </td>
                                    @if ($author['genders']['name'] == 'm')
                                        <td>
                                            <i class="fa fa-mars text-primary"></i>
                                        </td>
                                    @elseif($author['genders']['name'] == 'f')
                                        <td>
                                            <i class="fa fa-mercury text-danger"></i>
                                        </td>
                                    @else
                                        <td>

                                        </td>
                                    @endif
                                    <td> {{ $author['genres']['name'] }} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/assigned-authors.js') }}"></script>
    @endpush
@stop
