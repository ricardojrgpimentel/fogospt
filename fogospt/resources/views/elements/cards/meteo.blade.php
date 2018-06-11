
<div class="block">
    <div class="card-body">
        <h4 class="card-title">@lang('elements.cards.meteo.title')</h4>
        <div class="f-meteo">
            @isset($fire['meteo'])
                @include('elements.meteo')
            @endisset
        </div>
    </div>
</div>

