
@extends('admin.home')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        <div class="col-12 p-4">
            <div class="card">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover dataTable " id="assigned-authors">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Име</th>
                                <th>Жанр</th>
                                <th>Пол</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authors as $key => $author)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td> {{ $author->name}}</td>
                                    <td> {{ $author['genres']['name']}}</td>
                                    <td>{{ $author['genders']['name'] }}</td>
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
