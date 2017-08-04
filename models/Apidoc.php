<?php

namespace shoxabbos\apicrud\models;

use Yii;

/**
 * This is the model class for table "apidoc".
 *
 * @property int $id
 * @property string $method
 * @property string $model
 * @property string $url
 * @property string $title
 * @property string $desc
 * @property string $request
 * @property string $response
 */
class Apidoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apidoc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['method', 'url', 'desc', 'response'], 'required'],
            [['desc', 'request', 'response'], 'string'],
            [['method', 'model'], 'string', 'max' => 25],
            [['url', 'title'], 'string', 'max' => 255],
            [['model', 'title'], 'default', 'value' => '.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'method' => 'Method',
            'model' => 'Model',
            'url' => 'Url',
            'title' => 'Title',
            'desc' => 'Desc',
            'request' => 'Request',
            'response' => 'Response',
        ];
    }


    public static function methods() {
        return [
            "GET" => "GET",
            "POST" => "POST",
            "DELETE" => "DELETE",
            "PUT" => "PUT",
        ];
    }

}
