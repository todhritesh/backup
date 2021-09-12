@extends('core.base')


@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5>Active Orders</h5>
            </div>
            @livewire('active-orders')
        </div>
    </div>
@endsection
