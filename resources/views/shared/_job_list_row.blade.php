<div class="row">
    @foreach ($jobs as $job)
        <div class="job col col-4">
            @include('shared._job_list_row_item')
        </div>
    @endforeach
</div>
