@props(['title', 'name'])
<div x-data="{show: false, name: '{{ $name }}'}" x-show="show" @close-modal.window="show = false" x-transition
     @open-modal.window="show = ($event.detail.name === name)" @keydown.escape.window="show = false"
     class="fixed z-50 inset-0" style="display: none">
    {{-- Gray background --}}
    <div @click="show = false" class="fixed inset-0 bg-gray-300/40"></div>
    {{-- Modal body --}}
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl overflow-y-auto max-h-[500px]">
        @isset($title)
            <div class="px-4 py-3 flex items-center justify-between">
                <div class="text-xl text-gray-800">
                    {{ $title }}
                </div>
                <button @click="$dispatch('close-modal')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        @endif
        <div>
            {{ $body }}
        </div>
    </div>
</div>
