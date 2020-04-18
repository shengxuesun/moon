### Moon Project

---

a) Auth
. 获取验证码
```
input GetSmsCodeInput {
    device_id: String!
    mobile: MobilePhone!
}

type SmsCodePayload {
    exsists: Boolean!
    success: Boolean!
}
```
. 身份认证
```
input GetTokenInput {
    device_id: String!
    mobile: MobilePhone!
    code: SmsCode!
}

type TokenPayload {
    name: String
    abilities: String
    access_token: String!
}
```
