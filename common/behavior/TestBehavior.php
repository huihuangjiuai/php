<?php
namespace common\behavior;

use yii\base\Behavior;
use yii\db\ActiveRecord;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/16
 * Time: 11:57
 */
class TestBehavior extends Behavior{
    public $_aAttribute = 'a';
    public $_bAttribute = 'b';

    public function init(){
        parent::init();
    }
    // 重载events() 使得在事件触发时，调用行为中的一些方法
    public function events()
    {
        // 在EVENT_BEFORE_VALIDATE事件触发时，调用成员函数 beforeValidate
        return [
            ActiveRecord::EVENT_AFTER_FIND => 'afterFind',
        ];
    }
    public function afterFind($event){
//        echo '<pre>';var_dump($event);die;
//        $a = ActiveRecord::populateRecord();
//        echo '<pre>';var_dump($event[$event->name]);die;
        if(empty($event->sender->deleted_at)){
            $event->handled = false;
        }
    }
    public function getAAttribute(){
        return $this->_aAttribute = 'aaaa';
    }
    public function setAAttribute(){
        $this->_aAttribute = 'aupdate';
    }
    public function getBAttribute(){
        return $this->_bAttribute = 'bbbb';
    }
    public function setBAttribute(){
        return $this->_bAttribute = 'bupdate';
    }

    public function touch($value){
        echo $value;die;
    }
    public function speak($value){
        echo $value;die;
    }
}