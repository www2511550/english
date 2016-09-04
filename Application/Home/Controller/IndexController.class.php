<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	// 首页
    public function index(){
    	$articleModel = M('article');
    	$imgArr = $articleModel->where(array('status'=>1))->order('addtime desc')->select();
    	$this->assign(array('imgArr'=>$imgArr));
//     	p($imgArr);die;
    	$this->display();    
    }

    // 详情页面
    public function detail()
    {
        $aid = I('aid',0,'intval');
        !$aid && $this->error('参数异常！');
        $record = M('article')->where(array('id'=>$aid))->find();
        !$record && $this->error('此文章可能已下架！');
        $this->assign(array('info'=>$record));
    	$this->display();
    }

    public function joke(){
    	$ch = curl_init();
	    $url = 'http://apis.baidu.com/showapi_open_bus/showapi_joke/joke_pic?page=1';
	    $header = array(
	        'apikey: 7e38be24baa8332ba0e438609b6b5b71',
	    );
	    // 添加apikey到header
	    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    // 执行HTTP请求
	    curl_setopt($ch , CURLOPT_URL , $url);
	    $res = curl_exec($ch);
	    $data = json_decode($res);

	    $this->assign('data',$data->showapi_res_body->contentlist);
	    $this->display();
    }
}