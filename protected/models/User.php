<?php
	// Стандартный шаблон для любой модели.
     
    class User extends CActiveRecord{        
        
        // для поля "повтор пароля"
        public $passwd2;
         
        public static function model($className=__CLASS__)
        {
            return parent::model($className);
        }
        public function tableName()
        {
            return 'user';
        }
    	public function relations(){
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'users'=>array(self::BELONGS_TO, 'Users', 'id_user')
		);
	}
        
       
         
          /**
     * Правила валидации
     */
        public function rules()
        {
            return array(
                // логин, пароль не должны быть больше 128-и символов, и меньше трёх
                array('login, passwd', 'length', 'max'=>128, 'min' => 3),
                // логин, пароль не должны быть пустыми
                array('login, passwd', 'required'),
                // для сценария registration поле passwd должно совпадать с полем passwd2
                array('passwd', 'compare', 'compareAttribute'=>'passwd2', 'on'=>'registration'),
                array('passwd2', 'required', 'on'=>'registration'),
                array('passwd', 'authenticate', 'on' => 'login'),
                
                array('login', 'match', 'pattern' => '/^[A-Za-z0-9А-Яа-я\s,]+$/u','message' => 'Логин содержит недопустимые символы.'),
            );
        }
        /**
     * Собственное правило для проверки
     * Данный метод является связующем звеном с UserIdentity
     */
         public function authenticate($attribute,$params) 
    {
        // Проверяем были ли ошибки в других правилах валидации.
        // если были - нет смысла выполнять проверку
         if(!$this->hasErrors())
        {
            // Создаем экземпляр класса UserIdentity
            // и передаем в его конструктор введенный пользователем логин и пароль (с формы)
            $identity= new UserIdentity($this->login, $this->passwd);
             // Выполняем метод authenticate (о котором мы с вами говорили пару абзацев назад)
            // Он у нас проверяет существует ли такой пользователь и возвращает ошибку (если она есть)
            // в $identity->errorCode
             $identity->authenticate();
                
                // Теперь мы проверяем есть ли ошибка..    
                switch($identity->errorCode)
                {
                    // Если ошибки нету...
                     case UserIdentity::ERROR_NONE: {
                        // Данная строчка говорит что надо выдать пользователю
                        // соответствующие куки о том что он зарегистрирован, срок действий
                         // у которых указан вторым параметром. 
                        Yii::app()->user->login($identity, 0);
                        break;
                    }
                    case UserIdentity::ERROR_USERNAME_INVALID: {
                         // Если логин был указан наверно - создаем ошибку
                        $this->addError('login','Пользователь не существует!');
                        break;
                    }
                     case UserIdentity::ERROR_PASSWORD_INVALID: {
                        // Если пароль был указан наверно - создаем ошибку
                        $this->addError('passwd','Вы указали неверный пароль!');
                         break;
                    }
                }
        }
    }
         
     }
?>