@extends('base')

@section('content')

<div class="container">
    <div class="float-right">
        <a href="{{url('/users')}}" class="btn btn-primary btn-sm">back</a>
    </div>

    <h2>Edit User: {{ $users->lname}}, {{ $users->fname}}</h2>
    
    <div class="row">
        <div class="col-md-5">

            {!! Form::model($users, ['url' =>"/users/$users->id", 'method'=>'patch']) !!}

            @include('users._form')

            <div class="form-group">
                <button class="btn btn-primary float-right">Update User</button>
            </div>

            {!! form::close() !!}
        
        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>

</div>

@endsection
