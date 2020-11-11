@extends('base')


@section('content')
<div class="container" style="margin-top: 2%;">
    <h2>Courses</h2>

    <table class="table table-bordered table-hover table-sm">
        <thead style="background-color: #4747d1; color: #ffffff;">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Start</th>
                <th>End</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{$course->name}}</td>
                <td>{{$course->description}}</td>
                <td>{{$course->start}}</td>
                <td>{{$course->end}}</td>

            </tr>
            @endforeach
        </tbody>

    </table>
</div>



@stop