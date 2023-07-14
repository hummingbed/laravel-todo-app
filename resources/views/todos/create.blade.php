@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-7">
            <h1 class="text-center my-5">Todos Page</h1>
            <div class="card">

                <div class="card-header">

                    <div class="row">
                        <div class="col-10">
                            Todos
                        </div>
                        <a class="col" href="{{ url('/todo')  }} ">
                            <button type="button" class="btn btn-sm btn-primary ">todos</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="/save-todo">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">name</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="john doe">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="lorem ipsium" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary">Primary</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
