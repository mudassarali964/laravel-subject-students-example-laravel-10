@extends('layouts.master')

@section('title', 'Manage Students')
@section('title-2', 'Manage Students')
@section('title-3', 'Manage Students')

@section('content')
    <div class="row mb-3 justify-content-center">
        <div class="col-lg-12">
            {{-- Form Basic --}}
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Manage Students</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('class_management.update', $class->id) }}" method="post" >
                        @csrf
                        @method('PUT')
                        <div class="form-group width-49">
                            <label for="selectInterval">Subject: {{ $class->name }}</label>
                            <select class="form-control" name="student_ids[]" id="selectInterval" required multiple>
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}" {{ ($class->students->count() && in_array($student->id, $class->students->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $student->first_name .' '. $student->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <a href="{{ route('class_management.index') }}" class="btn btn-light float-right">Cancel</a>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

