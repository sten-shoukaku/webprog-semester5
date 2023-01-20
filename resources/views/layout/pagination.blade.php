<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('css/master.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/pagination.css')}}">
</head>
<body>

    @if ($paginator->hasPages())
    <nav>
        <ul
            class="pagination justify-content-center">
            <li
                class="page-item {{($paginator->onFirstPage() ? 'disabled' : '')}}">
                <a
                    class="page-link text-font-roboto"
                    href="{{($paginator->onFirstPage()) ? '#' : $paginator->previousPageUrl()}}"
                    tabindex="-1">
                    Prev
                </a>
            </li>
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li
                        class="page-item disabled text-font-roboto">
                        {{$element}}
                    </li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page=>$url)
                        <li
                            class="page-item {{($page == $paginator->currentPage()) ? 'active' : ''}}">
                            <a
                                href="{{($page == $paginator->currentPage()) ? '#' : $url}}"
                                class="page-link text-font-roboto">
                                {{$page}}
                            </a>
                        </li>
                    @endforeach
                @endif
            @endforeach
            <li
                class="page-item {{($paginator->hasMorePages()) ? '' : 'disabled'}}">
                <a
                    class="page-link text-font-roboto"
                    href="{{($paginator->hasMorePages()) ? $paginator->nextPageUrl() : '#'}}">
                    Next
                </a>
            </li>
        </ul>
    </nav>
@endif

</body>
</html>
