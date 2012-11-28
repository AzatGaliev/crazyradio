<?php

class Post extends CActiveRecord
{
    public function rules()
    {
        return array(
            array('english_title, title', 'length', 'max' => 255, 'allowEmpty' => false),
            array('short_content', 'required'),
            array('full_content', 'safe'),
            array('hidden', 'bool', 'allowEmpty' => false),
            array('author', 'number', 'integerOnly' => true, 'allowEmpty' => false),
        );
    }

    public function tableName()
    {
        return '{{posts}}';
    }

    public function attributeLabels()
    {
        return array(
            'english_title' => 'Название на английском (для URL)',
            'title' => 'Заголовок',
            'short_content' => 'Краткое содержание',
            'full_content' => 'Полное содержание',
            'hidden' => 'Только для администраторов',
            'time_created' => 'Время создания',
            'time_modified' => 'Время последнего редактирования',
            'author' => 'Автор',
        );
    }
}
