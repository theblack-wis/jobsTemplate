<?php
class DataOffers{
    public static function ReJson(array $jsondata, $id){
        return array_filter($jsondata, function($v) use ($id) {
            return ($v['model'] == $id);
        });
    }

    public static function ip() {
        $ip = "";
        if (!empty($_SERVER["HTTP_CLIENT_IP"]))
            {$ip = $_SERVER["HTTP_CLIENT_IP"];}
        else
        if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
            {$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];}
        else
            {$ip = $_SERVER["REMOTE_ADDR"];}

        
        
        return $ip;
    }


    public static function returnUrl() {
        $datacountry = file_get_contents('/app/job.json');
        $offLinks = json_decode($datacountry, true)['offers'];
        $arr = self::ReJson($offLinks, self::returnCountry());
        
        return $arr;
    }


    public static function returnCountry() {
        $url = 'https://get.geojs.io/v1/ip/country/'.self::ip().'.json';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = json_decode(curl_exec($ch));

        return $result->country;
    }
}

echo json_encode(DataOffers::returnUrl());
?>
