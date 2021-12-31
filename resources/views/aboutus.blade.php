@extends('layouts.default')
@section('content')
    <div class="aboutus">
        <div class="banner"></div>

        <div class="qingtai">
            @include("layouts._title", ['title' => '清泰文化（北京）有限公司'])
            <p class="mt-5">清泰文化创建于2019年，是由鑫桥联合金融控股集团（香港）有限公司创始人兼控股股东发起，专注于为企业提供人力资源综合解决方案的供应商，是光大控股集团关联企业。</p>
            <p class="mt-2">清泰文化服务的企业已经遍布全国50多个城市，致力于为全球企业提供灵活用工服务，人才招聘服务，及其他HR服务如BPO、培训等人力资源综合解决方案。</p>
            <div class="mt-5"><img src="/img/company_qingtai.jpg"></div>
        </div>

        <div class="honour">
            @include("layouts._title", ['title' => '企业荣誉'])
            <p class="mt-5">清泰文化一直致力于为企业及求职者提供优质的招聘服务，依托公司雄厚的客户资源，优质的服务理念，经过不断的耕耘和努力</p>
            <p class="mt-2">公司受到来自企业客户、个人用户及社会的高度认可，高度的社会责任感及客户认可度鼓励我们不断飞跃，铸造新的辉煌</p>
            <div class="cup mt-5">
                @include('layouts._cup')
            </div>
        </div>

        <div class="danghui">
            @include("layouts._title", ['title' => '当会直聘'])
            <p class="mt-5">当会直聘隶属清泰文化（北京）有限公司旗下，是一家专业做人才招聘服务的供应商，业务内容包含RPO服务、猎头服务、校园招聘等。公司拥有国内多种渠道</p>
            <p>整合资源，有80+专业顾问团队以项目制方式运作，提供（人才推荐、人才交付、到面服务、入职服务）的一站式招聘解决方案</p>
            <p class="mt-2">专业缔造优质，精选缔造高效。当会直聘秉承着以“专而精”的人才服务理念，与国内外多家院校联合，启动“校园直通车”服务模式，为企业急聘岗位提供高</p>
            <p>效且对口专业化的人才信息输送，通过专业的大数据处理技术，精准匹配人才需求合作机构，让用人机构能在最短的时间找到最满意、最匹配的人才</p>
            <div class="mt-5"><img src="/img/company_danghui.jpg"></div>
            <p class="mt-4 note">清泰文化（北京）有限公司与军蒂企业管理集团战略合作</p>
        </div>
    </div>
@stop
