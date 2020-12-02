@extends('base')

@section('content')

<div class="container">
    <div class="float-right">
        <a href="{{url('/learners')}}" class="btn btn-primary btn-sm">back</a>
    </div>

    <h2>Edit Learner: {{ $learners->id}}</h2>
    
    <div class="row">
        <div class="col-md-5">

            {!! Form::model($learners, ['url' =>"/learners/$learners->id", 'method'=>'patch']) !!}

            @include('learners._form')

            <div class="form-group">
                <button class="btn btn-primary float-right">Update Learner</button>
            </div>

            {!! form::close() !!}
        
        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>

</div>

@endsection
