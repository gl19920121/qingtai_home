@extends('layouts.default')
@section('content')
    <div class="job">
        <div class="banner">
            <div class="row no-gutters align-items-center justify-content-between">
                <div class="part-left col col-auto">
                    <div class="row no-gutters align-items-center">
                        <div class="col col-auto">
                            <p class="title">{{ $job->name }}</p>
                        </div>
                        <div class="col col-auto">
                            @if ($job->urgency_level == 1)
                                <div class="label urgent">急聘</div>
                            @endif
                        </div>
                    </div>
                    <p class="note">
                        <span class="title heightlight">{{ $job->salary_min }}k-{{ $job->salary_max }}k/月*{{ $job->salary_count }}薪</span>
                        <span>{{ $job->company->name }}</span>
                        <span>{{ $job->company->location['city'] }}</span>
                        <span>{{ $job->education_show }}</span>
                        <span>{{ $job->experience_show }}</span>
                        <span>{{ $job->age_min }}-{{ $job->age_max }}岁</span>
                    </p>
                    <p>
                        <span class="tag">{{ $job->welfare_show }}</span>
                        @if ($job->tag)
                            @foreach ($job->tag as $tag)
                                <span class="tag">{{ $tag }}</span>
                            @endforeach
                        @endif
                    </p>
                    <div class="row dark">
                        <div class="col col-auto">
                            <i class="iconfont icon-clock"></i>
                            <span>{{ $job->created_at->toDateString() }}</span>
                            <span>发布</span>
                        </div>
                        <div class="col col-auto">
                            <i class="iconfont icon-collect"></i>
                            <span>收藏</span>
                        </div>
                    </div>
                </div>

                <div class="col col-auto">
                    <button class="btn btn-red btn-deliver">立即申请</button>
                </div>
            </div>
        </div>

        <div class="body">
            <div class="row no-gutters">
                <div class="col col-auto">
                    <div class="part-left">
                        <div>
                            <p class="title">职位要求</p>
                            <p class="sec-title mt-4">工作职责：</p>
                            <p class="mt-2">{{ $job->duty }}</p>
                            <p class="mt-4">任职要求：</p>
                            <p class="mt-2">{{ $job->requirement }}</p>
                            <p class="mt-4">工作地址：</p>
                            <p class="mt-2">
                                <span>{{ $job->single_location['city'] }}</span>
                                @if(isset($job->single_location['address']))<span>{{ $job->single_location['address'] }}</span>@endif
                            </p>
                        </div>
                        <hr class="divider">
                        <div>
                            <p class="title">企业介绍</p>
                            <p class="mt-4">
                                <span>公司名称：{{ $job->company->name }}</span>
                                <!-- <span>企业官网：</span> -->
                            </p>
                            <p class="mt-4">{{ $job->company->introduction }}</p>
                        </div>
                    </div>
                </div>

                <div class="col col-auto">
                    <div class="part-right">
                        <div>
                            <p class="title">企业基本信息</p>
                            <div hidden><img src="{{ $job->company->logo_url }}"></div>
                            <p class="mb-3">
                                <span>{{ $job->company->nature_show }}</span>
                            </p>
                            <p class="mb-3">
                                <span>{{ $job->company->scale_show }}</span>
                            </p>
                            <p class="mb-3">
                                <span>{{ $job->company->investment_show }}</span>
                            </p>
                            <div><img src="/img/ad_danghui.jpg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
