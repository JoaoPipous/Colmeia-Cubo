<div class="flex flex-col items-center justify-center gap-8">

    <div class="flex h-[14vh] w-full items-center justify-center rounded-xl bg-[#F1641F] text-white"
        style="background-image: url({{ asset('background.png') }});">
        <span class="select-none text-3xl font-bold">Atualizar Área Funcional</span>
    </div>

    <div class="w-full rounded-xl bg-white p-10">

        <div class="grid grid-cols-4 gap-4">

            <div class="col-span-4">
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-700">Nome da Área
                    Funcional</label>
                <input type="text" id="first_name" wire:model="nome"
                    class="block w-full rounded-lg border border-[#ffb966] bg-gray-50 p-2.5 text-sm text-gray-700 shadow-[#ffb966] focus:border-[#ffb966] focus:ring-[#ffb966]"
                    required />
                    @error('nome')
                        <p class="mt-1 w-full text-xs text-red-600">{{ $message }}</p>
                    @enderror
            </div>

            <div class="col-span-4">
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-700">Descrição da
                    Área
                    Funcional</label>
                <textarea type="text" id="first_name" wire:model="description"
                    class="block w-full rounded-lg border border-[#ffb966] bg-gray-50 p-2.5 text-sm text-gray-700 shadow-[#ffb966] focus:border-[#ffb966] focus:ring-[#ffb966]"
                    required></textarea>
            </div>

            <div class="col-span-4">
                <label for="countries" class="text-md mb-2 block font-medium text-gray-700">Área de Conhecimento</label>
                <select id="countries" wire:model.live="selectedAc" value="0"
                    class="block w-full rounded-lg border-none bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm shadow-[#ffb966] focus:border focus:border-[#ffb966] focus:ring-[#ffb966]">
                    <option value="0" selected disabled>Selecione uma Área de Conhecimento</option>
                    @foreach ($acs as $ac)
                        <option value="{{ $ac->id }}">{{ $ac->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="col-span-4 flex justify-between gap-2">
                <a href="{{ route('af.index') }}" draggable="false" wire:navigate.hover
                    class="w-full rounded-lg border-2 border-red-500 py-2 text-center text-red-500 transition-all duration-100 ease-linear hover:bg-red-500 hover:text-white">
                    Cancelar
                </a>

                <button wire:click="edit"
                    class="w-full rounded-lg bg-neutral-800 py-2 text-white transition-all duration-100 ease-linear hover:bg-neutral-600">
                    Salvar
                </button>
            </div>
        </div>

    </div>
</div>
