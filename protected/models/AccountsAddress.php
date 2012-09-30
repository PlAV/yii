<?php

/**
 * This is the model class for table "accounts_address".
 *
 * The followings are the available columns in table 'accounts_address':
 * @property integer $id
 * @property string $name
 * @property string $adress1
 * @property string $adress2
 * @property string $suburb
 * @property integer $zip
 * @property string $state
 */
class AccountsAddress extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AccountsAddress the static model class
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
		return 'accounts_address';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, adress1, adress2, suburb, zip, state', 'required'),
			array('zip', 'numerical', 'integerOnly'=>true),
			array('name, adress1, adress2, suburb, state', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, adress1, adress2, suburb, zip, state', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'adress1' => 'Adress1',
			'adress2' => 'Adress2',
			'suburb' => 'Suburb',
			'zip' => 'Zip',
			'state' => 'State',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('adress1',$this->adress1,true);
		$criteria->compare('adress2',$this->adress2,true);
		$criteria->compare('suburb',$this->suburb,true);
		$criteria->compare('zip',$this->zip);
		$criteria->compare('state',$this->state,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}