<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

use SleepingOwl\Admin\Contracts\Initializable;

use AdminDisplay;
use AdminColumn;
use AdminForm;
use AdminFormElement;

/**
 * Class Articles
 *
 * @property \App\Article $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Articles extends Section implements Initializable
{
    protected $model = '\App\Article';
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = "Новости";

    /**
     * @var string
     */
    protected $alias;

    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-leanpub')->setPriority(500);
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display = AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::text('id')->setLabel('ID'),
            AdminColumn::link('name')->setLabel('Название')->setWidth('15%'),
            AdminColumn::text('description')->setLabel('Краткое описание')->setHtmlAttribute('class', 'text-muted')->setWidth('35%'),
            AdminColumn::image('lg_img')->setLabel('Изображение'),
            AdminColumn::text('updated_at')->setLabel('Дата последнего обновления'),
        ]);

        $display->paginate(15);

        return $display;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::form()->setElements([
            AdminFormElement::text('name', 'Название')->addValidationRule('max:150', 'Поле содержит максимум 150 символов')->required('Поле обязательно для заполнения'),
            AdminFormElement::textarea('description', 'Краткое описание')->required('Поле обязательно для заполнения'),
            AdminFormElement::ckeditor('text', 'Текст')->required('Поле обязательно для заполнения'),
            AdminFormElement::image('lg_img', 'Изображение'),
        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
