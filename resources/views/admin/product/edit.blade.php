@extends('layouts.admin')

@section('title', $viewData["title"])

@section('content')

<div class="card mb-4">
    <div class="card-header">
        Edit Product
    </div>

    <div class="card-body">

        @if($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST"
              action="{{ route('admin.product.update', ['id' => $viewData['product']->getId()]) }}"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="row">

                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-form-label">Name:</label>

                        <div>
                            <input
                                name="name"
                                value="{{ $viewData['product']->getName() }}"
                                type="text"
                                class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-form-label">Price:</label>

                        <div>
                            <input
                                name="price"
                                value="{{ $viewData['product']->getPrice() }}"
                                type="number"
                                class="form-control">
                        </div>
                    </div>
                </div>

            </div>

            <div class="mb-3">
                <label>Image:</label>

                <input class="form-control"
                       type="file"
                       name="image">
            </div>

            <div class="mb-3">
                <label>Description</label>

                <textarea
                    class="form-control"
                    name="description"
                    rows="3">{{ $viewData['product']->getDescription() }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Edit
            </button>

        </form>

    </div>
</div>

@endsection