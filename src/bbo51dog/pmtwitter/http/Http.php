<?php

namespace bbo51dog\pmtwitter\http;

class Http{

    public const API_URL_BASE = 'https://api.twitter.com/';
    public const API_VERSION = '1.1';
    public const API_URL = Http::API_URL_BASE . Http::API_VERSION . '/';

    public function get(string $path){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::API_URL . $path);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
    }
    
    public function post(string $path, array $param){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::API_URL . $path);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($param));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
    }
}