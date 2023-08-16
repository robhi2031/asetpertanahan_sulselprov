<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Traits\SiteCommon;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    use SiteCommon;
    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $getSiteInfo = $this->get_siteinfo();
        //Data WebInfo
        $data = array(
            'title' => $getSiteInfo->name,
            'desc' => $getSiteInfo->description,
            'keywords' => $getSiteInfo->keyword,
            'url' => url()->current(),
            'thumb' => $getSiteInfo->url_loginBg,
            'app_version' => config('app.version'),
            'app_name' => $getSiteInfo->name
        );
        //Data Source CSS
        $data['css'] = array(
            '',
        );
        //Data Source JS
        $data['js'] = array(
            '/dist/js/app.init.js',
            '/dist/scripts/frontend/main.init.js'
        );

        addToLog('Mengakses halaman Beranda - Public');
        return view('frontend.index', compact('data'));
    }
}