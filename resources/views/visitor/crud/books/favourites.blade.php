@extends('admin.home')
@section('title', 'Managment System - Favoruites')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="row m-auto">
        <div class="col-12 m-auto pt-4">
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover dataTable" id="mybooks">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Снимка</th>
                                <th>Име</th>
                                <th>Жанр</th>
                                <th>Действия</th>
                                <th>Статус</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $key => $book)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ !empty($book->image) ? url('upload/images/' . $book->image) : url('upload/images/noimage.png') }}  "
                                             alt="...">
                                    </td>
                                    <td>
                                        {{ $book->name }}
                                    </td>
                                    <td>
                                        {{ $book['genres']['name'] }}
                                    </td>
                                    <td style="width:18%">
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('comment.show', $book->id) }}" id="view-comment"
                                                type="button" class="btn btn-sm btn-dark float-left mr-1"
                                                title="View comments">
                                                <i class="fas fa-comments"></i>
                                            </a>

                                            <a href="{{ route('show.book', $book->id) }}" class="btn btn-sm btn-secondary"
                                                title="Details">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                    </td>
                                    <td> 
                                        {{$book['flags']['name']}}
                                    </td>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/mybooks.js') }}"></script>
    @endpush
@endsection
