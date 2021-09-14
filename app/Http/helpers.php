<?php

use App\Service;
use App\Slider;

function getSlider()
{
    return cache()->rememberForever('slider', function () {
        return Slider::where('status', 1)->orderBy('id', 'desc')->get();
    });
}

function getPaidService()
{
    return cache()->rememberForever('paid-service', function () {
        return Service::where(['status' => 1, 'type' => 'সল্পমূল্যে'])->get();
    });
}

function getFreeService()
{
    return cache()->rememberForever('free-service', function () {
        return Service::where(['status' => 1, 'type' => 'বিনামূল্যে'])->get();
    });
}
