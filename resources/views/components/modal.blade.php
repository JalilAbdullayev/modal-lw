@props(['title'])
<div x-data="{show: false}" x-show="show" x-on:open-modal.window="show = true" x-on:close-modal.window="show = false"
     x-on:keydown.escape.window="show = false" class="fixed z-50 inset-0">
    {{-- Gray background --}}
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-300/40"></div>
    {{-- Modal body --}}
    <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl max-h-96">
        @isset($title)
            <div class="py-3 flex items-center justify-center">
                {{ $title }}
            </div>
        @endif
        <div>
            {{ $body }}
        </div>
    </div>
</div>
