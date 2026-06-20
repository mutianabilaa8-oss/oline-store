@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content')

@forelse($viewData["orders"] as $order)

    <div class="card mb-3">
        <div class="card-header">
            Order #{{ $order->getId() }}
        </div>

        <div class="card-body">
            Total: ${{ $order->getTotal() }} <br>
            Date: {{ $order->getCreatedAt() }}
        </div>
    </div>

@empty

    <div class="alert alert-warning">
        You have no orders yet.
    </div>

@endforelse

@endsection