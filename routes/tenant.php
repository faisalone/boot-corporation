<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Tenant routing is handled via middleware in web.php routes.
| When a request comes from a tenant domain, the InitializeTenancyByDomain
| middleware bootstraps tenancy (switches DB, etc.) and the same views
| render with tenant-specific $site data from AppServiceProvider.
|
| This file is intentionally kept minimal.
|
*/
