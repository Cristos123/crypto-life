@extends('layout.app')

@section('title', 'Page Title Here')
@section('breadcrumb', 'Page Title or Name here too')

@section('content')

@endsection()

@push('modals')
{{-- Modals for the page can be here. And you can put it in the normal. But this seems cleaner. --}}

@endpush


@push('styles')
@endpush

@push('scripts')
@endpush
