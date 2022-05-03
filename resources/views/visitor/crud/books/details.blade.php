@extends('admin.home')
@section('title', 'Managment System - Details Books')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-3">
                <div id="sticky-wrapper" class="sticky-wrapper">
                    <div class="sticky-left-column" style="">
                        <div class="book-cover">
                            <img src="{{ !empty($book->image) ? url('upload/images/' . $book->image) : url('upload/images/noimage.png') }}"
                                alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <h1 itemprop="name">{{ $book->name }}</h1>
                <table class="table book-meta">
                    <tbody>

                        <tr>
                            <td>Author</td>
                            <td class="text-primary">
                                {{ $book['authors']['name'] }}
                            </td>
                        </tr>
                        <tr>
                            <td>Genre:</td>
                            <td class="text-primary">
                                {{ $book['genres']['name'] }}
                            </td>
                        </tr>
                        <tr>
                            <td>Year:</td>
                            <td>
                                {{ $book->year }}
                            </td>
                        </tr>
                        <tr>
                            <td>Book_NO</td>
                            <td>
                                {{ $book->book_no }}
                            </td>
                        </tr>
                        <tr>
                            <td>Created:</td>
                            <td>
                                {{ $book->created_at }}
                            </td>
                        </tr>
                        <tr>
                            <td>Updated:</td>
                            <td>{{ $book->updated_at }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="book-description" itemprop="description">
                    <p>{{ $book->content }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
