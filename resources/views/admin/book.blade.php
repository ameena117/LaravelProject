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
    @elseif (session()->has('message_success'))
    <div class="alert alert-danger">{{session()->get('message_error')}}</div>
    @endif
<div class="box box-warning">
        <div class="box-header">
            <label for="">Books</label>
        </div>
        <div class="box-body">
            <table class="table table-primary">
                <thead>
                    <th>ID</th>
                    <th>Title Book</th>
                    <th>Description</th>
                    <th>options</th>
                </thead>
                <tbody>
                    @if ($books->count()==0)
                    <tr>
                        <td>No Books Added</td>
                    </tr>
                    @endif
                    @foreach ($books as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title_book}}</td>
                        <td>{{$item->description}}</td>
                        <td><a href="{{route('admin.books.view',$item->id)}}" class="btn btn-warning btn-sm">View</a> <a href="{{route('admin.books.edit',$item->id)}}" class="btn btn-info btn-sm">Edit</a> <a href="{{route('admin.books.delete',$item->id)}}" class="btn btn-danger btn-sm">delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</section>

<section class="content container-fluid">

</section>
@endsection