@extends('layouts.app')
@section('content')
    <h3 class="text-center my-5">
        {{$todo->name}}
    </h3>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10">
                            Details
                        </div>
                        <a class="col" href="{{ url('/todo')  }} ">
                            <button type="button" class="btn btn-sm btn-primary ">back</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    {{$todo->description }}
                </div>
                <a href="{{ url('/todo/'. $todo->id) }}/edit  " type="button" class="btn btn-sm btn-primary my-2">edit</a>
                <a href="{{ url('/todo/'. $todo->id) }}/delete  " type="button" class="btn btn-sm btn-danger my-2">delete</a>
            </div>
        </div>
@endsection







