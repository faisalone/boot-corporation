<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Photo;
use App\Models\Publication;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Menu;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('admin.dashboard', [
            'counts' => [
                'slides'       => Slide::count(),
                'pages'        => Page::count(),
                'services'     => Service::count(),
                'partners'     => Partner::count(),
                'photos'       => Photo::count(),
                'publications' => Publication::count(),
                'menus'        => Menu::count(),
            ],
        ]);
    }
}
