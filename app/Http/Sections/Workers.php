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
 * Class Workers
 *
 * @property \App\Worker $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Workers extends Section implements Initializable
{
    protected $model = '\App\Worker';
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = "Партнеры";

    /**
     * @var string
     */
    protected $alias;


    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-id-badge')->setPriority(900);
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
            AdminColumn::email('email')->setLabel('E-mail'),
            AdminColumn::text('phone')->setLabel('Телефон'),
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
            AdminFormElement::ckeditor('text', 'Описание')->required('Поле обязательно для заполнения'),
            AdminFormElement::text('sphere', 'Сфера научных интересов')->addValidationRule('max:255', 'Поле содержит максимум 255 символов'),
            AdminFormElement::text('email', 'E-mail')
                ->addValidationRule('email', 'Поле должно содержать корректный E-mail адрес')->required('Поле обязательно для заполнения'),
            AdminFormElement::text('phone', 'Номер телефона')->addValidationRule('between:5,20', 'Поле должно содержать от 5 до 20 символов')->required('Поле обязательно для заполнения'),
            AdminFormElement::image('img', 'Изображение')->required('Поле должно содержать изображение'),
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
