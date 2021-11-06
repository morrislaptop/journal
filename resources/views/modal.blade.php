<div
    class="fixed z-10 inset-0 overflow-y-auto"
    x-data="{ open: @entangle('viewingModal').defer }"
    x-show="open"
    @polling.window="$wire.refresh = $event.detail ? 2000 : false"
    >
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div
            @click.outside="open = false"
            @keyup.escape.window="open = false"
            class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle max-w-6xl sm:w-full sm:p-6">
            <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
                <button wire:click="resetModal" type="button" class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="sr-only">Close</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div>
                <div class="mt-3 sm:mt-5">
                    @if($currentModal)
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            {{ $currentModal->aggregate_version . '@' . $currentModal->event_class }}
                            <span class="text-gray-200 text-sm">v{{ $currentModal->event_version }}</span>
                        </h3>
                        <h4 class="mt-4 leading-6 font-medium text-gray-900">
                            Data
                        </h4>
                        <pre
                            class="bg-black text-white -mx-4 sm:-mx-6 p-4 sm:p-6"
                            x-html="prettyPrintJson.toHtml({{ json_encode($currentModal->event_properties) }})">
                        </pre>
                        <h4 class="mt-4 leading-6 font-medium text-gray-900">
                            Metadata
                        </h4>
                        <pre
                            class="bg-black text-white -mx-4 sm:-mx-6 p-4 sm:p-6"
                            x-html="prettyPrintJson.toHtml({{ json_encode($currentModal->meta_data) }})">
                        </pre>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
