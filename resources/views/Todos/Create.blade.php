@extends('layouts.apps')
@section('titel','Create Todo')

@section('content')
<form method="POST" action="{{ route('todos.store') }}">
    @csrf
    <div class="form-group">
        <span class="col-sm-3 control-label"></span>
        <div class="col-sm-6">
            <label class='col-sm-3 control-label'>Title</label>
            <input type="text" class='form-control' name="title" placeholder="Input Title">
            <span class="help-block text-danger"></span>
            <label class='col-sm-3 control-label'>Details</label>
            <input type="text" class='form-control' name="details" placeholder="Input Details">
            <span class="help-block text-danger"></span>
            {{-- <label for="">Done or not</label>
            <input type="checkbox" class='form-control col-sm-offset-1' name="status"> --}}
            <span class="help-block text-danger"></span>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-5">
            <button class='btn btn-primary' name="submit">Create Todo</button>
        </div>
    </div>
</form>
@endsection