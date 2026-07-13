<li @isset($item['id']) id="{{ $item['id'] }}" @endisset class="nav-item">

    @if(isset($item['text']) && $item['text'] == 'Logout')

        <a class="nav-link" href="#"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="nav-icon {{ $item['icon'] }}"></i>
            <p>{{ $item['text'] }}</p>
        </a>

        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none;">
            @csrf
        </form>

    @else

        <a class="nav-link {{ $item['class'] ?? '' }}"
           href="{{ $item['href'] }}"
           @isset($item['target']) target="{{ $item['target'] }}" @endisset
           {!! $item['data-compiled'] ?? '' !!}>

            <i class="nav-icon {{ $item['icon'] ?? 'far fa-circle' }}"></i>

            <p>{{ $item['text'] }}</p>

        </a>

    @endif

</li>
