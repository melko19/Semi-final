@extends('base')

@section('content')
<br> 
    <h2>Create New Courses</h2>

    <div class="row">
        <div class="col-md-5">

            {!!  Form::open(['url'=>'/courses', 'method'=>'post']) !!}

            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', null, ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::text('description', null, ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('start','Start')}}
                {{Form::text('start', null, ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('end','End')}}
                {{Form::text('end',null, ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                <button class="btn btn-primary float-right">Create Courses</button>
            </div>

            {!!  Form::close() !!}

        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>
@endsection