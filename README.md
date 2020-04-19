### Moon Project

---

##### Auth Sample
位于`graphql/auth.graphql`

* 获取验证码 `阿里云SMS`
```
input GetSmsCodeInput {
    device_id: String! # 设备id
    mobile: MobilePhone! # 中国手机号
}

type SmsCodePayload {
    exsists: Boolean! # 是否已经是注册用户
    success: Boolean! # 验证码发送成功
}
```
* 身份认证: `laravel:Sanctum`
```
input GetTokenInput {
    device_id: String!
    mobile: MobilePhone!
    code: SmsCode!
}

type TokenPayload {
    name: String # 令牌名称
    abilities: String # 令牌能力
    access_token: String! 
}
```

* graphql客户端请求示例

1. 获取手机验证码
```
mutation GetSmsCode($device_id: String!, $mobile: MobilePhone!) {
  getSmsCode(input: { device_id: $device_id, mobile: $mobile }){
    success
  }
}
```
2. 根据验证码获取token
```
mutation GetToken($device_id:String!,$mobile:MobilePhone!, $code: SmsCode!) {
  getToken(input:{device_id:$device_id,mobile:$mobile,code:$code}){
    abilities
    access_token
  }
}
```
3. 使用 http header
```
{
  "Authorization":"Bearer <access_token>"
}
```
