<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;

class Index extends Controller
{
    //初始化操作
    protected function _initialize()
    {
        $request = Request::instance();
        //dump($request);
        $this->assign('request',$request);
        //echo '模型:' . $request->module() . '<br/>控制器:' .$request->controller() . '<br>方法' . $request->action();
        //halt('');
    }
    public function index()
    {
        //1.先按照id顺序 查询出4篇带有图片描述的文章
        $title_list = Db::name('blog')->field('id,title,summary,title_img')->where('title_img','NEQ','')->order('id DESC')->limit(4)->select();
        //dump($title_list);
        $this->assign('title_list', $title_list);
        //2.取下面大图文章
        $list = Db::name('blog')->field('id,title,summary,big_img,content')->order('id desc')->limit(5)->select();
        //dump($list);
        $this->assign('list', $list);
        return $this->fetch();
    }

    //联系我页面
    public function contact()
    {
        return $this->fetch();
    }

    public function test()
    {
        $a = '淘宝正确刷单增加销量打造爆款1110';
        if(isset($a{39})){
            $a = msubstr($a,0,11);
        }
        echo strlen($a);

        dump($a);
        exit();

        return $this->fetch();
    }
}
