@extends('admin.home')
@section('title', 'Managment System - Create Assigned Books')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="col d-flex align-center justify-content-between col-md-8 mb-4">
    </div>

    <div class="card card-form card-default col-md-8 ml-4 p-0">
        <div class="card-header">
            <h5 class="p-0">Създай книга</h5>
        </div>
        <div class="card-body">
            @include('components.error-box.errors')
            <form method="POST" action={{ route('assign.book.store') }} method="post">
                @csrf
                <table id="emptbl" class="table table-bordered border-primar">
                    <thead class="table-dark">
                        <tr>
                            <th>Потребители</th>
                            <th>Книги</th>
                            <th>Дата на приемане</th>
                            <th>Дата на връщане</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="col0">
                                <select class="form-control form-control-sm" name="user_id" id="user_id"
                                    aria-invalid="false">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td id="col1">
                                <select class="form-control form-control-sm" name="book_id" id="book_id"
                                    aria-invalid="false">
                                    @foreach ($books as $book)
                                        <option value="{{ $book->id }}">{{ $book->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td id="col2">
                                <input type="date" class="form-control form-control-sm" disabled value={{\Carbon\Carbon::today()->format('Y-m-d')}} name="date_of_receipt"
                                    id="date_of_receipt">
                            </td>
                            <td id="col3">
                                <input type="date" class="form-control form-control-sm" name="date_of_return"
                                    id="date_of_return">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <br>
                    <tr>
                        {{-- <td><button type="button" id="addRow" class="btn btn-sm btn-info">Add</button></td>
                        <td><button type="button" id="deleteRow" class="btn btn-sm btn-danger">Remove</button></td> --}}
                        <td><button type="submit" class="btn btn-sm btn-success">Save</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="card-footer pt-5">
        </div>
    </div>

    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/rows.js') }}"></script>
        <script type="text/javascript" src="{{ mix('js/messages.js') }}"> </script>
    @endpush
@endsection
