@if (!isset($color))
    @php ($color = '')
@endif
<div class="head-title {{ $color }}">
    <div class="row no-gutters align-self-center justify-content-center">
        <div class="col col-auto">
            <div class="part-left">
                <div class="line"></div>
                <div class="diamond"></div>
            </div>
        </div>
        <div class="col col-auto">
            <p class="part-center">{{ $title }}</p>
        </div>
        <div class="col col-auto">
            <div class="part-right">
                <div class="diamond"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
</div>
