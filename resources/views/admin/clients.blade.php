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
            <label for="">clients</label>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>ID</th>
                    <th>name</th>
                    <th>email</th>
                    <th>options</th>
                </thead>
                <tbody>
                    @if ($clients->count()==0)
                    <tr>
                        <td>No registered Clients</td>
                    </tr>
                    @endif
                    @foreach ($clients as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td><a href="{{route('admin.clients.delete',$item->id)}}" class="btn btn-danger btn-sm">Remove this Client</a></td>
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