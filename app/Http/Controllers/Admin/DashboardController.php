<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DigitalProduct;
use App\Models\DigitalService;

class DashboardController extends Controller
{

    /**
     * Show the admin dashboard.
     */
    public function index()
    {
        $stats = [
            'total_products' => DigitalProduct::count(),
            'active_products' => DigitalProduct::active()->count(),
            'total_services' => DigitalService::count(),
            'active_services' => DigitalService::active()->count(),
        ];

        $recent_products = DigitalProduct::latest()->take(5)->get();
        
        // Handle services safely - if table doesn't exist or is empty
        try {
            $recent_services = DigitalService::latest()->take(5)->get();
        } catch (\Exception $e) {
            $recent_services = collect([]);
        }

        return view('admin.dashboard', compact('stats', 'recent_products', 'recent_services'));
    }
}
