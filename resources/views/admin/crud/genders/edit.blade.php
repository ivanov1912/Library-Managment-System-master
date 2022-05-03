@extends('admin.home')
@section('title', 'Managment System - Edit Gender')

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
            <h5 class="m-0">Актуализиране на пол</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('gender.update', $gender->id) }}"
                class="d-flex flex-column flex-wrap">
                @csrf
                <div class="form-group col-md-6">
                    <label for="name">Име</label>
                    <input class="form-control form-control-sm" value="{{ $gender->name }}" id="name" type="text"
                        name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" name="Update" value="Update"
                        class="btn btn-primary btn-sm col-md-12">Update</button>
                </div>
            </form>
        </div>
        <div class="card-footer pt-5">
        </div>
    </div>

@endsection
