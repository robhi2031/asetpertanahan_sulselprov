<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Traits\SiteCommon;
use App\Traits\UserSessionCommon;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    use SiteCommon, UserSessionCommon;
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $getUserSession = $this->get_userinfo(Auth::user()->username);

        addToLog('Mengakses halaman ' .$getUserSession->name. ' on User Profile - ' .$getUserSession->role);
        return view('backend.user_profile');
    }
}