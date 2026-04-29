@extends('layouts.app')

@section('title', 'Detalles del contacto')

@section('content')
    <div class="mt-6">
        <p class="text-lg font-medium text-slate-900">{{ $contact->name }}</p>
        <p class="text-sm text-slate-600">{{ $contact->email }}</p>
        <p class="text-sm text-slate-600">{{ $contact->phone }}</p>
    </div>
@endsection