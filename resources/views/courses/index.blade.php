@extends('base')

@section('content')


<h1>Courses</h1>
<br>
<div class="float-right">

    <a href="{{url('/courses/create')}}" class="btn btn-primary btn-sm">
        Add New Courses
    </a>
</div>

<table class="table table-bordered table-striped table-sm">
    <h2>List of Courses</h2>

    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Start</th>
            <th>End</th>
            <th>Option</th>
        </tr>
    </thead>

    <tbody>
        @foreach($courses as $crs)

        <tr>
            <td>{{$crs->name}}</td>
            <td>{{$crs->description}}</td>
            <td>{{$crs->start}}</td>
            <td>{{$crs->end}}</td>
            <td>
                <button class="btn btn-info btn-sm">Edit</button>
            </td>
        </tr>

    @endforeach
    </tbody>

</table>

@stop