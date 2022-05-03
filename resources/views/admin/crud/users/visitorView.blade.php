@extends('admin.home')
@section('title', 'Managment System - Visitors')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        <div>
            <div class="card">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover dataTable" id="userRoles">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Снимка</th>
                                <th>Име</th>
                                <th>E-mail</th>
                                <th>Полове</th>
                                <th>Дата на раждане</th>
                                <th>Последно на линия</th>
                                <th>Стаутс</th>
                                <th>Създаден</th>
                                <th>Актуализиран</th>
                                <th>Действия</th>
                                <th>Стаутс</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ !empty($user->image) ? url('upload/images/' . $user->image) : url('upload/images/noimage.png') }}  "
                                            alt="...">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    @if ($user->gender_id === 1)
                                        <td class="">
                                            <i style="font-size:2rem" class="ml-4 fas fa-male text-primary"></i>
                                        </td>
                                    @elseif($user->gender_id === 2)
                                        <td class="">
                                            <i style="font-size:2rem" class="ml-4 fas fa-female text-danger"></i>
                                        </td>
                                    @else
                                        <td>
                                        </td>
                                    @endif
                                    <td>{{ $user->dob }}</td>
                                    <td>
                                        {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                                    </td>
                                    <td>
                                        @if (Cache::has('user-is-online-' . $user->id))
                                            <i class=" online-icon ml-4 mr-1 fa fa-circle text-success" style="font-size:.7rem;"></i>
                                        @else
                                            <i class=" offline-icon ml-4 mr-1 fa fa-circle text-danger" style="font-size:.7rem;"></i>
                                        @endif
                                    </td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td>
                                        <a id="assigned-books" href="{{ route('user.assigned.book', $user->id) }}"
                                            title="Assigned Books" class="btn btn-sm btn-warning"><i class="fa fa-book"
                                                aria-hidden="true"></i>
                                            </i>
                                        </a>
                                        <a href="{{ route('comment.show.user', $user->id) }}" id="view-comment"
                                            class="btn btn-sm btn-dark" title="View comments">
                                            <i class="fas fa-comments"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <select data-id="{{ $user->id }}" class="form-control form-control-sm mr-1"
                                            name="flag_id" id="flag_id" aria-invalid="false">
                                            @foreach ($flags as $flag)
                                                <option value="{{ $flag->id }}"
                                                    {{ $user->flag_id == $flag->id ? 'selected' : '' }}>
                                                    {{ $flag->name }}</option>
                                            @endforeach
                                        </select>
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
        <script type="text/javascript">
            var STATUSFAVOUTITE = "{{ route('user.update.status', ':id') }}"
        </script>
        <script type="text/javascript" src="{{ mix('js/user-roles.js') }}"></script>
    @endpush
@stop
