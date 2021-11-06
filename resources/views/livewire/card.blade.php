<div class="bg-white overflow-hidden shadow rounded-lg" @polling.window="$wire.polling = $event.detail" @if ($polling) wire:poll @endif>
    <div class="p-5">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                {{-- <x-heroicon-o-scale class="h-6 w-6 text-gray-400" /> --}}
                <x-dynamic-component :component="$icon" class="h-6 w-6 text-gray-400" />
            </div>
            <div class="ml-5 w-0 flex-1">
                <dl>
                    <dt class="text-sm font-medium text-gray-500 truncate">
                        {{ $label }}
                    </dt>
                    <dd>
                        <div class="text-lg font-medium text-gray-900">
                            {{ $value }}
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>
