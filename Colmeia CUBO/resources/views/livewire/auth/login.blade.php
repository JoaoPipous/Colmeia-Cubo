@section('title', 'Sign in to your account')

<div class="mx-auto grid grid-cols-2 shadow shadow-[#ff8b00]">
    <div class="col-span-1 flex select-none flex-col items-center justify-center bg-white px-10">
        <a draggable="false" href="{{ route('home') }}">
            <img src="https://unifil.br/assets/uploads/2022/11/logo-unifil.svg" class="mx-auto h-32 w-48 text-indigo-600"
                alt="Estudar Logo" />
        </a>
    </div>

    <div class="col-span-1">
        <div class="bg-[#ff8b0055] px-4 py-8 shadow shadow-[#ff8b0055] sm:px-10">
            <form wire:submit.prevent="authenticate">
                <div>
                    <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                        Email
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus
                            class="focus:ring-blue @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror block w-full appearance-none rounded-md border border-gray-300 bg-neutral-50 px-3 py-2 transition duration-150 ease-in-out focus:border-blue-300 focus:outline-none sm:text-sm sm:leading-5" />
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                        Senha
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required
                            class="bg-neutral-50focus:outline-none focus:ring-blue @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 transition duration-150 ease-in-out focus:border-blue-300 sm:text-sm sm:leading-5" />
                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6 flex items-center justify-between gap-4">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember" id="remember" type="checkbox"
                            class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                        <label for="remember" class="ml-2 block text-sm leading-5 text-gray-900">
                            Lembrar-me
                        </label>
                    </div>

                    <div class="text-sm leading-5">

                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                            class="focus:ring-indigo flex w-full justify-center rounded-md border border-transparent bg-[#ff8b00] px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out hover:bg-[#ce8a36] focus:border-[#99692e] focus:outline-none active:bg-[#ce8a36]">
                            Entrar
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>



    {{-- Input Style --}}
    <style>
        #remember {
            border-radius: 0.25rem;
            border-color: #ff8b00AA;
            border-width: 2px;
        }

        #remember:focus {
            outline-color: #ff8b00;
        }

        #remember:checked {
            background-image: none !important;
            background-color: white;
        }

        #remember:focus-visible {
            outline-color: #ff8b00 !important;
        }

        #remember:checked::after {
            display: flex;
            justify-content: center;
            align-items: center;
            content: "";
            width: 0.5rem;
            height: 0.5rem;
            border-radius: 0.1rem;
            margin: 0.15rem 0.1rem;
            background-color: #ff8b00;
        }
    </style>



</div>
