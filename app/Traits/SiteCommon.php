<?php

namespace App\Traits;

use App\Models\SiteInfo;
use Illuminate\Support\Facades\DB;

trait SiteCommon {
    /**
     * get_systeminfo
     *
     * @return void
     */
    protected function get_siteinfo()
    {
        $getRow = SiteInfo::where('id', 1)->first();
        if($getRow==true){
            //Head Logo Site
            $head_logo = $getRow->head_logo;
            if($head_logo==''){
                $getRow->url_frontendLogo = NULL;
            } else {
                if (!file_exists(public_path(). '/dist/img/site/'.$head_logo)){
                    $getRow->url_headLogo = NULL;
                    $getRow->head_logo = NULL;
                }else{
                    $getRow->url_headLogo = url('dist/img/site/'.$head_logo);
                }
            }
            //Login Background
            $login_bg = $getRow->login_bg;
            if($login_bg==''){
                $getRow->url_loginBg = NULL;
            } else {
                if (!file_exists(public_path(). '/dist/img/site/'.$login_bg)){
                    $getRow->url_loginBg = NULL;
                    $getRow->login_bg = NULL;
                }else{
                    $getRow->url_loginBg = url('dist/img/site/'.$login_bg);
                }
            }
            //Login Logo
            $login_logo = $getRow->login_logo;
            if($login_logo==''){
                $getRow->url_loginLogo = NULL;
            } else {
                if (!file_exists(public_path(). '/dist/img/site/'.$login_logo)){
                    $getRow->url_loginLogo = NULL;
                    $getRow->login_logo = NULL;
                }else{
                    $getRow->url_loginLogo = url('dist/img/site/'.$login_logo);
                }
            }
            //Head Logo Dark Site
            $head_logo_dark = $getRow->head_logo_dark;
            if($head_logo_dark==''){
                $getRow->url_frontendLogo = NULL;
            } else {
                if (!file_exists(public_path(). '/dist/img/site/'.$head_logo_dark)){
                    $getRow->url_headLogoDark = NULL;
                    $getRow->head_logo_dark = NULL;
                }else{
                    $getRow->url_headLogoDark = url('dist/img/site/'.$head_logo_dark);
                }
            }
            //Head Logo Small
            $head_logo_small = $getRow->head_logo_small;
            if($head_logo_small==''){
                $getRow->url_headLogoSmall = NULL;
            } else {
                if (!file_exists(public_path(). '/dist/img/site/'.$head_logo_small)){
                    $getRow->url_headLogoSmall = NULL;
                    $getRow->head_logo_small = NULL;
                }else{
                    $getRow->url_headLogoSmall = url('dist/img/site/'.$head_logo_small);
                }
            }
            //Keyword to Explode
            $getRow->keyword_explode = explode(',', $getRow->keyword);
            return $getRow;
        } else {
            return null;
        }
    }

}