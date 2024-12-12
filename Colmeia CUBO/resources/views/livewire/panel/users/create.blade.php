<div class="flex flex-col items-center justify-center gap-8">

    <div class="flex h-[14vh] w-full items-center justify-center rounded-xl bg-[#F1641F] text-white"
        style="background-image: url({{ asset('background.png') }});">
        <span class="select-none text-3xl font-bold">Novo Usuário</span>
    </div>

    <div class="w-full rounded-xl bg-white p-10">

        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-4">
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-700">Nome Completo</label>
                <input type="text" id="first_name" wire:model="name"
                    class="block w-full rounded-lg border border-[#ffb966] bg-gray-50 p-2.5 text-sm text-gray-700 shadow-[#ffb966] focus:border-[#ffb966] focus:ring-[#ffb966]"
                    required />
            </div>

            <div class="col-span-4">
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="first_name" wire:model="email"
                    class="block w-full rounded-lg border border-[#ffb966] bg-gray-50 p-2.5 text-sm text-gray-700 shadow-[#ffb966] focus:border-[#ffb966] focus:ring-[#ffb966]"
                    required />
            </div>

            <div class="col-span-4">
                <label for="first_name" class="mb-2 block text-sm font-medium text-gray-700">Senha</label>
                <input type="password" id="first_name" wire:model="password"
                    class="block w-full rounded-lg border border-[#ffb966] bg-gray-50 p-2.5 text-sm text-gray-700 shadow-[#ffb966] focus:border-[#ffb966] focus:ring-[#ffb966]"
                    required />
            </div>

            <div class="col-span-4">
                <button wire:click="register"
                    class="w-full rounded-lg bg-neutral-800 py-2 text-white transition-all duration-100 ease-linear hover:bg-neutral-600">
                    Cadastrar Usuário
                </button>
            </div>
        </div>

    </div>
</div>
