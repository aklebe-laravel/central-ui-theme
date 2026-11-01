<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl leading-tight">
            {{ config('app.name') }} {{ config('app.version') }}
        </h1>
    </x-slot>

    <div>
        <livewire:central-ui::vm-desktop wire:key="Home-Desktop-Vm-Status"/>
    </div>
</x-app-layout>
