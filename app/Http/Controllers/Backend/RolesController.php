<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Traits\SiteCommon;
use App\Traits\UserSessionCommon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RolesController extends Controller
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
            'title' => 'Kelola Roles System',
            'url' => url()->current(),
            'app_version' => config('app.version'),
            'app_name' => $getSiteInfo->name,
            'user_session' => $getUserSession
        );
        //Data Source CSS
        $data['css'] = array(
            'https://kendo.cdn.telerik.com/themes/6.6.0/default/default-main.css',
            'dist/css/style.init.css',
        );
        //Data Source JS
        $data['js'] = array(
            'https://kendo.cdn.telerik.com/2023.2.718/js/kendo.all.min.js',
            'dist/js/app.backend.init.js',
            'dist/scripts/backend/manage_roles.init.js'
        );

        addToLog('Mengakses halaman ' .$data['title']. ' - ' .$getUserSession->role);
        return view('backend.manage_roles', compact('data'));
    }
}