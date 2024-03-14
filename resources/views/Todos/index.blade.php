@extends('layouts.apps')

@section('titel')
    Dashboard
@endsection
@section('content')
<a href="{{route('todos.create')}}"><span class="btn btn-primary">Create Task</span></a>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Tasks To Do</h4>
                <p class="category">Haitham Faiz Alzubaidi</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>details</th>
                        <th>status</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @foreach ($todos as $index => $todo)
                        <tr> 
                            @if($todo->status == 1)
                            <td>{{$index +1}} </td>
                            <td style=" text-decoration: line-through">{{$todo->titel}}</td>
                            <td style=" text-decoration: line-through">{{$todo->deteils}} </td>
                            @else
                            <td>{{$index +1}} </td>
                            <td>{{$todo->titel}} </td>
                            <td>{{$todo->deteils}}</td>
                            @endif
                            <td><form action="{{ route('todos.StatusUpdate', ['id' => $todo->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="checkbox" name="status" {{ $todo->status == 1 ? 'checked' : '' }} onchange="this.form.submit()">
                            </form>
                             <td>
                <div class="actions">
                    <a href="{{ route('todos.edit', ['id' => $todo->id]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('todos.destroy', ['id' => $todo->id]) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection