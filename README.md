Ruby
一. 简介: Ruby为通用简约型商城系统，当前基于Ruby的项目有3个，各项目的额外功能如下：
    a)	Lilac-潮玩（手办）销售(当前只需web)
        1.	线下展会门票
        2.	线上展会（活动）
        3.	视频和图文发布
    b)	Pttoo-拍卖（除交易变为拍卖，无特殊功能）
    c)	Poplar-珠宝平台（已经立项但尚未收到款项）
二. 前端
    a)	使用Flutter，包括Flutter-web（当前为beta版本）
    b)	使用graphQL
    c)	前端状态管理方案随意选择，但需说明
    d)  需要使用如手机一键登录功能(有付费包,可购买)
    e)  需要适合夜晚模式(包括其他配色方案)
    f)  部分pubspec.yarml(仅参考)

        graphql_flutter: ^3.0.0
        provider: ^4.0.4
        flutter_svg: ^0.17.3
        flutter_markdown: ^0.3.4

三．后端
    a)	Laravel7, 当前使用sanctum作为身份认证(轻量级)
    b)	使用graphQL（当前为lighthouse-php）
    c)	在需要时使用postgresQL和jsonb（当前）
    d)	在需要时使用josn-relations (当前)
    e)	部分Composer.json(仅参考)

        "laravel/sanctum": "^2.0",
        "laravel/tinker": "^2.0",
        "mll-lab/graphql-php-scalars": "^3.0",
        "mll-lab/laravel-graphql-playground": "^2.1",
        "nuwave/lighthouse": "^4.10",
        "staudenmeir/eloquent-json-relations": "^1.4"

四． 需要考虑但当前不做的
    a)  多语言
    b)  通用组织机构管理(tree应用)

五.  需要评估的: 
    a)  使用markdown作为新闻和图文方案(包括产品详情页)

六.  优先级: Lilac > Pttoo > Poplar

七.  其他: 
    a)  尽量避免使用业务性模板
    b)  使用github管理项目和协作
    c)  一切可有可无的/非必要的功能当前均不做, 需求的功能也力求简约,暂缓不是迫切的部分
    d)  Lilac需在月底前提交测试(只需web端,微信使用)
    e)  Lilac - 若flutter并无把握, 为求时间准确,可以使用react.js, 但后端标准不变
    f)  pttoo 和 Poplar 前端必需使用flutter; Lilac二期(会有另外的预算)必须使用Flutter
