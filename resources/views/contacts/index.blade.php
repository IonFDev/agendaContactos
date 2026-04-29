@extends('layouts.app')

@section('title', 'Agenda de Contactos')

@section('content')
    <div class="mt-6">
        @if ($contacts->isEmpty())
            <p class="text-sm text-slate-500">No tienes contactos guardados. ¡Añade uno nuevo!</p>
        @else
            <ul class="divide-y divide-slate-200">
                @foreach ($contacts as $contact)
                    <li class="flex items-center justify-between py-4 cursor-auto" onclick=" window.location='{{ route('contacts.show', $contact) }}';">
                        <div>
                            <p class="text-lg font-medium text-slate-900">{{ $contact->name }}</p>
                            <p class="text-sm text-slate-600">{{ $contact->email }}</p>
                            <p class="text-sm text-slate-600">{{ $contact->phone }}</p>
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ route('contacts.edit', $contact) }}" class="rounded-full bg-blue-600 px-3 py-1 text-sm font-medium text-white shadow-sm transition hover:bg-blue-500">
                                Editar
                            </a>
                            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este contacto?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="rounded-full bg-red-600 px-3 py-1 text-sm font-medium text-white shadow-sm transition hover:bg-red-500">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection