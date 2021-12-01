@extends('components.base')

@section('content')
<div class="jumbotron p-4 p-md-2">
    <h1 class="display-2 text-center">Films</h1>
    @livewire('filters',  ['categories' => $categories])
{{-- Pagination --}}
    {{-- <div class="d-flex justify-content-center mt-5"> --}}
        {{-- {{ $articles->links('vendor.pagination.custom') }} --}}
    {{-- </div> --}}
{{-- </div> --}}

@endsection

