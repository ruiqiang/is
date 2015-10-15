<?php
class AdminController extends Controller
{
	/**
	 * 布局
	 * @var String
	 */
	public $layout='column2';

	/**
	 * @var 数据模型
	 */
	private $_model;
	
	public function __construct($id,$module=null)
	{
		$this->beforeController();
		parent::__construct($id,$module);
	}
	
	public function actionIndex()
	{
		
	}
	
	public function beforeController()
	{
	
	}
}
