@php
    use Modules\SystemBase\app\Services\ModuleService;

    $publicPortal = config('website-base.module_website_public', false);

@endphp
<x-auth-card>
    @include('auth.inc.header')

    <div x-init="document.getElementById('email').focus();">
        <livewire:website-base::form.auth-login
                :formObjectId="0"
                :isFormOpen="true"
                redirectTo="/desktop"
                wire:key="login-form"
        />
    </div>

</x-auth-card>
