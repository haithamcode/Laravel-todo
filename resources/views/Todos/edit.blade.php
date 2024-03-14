@extends('layouts.apps')
@section('titel','Create Todo')

@section('content')
<div class="container">
    <h1>Edit Todo</h1>
    <form action="{{ route('todos.update', ['id' => $todos->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $todos->titel }}">
        </div>

        <div class="form-group">
            <label for="details">Details</label>
            <textarea class="form-control" id="details" name="details">{{ $todos->deteils }}</textarea>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="0" {{ $todos->status == 0 ? 'selected' : '' }}>Incomplete</option>
                <option value="1" {{ $todos->status == 1 ? 'selected' : '' }}>Complete</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection