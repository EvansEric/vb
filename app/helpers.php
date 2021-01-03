<?php
/**
 *  Helpers for functions to help out
 * @author Eric
 *
 */

use App\Models\Profile;
use GuzzleHttp\Client;

if (! function_exists('getProfiles')) {
    function getProfiles($id) {
        $result = DB::table('profiles')->where('user_id', $id)->get();
        $result = json_decode(json_encode($result), true);
        $results = array_shift($result);
        return $results;
    }
}

if (! function_exists('parseJsonFile')) {
    function parseJsonFile() {
       $string = file_get_contents(base_path() . '/states.json');
       $str = json_decode($string);
        $test = json_decode(json_encode($str),true);
       return $test;
    }
}


if (! function_exists('getRequest')) {
    function getRequest($url) {
        $client = new GuzzleHttp\Client();
        $request = $client->get($url);
        $response = $request->getBody();
        if($request->getStatusCode() == '200') {
            return $response;
        }else {
            return $request->getStatusCode();
        }
    }
}

if (! function_exists('postRequest')) {
    function postRequest() {

    }
}

if (! function_exists('putRequest')) {
    function putRequest() {

    }
}

if (! function_exists('delRequest')) {
    function delRequest() {

    }
}

