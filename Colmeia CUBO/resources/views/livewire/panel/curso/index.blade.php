<div class="flex w-full flex-col items-center justify-center gap-8 text-neutral-700">

    @session('success')
        <div id="message" class="absolute left-0 top-0 w-full bg-green-400 py-2 text-center text-neutral-50">

            <div class="relative w-full text-center">
                {{ session('success') }}
                <div class="bar absolute -bottom-3 w-full bg-green-700 py-1"></div>
            </div>

        </div>
    @endsession

    @session('error')
        <div id="message" class="absolute left-0 top-0 w-full bg-red-400 py-2 text-center text-neutral-50">
            <div class="relative w-full text-center">
                {{ session('error') }}
                <div class="bar absolute -bottom-3 w-full bg-red-700 py-1"></div>
            </div>
        </div>
    @endsession

    <div class="flex h-[14vh] w-full items-center justify-center rounded-xl bg-[#F1641F] text-white"
        style="background-image: url({{ asset('background.png') }});">
        <span class="select-none text-3xl font-bold">Gerenciamento de Cursos</span>
    </div>

    <div class="flex select-none items-center gap-4">
        <div class="flex items-center gap-2">
            <div class="size-8 rounded-lg bg-white p-2 shadow-md"></div>
            <span>Cursos</span>
        </div>
        <div class="flex items-center gap-2">
            <div class="size-8 rounded-lg bg-neutral-200 p-2 shadow-md"></div>
            <span>Áreas de Conhecimento</span>
        </div>
    </div>

    <div class="grid w-full grid-cols-8 items-center gap-2">
        <div class="col-span-4">
            <x-input wire:model.live="search" placeholder="Pesquisar por curso..." icon="magnifying-glass" />
        </div>

        <div class="col-span-3 flex">
            {{ $cursos->links('vendor.livewire.pagination-links') }}
        </div>


        <a href="{{ route('cursos.create') }}" draggable="false" wire:navigate.hover
            class="col-span-1 rounded-lg bg-gray-700 px-4 py-2 text-center text-sm font-medium text-white transition-all duration-100 ease-linear hover:bg-gray-600">
            Novo Curso
        </a>

    </div>


    <div class="grid w-full grid-cols-5 rounded-xl bg-white text-center" x-data="{ menu: null, line: null }">

        <div class="col-span-5 grid grid-cols-5 border-b-2 py-4">
            <div class="col-span-1 font-semibold">
                Nome
            </div>

            <div class="col-span-1 font-semibold">
                Descrição
            </div>

            <div class="col-span-1 font-semibold">
                Duração
            </div>

            <div class="col-span-1 font-semibold">
                Status
            </div>

            <div class="col-span-1 font-semibold">
                Ação
            </div>
        </div>

        @foreach ($cursos as $index => $curso)
            <div class="relative col-span-5 grid grid-cols-5 items-center border-b-2">

                <div class="relative col-span-5 grid grid-cols-5 items-center">

                    @if ($curso->areasDeConhecimento->count() > 0)
                        <x-feathericon-chevron-up
                            class="min-w-6 absolute right-5 top-1/2 z-10 w-6 -translate-y-1/2 cursor-pointer"
                            x-show="line == {{ $curso->id }}"
                            x-on:click="line == {{ $curso->id }} ? line = null : line = {{ $curso->id }}" />

                        <x-feathericon-chevron-down
                            class="min-w-6 absolute right-5 top-1/2 z-10 w-6 -translate-y-1/2 cursor-pointer"
                            x-show="line != {{ $curso->id }}"
                            x-on:click="line == {{ $curso->id }} ? line = null : line = {{ $curso->id }}" />
                    @endif

                    <div class="col-span-1 py-4">
                        <a draggable="false" href="{{ route('ac.show', $curso->id) }}">
                            {{ $curso->name }}
                        </a>
                    </div>

                    <div class="col-span-1 py-4">

                        <p class="line-clamp-2">
                            {{ $curso->description }}
                        <p>

                    </div>

                    <div class="col-span-1 py-4">
                        @if ($curso->duration == 0)
                            Indefinido
                        @else
                            {{ $curso->duration }} Horas
                        @endif
                    </div>

                    <div class="col-span-1 py-4">
                        <label class="inline-flex cursor-pointer items-center" wire:loading.remove
                            wire:target='toggleStatus({{ $curso->id }})'>
                            <input type="checkbox" id="checkbox-{{ $curso->id }}" class="peer sr-only"
                                name="{{ $curso->id }}" wire:click='toggleStatus({{ $curso->id }})'
                                {{ $curso->status ? 'checked' : '' }}>
                            <div
                                class="peer relative h-6 w-11 rounded-full bg-gray-200 after:absolute after:start-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-[#ff8b00] peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#ff8b0066] rtl:peer-checked:after:-translate-x-full">
                            </div>
                        </label>

                        <div wire:loading wire:target='toggleStatus({{ $curso->id }})'
                            class="ms-2 h-6 w-6 animate-spin rounded-full border-2 border-gray-300 border-t-[#ff8b00]">
                        </div>
                    </div>



                    <div class="relative col-span-1 flex items-center justify-center gap-4">

                        <x-feathericon-trash-2 wire:click.prevent="delete({{ $curso->id }})"
                            class="min-w-6 w-6 cursor-pointer text-red-400" />


                        <a draggable="false" href="{{ route('ac.create-with-id', $curso->id) }}" class="relative"
                            x-data="{ tooltip: false }">
                            <x-feathericon-plus-circle class="min-w-6 w-6 cursor-pointer text-green-500"
                                x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" />

                            <div x-show="tooltip" x-transition:enter="transition ease-linear duration-75"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-linear duration-75"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                class="absolute bottom-full left-1/2 z-20 mb-3 -translate-x-1/2 whitespace-nowrap rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-medium text-gray-800 shadow-[0px_12px_30px_-4px_rgba(16,24,40,0.08);] transition-opacity duration-300">
                                <span
                                    class="absolute -bottom-1.5 left-1/2 -z-10 h-3 w-3 -translate-x-1/2 rotate-45 border-b border-r border-gray-300 bg-white"></span>
                                Nova Área de Conhecimento
                            </div>
                        </a>

                        <a draggable="false" href="{{ route('cursos.edit', $curso->id) }}">
                            <x-feathericon-edit class="min-w-6 w-6 cursor-pointer text-amber-500" />
                        </a>

                    </div>

                </div>

                <div class="col-span-5 grid grid-cols-5" x-show="line == {{ $curso->id }}" x-collapse>
                    @foreach ($curso->areasDeConhecimento as $index => $af)
                        <div class="col-span-5 grid grid-cols-5 bg-neutral-200 py-4 text-center">
                            <div class="">
                                {{ $af->name }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

</div>
