<?php

namespace Addons\Xydzp;
use Common\Controller\Addon;

/**
 * 幸运大转盘插件
 * @author 南方卫视
 */

    class XydzpAddon extends Addon{

        public $info = array(
            'name'=>'Xydzp',
            'title'=>'幸运大转盘',
            'description'=>'网络上最热门的抽奖活动 支持作弊等各种详细配置',
            'status'=>1,
            'author'=>'南方卫视',
            'version'=>'0.1',
            'has_adminlist'=>1,
            'type'=>1         
        );

		public $admin_list = array(
            'model'=>'xydzp',		//要查的表
			'fields'=>'*',			//要查的字段
			'map'=>'',				//查询条件, 如果需要可以再插件类的构造方法里动态重置这个属性
			'order'=>'id desc',		//排序,
			'listKey'=>array( 		//这里定义的是除了id序号外的表格里字段显示的表头名
				'字段名'=>'表头显示名'
			),
        );
	public function install() {
		$install_sql = './Addons/Xydzp/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/Xydzp/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }