<?php
/**
 * This Class is written to help widgets and contains some useful methods
 * @author Mohammad hosein Saadatfar
 *
 */
class GWTools{
	/**
	 * Return block image url 
	 * @param string $block Block id
	 * @param string $type Optional; Type
	 * @param string $tmp Optional; Template id
	 * @return string
	 */
	public function BlockImgUrl($block,$type=NULL,$tmp=NULL){
		$controller=Yii::app()->controller;
		$param=array('id'=>$block);
		if ($type!=NULL) $param['type']=$type;
		if ($tmp!=NULL) $param['tmp']=$tmp;
		return $controller->createUrl('img/index',$param);
	}
	/**
	 * Return block image position 
	 * @param string $block Block id
	 * @param string $type Optional; Type
	 */
	public function BlockImgPos($id,$type='index'){
		$block=GBlock::FindById($id);
		$widget=$block->WidgetClass();
		$types=$widget->Types();
		$index=array_search($type,$types);
		$pos=$index*$block->width;
		return $pos;
		//@TODO Complete!
	}
}