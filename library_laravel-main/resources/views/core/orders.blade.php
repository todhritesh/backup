@extends('core.base')


@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5>Manage Orders</h5>
            </div>
                @livewire('manage-orders')

        </div>
    </div>
@endsection
