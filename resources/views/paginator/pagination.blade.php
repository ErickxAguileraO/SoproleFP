@if ($paginator->hasPages())
    <div class="numeros-pag">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="numero-antes-despues" style="margin-right: 35px">Anterior</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="numero-antes-despues" style="margin-right: 35px">Anterior</a>
        @endif

        <a href="" class="numero-antes-despues-movil"  style="margin-right: 35px"><img src="{{ asset('web/imagenes/i-antes.svg') }}" alt=""></a>
        
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span>{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="numero numero-seleccionado">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="numero">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
        
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="numero-antes-despues" style="margin-left: 35px">Siguiente</a>
        @else
            <a class="numero-antes-despues" style="margin-left: 35px">Siguiente</a>
        @endif

        <a href="" class="numero-antes-despues-movil"  style="margin-left: 35px"><img src="{{ asset('web/imagenes/i-despues.svg') }}" alt=""></a>
    </div>
@endif