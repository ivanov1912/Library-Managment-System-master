@extends('admin.home')
@section('title', 'Managment System - Comments')

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
                    <table class="table table-hover dataTable" id="commentsUsersTable">
                        <thead>
                            <tr>
                                <th>Коментар</th>
                                <th>Потребител</th>
                                <th>Създаден</th>
                                <th>Актуализиран</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $key => $comment)
                                <tr>
                                    <td>
                                        <div class="scrollable">
                                         {{ $comment->name }}
                                        </div>
                                    </td>

                                    <td>
                                        {{ $comment['users']['name'] }}
                                    </td>

                                    <td class="comment-created-at">

                                        {{ $comment->created_at }}
                                    </td>

                                    <td class="comment-updated-at">

                                        {{ $comment->updated_at }}
                                    </td>

                                    <td>
                                        <a title="delete" id="delete"
                                            href="{{ route('delete.user.comment', $comment->id) }}"
                                            class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
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
        <script type="text/javascript" src="{{ mix('js/comments.js') }}"></script>
    @endpush
@endsection
