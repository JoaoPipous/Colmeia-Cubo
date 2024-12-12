<div class="flex flex-col items-center justify-center gap-8">

    <div class="flex h-[14vh] w-full items-center justify-center rounded-xl bg-[#F1641F] text-white"
        style="background-image: url({{ asset('background.png') }});">
        <span class="select-none text-3xl font-bold">Nova Unidade Curricular</span>
    </div>

    <div class="w-full rounded-xl bg-white p-10">

        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-4">
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-700">Nome da UC</label>
                <input type="text" id="first_name" wire:model="name"
                    class="block w-full rounded-lg border border-[#ffb966] bg-gray-50 p-2.5 text-sm text-gray-700 shadow-[#ffb966] focus:border-[#ffb966] focus:ring-[#ffb966]"
                    required />
                    @error('name')
                        <p class="mt-1 w-full text-xs text-red-600">{{ $message }}</p>
                    @enderror
            </div>
            <div class="col-span-4">
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-700">Descrição da UC</label>
                <textarea type="text" id="first_name" wire:model="description"
                    class="block w-full rounded-lg border border-[#ffb966] bg-gray-50 p-2.5 text-sm text-gray-700 shadow-[#ffb966] focus:border-[#ffb966] focus:ring-[#ffb966]"
                    required></textarea>
            </div>

            <div class="col-span-4">
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-700">
                    Carga Horária
                </label>
                <input type="number" id="first_name" wire:model="duration" min="0"
                    class="block w-full rounded-lg border border-[#ffb966] bg-gray-50 p-2.5 text-sm text-gray-700 shadow-[#ffb966] focus:border-[#ffb966] focus:ring-[#ffb966]"
                    required />
                    @error('duration')
                    <p class="mt-1 w-full text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-4" x-data="{ open: false }">


                <div class="flex w-full cursor-pointer items-center justify-between gap-2 rounded-lg border-none bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm shadow-[#ffb966] focus:border focus:border-[#ffb966] focus:ring-[#ffb966]"
                    x-on:click="open = !open">

                    <span>Selecione uma ou mais Área(s) de Conhecimento</span>

                    <span>Selecionados: {{ count($selectedAfs) }}</span>

                </div>

                <div x-show="open" x-collapse
                    class="mt-4 flex w-full flex-col rounded-lg border-none bg-gray-50 text-sm text-gray-900 shadow-sm shadow-[#ffb966] focus:border focus:border-[#ffb966] focus:ring-[#ffb966]">

                    <div class="m-1 w-full rounded-lg p-2">
                        <input type="text" wire:model.live="search" placeholder="Pesquisar"
                            class="w-full rounded-lg" />
                            @error('search')
                        <p class="mt-1 w-full text-xs text-red-600">{{ $message }}</p>
                    @enderror
                    </div>

                    @foreach ($afs as $af)
                        <div class="@if ($selectedAfs && in_array($af->id, $selectedAfs)) bg-neutral-200 @endif m-1 cursor-pointer rounded-lg px-4 py-1 transition-all duration-75 ease-linear hover:bg-neutral-200"
                            wire:click="selectAf({{ $af }})">
                            {{ $af->name }}</div>
                    @endforeach
                </div>
            </div>


            <div class="col-span-4 flex justify-between gap-2">
                <a href="{{ route('ucs.index') }}" draggable="false" wire:navigate.hover
                    class="w-full rounded-lg border-2 border-red-500 py-2 text-center text-red-500 transition-all duration-100 ease-linear hover:bg-red-500 hover:text-white">
                    Cancelar
                </a>

                <button wire:click="store"
                    class="w-full rounded-lg bg-neutral-800 py-2 text-white transition-all duration-100 ease-linear hover:bg-neutral-600">
                    Criar Unidade Curricular
                </button>
            </div>
        </div>

    </div>
</div>
