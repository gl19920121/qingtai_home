@extends('layouts.default')
@section('content')
    <div class="service">

        <div class="banner">
            <img src="/img/banner_service.jpg">
        </div>

        <div class="slogan">
            <div class="row justify-content-around">
                <div class="col col-auto">
                    <div class="item">
                        <div class="logo">
                            <img class="m-auto" src="/img/slogan_1.png">
                        </div>
                        <p class="title">30000+</p>
                        <p>服务企业人才数</p>
                    </div>
                </div>
                <div class="col col-auto">
                    <div class="item">
                        <div class="logo">
                            <img class="m-auto" src="/img/slogan_2.png">
                        </div>
                        <p class="title">5000+</p>
                        <p>合作优质企业</p>
                    </div>
                </div>
                <div class="col col-auto">
                    <div class="item">
                        <div class="logo">
                            <img class="m-auto" src="/img/slogan_3.png">
                        </div>
                        <p class="title">80+</p>
                        <p>专业招聘顾问</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="introduce">
            @include("layouts._title", ['title' => '三大核心服务'])
            <div class="item rpo">
                <img class="logo" src="/img/banner_rpo.png">
                <p class="title">企业RPO服务</p>
                <p>当会直聘RPO以解决客户紧急、批量及大规模招聘为目的，整合线上及线下等多种招聘渠道及资源</p>
                <p>由专业顾问团队以项目制方式运作，提供人才推荐、人才交付、到面服务、入职服务的一站式招聘解决方案</p>
                <button class="btn btn-red btn-size-l mt-4">点我咨询</button>
            </div>

            <div class="item hunter mt-4">
                <img class="logo" src="/img/banner_hunter.jpg">
                <p class="title">精英猎头服务</p>
                <p>专业缔造优质，精选缔造高效，当会直聘精英猎头服务依托公司在市场内丰富的高级人才资源，</p>
                <p>有效为客户解决该领域人才精英需求，让用人机构能在最短的时间找到最满意、最匹配的人才</p>
                <button class="btn btn-red btn-size-l mt-4">点我咨询</button>
            </div>

            <div class="item hunter">
                <img class="logo" src="/img/banner_school.jpg">
                <p class="title">校企直通车</p>
                <p>当当会直聘秉承服务社会及强烈社会责任价值观，开通专属大学校园及中专职高校园直通车，</p>
                <p>为广大学生提供优质的服务岗位，也为社会各界优秀企业输入新鲜血液，寻求共同发展的美好未来，校园直通车主要涵盖专业技术类、服务销售类岗位</p>
                <button class="btn btn-red btn-size-l mt-4">点我咨询</button>
            </div>
        </div>

        <div class="goodness">
            @include("layouts._title", ['title' => '产品优势'])
            <div>
                <div class="row align-items-center justify-content-around item">
                    <div class="col col-auto">
                        <img src="/img/interview.png">
                    </div>
                    <div class="col col-auto">
                        <p class="title">面试快</p>
                        <p class="content mt-4">短期内能推荐候选人到场面试，解决紧急繁重的简历收集、筛选、电话面试及邀约工作</p>
                        <p class="content mt-2">数量足：按比例推荐数量充足的候选人到场参加面试，优中选优，让选择人才更加主动</p>
                    </div>
                </div>

                <div class="row align-items-center justify-content-around item">
                    <div class="col col-auto">
                        <p class="title">入职宝</p>
                        <p class="content mt-4">速度快，在短期内能推荐候选人到场面试</p>
                        <p class="content mt-2">着重解决紧急繁重的简历收集、筛选、电话面试及邀约工作</p>
                    </div>
                    <div class="col col-auto">
                        <img src="/img/induction.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="system">
            @include("layouts._title", ['title' => '企业人才综合管理系统', 'color' => 'red'])
            <div>
                <div class="row no-gutters align-items-center justify-content-center">
                    <div class="item col col-auto">
                        <div class="body body-1">
                            <p class="title">招聘信息查看管理</p>
                            <div class="dotted"></div>
                            <p>招聘管理软件智能规范流程化</p>
                            <p class="mt-2">节省HR筛选时间，提升招聘效能</p>
                        </div>
                    </div>

                    <div class="item col col-auto">
                        <div class="body body-2">
                            <p class="title">求职信息多平台展现</p>
                            <div class="dotted"></div>
                            <p>用户求职信息多平台曝光</p>
                            <p class="mt-2">网站/小程序/公众号，提升入职时效</p>
                        </div>
                    </div>

                    <div class="item col col-auto">
                        <div class="body body-3">
                            <p class="title">信息数据安全防护</p>
                            <div class="dotted"></div>
                            <p>专业安全防护措施，确保数据不外泄</p>
                            <p class="mt-2">数据信息完善备份，防止数据丢失</p>
                        </div>
                    </div>
                </div>
            </div>
            <p>当会直聘拥有完善的候选人资源库及人才面相，通过深入解析岗位需求，明确招聘策略，优化寻访路径，</p>
            <p>节约企业宝贵的沟通时间及成本，助力候选人发展。</p>
        </div>

        <div class="process">
            @include("layouts._title", ['title' => '服务流程'])
            <p>当会直聘通过高效的服务流程，为企业快速完成批量招聘目标。灵活满足大小规模的业务需求。</p>
            <div><img class="logo" src="/img/banner_flow.png"></div>
        </div>

        <div class="partner">
            @include("layouts._title", ['title' => '合作伙伴'])
            @include("layouts._partner")
        </div>

    </div>
@stop
