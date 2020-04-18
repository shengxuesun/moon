### Moon Project

---

##### Auth Sample
位于`graphql/auth.graphql`

. 获取验证码 `阿里云SMS`
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
. 身份认证: `laravel:Sanctum`
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
