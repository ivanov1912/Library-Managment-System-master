@extends('admin.home')
@section('title', 'Managment System - Genders')

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
                    <table class="table table-hover" id="genders">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Име</th>
                                <th>Създаден</th>
                                <th>Актуализиран</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $gender)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    @if ($gender->name === 'm')
                                        <td class="">
                                            <i class="fa fa-mars text-primary"></i>
                                        </td>
                                    @elseif($gender->name === 'f')
                                        <td class="">
                                            <i class="fa fa-mercury text-danger"></i>
                                        </td>
                                    @endif
                                    <td>{{ $gender->created_at }}</td>
                                    <td>{{ $gender->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('gender.edit', $gender->id) }}" title="edit" id="edit"
                                            class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('gender.delete', $gender->id) }}" title="delete" id="delete"
                                            class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                                        <a title="Assigned-users" href="{{ route('assigned.users', $gender->id) }}"
                                            id="assigned Users" class="btn btn-sm btn-warning"><i
                                                class="far fa-users"></i>
                                        </a>
                                        <a title="Assigned-authors" href="{{ route('assigned.authors', $gender->id) }}"
                                            id="Assigned Authors" class="btn btn-sm btn-warning"><i
                                                class="fas fa-quote-right"></i>
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
        <script type="text/javascript" src="{{ mix('js/genders.js') }}"></script>
    @endpush
@stop
