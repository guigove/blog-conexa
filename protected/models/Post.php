<?php

/**
 * This is the model class for table "Post".
 *
 * The followings are the available columns in table 'Post':
 * @property string $id
 * @property string $categoria_id
 * @property string $titulo
 * @property string $conteudo
 * @property string $data
 * @property string $autor
 *
 * The followings are the available model relations:
 * @property Comentario[] $comentarios
 * @property Categoria $categoria
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
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
		return 'Post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('categoria_id, titulo, conteudo, data, autor', 'required'),
			array('categoria_id', 'length', 'max'=>10),
			array('titulo, autor', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, categoria_id, titulo, conteudo, data, autor', 'safe', 'on'=>'search'),
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
			'comentarios' => array(self::HAS_MANY, 'Comentario', 'post_id'),
			'categoria' => array(self::BELONGS_TO, 'Categoria', 'categoria_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'categoria_id' => 'Categoria',
			'titulo' => 'Titulo',
			'conteudo' => 'Conteudo',
			'data' => 'Data',
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
		$criteria->compare('categoria_id',$this->categoria_id,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('conteudo',$this->conteudo,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('autor',$this->autor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}