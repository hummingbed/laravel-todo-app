@extends('layouts.app')
@section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center my-5">Todos Page</h1>
                <div class="card">

                    <div class="card-header">

                        <div class="row">
                            <div class="col-10">
                                Todos
                            </div>
                            <a class="col" href="{{ url('/create')  }} ">
                                <button type="button" class="btn btn-sm btn-primary ">create todo</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($todos as $todo)
                                <Li class="list-group-item">
                                    <div class="row">
                                        <div class="col-10"> {{$todo->name}}</div>
                                        <a class="col-2" href="{{ url('/show')  }}/{{$todo->id}} ">
                                            <button type="button" class="btn btn-sm btn-primary ">View</button>
                                        </a>
                                    </div>

                                </Li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection
