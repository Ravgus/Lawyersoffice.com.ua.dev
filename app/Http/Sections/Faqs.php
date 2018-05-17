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
 * Class Faqs
 *
 * @property \App\Faq $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Faqs extends Section implements Initializable
{
    protected $model = '\App\Faq';
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = "Вопросы-Ответы";

    /**
     * @var string
     */
    protected $alias;

    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-info-circle')->setPriority(300);
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::link('question')->setLabel('Вопрос'),
            AdminColumn::text('answer')->setLabel('Ответ'),
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
            AdminFormElement::text('question', 'Вопрос')->addValidationRule('max:255', 'Поле содержит максимум 255 символов')->required('Поле обязательно для заполнения'),
            AdminFormElement::ckeditor('answer', 'Ответ')->required('Поле обязательно для заполнения'),
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
