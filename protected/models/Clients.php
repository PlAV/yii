<?php

/**
 * This is the model class for table "clients".
 *
 * The followings are the available columns in table 'clients':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property integer $direct_line
 * @property integer $mobile
 * @property string $title
 * @property string $type
 * @property string $general_notes
 * @property string $contact_notes
 */
class Clients extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Clients the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clients';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name,  mobile, email,  general_notes, contact_notes', 'required'),
			array('direct_line, mobile', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, title, type', 'length', 'max'=>100),
		    array('id, first_name, last_name, direct_line, mobile, title, type, general_notes, contact_notes', 'safe', 'on'=>'search'),
		);
	}
    
     public function relations(){
        return array(
            'compData'=> array(self::BELONGS_TO, 'CompanyDetails', 'id_company'),
        );
        
    }




	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'direct_line' => 'Direct Line',
			'mobile' => 'Mobile',
			'title' => 'Title',
			'type' => 'Type',
			'general_notes' => 'General Notes',
			'contact_notes' => 'Contact Notes',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('direct_line',$this->direct_line);
		$criteria->compare('mobile',$this->mobile);
        $criteria->compare('email',$this->email);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('general_notes',$this->general_notes,true);
		$criteria->compare('contact_notes',$this->contact_notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}