@auth('admin')
	@if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Designer Register') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.register') }}">{{ __('Admin Register') }}</a>
        </li>
    @endif
@endauth