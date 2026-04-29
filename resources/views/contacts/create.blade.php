@extends('layouts.app')

@section('title', 'Agregar contacto')

@section('content')
<form action="{{ route('contacts.store') }}" method="POST" class="space-y-6">
    @csrf
    <div>
        <label for="name" class="block text-sm font-medium text-slate-700">Nombre</label>
        <input type="text" name="name" id="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm">
    </div>
    <div>
        <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
        <input type="email" name="email" id="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm">
    </div>
    <div>
        <label for="phone" class="block text-sm font-medium text-slate-700">Teléfono</label>
        <input type="tel" name="phone" id="phone" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm">
    </div>
    <button type="submit" class="rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition hover:bg-blue-500">
        Agregar contacto
    </button>
</form>
@endsection