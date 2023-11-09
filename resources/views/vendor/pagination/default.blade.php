@if ($paginator->hasPages())
    <nav class="pagination-container" >
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())

            @else
                    <a class="pagination-item" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;&ensp;Précédent</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))

                @for ($i = -2; $i < 0; $i++)

                        @if(isset($element[$paginator->currentPage()+$i]))

                            <?php
                                $url = array_values($element)[$paginator->currentPage()+$i-1];
                                $page = array_keys($element)[$paginator->currentPage()+$i-1];
                            ?>

                            @if ($page == $paginator->currentPage())   
                                <li class="active pagination-item" aria-current="page">
                                    <span>{{ $page }}
                                    </span>
                                </li>

                            @else
                                <a class="pagination-item" href="{{ $url }}">
                                    {{$page}}
                                </a>

                            @endif  

                        @endif 

                        
                    @endfor


                    @for ($i = 0; $i < 3; $i++)                    

                        @if(isset($element[$paginator->currentPage()+$i]))

                            <?php
                                $url = array_values($element)[$paginator->currentPage()+$i-1];
                                $page = array_keys($element)[$paginator->currentPage()+$i-1];

                            ?>

                            @if ($page == $paginator->currentPage())   
                                <li class="active pagination-item-active" aria-current="page">
                                    <span>{{ $page }}</span>
                                </li>

                            @else
                        
                                    <a class="pagination-item" href="{{ $url }}">
                                        {{$page}}
                                    </a>
                                

                            @endif  
                            
                        @endif 

                        
                    @endfor

                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                    <a class="pagination-item" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Suivant&ensp;&rsaquo;</a>
            @else

            @endif
        </ul>
    </nav>
@endif
