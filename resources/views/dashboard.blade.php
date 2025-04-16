<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('chatify') }}"><button>Go to Chatify</button></a>
            <p>
                {{ Auth::user()->email }}
            </p>
            <p>
                @foreach ($sessions as $session)
                    User: {{ $session->username }}
                @endforeach
            </p>

        </div>
    </div>
</x-app-layout>
