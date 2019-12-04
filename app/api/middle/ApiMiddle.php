<?php

/**
 * 首页信息
 */

namespace app\api\middle;


class ApiMiddle extends \app\base\middle\BaseMiddle {


    protected function newsList() {
        $list = target('article/ArticleClass')->loadList();
        $treeList = target('article/ArticleClass')->getTree($list);
        return $this->run([
            'treeList' => $treeList
        ]);
    }
}
