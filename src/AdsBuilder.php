<?php

namespace Mastergalen\AdsenseAds;

class AdsBuilder {
    public function show($name) {
        return view('adsense-ads::ad')->with([
            'ad_client' => config("ads.client_id"),
            'ad_style' => config("ads.ads.$name.ad_style", "display:block;"),
            'ad_slot' => config("ads.ads.$name.ad_unit_id"),
            'ad_format' => config("ads.ads.$name.ad_format", null)
        ]);
    }
}