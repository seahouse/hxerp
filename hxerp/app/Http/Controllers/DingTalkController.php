<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Cache;

class DingTalkController extends Controller
{
    //
    const CORP_ID = 'ding8414637331385d36';
    const CORP_SECRET = 'T3nba1syKPqaFxJPv9XZMSUGkLdHbEenF2wjEsdHQAV4_XDgp8X5NsHEfRCrlK5F';
    
    protected static $access_token;
    protected static $jsapi_ticket;
    
    public function __construct()
    {
        try {
            // Get access_token
            self::$access_token = Cache::remember('access_token', 7200/60, function() {
                $url = 'https://oapi.dingtalk.com/gettoken';
                $params = ['corpid' => self::CORP_ID, 'corpsecret' => self::CORP_SECRET];
                $reply = $this->get($url, $params);
                dd($reply->access_token);
                $access_token = $reply->access_token;
//                 return $access_token;
            });
        }
        catch (\Exception $e) {
            dd($e);
        }
    }
    
    public function index()
    {
//         $response = "";
        
//         try {
//             if (Request()->has('error')) {
//                 $response = response(Request()->get('error'));
//             }
//             else if (Request()->has('code')) {
//                 // Get user ID by auth code
//                 $code = Request()->get('code');
//                 $url = 'https://oapi.dingtalk.com/user/getuserinfo';
//                 $params = ['access_token' => self::$access_token, 'code' => $code];
//                 $reply = $this->get($url, $params);
//                 $userid = $reply->userid;
//                 $deviceId = $reply->deviceId;
//                 $is_sys = $reply->is_sys;
//                 $sys_level = $reply->sys_level;
        
//                 // Get user information
//                 $url = 'https://oapi.dingtalk.com/user/get';
//                 $params = ['access_token' => self::$access_token, 'userid' => $userid];
//                 $reply = $this->get($url, $params);
//                 $name = $reply->name;
//                 $mobile = $reply->mobile;
//                 $isAdmin = $reply->isAdmin;
//                 $isBoss = $reply->isBoss;
//                 $dingId = $reply->dingId;
        
//                 $response = response('userid:' . $userid . '<br>'
//                     .'deviceId: ' . $deviceId . '<br>'
//                     .'is_sys: ' . $is_sys . '<br>'
//                     .'sys_level: ' . $sys_level . '<br>'
//                     .'name: ' . $name . '<br>'
//                     .'mobile: ' . $mobile . '<br>'
//                     .'isAdmin: ' . $isAdmin . '<br>'
//                     .'isBoss: ' . $isBoss . '<br>'
//                     .'dingId: ' . $dingId . '<br>'
//                 );
//             }
//             else {
//                 // Calc signature
//                 $corpid = self::CORP_ID;
//                 $access_token = self::$access_token;
//                 $jsapi_ticket = self::$jsapi_ticket;
//                 $url = Request()->url();
//                 $timestamp  = time();
//                 $noncestr   = substr(md5(time()), 0, 16);
//                 $array = compact('jsapi_ticket', 'url', 'timestamp', 'noncestr');
//                 ksort($array);
//                 $rawstring  = urldecode(http_build_query($array));
//                 $signature = sha1($rawstring);
        
//                 $ddconfig = compact('corpid', 'timestamp', 'noncestr', 'signature', 'access_token', 'rawstring');
        
//                 $response = response()->view('dingtalk', compact('ddconfig'));
//             }
//         }
//         catch (\Exception $e) {
//             dd($e);
//         }
        
//         return $response;
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    private function get($url, $params)
    {
        $response = \Httpful\Request::get($url . '?' . http_build_query($params))->send();
        if ($response->hasErrors()) {
            throw new \Exception($response->hasErrors());
        }
        if (!$response->hasBody()) {
            throw new \Exception("No response body.");
        }
        if ($response->body->errcode != 0) {
            throw new \Exception($response->body->errmsg);
        }
        return $response->body;
    }
    
    private function post($url, $params, $data)
    {
//         $response = \Httpful\Request::post($url . '?' . http_build_query($params))
//         ->body($data)
//         ->sendsJson()
//         ->send();
//         if ($response->hasErrors()) {
//             throw new \Exception($response->hasErrors());
//         }
//         if (!$response->hasBody()) {
//             throw new \Exception("No response body.");
//         }
//         if ($response->body->errcode != 0) {
//             throw new \Exception($response->body->errmsg);
//         }
//         return $response->body;
    }
}
