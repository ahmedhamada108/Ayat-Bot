<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function Send_Aya(){

        $client= new Client();
        $random_aya= rand(1,6236);
        $ayat= Http::get('https://api.alquran.cloud/v1/ayah/'.$random_aya.'/ar')->json();
        // fetch the data
        $aya = $ayat['data']['text'];
        $surah = $ayat['data']['surah']['name'];
        $numberInSurah = $ayat['data']['numberInSurah'];
        $juz = $ayat['data']['juz'];
        $numberOfAyahs = $ayat['data']['surah']['numberOfAyahs'];

        $message =  "<b>' ". $aya ." ' </b> \n \n".
        "<b> ( ".$numberOfAyahs. " / " .$numberInSurah. " - " .$surah." ) ج" .$juz. "💚</b>"
        ;

        
        return $message;
    }
   
    public function name()
    {
        return 'name';
    }
}
