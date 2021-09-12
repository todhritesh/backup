@extends('layouts.base')
@section('page_title','Manage books')
@section('content')
    <div class="container mt-4 mx-auto">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                @livewire('manage-students');
            </div>
        </div>
    </div>
@endsection
