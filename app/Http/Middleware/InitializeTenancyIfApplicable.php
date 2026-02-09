<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Stancl\Tenancy\Resolvers\DomainTenantResolver;
use Stancl\Tenancy\Tenancy;

class InitializeTenancyIfApplicable
{
    public function handle(Request $request, Closure $next)
    {
        $centralDomains = config('tenancy.central_domains', []);
        $hostname = $request->getHost();

        // If not a central domain, try to initialize tenancy
        if (!in_array($hostname, $centralDomains)) {
            try {
                $tenant = app(DomainTenantResolver::class)->resolve($hostname);
                app(Tenancy::class)->initialize($tenant);
            } catch (\Exception $e) {
                // If tenant not found for this domain, just continue as central
            }
        }

        return $next($request);
    }
}
