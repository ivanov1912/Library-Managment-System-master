@extends('admin.home')
@section('title', 'Managment System - Approved Users')

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
                    <table class="table table-hover dataTable" id="approvedUsers">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Снимка</th>
                                <th>Име</th>
                                <th>E-mail</th>
                                <th>Роли</th>
                                <th>Полове</th>
                                <th>Дата на раждане</th>
                                <th>Последно на линия</th>
                                <th>Статус</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($approvedUsers as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ !empty($user->image) ? url('upload/images/' . $user->image) : url('upload/images/noimage.png') }} "
                                            alt="...">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <i class="fas fa-user-tie" title="{{ $user['roles']['name'] }}"></i>
                                    </td>
                                    @if ($user['genders']['name'] == 'm')
                                        <td class="text-center">
                                            <i class="fa fa-mars text-primary"></i>
                                        </td>
                                    @elseif($user['genders']['name'] == 'm')
                                        <td class="text-center">
                                            <i class="fa fa-mercury text-danger"></i>
                                        </td>
                                    @else
                                        <td class="text-center">

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
                                            <i class="offline-icon ml-4 mr-1 fa fa-circle text-danger" style="font-size:.7rem;"></i>
                                        @endif
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
        <script type="text/javascript" src="{{ mix('js/users.js') }}"></script>
        <script type="text/javascript" src="{{ mix('js/messages.js') }}"> </script>
    @endpush
@endsection
