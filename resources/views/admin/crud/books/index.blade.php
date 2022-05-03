@extends('admin.home')
@section('title', 'Managment System - Books')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        <div>
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover dataTable" id="books">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Снимка</th>
                                <th>Име</th>
                                <th>Жанр</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ !empty($value->image) ? url('upload/images/' . $value->image) : url('upload/images/noimage.png') }}  "
                                          alt="...">
                                    </td>
                                    <td>
                                        {{ $value->name }}
                                    </td>
                                    <td>{{ $value['genres']['name'] }}</td>
                                    <td style="width:18%;">
                                        <a href="{{ route('book.edit', $value->id) }}" title="Edit" id="edit"
                                            class="btn btn-sm btn-info float-left mr-1 "><i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('book.delete', $value->id) }}" title="delete" id="delete"
                                            class="btn btn-sm btn-danger float-left mr-1"><i class="far fa-trash-alt"></i>
                                        </a>
                                        <a href="{{ route('user.assigned.user', $value->id) }}" title="assigned-users"
                                            id="Assigned Users" class=" float-left mr-1 btn btn-sm btn-warning"><i
                                                class="far fa-users"></i>
                                        </a>
                                        <a href="{{ route('show.book', $value->id) }}" class="btn btn-sm btn-secondary"
                                            title="Details">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <a href="{{ route('comment.show.users', $value->id) }}" id="view-comment"
                                            class="btn btn-sm btn-dark" title="View comments">
                                            <i class="fas fa-comments"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/books.js') }}"></script>
    @endpush
@endsection
