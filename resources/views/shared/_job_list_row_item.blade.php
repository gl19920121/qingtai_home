<div class="job-item">

    <div class="part-job-info">
        <div class="row no-gutters justify-content-between">
            <div class="col col-auto">
                <p class="job-name title" title="{{ $job->name }}">{{ $job->name }}</p>
            </div>

            @if ($job->urgency_level == 1)
                <div class="col col-auto">
                    <p class="label urgent m-auto">急聘</p>
                </div>
            @endif

            <div class="col col-auto">
                <p class="job-salary title red">{{ $job->salary_min }}-{{ $job->salary_max }}K/月*{{ $job->salary_count }}薪</p>
            </div>
        </div>

        @if ($job->tag)
            <div class="job-tag row no-gutters">
                @foreach ($job->tag as $tag)
                    <div class="tag col col-auto">
                        <div class="tag-item">
                            <p>{{ $tag }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="job-detail row no-gutters">
            <div class="detail-item col col-auto">
                <i class="iconfont icon-location"></i>
                @if (isset($job->location[0]))
                    <span>{{ $job->location[0]['city'] }}</span>
                @else
                    <span>{{ $job->location['city'] }}</span>
                @endif
            </div>
            <div class="detail-item col col-auto">
                <i class="iconfont icon-bag"></i>
                <span>{{ $job->experience_show }}</span>
            </div>
            <div class="detail-item col col-auto">
                <i class="iconfont icon-cap"></i>
                <span>{{ $job->education_show }}</span>
            </div>
        </div>
    </div>

    <div class="part-company-info">
        <div class="row no-gutters">
            <div class="col col-auto">
                @if ($job->company->is_default_logo)
                    <div class="logo-company default rounded-circle">
                        <img src="{{ $job->company->logo_url }}">
                    </div>
                @else
                    <div class="logo-company rounded-circle">
                        <img src="{{ $job->company->logo_url }}">
                    </div>
                @endif
            </div>

            <div class="company-info col col-auto">
                <p>{{ $job->company->name }}</p>
                <p class="note ellipsis">
                    @if ($job->company->scale_show) <span>{{ $job->company->scale_show }}</span> @endif
                    @if ($job->company->investment_show) <span>{{ $job->company->investment_show }}</span> @endif
                    <span>{{ $job->created_at->toDateString() }}</span>
                </p>
            </div>
        </div>
    </div>

</div>
