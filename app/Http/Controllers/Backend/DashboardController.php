<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Traits\SiteCommon;
use App\Traits\UserSessionCommon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    use SiteCommon, UserSessionCommon;
    /**
     * __construct
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth'); 
    }    
    /**
     * index
     *
     * @param  mixed $request
     * @return void
     */
    public function index(Request $request)
    {
        $getSiteInfo = $this->get_siteinfo();
        $getUserSession = $this->get_userinfo(Auth::user()->username);
        //Data WebInfo
        $data = array(
            'title' => 'Dashboard',
            'url' => url()->current(),
            'app_version' => config('app.version'),
            'app_name' => $getSiteInfo->name,
            'user_session' => $getUserSession
        );
        //Data Source CSS
        $data['css'] = array(
            'dist/css/style.init.css',
        );
        //Data Source JS
        $data['js'] = array(
            'dist/js/app.backend.init.js',
            'dist/scripts/backend/main.init.js'
        );

        return view('backend.index', compact('data'));
    }
}