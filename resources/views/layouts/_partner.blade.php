<div class="mt-4">
    <div class="partner-body">
        <div class="row">
            @for ($i = 1; $i <= 12; $i++)
                <div class="col col-2">
                    <div class="partner-item mb-3">
                        <img src="/img/partner_{{ $i }}.png">
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
