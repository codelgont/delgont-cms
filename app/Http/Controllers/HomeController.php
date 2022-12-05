<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\File;

use Web\Services\MenuService;
use Web\Concerns\OfType;
use Web\Concerns\OfCategory;

use Delgont\Cms\Repository\Menu\MenuRepository;


class HomeController extends Controller
{
    use OfType, OfCategory;

    private $menu;

    public function __construct(MenuService $menuService)
    {
        $this->menu = $menuService;
    }

    public function index()
    {
       return view('web.index');
    }

        
}
