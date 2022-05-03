@extends('admin.home')
@section('title', 'Managment System - Edit Comment')

@section('header-navigation')
    @parent
@endsection
@section('content')
    <div class="col d-flex align-center justify-content-between col-md-8 mb-4">
    </div>

    <div class="card card-form card-default p-0 col-md-8 ml-4">
        <div class="card-header">
            <h5 class="m-0">Редактиране на коментар</h5>
        </div>
        <div class="card-body">
            @include('components.error-box.errors')
            <form method="POST" action="{{ route('comment.update', $comment->id) }}" class="d-flex flex-wrap flex-column">
                @csrf
                <div class="form-group col-md-6">
                    <label for="name">Коментар</label>
                    <textarea placeholder="{{ $comment->name }}" class="form-control form-control-sm" value={{ $comment->name }} id="name" name="name" rows="3"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <button style="margin-top: 2rem;" type="submit" name="submit" value="submit"
                        class="btn btn-primary btn-sm col-md-12">Изпращане</button>
                </div>
            </form>
        </div>
        <div class="card-footer pt-5">
        </div>
    </div>

@endsection
