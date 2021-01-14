<?php

/**
 * This is the model class for table "Comentario".
 *
 * The followings are the available columns in table 'Comentario':
 * @property string $id
 * @property string $conteudo
 * @property string $post_id
 * @property string $autor
 *
 * The followings are the available model relations:
 * @property Post $post
 */
class Comentario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comentario the static model class
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
		return 'Comentario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('conteudo, post_id, autor', 'required'),
			array('post_id', 'length', 'max'=>10),
			array('autor', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, conteudo, post_id, autor', 'safe', 'on'=>'search'),
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
			'post' => array(self::BELONGS_TO, 'Post', 'post_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'conteudo' => 'Conteudo',
			'post_id' => 'Post',
			'autor' => 'Autor',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('conteudo',$this->conteudo,true);
		$criteria->compare('post_id',$this->post_id,true);
		$criteria->compare('autor',$this->autor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}