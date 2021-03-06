<?php
return [
    'plugin' => [
        'name' => 'Вход с помощью кода',
        'description' => 'Форма входа через код/пароль'
    ],
    'logincomponent' => [
        'name' => 'Вход с помощью кода',
        'description' => 'Отображает форму входа через код/пароль на странице',
        'redirect' => [
            'title' => 'Перенаправить на',
            'description' => 'Имя страницы на которую перенаправить после обновления, входа или регистрации.'
        ],
        'visible' => [
            'title' => 'Отображать код/пароль',
            'description' => 'Если отмечено, пароль будет виден (используется тип text для поля ввода).'
        ],
        'button' => [
            'title' => 'Текст кнопки',
            'description' => 'Текст, отображаемый на кнопке входа.'
        ]
    ],
    'form' => [
	    'wrong_code' => 'Неверный код!',
	    'required' => 'Поле :attribute обязательно для заполнения.'
    ],
];
