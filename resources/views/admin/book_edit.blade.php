@extends('admin.layouts.master')

@section('content')
<section class="content-header">
<h1>dashboard
        <small>Optional discription</small>
    </h1>
    <ol class="breadcrumb">
    <li class="active">dashboard</li>
    </ol>
</section>

<section class="content container-fluid">
    @if (session()->has('message_success'))
    <div class="alert alert-success">{{session()->get('message_success')}}</div>
    @elseif (session()->has('message_error'))
    <div class="alert alert-danger">{{session()->get('message_error')}}</div>
    @endif
<div class="box box-warning">
        <div class="box-header">
            <label for="">Edit Book</label>
        </div>

        <div class="box-body">
            <form action="{{route('admin.books.update',$book->id)}}" method="post">
                @csrf
            <div class="form-group has-feedback @error('title_book') has error @enderror">
                <label for="">title_book</label>
                <input type="text" class="form-control" name="title_book" value="{{old('title_book',$book->title_book)}}" placeholder="Enter Title Book">
        @error('title_book')
            <span class="invalid-feedback alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            </div>
            <div class="form-group has-feedback @error('password') has error @enderror">
                <label for="">description</label>
                <input type="text" class="form-control" name="description" value="{{old('description',$book->description)}}" placeholder="Enter Description Book">
        @error('description')
            <span class="invalid-feedback alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Save Edit</button>
            </div>
            </form>
          
            
        </div>
    </div>
</section>

<section class="content container-fluid">

</section>
@endsection