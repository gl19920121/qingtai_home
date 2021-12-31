@extends('layouts.default')
@section('content')
    <div class="home">

        <div class="banner"></div>

        <div class="jobs">
            <div class="type-title row justify-content-center">
                <div class="col col-3">
                    <div class="hot item">
                        <p>急聘热门职位</p>
                    </div>
                </div>
                <div class="col col-3">
                    <div class="hunter item">
                        <p>精英猎头职位</p>
                    </div>
                </div>
                <div class="col col-3">
                    <div class="blue item">
                        <p>优质蓝领招聘</p>
                    </div>
                </div>
                <div class="col col-3">
                    <div class="means item">
                        <p>求职攻略资料</p>
                    </div>
                </div>
            </div>

            <div class="type-tab">
                <div class="row justify-content-between">
                    <div class="tab-body col col-auto">
                        <ul class="tab inline">
                            <li class="item active">
                                <a href="#">热门职位</a>
                            </li>
                            <li class="item">
                                <a href="#">名企猎头</a>
                            </li>
                            <li class="item">
                                <a href="#">蓝领专属</a>
                            </li>
                            <li class="item">
                                <a href="#">校企直通</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-auto">
                        <button class="btn btn-gray btn-radius">换一换</button>
                        <a class="btn btn-href gray-light" href="#">查看更多</a>
                    </div>
                </div>
                <!-- <hr class="divider"> -->
            </div>

            <div class="list">
                @include('shared._job_list_row')
            </div>

            <div class="row justify-content-center">
                <div class="col col-auto">
                    <button class="btn btn-outline-red btn-size-l mt-4">更多职位</button>
                </div>
            </div>

        </div>

        <div class="service-content">
            <div class="type-tab">
                <div class="row justify-content-between">
                    <div class="tab-body col col-auto">
                        <ul class="tab inline">
                            <li class="item active">
                                <a href="#">企业RPO服务</a>
                            </li>
                            <li class="item">
                                <a href="#">精英猎头服务器</a>
                            </li>
                            <li class="item">
                                <a href="#">校企直通车</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-auto">
                        <a class="btn btn-href gray-light" href="#">更多服务</a>
                    </div>
                </div>
                <!-- <hr class="divider"> -->
            </div>

            <div class="mt-4">
                <div class="text-center">
                    <img class="banner" src="/img/banner_rpo.png">
                    <p class="mt-4">当会直聘RPO以解决客户紧急、批量及大规模招聘为目的，整合线上及线下等多种招聘渠道及资源</p>
                    <p>由专业顾问团队以项目制方式运作，提供人才推荐、人才交付、到面服务、入职服务的一站式招聘解决方案</p>
                    <button class="btn btn-red btn-size-l mt-4">服务详情</button>
                </div>
            </div>
        </div>

        <div class="service-flow">
            <div class="type-tab">
                <div class="row justify-content-between">
                    <div class="tab-body col col-auto">
                        <ul class="tab inline">
                            <li class="item active">
                                <a href="#">服务流程</a>
                            </li>
                            <li class="item">
                                <a href="#">在线需求提交</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <hr class="divider"> -->
            </div>

            <div class="mt-4">
                <div class="text-center">
                    <img class="banner" src="/img/banner_flow.png">
                    <p class="mt-4">当会直聘通过高效的服务流程，为企业快速完成批量招聘目标，灵活满足大小规模的业务需求</p>
                    <button class="btn btn-outline-red btn-size-l mt-4">更多详情</button>
                </div>
            </div>
        </div>

        <div class="honorwall">
            <div class="type-tab">
                <div class="row justify-content-between">
                    <div class="tab-body col col-auto">
                        <ul class="tab inline">
                            <li class="item active">
                                <a href="#">企业荣耀</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="cup mt-4">
                <div class="text-center">
                    @include('layouts._cup')

                    <p class="mt-4">清泰文化一直致力于为企业及求职者提供优质的招聘服务，依托公司雄厚的客户资源，优质的服务理念，经过不断的耕耘和努力</p>
                    <p>公司受到来自企业客户、个人用户及社会的高度认可，高度的社会责任感及客户认可度鼓励我们不断飞跃，铸造新的辉煌</p>

                    <button class="btn btn-outline-red btn-size-l mt-4">更多详情</button>
                </div>
            </div>
        </div>

        <div class="feature">
            <div class="type-tab type-tab-white">
                <div class="row justify-content-between">
                    <div class="tab-body col col-auto">
                        <ul class="tab inline">
                            <li class="item active">
                                <a href="#">企业人才综合管理系统</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="feature-detail">
                <div class="row justify-content-around">
                    <div class="col col-auto">
                        <table class="table-auto feature-detail-table">
                            <tr>
                                <td>
                                    <div class="icon-round">
                                        <img src="/img/icon_message.png">
                                    </div>
                                </td>
                                <td>
                                    <p class="title">招聘信息查看管理</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <p class="note">招聘管理软件智能规范流程化</p>
                                    <P class="note">节省HR筛选时间，大幅度提升招聘效能</P>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col col-auto">
                        <table class="table-auto feature-detail-table">
                            <tr>
                                <td>
                                    <div class="icon-round">
                                        <img src="/img/icon_cloud.png">
                                    </div>
                                </td>
                                <td>
                                    <p class="title">求职信息多平台展现</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <p class="note">用户求职信息多平台曝光</p>
                                    <P class="note">网站/小程序/公众号，提升入职时效</P>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col col-auto">
                        <table class="table-auto feature-detail-table">
                            <tr>
                                <td>
                                    <div class="icon-round">
                                        <img src="/img/icon_affirm.png">
                                    </div>
                                </td>
                                <td>
                                    <p class="title">数据信息安全防护</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <p class="note">专业的数据安全防护措施，确保数据不外泄</p>
                                    <P class="note">数据信息完善备份，防止数据丢失</P>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <div class="partner">
            <div class="type-tab">
                <div class="row justify-content-between">
                    <div class="tab-body col col-auto">
                        <ul class="tab inline">
                            <li class="item active">
                                <a href="#">合作伙伴</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            @include("layouts._partner")
        </div>
    </div>
@stop
