<?php

namespace prologgg\relation\models;

use Yii;

/**
 * This is the model class for table "relation".
 *
 * @property int $id
 * @property string $model
 * @property string $relation_model
 * @property int $model_id
 * @property int $model_relation_id
 */
class Relation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'relation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model', 'relation_model', 'model_id', 'model_relation_id'], 'required'],
            [['model_id', 'model_relation_id'], 'integer'],
            [['model', 'relation_model'], 'string', 'max' => 55],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => 'Главная модель',
            'relation_model' => 'Привязанная модель',
            'model_id' => 'ID главной модели',
            'model_relation_id' => 'ID связанной модели',
        ];
    }
}
