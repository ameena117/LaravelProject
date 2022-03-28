@extends('admin.layouts.master')

@section('content')
<section class="content-header">
<h1>dashboard
        <small>Optional discription</small>
    </h1>
</section>
<hr>      
<div class="container p-5 border border-primary mb-5 mt-5 " style="background: linear-gradient(90deg, rgba(210,216,241,1) 0%, rgba(251,217,168,1) 65%);">   
@if (session()->has('message_success'))
    <div class="alert alert-success">{{session()->get('message_success')}}</div>
    @elseif (session()->has('message_success'))
    <div class="alert alert-danger">{{session()->get('message_error')}}</div>
@endif     
<div class="card border-primary text-dark" style="font-family: Kufyan Arabic Medium !; font-weight: bold; color: #061862;">
        <div class="row p-2">        
        <div class="col-sm-12 mt-3">
                <h3 class="text-dark text-center"> {{old('title_book',$book->title_book)}} </h3>    
                <hr>
                <div class="mt-5 text-center">
                   <p class="mt-4 mb-5 p-3">  {{old('description',$book->description)}} </p>
                </div>
                </div>
            </div>
        </div>            
</div>

</section>
@endsection