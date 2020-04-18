```
input GetSmsCodeInput {
    device_id: String!
    mobile: MobilePhone!
}

type SmsCodePayload {
    exsists: Boolean!
    success: Boolean!
}

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
