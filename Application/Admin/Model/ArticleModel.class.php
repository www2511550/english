<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model {
	/**
	 * 添加文章
	 */
	public function addOne($params)
	{
		$params['addtime'] = time();
		return $this->add($params);
	}
}