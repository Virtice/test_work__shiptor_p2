<?php
/**
 * User: Virtice <synd13@yandex.ru>
 * Date: 17.05.2019
 * Time: 19:06
 */

namespace app\models\forms;


use app\database_services\UsersDatabaseService;
use app\models\database\User;
use Yii;

class RegisterForm extends User
{
    /**
     * @var UsersDatabaseService
     */
    private $usersDatabaseService;

    public function __construct(
        UsersDatabaseService $usersDatabaseService,

        $config = []
    )
    {
        $this->usersDatabaseService = $usersDatabaseService;

        parent::__construct($config);
    }


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            [['privateToken', 'publicToken'], 'string']
        ];
    }

    public function register()
    {
        $user = $this->usersDatabaseService->getByName($this->name);
        if ($user !== null || !$this->validate()) {
            return false;
        }

        $model = $this->usersDatabaseService->create(
            $this->name,
            $this->login,
            $this->password,
            $this->private_shiptor_token,
            $this->public_shiptor_token
        );

        return Yii::$app->user->login($model, 3600 * 24 * 30);
    }
}