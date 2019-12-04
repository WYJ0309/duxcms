<?php

/**
 * 文章栏目
 */

namespace app\api\controller;

class IndexController  extends \app\base\controller\SiteController {

    protected $_middle = 'api/Api';

    public function sysConfig(){
        $res = target('site/SiteConfig')->getConfig();
        print_r($res);
    }
    public function recycleImg(){
        echo 00;
    }
    public function index(){


        $response = [];
        $response['part_title_en'] = "Foreigner's work permit in china";
        $response['part_desc_en'] = "As a foreigner working in China, not only work visa but also work permit you need to obtain, if you want to learn more information-get in touch.";
        $response['part_title_zn'] = "片段标题";
        $response['part_desc_zn'] = "片段简单描述";
        $response['service_list'] = [
            'zh'=>[
                [
                    'pic_url'=>'https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1060877912,1164889157&fm=26&gp=0.jpg',
                    'service_title'=>'工作签证',
                    'service_desc'=>'三两句冯老师四六级法拉三等奖失蜡法精灵盛典机阿里的时间里史黛拉房间里的撒讲道理'
                ],
                [
                    'pic_url'=>'https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1060877912,1164889157&fm=26&gp=0.jpg',
                    'service_title'=>'工作签证',
                    'service_desc'=>'三两句冯老师四六级法拉三等奖失蜡法精灵盛典机阿里的时间里史黛拉房间里的撒讲道理'
                ],
                [
                    'pic_url'=>'https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1060877912,1164889157&fm=26&gp=0.jpg',
                    'service_title'=>'工作签证',
                    'service_desc'=>'三两句冯老师四六级法拉三等奖失蜡法精灵盛典机阿里的时间里史黛拉房间里的撒讲道理'
                ]
            ],
            'en'=>[
                [
                    'pic_url'=>'https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1060877912,1164889157&fm=26&gp=0.jpg',
                    'service_title'=>'work visa',
                    'service_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam.'
                ],
                [
                    'pic_url'=>'https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1060877912,1164889157&fm=26&gp=0.jpg',
                    'service_title'=>'work visa',
                    'service_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam.'
                ],
                [
                    'pic_url'=>'https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1060877912,1164889157&fm=26&gp=0.jpg',
                    'service_title'=>'work visa',
                    'service_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam.'
                ]
            ]
        ];
        $response['news_list'] = [
            'special'=>[
                'special_title'=>'特别推荐的新闻',
                'pic_url'=>'https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=271501765,3075112891&fm=26&gp=0.jpg'
            ],
            'son_list'=>[
                'zh'=>[
                    'cate_one'=>[
                        [
                            'title'=>'深圳市福田区苹果维修服务地址深圳市福田区苹',
                            'new_desc'=>'深圳市福田区苹果维修服务地址深圳市福田区苹深圳市福田区苹果维修服务地址深圳市福田区苹深圳市福田区苹果维修服务地址深圳市福田区苹',
                            'add_time'=>'10-09'
                        ],
                        [
                            'title'=>'深圳市福田区苹果维修服务地址深圳市福田区苹',
                            'new_desc'=>'深圳市福田区苹果维修服务地址深圳市福田区苹深圳市福田区苹果维修服务地址深圳市福田区苹深圳市福田区苹果维修服务地址深圳市福田区苹',
                            'add_time'=>'10-09'
                        ],
                        [
                            'title'=>'深圳市福田区苹果维修服务地址深圳市福田区苹',
                            'new_desc'=>'深圳市福田区苹果维修服务地址深圳市福田区苹深圳市福田区苹果维修服务地址深圳市福田区苹深圳市福田区苹果维修服务地址深圳市福田区苹',
                            'add_time'=>'10-09'
                        ]
                    ],
                    'cate_two'=>[
                        [
                            'title'=>'广东省东莞市深圳区田区苹',
                            'new_desc'=>'深圳广东省东莞市深圳区田区苹区苹果维修服务地址深圳市福田区苹深圳市福田区苹果维修服务地址深圳市福田区苹',
                            'add_time'=>'11-09'
                        ],
                        [
                            'title'=>'广东省东莞市深圳区田区苹',
                            'new_desc'=>'深圳市福田区广东省东莞市深圳区田区苹果维修服务地址深圳市福田区苹深圳市福田区苹果维修服务地址深圳市福田区苹',
                            'add_time'=>'11-09'
                        ],
                        [
                            'title'=>'广东省东莞市深圳区田区苹',
                            'new_desc'=>'深广东省东莞市深圳区田区苹区苹深圳市福田区苹果维修服务地址深圳市福田区苹深圳市福田区苹果维修服务地址深圳市福田区苹',
                            'add_time'=>'11-09'
                        ]
                    ]
                ],
                'en'=>[
                    'cate_one'=>[
                        [
                            'title'=>'sdlfjasjflasjdlasjlfjsldj',
                            'new_desc'=>'sdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldj',
                            'add_time'=>'10-09'
                        ],
                        [
                            'title'=>'sdlfjasjflasjdlasjlfjsldj',
                            'new_desc'=>'sdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldj',
                            'add_time'=>'10-09'
                        ],
                        [
                            'title'=>'sdlfjasjflasjdlasjlfjsldj',
                            'new_desc'=>'sdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldjsdlfjasjflasjdlasjlfjsldj',
                            'add_time'=>'10-09'
                        ]
                    ],
                    'cate_two'=>[
                        [
                            'title'=>'22222222222222dsfdsfadsafds',
                            'new_desc'=>'22222222222222dsfdsfadsafds22222222222222dsfdsfadsafds22222222222222dsfdsfadsafds22222222222222dsfdsfadsafds',
                            'add_time'=>'11-09'
                        ],
                        [
                            'title'=>'22222222222222dsfdsfadsafds',
                            'new_desc'=>'22222222222222dsfdsfadsafds22222222222222dsfdsfadsafds22222222222222dsfdsfadsafds22222222222222dsfdsfadsafds',
                            'add_time'=>'12-09'
                        ],
                        [
                            'title'=>'22222222222222dsfdsfadsafds',
                            'new_desc'=>'22222222222222dsfdsfadsafds22222222222222dsfdsfadsafds22222222222222dsfdsfadsafds22222222222222dsfdsfadsafds22222222222222dsfdsfadsafds',
                            'add_time'=>'12-02'
                        ]
                    ]
                ]
            ]
        ];

        return $this->success($response);
    }
    //首页底部搜集用户提交的需求
    public function fetchData(){
        $data = [];
        $data['name'] = request('post','name');
        $data['email'] = request('post','name');
        $data['name'] = request('post','name');
        $data['name'] = request('post','name');
        $data['name'] = request('post','name');
        $data['name'] = request('post','name');
    }
    public function cateList(){
        $_SERVER['HTTP_X_REQUESTED_WITH'] = 'xmlhttprequest';
        $list = target('article/ArticleClass')->loadList();
        $this->success($list);
    }
    //根据分类id获取新闻列表
    public function newsList(){
        $class_id = request('post', 'class_id');
        $pageLimit = 10;
        if(empty($class_id)) {
            $this->error('分类id不能为空!');
        }
        $_SERVER['HTTP_X_REQUESTED_WITH'] = 'xmlhttprequest';
        $config = target('api/Article')->getNewsList();
        $this->success($config);
    }
    public function newsInfo(){

        echo 3;
    }

    public function serviceList(){
        echo 4;
    }
    public function serviceInfo(){
        echo 5;
    }
    //获取单页面信息
    public function getPageInfo(){

        echo 6;
    }

}