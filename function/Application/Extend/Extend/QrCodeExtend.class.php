<?php

namespace Extend\Extend;

/**
 * 专门对二维码的生成处理
 *1.生成图片的二维码
 *2.仅仅展示二维码
 *3.生成图片的带有logo的二维码
 *4.仅仅展示带有logo的二维码
 * Class QrCodeService
 * @package Home\Extend
 */
class QrCodeExtend
{

    //1.生成真实图片，获得访问图片的url链接
    public static function createPng($url = '')
    {
        empty($url) && $url = "www.baidu.com?param=flancklin";
        $savePath = INDEX_PATH. '/Public/Extend/qrcode/';                                  //apache中设置www.flancklin.com的物理路径
        $visitPath = '/function/Public/Extend/qrcode/';//访问的路径
        $filename = md5($url). '.png';

        $errorCorrectionLevel = intval(3); //容错级别
        $matrixPointSize = intval(10);     //生成图片大小
        //生成二维码图片
        Vendor('phpqrcode.phpqrcode');
        \QRcode::png($url, $savePath . $filename, $errorCorrectionLevel, $matrixPointSize, 2, true);
        return $visitPath . $filename;
    }

    //2.仅仅展示二维码
    public static function justShow($url = '')
    {
        empty($url) && $url = 'www.baidu.com?param=flancklin';//二维码内容
        $errorCorrectionLevel = 'L';    //容错级别
        $matrixPointSize = 5;           //生成图片大小
        //生成二维码图片
        Vendor('phpqrcode.phpqrcode');
        \QRcode::png($url, false, $errorCorrectionLevel, $matrixPointSize, 2);
    }
}