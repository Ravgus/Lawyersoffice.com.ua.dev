<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Атрибут ":attribute" должен быть подтверждён.',
    'active_url' => 'Поле ":attribute" не годится в качестве url.',
    'after' => 'Поле ":attribute" должно быть больше текущей даты :date.',
    'after_or_equal' => 'Поле ":attribute" должно быть больше или равно текущей дате :date.',
    'alpha' => 'Поле ":attribute" может содержать только буквы.',
    'alpha_dash' => 'Поле ":attribute" может содержать только буквы, цифры и слешы.',
    'alpha_num' => 'Поле ":attribute" может содержать только быуквы и цифры.',
    'array' => 'Поле ":attribute" должно быть массивом.',
    'before' => 'Поле ":attribute" должно быть меньше текущей даты :date.',
    'before_or_equal' => 'Поле ":attribute" должно быть меньше или равно текущей дате :date.',
    'between' => [
        'numeric' => 'Поле ":attribute" должно быть больше :min и меньше :max.',
        'file' => 'Поле ":attribute" должно быть больше :min и меньше :max килобайт.',
        'string' => 'Поле ":attribute" должно быть больше :min и меньше :max символов.',
        'array' => 'Поле ":attribute" должно содержать больше :min и меньше :max элементов.',
    ],
    'boolean' => 'Поле ":attribute" должно иметь значение Да или Нет.',
    'confirmed' => 'Поле ":attribute" не соответствует полю подверждения.',
    'date' => 'Поле ":attribute" содержит некоректную дату.',
    'date_format' => 'Поле ":attribute" не соответствует формату :format.',
    'different' => 'Поле ":attribute" и :other должны отличаться.',
    'digits' => 'Поле ":attribute" должно быть :digits цифрами.',
    'digits_between' => 'Поле ":attribute" должно быть больше :min и меньше :max числа.',
    'dimensions' => 'Поле ":attribute" содержит некоректные размеры изображения.',
    'distinct' => 'Поле ":attribute" должно иметь уникальное значение.',
    'email' => 'Поле ":attribute" должно содержать корректный email адресс.',
    'exists' => 'Выбранное поле ":attribute" имеет некоректное значение.',
    'file' => 'Поле ":attribute" должно содержать файл.',
    'filled' => 'Поле ":attribute" должно быть заполнено.',
    'image' => 'Поле ":attribute" должно содержать изображение.',
    'in' => 'Выбранное поле ":attribute" содержит некоректное значение.',
    'in_array' => 'Поле ":attribute" не существует в :other.',
    'integer' => 'Поле ":attribute" должно быть целым числом.',
    'ip' => 'Поле ":attribute" должно содержать корректный IP адрес.',
    'ipv4' => 'Поле ":attribute" должно содержать корректный IPv4 адрес.',
    'ipv6' => 'Поле ":attribute" должно содержать корректный IPv6 адрес.',
    'json' => 'Поле ":attribute" должно содержать корректную JSON строку.',
    'max' => [
        'numeric' => 'Поле ":attribute" не может быть больше :max.',
        'file' => 'Поле ":attribute" не может быть больше чем :max килобайт.',
        'string' => 'Поле ":attribute" не может быть больше чем :max символов.',
        'array' => 'Поле ":attribute" не может содержать больше чем :max элементов.',
    ],
    'mimes' => 'Поле ":attribute" должно содержать файл типа: :values.',
    'mimetypes' => 'Поле ":attribute" должно содержать файл типа: :values.',
    'min' => [
        'numeric' => 'Поле ":attribute" должно быть больше :min.',
        'file' => 'Поле ":attribute" должно быть как минимум :min килобайт.',
        'string' => 'Поле ":attribute" должно быть как минимум :min символов.',
        'array' => 'Поле ":attribute" должно содержать как минимум :min элементов.',
    ],
    'not_in' => 'Выбранное поле ":attribute" содержит некоректное значение.',
    'numeric' => 'Поле ":attribute" должно быть числом.',
    'present' => 'Поле ":attribute" должно быть в настоящем времени.',
    'regex' => 'Формат ":attribute" поля содержит некорректное значение.',
    'required' => 'Поле ":attribute" обязательно к заполнению.',
    'required_if' => 'Поле ":attribute" обязательно к заполнению, когда поле :other равно :value.',
    'required_unless' => 'Поле ":attribute" обязательно к заполнению пока поле :other равно одному из значений :values.',
    'required_with' => 'Поле ":attribute" обязательно к заполнению когда :values в настоящем времени.',
    'required_with_all' => 'Поле ":attribute" обязательно к заполнению когда :values равно настоящему времени.',
    'required_without' => 'Поле ":attribute" обязательно к заполнению когда :values не равно настоящему времени.',
    'required_without_all' => 'Поле ":attribute" обязательно к заполнению когда ни одно из значений :values не соответствует настоящему времени.',
    'same' => 'Поле ":attribute" и :other должны соответствовать.',
    'size' => [
        'numeric' => 'Поле ":attribute" должно быть :size.',
        'file' => 'Поле ":attribute" должно быть :size килобайт.',
        'string' => 'Поле ":attribute" должно быть :size символов.',
        'array' => 'Поле ":attribute" должно содержать :size элементов.',
    ],
    'string' => 'Поле ":attribute" должно быть строкой.',
    'timezone' => 'Поле ":attribute" должно быть корректным промежутком.',
    'unique' => 'Значение ":attribute" уже занято.',
    'uploaded' => 'Файл ":attribute" не удалось загрузить.',
    'url' => 'Формат поля ":attribute" некорректен.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
