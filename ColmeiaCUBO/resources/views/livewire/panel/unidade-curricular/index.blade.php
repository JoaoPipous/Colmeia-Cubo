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
        <span class="select-none text-3xl font-bold">Gerenciamento de Unidades Curriculares</span>
    </div>

    <div class="flex select-none items-center gap-4">
        <div class="flex items-center gap-2">
            <div class="size-8 rounded-lg bg-white p-2 shadow-md"></div>
            <span>Unidades Curriculares</span>
        </div>
    </div>

    @if ($id)
        <nav class="flex w-full select-none" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 rtl:space-x-reverse md:space-x-2">
                <li class="inline-flex items-center">
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">
                        {{ $ucs->first()?->areaFuncional->areaDeConhecimento->curso->name }}
                    </span>
                </li>
                <li class="inline-flex items-center">
                    <svg class="mx-1 h-3 w-3 text-gray-400 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">
                        {{ $ucs->first()?->areaFuncional->areaDeConhecimento->name }}
                    </span>
                </li>
                <li class="inline-flex items-center">
                    <svg class="mx-1 h-3 w-3 text-gray-400 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">
                        {{ $ucs->first()?->areaFuncional->name }}
                    </span>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="mx-1 h-3 w-3 text-gray-400 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a draggable="false" href="{{ route('ucs.index') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#F1641F]">
                            Unidades Curriculares
                        </a>
                    </div>
                </li>
            </ol>
        </nav>
    @endif

    <div class="grid w-full grid-cols-8 items-center gap-2">
        <div class="col-span-4">
            <x-input wire:model.live="search" placeholder="Pesquisar por unidade curricular..."
                icon="magnifying-glass" />
        </div>

        <div class="col-span-3 flex">
            {{ $ucs->links('vendor.livewire.pagination-links') }}
        </div>

        <a href="{{ route('ucs.create') }}" draggable="false" wire:navigate.hover
            class="col-span-1 rounded-lg bg-gray-700 px-4 py-2 text-center text-sm font-medium text-white transition-all duration-100 ease-linear hover:bg-gray-600">
            Nova UC
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
                AF
            </div>

            <div class="col-span-1 font-semibold">
                Ação
            </div>
        </div>

        @foreach ($ucs as $index => $uc)
            <div class="relative col-span-5 grid grid-cols-5 items-center border-b-2">

                <div class="relative col-span-5 grid grid-cols-5 items-center">


                    <div class="col-span-1 py-4">
                        {{ $uc->name }}
                    </div>

                    <div class="col-span-1 py-4">
                        <p class="line-clamp-2">{{ $uc->description }}</p>
                    </div>

                    <div class="col-span-1 py-4">
                        @if ($uc->duration == 0)
                            Indefinido
                        @else
                            {{ $uc->duration }} Horas
                        @endif
                    </div>

                    <div class="col-span-1 py-4">
                        {{ $uc->areaFuncional->name }}
                    </div>

                    <div class="relative col-span-1 flex items-center justify-center gap-4">

                        <x-feathericon-trash-2 wire:click.prevent="delete({{ $uc->id }})"
                            class="min-w-6 w-6 cursor-pointer text-red-400" />

                        <a draggable="false" href="{{ route('ucs.edit', $uc->id) }}">
                            <x-feathericon-edit class="min-w-6 w-6 cursor-pointer text-amber-500" />
                        </a>

                    </div>

                </div>


            </div>
        @endforeach
    </div>

</div>
