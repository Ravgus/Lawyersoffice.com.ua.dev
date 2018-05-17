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
 * Class Offers
 *
 * @property \App\Offer $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Offers extends Section implements Initializable
{
    protected $model = '\App\Offer';
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = "Услуги";

    /**
     * @var string
     */
    protected $alias;

    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-bank')->setPriority(100);
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::link('name')->setLabel('Название'),
            AdminColumn::text('text')->setLabel('Описание')->setWidth('35%'),
            AdminColumn::image('img')->setLabel('Изображение'),
        ])->paginate(15);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::form()->setElements([
            AdminFormElement::text('name', 'Название')->addValidationRule('max:100', 'Поле содержит максимум 100 символов')->required('Поле обязательно для заполнения'),
            AdminFormElement::ckeditor('text', 'Описание')->addValidationRule('max:255', 'Поле содержит максимум 255 символов')->required('Поле обязательно для заполнения'),
            AdminFormElement::image('img', 'Изображение'),
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
