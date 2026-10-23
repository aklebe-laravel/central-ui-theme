<div
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-surface-200/50 backdrop-blur-md"
        x-show="messageBox.isOpen"
        x-on:click.away="messageBox.isOpen = false"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        role="dialog"
        aria-modal="true"
        tabindex="-1"
>
    <!-- Premium Container: Uses surface-50 for main container and surface-200 for internal micro-borders -->
    <div class="w-full max-w-lg max-h-[85vh] flex flex-col bg-surface-50 border border-surface-200/60 rounded-xl shadow-2xl ring-1 ring-surface-950/5 overflow-hidden">

        <!-- Header: Structured with primary-950 for title and secondary-500 for close interaction -->
        <div class="flex items-start justify-between px-6 pt-6 pb-3 bg-surface-50">
            <h5 class="text-xl font-bold tracking-tight text-primary-950" x-text="messageBox.title"></h5>
            <button
                    type="button"
                    x-on:click="messageBox.isOpen = false"
                    class="p-1 rounded-lg text-secondary-500 hover:text-primary-950 hover:bg-surface-100 transition-all cursor-pointer"
                    aria-label="Close"
            >
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Body: Secondary-700 ensures optimal readability on surface-50 background -->
        <div class="flex-1 px-6 py-3 overflow-y-auto text-secondary-700 text-sm leading-relaxed antialiased bg-surface-50">
            <div x-html="messageBox.content" class="space-y-3"></div>
        </div>

        <!-- Footer: Clean workflow actions container sharing the identical surface background -->
        <div class="flex items-center justify-end gap-3 px-6 py-5 bg-surface-50">
            <template x-for="value in messageBox.actions">
                <span x-html="value" class="contents"></span>
            </template>
        </div>
    </div>
</div>
