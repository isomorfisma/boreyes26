@props(['name', 'show' => false, 'focusable' => false])

<div
    x-data="{
        show: @js($show),
        focusableWhenOpened: @js($focusable),
        init() {
            this.$watch('show', value => {
                if (value) {
                    document.body.classList.add('overflow-hidden');
                    if (this.focusableWhenOpened) {
                        setTimeout(() => this.$refs.modal.focus(), 100);
                    }
                } else {
                    document.body.classList.remove('overflow-hidden');
                }
            });
        }
    }"
    x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-show="show"
    class="fixed inset-0 overflow-y-auto z-50"
    style="display: none;"
>
    <!-- Overlay -->
    <div
        x-show="show"
        x-on:click="show = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm"
    ></div>

    <!-- Modal -->
    <div class="flex min-h-full items-center justify-center p-4">
        <div
            x-show="show"
            x-trap.noscroll.inert="show && focusableWhenOpened"
            x-on:click.outside="show = false"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="w-full max-w-md bg-white rounded-2xl shadow-xl transform transition-all"
            x-ref="modal"
        >
            {{ $slot }}
        </div>
    </div>
</div>