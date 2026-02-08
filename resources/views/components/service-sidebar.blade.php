@props(['active' => ''])

<aside class="lg:w-1/4">
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6 sticky top-24">
        <h3 class="text-lg font-bold text-slate-800 mb-4 px-2">Services Menu</h3>
        <ul class="space-y-2">
            <li>
                <a href="{{ route('service.registration') }}"
                    class="block px-4 py-3 rounded-xl font-medium transition-colors {{ $active === 'registration' ? 'bg-orange-50 text-orange-600' : 'hover:bg-slate-50 text-slate-600' }}">Registration
                    & Permits</a>
            </li>
            <li>
                <a href="{{ route('service.bookkeeping') }}"
                    class="block px-4 py-3 rounded-xl font-medium transition-colors {{ $active === 'bookkeeping' ? 'bg-orange-50 text-orange-600' : 'hover:bg-slate-50 text-slate-600' }}">Bookkeeping
                    & Payroll</a>
            </li>
            <li>
                <a href="{{ route('service.audit') }}"
                    class="block px-4 py-3 rounded-xl font-medium transition-colors {{ $active === 'audit' ? 'bg-orange-50 text-orange-600' : 'hover:bg-slate-50 text-slate-600' }}">Audit
                    & Assurance</a>
            </li>
            <li>
                <a href="{{ route('service.tax') }}"
                    class="block px-4 py-3 rounded-xl font-medium transition-colors {{ $active === 'tax' ? 'bg-orange-50 text-orange-600' : 'hover:bg-slate-50 text-slate-600' }}">Income
                    Tax, VAT & TP</a>
            </li>
            <li>
                <a href="{{ route('service.consultancy') }}"
                    class="block px-4 py-3 rounded-xl font-medium transition-colors {{ $active === 'consultancy' ? 'bg-orange-50 text-orange-600' : 'hover:bg-slate-50 text-slate-600' }}">Secretarial
                    & Consultancy</a>
            </li>
        </ul>
    </div>
</aside>
