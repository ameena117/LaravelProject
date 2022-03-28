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
            <label for="">Add New Book</label>
        </div>
        <div class="box-body">
        <form action="{{route('admin.books.store')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-group has-feedback @error('title_book') has error @enderror">
                <label for="">title_book</label>
                <input type="text" class="form-control" name="title_book" id="title_book" value="{{old('title_book')}}" placeholder="Enter Title Book">
        @error('title_book')
            <span class="invalid-feedback alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            </div>
            <div class="form-group has-feedback @error('description') has error @enderror">
                <label for="">description</label>
                <Textarea type="text" class="form-control" name="description" value="{{old('description')}}" placeholder="Enter Description Book"></Textarea>
        @error('description')
            <span class="invalid-feedback alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            </div>
        <div class="col-12" >
            <div class="form-group">
                <label for="title">Images</label>
                <div class="input-group">
                    <div class="custom-file">
                <input type="file" class="custom-file-input" name="img" id="inputGroupFile03">
                    </div>         
                </div>
            </div>    
</div>        
            <div class="form-group">
                <button class="btn btn-primary">Add New Book</button>
            </div>
        </form>
        </div>
    </div>
</section>

<section class="content container-fluid">

</section>
@endsection