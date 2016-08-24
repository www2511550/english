<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if (!IS_POST) {
            $this->display();
        }else{
            $params = I('post.');
            !$_FILES['files']['tmp_name'] && $this->error('图片上传错误！');
            // 图片路径
            $params['img_path'] = "Upload/cover/".date('Y-m-d')."/".time().".jpg";
            $params['min_img_path'] = "Upload/cover/thumb".date('Y-m-d')."/".time()."_600x500.jpg";
            !is_dir($des_path) && mkdir($$params['img_path'],true,0777);
            !is_dir($min_img_path) && mkdir($params['min_img_path'],true,0777);
            $image = new \Think\Image();
            $image->open($_FILES['files']['tmp_name']);
            // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg 
            $image->thumb(600, 500)->save($$params['min_img_path']);
            $image->save($$params['img_path']);
            D('Article')->addOne($params) ? $this->success('success!') : $this->error('failed!');
        }	
    }
    /**
     * 載入Excel工具类，excel的导入
     * @param string $fileName 上传的文件名
     * @return array $return 返回表格中的数据
     * 2015-08-13
     */
    private function _getExcelData ($fileName) {
    	//包含excel工具类
    	import("Org.Util.PHPExcel");
    	import("Org.Util.PHPExcel.Reader.Excel5");
    	import("Org.Util.PHPExcel.IOFactory.php");
    
    	//实例化PHPExcel对象
    	$objReader = \PHPExcel_IOFactory::createReader ( 'Excel5' );
    	$objReader->setReadDataOnly ( true );
    	$objPHPExcel = $objReader->load ($fileName);
    
    	$objWorksheet = $objPHPExcel->getSheet (0);
    	//取得excel的总行数
    	$highestRow = $objWorksheet->getHighestRow ();
    	//取得excel的总列数
    	$highestColumn = $objWorksheet->getHighestColumn ();
    	$highestColumnIndex = \PHPExcel_Cell::columnIndexFromString ( $highestColumn );
    
    	$return = array ();
    	for($row = 2; $row <= $highestRow; $row++) {
    		for($col = 0; $col < $highestColumnIndex; $col++) {
    			$return[$row-2][] = $objWorksheet->getCellByColumnAndRow ( $col, $row )->getValue ();
    		}
    	}
    	return $return;
    }
}