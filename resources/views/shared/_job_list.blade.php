<div class="job-list">
    @foreach ($jobs as $job)
        <div class="item">
            <div class="header">
                <div class="row align-items-center justify-content-between">
                    <div class="col col-auto">
                        <div class="row align-items-center">
                            <div class="col col-auto mr-3">
                                <p><a class="btn-href gray" href="{{ route('jobs.show', $job) }}">{{ $job->name }}</a></p>
                            </div>
                            @if ($job->urgency_level == 1)
                                <div class="col col-auto ml-1">
                                    <p class="label urgent m-auto">急聘</p>
                                </div>
                            @endif
                        </div>

                        <div class="row align-items-center mt-3">
                            <div class="col col-auto">
                                <p class="red">{{ $job->salary_min }}-{{ $job->salary_max }}K/月*{{ $job->salary_count }}薪</p>
                            </div>
                            <div class="col col-auto ml-3">
                                <div class="note">
                                    <span>{{ $job->single_location['city'] }}</span>
                                    <span>{{ $job->education_show }}</span>
                                    <span>{{ $job->experience_show }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-auto">
                        <div class="row align-items-center">
                            <div class="col col-auto">
                                <p>{{ $job->company->name }}</p>
                                <p class="note">
                                    @if(!empty($job->company->industry->st))<span>{{ $job->company->industry->st }}</span>@endif
                                    @if(!empty($job->company->investment_show))<span>{{ $job->company->investment_show }}</span>@endif
                                    @if(!empty($job->company->scale_show))<span>{{ $job->company->scale_show }}</span>@endif
                                </p>
                            </div>

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
                        </div>
                    </div>
                </div>

            </div>

            <div class="footer">
                <div class="row align-items-center justify-content-between">
                    <div class="col col-auto">
                        <div class="tag">
                            <div class="item">
                                <p>{{ $job->welfare_show }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-auto">
                        <i class="iconfont icon-clock"></i>
                        <span>{{ $job->updated_at->toDateString() }}</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="row justify-content-center mt-5">
      <div class="col-auto">
        {{ $jobs->links('vendor.pagination.red') }}
      </div>
    </div>
</div>
