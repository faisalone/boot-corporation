@props(['active' => ''])

<aside class="lg:w-1/4">
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6 sticky top-24">
        <h3 class="text-lg font-bold text-slate-800 mb-4 px-2">{{ __('Services Menu') }}</h3>
        <ul class="space-y-2">
            @if(isset($siteServices) && $siteServices->count())
                @foreach($siteServices as $svc)
                <li>
                    <a href="{{ route('service.show', $svc->slug) }}"
                        class="block px-4 py-3 rounded-xl font-medium transition-colors {{ $active === $svc->slug ? 'bg-orange-50 text-orange-600' : 'hover:bg-slate-50 text-slate-600' }}">
                        @if($svc->icon)<i class="{{ $svc->icon }} mr-2 text-xs"></i>@endif
                        {{ t($svc, 'title') }}
                    </a>
                </li>
                @endforeach
            @else
            <li>
                <a href="{{ route('service.index') }}"
                    class="block px-4 py-3 rounded-xl font-medium transition-colors hover:bg-slate-50 text-slate-600">Our Services</a>
            </li>
            @endif
        </ul>
    </div>
</aside>
