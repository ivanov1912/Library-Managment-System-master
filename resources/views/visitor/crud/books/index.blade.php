@extends('admin.home')
@section('title', 'Managment System - Visitor Books')

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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Genre</th>
                                <th>Actions</th>
                                <th>Status</th>
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
                                            <button class="btn btn-success btn-sm ml-1" title="Extract as PDF">
                                                <i class="fas fa-file-pdf"></i>
                                            </button>
                                    </td>
                                    <td>
                                        <select data-id="{{ $book->id }}" class="form-control form-control-sm mr-1"
                                            name="flag_id" id="flag_id" aria-invalid="false">
                                            @foreach ($flags as $flag)
                                                <option value="{{ $flag->id }}"
                                                    {{ $book->flag_id == $flag->id ? 'selected' : '' }}
                                                    >{{ $flag->name }}</option>
                                            @endforeach
                                        </select>
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
        <script type="text/javascript">
            var STATUSFAVOUTITE = "{{ route('book.update.status', ':id') }}"
        </script>
        <script type="text/javascript" src="{{ mix('js/mybooks.js') }}"></script>
    @endpush
@endsection
