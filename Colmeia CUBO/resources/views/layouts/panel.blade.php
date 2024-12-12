@extends('layouts.base')

@section('body')
    <div class="grid min-h-screen grid-cols-12 bg-[#F1641F]">

        <div class="relative col-span-2">
            <div class="fixed flex h-screen max-h-screen flex-col items-center gap-6 pt-10">

                <img draggable="false" src="https://i.postimg.cc/zvRgRvyp/1a15fd94-0a7e-4118-bdbc-3f0176e8fbbc.png"
                    alt="" class="w-48" />

                <div class="text-md flex w-full flex-col gap-5 px-2 text-neutral-100" x-data="{ open: false }">

                    <div class="" x-show="!open">

                    </div>

                    <div
                        class="@if (Str::startsWith(Route::currentRouteName(), 'cursos')) border-s-[#ec966b] @endif w-full border-s-4 border-transparent ps-2">
                        <a href="{{ route('cursos.index') }}" wire:navigate.hover.hover
                            class="transtion-all @if (Str::startsWith(Route::currentRouteName(), 'cursos')) bg-[#ec966b] @endif flex items-center gap-2 rounded-lg px-4 py-2 duration-100 ease-linear hover:bg-[#ec966b]">
                            Cursos
                        </a>
                    </div>

                    <div
                        class="@if (Str::startsWith(Route::currentRouteName(), 'ac')) border-s-[#ec966b] @endif w-full border-s-4 border-transparent ps-2">
                        <a href="{{ route('ac.index') }}" wire:navigate.hover
                            class="transtion-all @if (Str::startsWith(Route::currentRouteName(), 'ac')) bg-[#ec966b] @endif flex items-center gap-2 rounded-lg px-4 py-2 duration-100 ease-linear hover:bg-[#ec966b]">
                            Áreas de Conhecimento
                        </a>
                    </div>

                    <div
                        class="@if (Str::startsWith(Route::currentRouteName(), 'af')) border-s-[#ec966b] @endif w-full border-s-4 border-transparent ps-2">
                        <a href="{{ route('af.index') }}" wire:navigate.hover
                            class="transtion-all @if (Str::startsWith(Route::currentRouteName(), 'af')) bg-[#ec966b] @endif flex items-center gap-2 rounded-lg px-4 py-2 duration-100 ease-linear hover:bg-[#ec966b]">
                            Áreas Funcionais
                        </a>
                    </div>

                    <div
                        class="@if (Str::startsWith(Route::currentRouteName(), 'ucs')) border-s-[#ec966b] @endif w-full border-s-4 border-transparent ps-2">
                        <a href="{{ route('ucs.index') }}" wire:navigate.hover
                            class="transtion-all @if (Str::startsWith(Route::currentRouteName(), 'ucs')) bg-[#ec966b] @endif flex items-center gap-2 rounded-lg px-4 py-2 duration-100 ease-linear hover:bg-[#ec966b]">

                            Unidades Curriculares
                        </a>
                    </div>




                    <div
                        class="@if (Str::startsWith(Route::currentRouteName(), 'user')) border-s-[#ec966b] @endif w-full border-s-4 border-transparent ps-2">
                        <a href="{{ route('users.index') }}" wire:navigate.hover
                            class="transtion-all @if (Str::startsWith(Route::currentRouteName(), 'user')) bg-[#ec966b] @endif flex items-center gap-2 rounded-lg px-4 py-2 duration-100 ease-linear hover:bg-[#ec966b]">
                            Usuários
                        </a>
                    </div>


                    <a href="{{ route('logout') }}"
                        class="transtion-all ms-4 flex items-center gap-2 rounded-lg px-4 py-2 duration-100 ease-linear hover:bg-[#ec966b]">
                        Sair
                    </a>


                </div>

            </div>
        </div>


        <div class="col-span-10 bg-[#EFEDE7] p-6">
            @yield('content')
        </div>

    </div>
@endsection
