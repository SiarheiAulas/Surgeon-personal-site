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

    'accepted' => 'Поле :attribute должно быть отмечено.',
    'accepted_if' => 'Поле :attribute должно быть отмечено если :other равно :value.',
    'active_url' => ':attribute не является корректным URL.',
    'after' => ':attribute должна быть датой после :date.',
    'after_or_equal' => ':attribute должна быть датой после :date или равной :date.',
    'alpha' => 'Поле :attribute должно содержать только буквы.',
    'alpha_dash' => 'Поле :attribute должно содержать только буквы, цифры, дефисы и нижние прочерки.',
    'alpha_num' => 'Поле :attribute должно содержать только буквы и цифры.',
    'array' => 'Поле :attribute должно содержать массив.',
    'before' => ':attribute должна быть датой до :date.',
    'before_or_equal' => ':attribute должна быть датой до :date или равной :date.',
    'between' => [
        'numeric' => 'Значение :attribute должно быть в пределах от :min до :max.',
        'file' => 'Размер файла :attribute должен быть в пределах от :min до :max килобайт.',
        'string' => 'Длинна строки :attribute должан быть в пределах от :min до :max символов.',
        'array' => 'Массив :attribute должен включать от :min до :max элементов.',
    ],
    'boolean' => 'Поле :attribute должно иметь значения true или false.',
    'confirmed' => 'Введенные значения :attribute не совпадают.',
    'current_password' => 'Неверный пароль.',
    'date' => ':attribute не является корректной датой.',
    'date_equals' => ':attribute должна быть датой, равной :date.',
    'date_format' => ':attribute не соответствует формату :format.',
    'declined' => 'Поле :attribute должно быть отклонено.',
    'declined_if' => 'Поле :attribute должно быть отконено если :other равно :value.',
    'different' => 'Поля :attribute и :other должны различаться.',
    'digits' => 'Длина поля :attribute должна быть :digits цифр.',
    'digits_between' => 'Длина поля :attribute должна быть от :min до :max цифр.',
    'dimensions' => ':attribute имеет некорректные размеры изображения.',
    'distinct' => 'Поле :attribute имеет дублирующееся значение.',
    'email' => 'Значение поля :attribute должно быть корректным адресом электронной почты.',
    'ends_with' => 'Значение поля :attribute должно оканчиваться одним из следующих значений: :values.',
    'exists' => 'Выбранное значение :attribute некорректно.',
    'file' => 'Значение поля :attribute должно быть файлом.',
    'filled' => 'Поле :attribute должно быть заполнено.',
    'gt' => [
        'numeric' => 'Значение :attribute должно быть больше чем :value.',
        'file' => 'Размер файла :attribute должен быть больше :value килобайт.',
        'string' => 'Длина строки :attribute должна быть более :value символов.',
        'array' => 'Массив :attribute должен содержать более :value элементов.',
    ],
    'gte' => [
        'numeric' => 'Значение :attribute должно быть больше либо равно :value.',
        'file' => 'Размер файла :attribute должен быть больше либо равен :value килобайт.',
        'string' => 'Длина строки :attribute должна быть больше либо равна :value символов.',
        'array' => 'Массив :attribute должен содержать :value элементов и более.',
    ],
    'image' => 'Поле :attribute должно содержать изображение.',
    'in' => 'Выбранное значение :attribute некорректно.',
    'in_array' => 'Значение поля :attribute не содержится в :other.',
    'integer' => 'Значение поля :attribute должно быть целым числом.',
    'ip' => 'Значение поля :attribute должно быть корректным IP адресом.',
    'ipv4' => 'Значение поля :attribute должно быть корректным IPv4 адресом.',
    'ipv6' => 'Значение поля :attribute должно быть корректным IPv6 адресом.',
    'json' => 'Значение поля :attribute должно быть корректной JSON строкой.',
    'lt' => [
        'numeric' => 'Значение поля :attribute должно быть меньше :value.',
        'file' => 'Размер файла :attribute должен быть меньше :value килобайт.',
        'string' => 'Длина строки :attribute должна быть меньше :value символов.',
        'array' => 'Массив :attribute должен содержать менее :value элементов.',
    ],
    'lte' => [
        'numeric' => 'Значение поля :attribute должно быть не более :value.',
        'file' => 'Размер файла :attribute должен быть не более :value килобайт.',
        'string' => 'Длина строки :attribute должна быть не более :value символов.',
        'array' => 'Массив :attribute должен содержать не более :value элементов.',
    ],
    'max' => [
        'numeric' => 'Значение поля :attribute не должно быть больше :max.',
        'file' => 'Размер файла :attribute не должен превышать :max килобайт.',
        'string' => 'Длина строки :attribute не должна превышать :max символов.',
        'array' => 'Массив :attribute не должен содержать более :max элементов.',
    ],
    'mimes' => 'Значение поля :attribute должно быть файлом с расширением: :values.',
    'mimetypes' => 'Значение поля :attribute должно быть файлом одного из типов: :values.',
    'min' => [
        'numeric' => 'Значение поля :attribute должно быть не менее :min.',
        'file' => 'Размер файла :attribute должен быть не менее :min килобайт.',
        'string' => 'Длина строки :attribute должна быть не менее :min символов.',
        'array' => 'Массив :attribute должен содержать не менее :min элементов.',
    ],
    'multiple_of' => 'Значение поля :attribute должно быть кратно :value.',
    'not_in' => 'Выбранное значение :attribute некорректно.',
    'not_regex' => 'Формат поля :attribute некорректен.',
    'numeric' => 'Значение поля :attribute должно быть числом.',
    'password' => 'Неверный пароль.',
    'present' => 'Поле :attribute должно присутствовать (но может быть пустым).',
    'prohibited' => 'Поле :attribute должно отсутствовать или быть пустым.',
    'prohibited_if' => 'Поле :attribute должно отсутствовать или быть пустым если :other равно :value.',
    'prohibited_unless' => 'Поле :attribute должно отсутствовать или быть пустым кроме случая когда :other равно одному из значений: :values.',
    'prohibits' => 'Поле :attribute требует исключить поле :other.',
    'regex' => 'Формат поля :attribute некорректен.',
    'required' => 'Поле :attribute является обязательным.',
    'required_if' => 'Поле :attribute является обязательным если :other равно :value.',
    'required_unless' => 'Поле :attribute является обязательным кроме случая когда :other равно одному из значений: :values.',
    'required_with' => 'Поле :attribute является обязательным если указано значение :values.',
    'required_with_all' => 'Поле :attribute является обязательным если указаны значения :values.',
    'required_without' => 'Поле :attribute является обязательным если не указаны значения :values.',
    'required_without_all' => 'Поле :attribute является обязательным если ни одно из значений :values не указано.',
    'same' => 'Значения полей :attribute и :other должны совпадать.',
    'size' => [
        'numeric' => 'Значение :attribute должно иметь размер :size.',
        'file' => 'Файл :attribute должен иметь размер :size килобайт.',
        'string' => 'Строка :attribute должна иметь длину :size символов.',
        'array' => 'Массив :attribute должен содержать :size элементов.',
    ],
    'starts_with' => 'Значение поля :attribute должно начинаться с одного из следующих значений: :values.',
    'string' => 'Значение поля :attribute должно быть строкой.',
    'timezone' => 'Значение поля :attribute должно быть корректным часовым поясом.',
    'unique' => 'Значение поля :attribute уже использовано.',
    'uploaded' => ':attribute не загружен.',
    'url' => 'Значение поля :attribute должно быть корректным URL.',
    'uuid' => 'Значение поля :attribute должно быть корректным UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
