@extends('layouts.master')

@section('title', 'RuangAdmin Dashboard')
@section('title-2', 'Dashboard')
@section('title-3', 'Dashboard')

@section('content')
    <div class="row mb-3">
        {{-- Subjects Card Example --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Subjects</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $subjectCount }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Student Card Example --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Students</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $studentCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- User Card Example --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Users</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $userCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('dist/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('dist/js/demo/chart-area-demo.js') }}"></script>
@endpush
