<?php

class Page extends CActiveRecord
{
    public function rules()
    {
        return array(
            array('english_title, title', 'length', 'max' => 255, 'allowEmpty' => false),
            array('content', 'safe'),
        );
    }

    public function tableName()
    {
        return '{{pages}}';
    }

    public function attributeLabels()
    {
        return array(
            'english_title' => 'Название на английском (для URL)',
            'title' => 'Заголовок',
            'content' => 'Содержание',
        );
    }
}
