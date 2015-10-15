<?php
class WebController extends Controller
{
	/**
	 * 布局
	 * @var String
	 */
	public $layout='site';

	/**
	 * @var 数据模型
	 */
	private $_model;
	
	/**
	 * 1.网站首页
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Comment', array(
			'criteria'=>array(
				'with'=>'post',
				'order'=>'t.status, t.create_time DESC',
			),
		));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/**
	 * 招聘用
	 */
	public function actionJobs()
	{
		$dataProvider=new CActiveDataProvider('Comment', array(
			'criteria'=>array(
				'with'=>'post',
				'order'=>'t.status, t.create_time DESC',
			),
		));

		$this->render('jobs',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/**
	 * 联系我们
	 */
	public function actionContact()
	{
		$dataProvider=new CActiveDataProvider('Comment', array(
			'criteria'=>array(
				'with'=>'post',
				'order'=>'t.status, t.create_time DESC',
			),
		));

		$this->render('contact',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/**
	 * 公司业务
	 */
	public function actionBusiness()
	{
		$dataProvider=new CActiveDataProvider('Comment', array(
			'criteria'=>array(
				'with'=>'post',
				'order'=>'t.status, t.create_time DESC',
			),
		));

		$this->render('business',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/**
	 * 关于我们
	 */
	public function actionAbout()
	{
		$dataProvider=new CActiveDataProvider('Comment', array(
			'criteria'=>array(
				'with'=>'post',
				'order'=>'t.status, t.create_time DESC',
			),
		));

		$this->render('about',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/**
	 * 新闻动态
	 */
	public function actionNews()
	{
		$dataProvider=new CActiveDataProvider('Comment', array(
			'criteria'=>array(
				'with'=>'post',
				'order'=>'t.status, t.create_time DESC',
			),
		));

		$this->render('news',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/**
	 * IS学院
	 */
	public function actionAcademy()
	{
		$dataProvider=new CActiveDataProvider('Comment', array(
			'criteria'=>array(
				'with'=>'post',
				'order'=>'t.status, t.create_time DESC',
			),
		));

		$this->render('academy',array(
			'dataProvider'=>$dataProvider,
		));
	}
}
