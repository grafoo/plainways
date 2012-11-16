<?php

/**
 * This is the model class for table "tbl_obstacle".
 *
 * The followings are the available columns in table 'tbl_obstacle':
 * @property integer $id
 * @property string $area
 * @property string $name
 * @property string $description
 * @property integer $tbl_obstacle_category_id
 *
 * The followings are the available model relations:
 * @property TblObstacleCategory $tblObstacleCategory
 */
class Obstacle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Obstacle the static model class
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
		return 'tbl_obstacle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('area, tbl_obstacle_category_id', 'required'),
			array('tbl_obstacle_category_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>45),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, area, name, description, tbl_obstacle_category_id', 'safe', 'on'=>'search'),
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
			'tblObstacleCategory' => array(self::BELONGS_TO, 'TblObstacleCategory', 'tbl_obstacle_category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'area' => 'Area',
			'name' => 'Name',
			'description' => 'Description',
			'tbl_obstacle_category_id' => 'Tbl Obstacle Category',
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
		$criteria->compare('area',$this->area,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('tbl_obstacle_category_id',$this->tbl_obstacle_category_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}