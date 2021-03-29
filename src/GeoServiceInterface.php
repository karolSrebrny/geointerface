<?php


namespace Hillel\GeoInterface;


interface GeoServiceInterface
{
    public function continentCode();
    public function countryCode();
    public function parse($ip);

}
