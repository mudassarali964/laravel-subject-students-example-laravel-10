@extends('layouts.master')

@section('title', 'Class Management')
@section('title-2', 'Class Management')
@section('title-3', 'Class Management')

@push('css')
    <link href="{{ asset('dist/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="row mb-3">
        {{-- DataTable with Hover --}}
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Class Management</h6>
{{--                    <a href="{{ route('class_management.create') }}" class="btn btn-primary">Add</a>--}}
                </div>
                @include('layouts.partial.messages')
                <div class="table-responsive p-3">
                    @if ($classes->count())
                        <table class="table align-items-center table-flush table-hover" id="planDataTable">
                            <thead class="thead-light">
                            <tr>
                                <th>Subject Name</th>
                                <th>Subject Code</th>
                                <th>Subject Credits</th>
                                <th>Students</th>
                                <th>Created date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($classes as $class)
                                <tr>
                                    <td>{{ $class->name }}</td>
                                    <td>{{ $class->subject_id }}</td>
                                    <td>{{ $class->credits }}</td>
                                    @if($class->students->count())
                                        @php
                                            $class_student = $class->students()->orderBY('students.first_name')->pluck('students.student_id','first_name')->toArray();
                                        @endphp
                                        <td>
                                            <table style="width: 100%">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Id</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($class_student as $studentName => $studentId)
                                                    <tr>
                                                        <td>{{ $studentName }}</td>
                                                        <td>{{ $studentId }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </td>
                                    @else
                                        <td>----</td>
                                    @endif
                                    <td>{{ $class->created_at }}</td>
                                    <td>
                                        <a href="{{ route('class_management.edit', $class->id) }}" class="btn btn-primary float-right">Manage</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        No data!
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- Page level plugins --}}
    <script src="{{ asset('dist/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    {{-- Page level custom scripts --}}
    <script>
        $(document).ready(function () {
            $('#planDataTable').DataTable(); // ID From dataTable with Hover
        });
    </script>
@endpush
