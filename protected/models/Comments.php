<?php
	// Стандартный шаблон для любой модели.
     class Comments extends CActiveRecord{
         public $guestlogin='Guest';
         public static function model($className=__CLASS__)
         {
             return parent::model($className);
         }
         public function tableName()
         {
             return 'comments';   // название нашей таблицы в базе данных
         }
         
         public function rules()
        {
            return array(
                // логин, пароль не должны быть больше 128-и символов, и меньше трёх
                array('login','length', 'max'=>128, 'min' => 3),
                array('login', 'match', 'pattern' => '/^[A-Za-z0-9А-Яа-я\s,]+$/u','message' => 'Логин содержит недопустимые символы.'),
                array('text','safe'),
            );
        }
        
        public function relations(){
            return array(
                'user'=>array(self::BELONGS_TO, 'User', 'id_user'),
            );
        }
     }
?>