<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    /**
     * index Layout
     *
     * @return void
     */
    public function index() {
        //Data WebInfo
        $data = array(
            'title' => 'Layout', // $getSiteInfo->name,
            'desc' => '-', // $getSiteInfo->description,
            'keywords' => '-', // $getSiteInfo->keyword,
            'url' => url()->current(),
            'thumb' => '-', // $getSiteInfo->url_thumb,
            'app_version' => config('app.version'),
            'app_name' => '-', // $getSiteInfo->name
        );
        //Data Source CSS
        $data['css'] = array(
            'dist/css/style.init.css',
        );
        //Data Source JS
        $data['js'] = array(
            'dist/js/app.init.js'
        );

        // addToLog('Mengakses halaman beranda - Public');
        return view('frontend.layouts', compact('data'));
    }
    /**
     * Beranda
     *
     * @return void
     */
    public function home() {
        // addToLog('Mengakses halaman beranda - Public');
        return view('frontend.index');
    }
    /**
     * map
     *
     * @return void
     */
    public function map_aset() {
        // addToLog('Mengakses halaman beranda - Public');
        return view('frontend.map_aset');
    }
}