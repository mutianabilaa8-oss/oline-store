@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content')

<div class="card mb-3">

    <div class="row g-0">

        <div class="col-md-4">
<img src="{{ asset('/img/'.$viewData["product"]->getImage()) }}"
     class="img-fluid rounded-start">

        </div>

        <div class="col-md-8">

            <div class="card-body">

                <h5 class="card-title">
                    {{ $viewData["product"]->getName() }}
                    (${{ $viewData["product"]->getPrice() }})
                </h5>

                <p class="card-text">
                    {{ $viewData["product"]->getDescription() }}
                </p>

                <p class="card-text">
                    <small class="text-muted">Add to Cart</small>
                </p>

            </div>

        </div>

    </div>

</div>

<form method="POST"
      action="{{ route('cart.add', ['id' => $viewData['product']->getId()]) }}">

    @csrf

    <div class="mb-3">
        Quantity:
        <input type="number"
               name="quantity"
               value="1"
               min="1"
               class="form-control">
    </div>

    <button type="submit"
            class="btn btn-primary">
        Add To Cart
    </button>

</form>

@endsection