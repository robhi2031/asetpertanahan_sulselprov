<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Traits\SiteCommon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PermissionsController extends Controller
{
    use SiteCommon;
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
     * @return void
     */
    public function index(Request $request)
    {
        $getSiteInfo = $this->get_siteinfo();
        $getUserSession = Auth::user();
        return dd($getUserSession->givePermissionsTo('create-tasks'));
        // //Data WebInfo
        // $data = array(
        //     'title' => 'Kelola Permissions site',
        //     'url' => url()->current(),
        //     'app_version' => config('app.version'),
        //     'app_name' => $getSiteInfo->name,
        //     'user_session' => $getUserSession
        // );
        // //Data Source CSS
        // $data['css'] = array(
        //     '/dist/plugins/custom/datatables/datatables.bundle.v817.css',
        //     '/dist/plugins/bootstrap-select/css/bootstrap-select.min.css',
        // );
        // //Data Source JS
        // $data['js'] = array(
        //     '/dist/plugins/custom/datatables/datatables.bundle.v817.js',
        //     '/dist/plugins/bootstrap-select/js/bootstrap-select.min.js',
        //     '/dist/js/jquery.mask.min.js',
        //     '/dist/js/backend_app.init.js',
        //     '/scripts/backend/manage_permissions.init.js'
        // );

        // addToLog('Mengakses halaman Kelola Permissions system - Backend');
        // return view('backend.manage_permissions', compact('data'));
    }
}