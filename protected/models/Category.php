<?php

class Category extends CActiveRecord
{
    public function rules()
    {
        return array(
            array('english_title, title', 'length', 'max' => 255, 'allowEmpty' => false),
            array('description', 'safe'),
            array('parent', 'number', 'integerOnly' => true, 'allowEmpty' => false),
        );
    }

    public function tableName()
    {
        return '{{categories}}';
    }

    public function attributeLabels()
    {
        return array(
            'english_title' => 'Название на английском (для URL)',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'parent' => 'Родительская категория',
        );
    }
}
