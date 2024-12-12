<div class="overflow-hidden bg-white" x-data="{ modal: @entangle('modal') }">

    <div wire:loading.flex wire:target="getAF" class="fixed z-50 flex h-screen w-screen items-center justify-center">
        <div class="loader">
        </div>
    </div>


    <style>
        .loader {
            width: 50px;
            aspect-ratio: 1;
            border-radius: 50%;
            background:
                radial-gradient(farthest-side, #ffa516 94%, #0000) top/8px 8px no-repeat,
                conic-gradient(#0000 30%, #ffa516);
            -webkit-mask: radial-gradient(farthest-side, #0000 calc(100% - 8px), #000 0);
            animation: l13 1s infinite linear;
        }

        @keyframes l13 {
            100% {
                transform: rotate(1turn)
            }
        }
    </style>


    <div wire:loading.remove wire:target="getAF" x-show="modal" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="montserrat-regular fixed z-50 flex h-screen w-screen items-center justify-center bg-neutral-600/50 backdrop-blur">
        <div x-on:click.away="modal = false"
            class="relative flex max-h-[80%] w-[90%] select-none flex-col overflow-y-auto rounded-lg bg-white p-6 text-neutral-700 sm:w-[70%]">
            @if ($modalAF)
                <span class="montserrat-bold w-full text-center text-3xl capitalize">
                    {{ $modalAF->name }}
                </span>

                <span class="mb-2 mt-4 text-xl font-medium">
                    Cursos
                </span>

                <ul class="list-disc ps-4">
                    @foreach ($ucs as $uc)
                        <li>
                            {{ $uc->name }}
                        </li>
                    @endforeach
                </ul>
            @endif

        </div>
    </div>

    <div class="relative min-h-[50vh] select-none bg-[#F1641F]">
        <div class="relative flex w-full items-center justify-between border-b-2 pb-2 max-sm:hidden">
            <img src="https://i.postimg.cc/zvRgRvyp/1a15fd94-0a7e-4118-bdbc-3f0176e8fbbc.png" alt=""
                class="w-48" />

            <div
                class="poppins-regular absolute left-0 top-0 flex h-full w-full items-center justify-center gap-4 text-xl text-white">
                <a draggable="false" href="https://unifil.br">
                    Unifil
                </a>

                <a draggable="false" href="https://unifil.br/cubo/">
                    Sobre
                </a>

                <a draggable="false" href="https://unifil.br/fale-conosco/">
                    Contato
                </a>
            </div>
        </div>

        <div class="absolute inset-x-0 bottom-0">
            <svg viewBox="0 0 224 12" fill="currentColor" class="-mb-1 w-full text-white" preserveAspectRatio="none">
                <path
                    d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z">
                </path>
            </svg>
        </div>



        <div class="mx-auto px-4 py-16 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-20">
            <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl sm:text-center md:max-w-2xl">
                <h2 class="mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-5xl sm:leading-normal">
                    <br class="hidden md:block" />
                    Colmeia
                    <span class="relative inline-block px-2">
                        <div class="absolute inset-0 -skew-x-12 transform bg-amber-400"></div>
                        <span class="relative text-neutral-50">Cubo</span>
                    </span>
                </h2>

                <p class="mb-6 text-base text-neutral-50 md:text-lg">
                    Veja tudo sobre o seu curso usando a COLMEIA CUBO... Aqui é lugar onde voce podera ver tudo oque
                    voce usara em todos os anos de estudo
                </p>

                <x-select.styled placeholder="Selecione o seu curso!" :options="$cursos->pluck('name', 'id')" wire:model.live="selectedCurso"
                    select="label:name|value:id" searchable />

                <p class="mt-5 max-w-md text-xs tracking-wide text-neutral-50 sm:mx-auto sm:text-sm">
                    Em caso de duvida contate o cordenador do seu curso .
                </p>

            </div>
        </div>

    </div>

    @if ($curso)


        <div class="montserrat-regular relative flex items-center px-20 text-neutral-800" id="hex">

            <h3 class="montserrat-bold absolute left-1/2 top-28 -translate-x-1/2 text-center text-5xl text-neutral-800">
                <span class="relative inline-block">
                    {{ $curso->name }}

                    <div class="-mt-3 h-3 w-full bg-[#F1641F]"></div>
                </span>
            </h3>

            <div class="w-[45%]">

                <p class="montserrat-bold mb-6 text-3xl">Áreas de Conhecimento</p>


                <div class="flex flex-col gap-2">

                    @foreach (collect($areasDeConhecimento)->unique('area_de_conhecimento') as $areaDeConhecimento)
                        <div class="flex items-center gap-2">
                            <x-bi-hexagon-fill class="size-10 min-w-10"
                                style="fill: {{ $areaDeConhecimento['cor'] }}" />
                            <span>{{ $areaDeConhecimento['area_de_conhecimento'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Honeycomb --}}
            <div wire:ignore id="honeycomb" class="h-screen w-[60%]"></div>

            <style>
                #honeycomb svg {
                    position: relative;
                    transform: translateY(30%);
                }
            </style>
        </div>
    @endif

    <footer class="relative z-30 flex flex-col justify-center space-y-10 bg-white bg-gradient-to-b p-10">

        <nav class="flex flex-wrap justify-center gap-6 font-medium text-gray-500">
            <a draggable="false" class="hover:text-gray-900" href="https://unifil.br">Unifil</a>
            <a draggable="false" class="hover:text-gray-900" href="{{ route('ucs.index') }}">Painel</a>
        </nav>

        {{-- <div class="flex justify-center space-x-5">
            <a draggable="false" href="https://facebook.com" target="_blank" rel="noopener noreferrer">
                <img draggable="false" src="https://img.icons8.com/fluent/30/000000/facebook-new.png" />
            </a>
            <a draggable="false" href="https://linkedin.com" target="_blank" rel="noopener noreferrer">
                <img draggable="false" src="https://img.icons8.com/fluent/30/000000/linkedin-2.png" />
            </a>
            <a draggable="false" href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                <img draggable="false" src="https://img.icons8.com/fluent/30/000000/instagram-new.png" />
            </a>
            <a draggable="false" href="https://messenger.com" target="_blank" rel="noopener noreferrer">
                <img draggable="false" src="https://img.icons8.com/fluent/30/000000/facebook-messenger--v2.png" />
            </a>
            <a draggable="false" href="https://twitter.com" target="_blank" rel="noopener noreferrer">
                <img draggable="false" src="https://img.icons8.com/fluent/30/000000/twitter.png" />
            </a>
        </div> --}}
        <p class="text-center font-medium text-gray-700">&copy; 2024 Unifil & Deliberador & NPI. Todos os Direitos Reservados.</p>
    </footer>

</div>

@script
    <script>
        Livewire.on('cursoChanged', () => {
            scrollToElement('#hex');
        })


        document.addEventListener('livewire:initialized', function() {
            let areasDeConhecimento = @json($areasDeConhecimento);

            const renderGrid = () => {
                document.getElementById('honeycomb').innerHTML = '';

                const hexSize = Math.max(30, Math.min(window.innerWidth * 0.6, window.innerHeight * 0.6) / 5.5);

                const Hex = Honeycomb.defineHex({
                    dimensions: hexSize,
                    origin: 'topLeft'
                });

                const hexWidth = hexSize * 2;
                const hexHeight = hexSize * Math.sqrt(3);

                const columns = Math.floor(window.innerWidth / (hexWidth * 1.65));
                const rows = Math.floor(window.innerHeight / hexHeight);

                const grid = new Honeycomb.Grid(Hex, Honeycomb.rectangle({
                    width: columns,
                    height: rows
                }));

                const offsetX = (window.innerWidth - columns * hexWidth * 0.75) / 2;
                const offsetY = (window.innerHeight - rows * hexHeight) / 2;

                const draw = SVG().addTo('#honeycomb').size('100%', '100%');

                let index = 0;

                grid.forEach(hex => {
                    if (index >= areasDeConhecimento.length) return;

                    const unidadeCurricular = areasDeConhecimento[index];
                    renderSVG(hex, draw, unidadeCurricular);
                    index++;
                });
            };

            function renderSVG(hex, draw, unidadeCurricular) {
                const polygonPoints = hex.corners.map(({
                    x,
                    y
                }) => `${x},${y}`).join(" ");

                const polygon = draw
                    .polygon(polygonPoints)
                    .fill(unidadeCurricular.cor)
                    .stroke({
                        width: 8,
                        color: '#fff'
                    }).attr({
                        'class': 'cursor-pointer',
                        'wire:click': 'getAF(' + unidadeCurricular.id + ')',
                    });

                const hexWidth = hex.width * 2;
                const fontSize = Math.min(12, hexWidth / name.length);
                const lineHeight = fontSize * 1.2;

                const maxLineLength = Math.floor(hexWidth / fontSize) - 1;
                const words = unidadeCurricular.unidade_curricular.split(
                    ' ');
                let lines = [];
                let currentLine = '';

                words.forEach(word => {

                    if (currentLine.length + word.length + 1 > maxLineLength) {
                        lines.push(currentLine);
                        currentLine = word;
                    } else {
                        currentLine += (currentLine.length ? ' ' : '') +
                            word;
                    }
                });
                if (currentLine) {
                    lines.push(currentLine);
                }

                lines.push(unidadeCurricular.unidade_duration + ' horas');

                lines.forEach((line, index) => {
                    draw.text(line)
                        .font({
                            size: fontSize,
                            family: 'Arial',
                            anchor: 'middle'
                        })
                        .attr({
                            'class': 'font-bold',
                        })
                        .fill('#fff')
                        .center(hex.x, hex.y + (index - (lines.length - 1) / 2) *
                            lineHeight);
                });
            }

            renderGrid();
            window.addEventListener('resize', renderGrid);
        });
    </script>
@endscript
