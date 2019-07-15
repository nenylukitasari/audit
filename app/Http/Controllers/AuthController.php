<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Jumbojett\OpenIDConnectClient;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function tujuan()
    {
        return view('login2');   
    }
    public function showLogin()
    {
    	return view('login2');
    }
    public function login2()
    {

        $oidc = new OpenIDConnectClient('https://my.its.ac.id', '23361951-658B-488E-BBB2-61E0726257C8', '473f1834480bcd7e2bb7d3ca');

        /* jika tidak menggunakan openid discovery aktifkan bagian ini 
        $oidc->providerConfigParam(
            array(
                'authorization_endpoint' => 'https://my.its.ac.id/authorize', 
                'token_endpoint' => 'https://my.its.ac.id/token',
                'jwks_uri' => 'https://my.its.ac.id/.well-known/jwks.json'
            ));
        */

        //String redirect URI harus identik dengan yang didaftarkan di provider (my.its.ac.id)
        $oidc->setRedirectURL('http://localhost:8000'); 


        //set scope yang diinginkan
        $oidc->addScope('openid profile email roleunit integra');
            
        //set auth param jika diperlukan
        // $oidc->addAuthParam(array(
        //  'prompt' => 'none'
        // ));


        /* in development */
        //$oidc->setVerifyHost(false);
        //$oidc->setVerifyPeer(false);

        /*
            
        pada server produksi pastikan web server memiliki daftar trusted CA
        dapat diunduh di http://curl.haxx.se/ca/cacert.pem

        set di php.ini
        curl.cainfo="path/to/cacert.pem"
        openssl.cafile="path/to/cacert.pem"

        */
        $oidc->authenticate();
        // var_dump('berhasil'); die();
        $userInfo = $oidc->requestUserInfo();
        //session_start();

        $_SESSION['userinfo'] = $userInfo;
        // $_SESSION['userinfo2'] = $userInfo->email;
        $_SESSION['username'] = $userInfo->name;
        $_SESSION['user_id'] = $userInfo->username;
        $_SESSION['picture'] = $userInfo->picture;
        $_SESSION['id_token'] = $oidc->getIdToken();

        // if (($_SESSION['userinfo2'] == "azkayasin2@gmail.com")) {
        //     return redirect('/home');    
        // }
        // else if (($_SESSION['userinfo2'] == "nenylukitasari@gmail.com")){
        //     return redirect('/home');   
        // }
        //return redirect('/home');
        $user = User::where('username', $userInfo->username)->first();
        if (!$user) {
            return redirect('/');
        }
        Auth::login($user);
        // if (Auth::User()->role == 1)
        //  {
        //      return redirect('/buatkda');
        //  }
        //  else if (Auth::User()->role == 2)
        //  {
        //      return redirect('/dokumen');
        //  }
        //  else
        //  {
        //    return redirect('/kda'); 
        //  }
        //header('Location: index.php');
        return redirect('/home');
    }
    public function logout2(){
        // if (Auth::user() != null) {
        //     Auth::logout();
        // }
        session_start();
        if (isset($_SESSION['id_token'])) {
        $accessToken = $_SESSION['id_token'];
        $redirect = 'http://localhost:8000';

        session_destroy();

        $oidc = new OpenIDConnectClient('https://my.its.ac.id', '23361951-658B-488E-BBB2-61E0726257C8', '473f1834480bcd7e2bb7d3ca');
        $oidc->signOut($accessToken, $redirect);
        Auth::logout();
        return redirect('/tujuan');
	    }
	    else{
	        dd("Belum ada akun login");
	    }
    }
}
