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