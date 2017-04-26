<?php
namespace prologgg\relation\widgets;

class AttachRelation extends \yii\base\Widget
{
    public $model = null;

    public function run()
    {
        return $this->model;
    }
}