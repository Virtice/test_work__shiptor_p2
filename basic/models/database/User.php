<?php

namespace app\models\database;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "user".
 *
 * @property string $id
 * @property string $name
 * @property string $token
 * @property string $private_shiptor_token
 * @property string $public_shiptor_token
 * @property int $deleted
 * @property int $blocked
 * @property string $login
 * @property string $password
 */
class User extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'token', 'login', 'password'], 'required'],
            [['deleted', 'blocked'], 'integer'],
            [['id', 'name', 'token', 'private_shiptor_token', 'public_shiptor_token', 'login', 'password'], 'string', 'max' => 255],
            [['login', 'password'], 'unique', 'targetAttribute' => ['login', 'password']],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'token' => 'Token',
            'private_shiptor_token' => 'Private Shiptor Token',
            'public_shiptor_token' => 'Public Shiptor Token',
            'deleted' => 'Deleted',
            'blocked' => 'Blocked',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }
}
