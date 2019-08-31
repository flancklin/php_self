<?php

/**
 * 关键词：二维数组 多维数组 排序 升序 降序 字典排序
 * 对二维数组按照某一列排序
 * @param $multiArr二维数组
 * @param $column需要参照排序的列
 * @param int $sort  升序还是降序
 * @return bool|array
 *
 * 原理 array_multisort($columnArr, $sort, $multiArr);
 * $multiArr 实际没有排序。真正排序的是$columnArr。
 * 而$multiArr是根据$columnArr排序结果一一对应调整了自己的位置而已
 *
 * 更多写法参考文档：https://www.php.net/manual/zh/function.array-multisort.php
 */
function arrayMultiSort(&$multiArr, $column, $sort = SORT_ASC) {
    if (!is_array($multiArr) || !$column) return $multiArr;
    if(is_array($column)){
        if(count($column) != count($multiArr)) return $multiArr;
        $columnArr = $column;
    }else{
        if(empty($columnArr = array_column($multiArr, $column))) return $multiArr;
    }
    return array_multisort($columnArr, $sort, $multiArr);
}

function download_images($article_url = '', $savePath = 'C:\Users\Administrator\Desktop\aa', $fileExt = ['jpg','bmp','jpeg','gif','png']){
    if(!is_array($fileExt) || !$fileExt) return false;
    $extStr = join("|", $fileExt);
    $regFile = '/["|\']([^"|\']*.('.$extStr.'))["|\']/';
    $regFile = '/["|\'](http:\/\/|http:\/\/|\/\/)?([^"|\']*.('.$extStr.'))["|\']/';

    $htmlPage = file_get_contents($article_url);
    $ret = preg_match_all($regFile, $htmlPage, $matchResult);

    $fileArr = array_unique($matchResult[2]);

    foreach($fileArr as $file){
        // 获取文件信息
        $fileInfo = getFileBinary($file);
        if($fileInfo['file_stream'] === false) continue;
        $filename = $savePath . '/' . uniqid() . strrchr($file, '.');
        $local_file = fopen($filename, 'w');
        if(false !== $local_file){
            if( false !== fwrite($local_file, $fileInfo['file_stream']) ){
                fclose($local_file);
            }
        }
    }
}

function getFileBinary($file){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $file);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE );
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $fileInfo = curl_exec($ch);//二进制文件流
    $httpInfo = curl_getinfo($ch);
    curl_close($ch);
    return ['file_stream' => $fileInfo, "http_info" => $httpInfo];
}