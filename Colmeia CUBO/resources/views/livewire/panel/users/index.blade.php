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
        <span class="select-none text-3xl font-bold">Gerenciamento de Usuários</span>
    </div>

    <div class="flex select-none items-center gap-4">
        <div class="flex items-center gap-2">
            <div class="size-8 rounded-lg bg-white p-2 shadow-md"></div>
            <span>Usuários</span>
        </div>
    </div>

    <div class="grid w-full grid-cols-8 items-center gap-2">
        <div class="col-span-4">
            <x-input wire:model.live="search" placeholder="Pesquisar por usuários..." icon="magnifying-glass" />
        </div>

        <div class="col-span-3 flex">
            {{ $users->links('vendor.livewire.pagination-links') }}
        </div>

        <a href="{{ route('users.create') }}" draggable="false" wire:navigate.hover
            class="col-span-1 rounded-lg bg-gray-700 px-4 py-2 text-center text-sm font-medium text-white transition-all duration-100 ease-linear hover:bg-gray-600">
            Novo Usuário
        </a>

    </div>


    <div class="grid w-full grid-cols-2 rounded-xl bg-white text-center" x-data="{ menu: null, line: null }">

        <div class="col-span-2 grid grid-cols-2 border-b-2 py-4">
            <div class="col-span-1 font-semibold">
                Nome
            </div>

            <div class="col-span-1 font-semibold">
                Ação
            </div>
        </div>

        @foreach ($users as $index => $user)
            <div class="relative col-span-2 grid grid-cols-2 items-center border-b-2">

                <div class="relative col-span-2 grid grid-cols-2 items-center">


                    <div class="col-span-1 py-4">
                        {{ $user->name }}
                    </div>


                    <div class="relative col-span-1 flex items-center justify-center gap-4">

                        <x-feathericon-trash-2 wire:click.prevent="delete({{ $user->id }})"
                            class="min-w-6 w-6 cursor-pointer text-red-400" />

                        <a draggable="false" href="{{ route('users.edit', $user->id) }}">
                            <x-feathericon-edit class="min-w-6 w-6 cursor-pointer text-amber-500" />
                        </a>

                    </div>

                </div>


            </div>
        @endforeach
    </div>

</div>
