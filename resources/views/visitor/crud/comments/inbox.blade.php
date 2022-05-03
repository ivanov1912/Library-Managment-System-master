@extends('admin.home')
@section('title', 'Managment System - Inbox')

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
                    <table class="table table-hover dataTable" id="commentsTable">
                        <thead>
                            <tr>
                                <th>Коментар</th>
                                <th>Създаден</th>
                                <th>Актуализиран</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assignComments as $key => $comment)
                                <tr>
                                    <td>
                                        <div class="scrollable">
                                            {{$comment->name}}
                                        </div>
                                    </td>
                                    <td>
                                        {{ $comment->created_at }}
                                    </td>
                                    <td>

                                        {{ $comment->updated_at }}
                                    </td>
                                    <td>
                                        <a title="edit" id="edit" href={{ route('comment.edit', $comment->user_id) }}
                                            class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
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
