<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 配置文件
    |--------------------------------------------------------------------------
    | 阿里云短信验证码
    |
    */

    'aliyun_sms' => [
        'region_id' => env('ALIYUN_SMS_REGION_ID', 'cn-hangzhou'),
        'access_key_id' => env('ALIYUN_SMS_ACCESS_KEY_ID', null),
        'access_secret' => env('ALIYUN_SMS_ACCESS_SECRET', null),
        'sign_name' => env('ALIYUN_SMS_SIGN_NAME', null),
        'template_code' => env('ALIYUN_SMS_TEMPLATE_CODE', null),
    ],

];
