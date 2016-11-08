<?php

return [
    'auth' => [
        'title' => 'Панель управления'
    ],
    'field' => [
        'invalid_type' => 'Использован неверный тип поля: :type.',
        'options_method_not_exists' => "Класс модели :model должен содержать метод :method(), возвращающий опции для поля формы ':field'."
    ],
    'widget' => [
        'not_registered' => "Класс виджета ':name' не зарегистрирован.",
        'not_bound' => "Виджет с именем класса ':name' не связан с контроллером."
    ],
    'page' => [
        'untitled' => 'Без названия',
        'access_denied' => [
            'label' => 'Доступ запрещен',
            'help' => 'У вас нет необходимых прав для просмотра этой страницы.',
            'cms_link' => 'Перейти к CMS'
        ],
        'invalid_token' => [
            'label' => 'Неверный токен безопасности'
        ]
    ],
    'partial' => [
        'not_found_name' => 'Не удалось найти шаблон (partial) с именем :name.'
    ],
    'account' => [
        'sign_out' => 'Выйти',
        'login' => 'Вход',
        'reset' => 'Сбросить',
        'restore' => 'Восстановить',
        'login_placeholder' => 'пользователь',
        'password_placeholder' => 'пароль',
        'forgot_password' => 'Забыли пароль?',
        'enter_email' => 'Введите вашу почту',
        'enter_login' => 'Введите ваш Логин',
        'email_placeholder' => 'почта',
        'enter_new_password' => 'Введите новый пароль',
        'password_reset' => 'Сбросить пароль',
        'restore_success' => 'На вашу электронную почту отправлено сообщение с инструкциями для восстановления пароля.',
        'restore_error' => "Пользователь с логином ':login' не найден.",
        'reset_success' => 'Ваш пароль был успешно изменен. Теперь вы можете войти на сайт.',
        'reset_error' => 'Недействительные данные для изменения пароля. Пожалуйста, попробуйте еще раз!',
        'reset_fail' => 'Невозможно изменить пароль!',
        'apply' => 'Применить',
        'cancel' => 'Отменить',
        'delete' => 'Удалить',
        'ok' => 'OK'
    ],
    'dashboard' => [
        'menu_label' => 'Панель управления',
        'widget_label' => 'Виджет',
        'widget_width' => 'Ширина',
        'full_width' => 'полная ширина',
        'add_widget' => 'Добавить виджет',
        'widget_inspector_title' => 'Конфигурации виджета',
        'widget_inspector_description' => 'Настройка отображения виджета',
        'widget_columns_label' => 'Ширина :columns',
        'widget_columns_description' => 'Ширина виджета может варьироваться от 1 до 10.',
        'widget_columns_error' => 'Пожалуйста, выберите ширину виджета.',
        'columns' => '{1} колонка|[2,4] колонки|[5,Inf] колонок',
        'widget_new_row_label' => 'Новая строка',
        'widget_new_row_description' => 'Поставить виджет с новой строки.',
        'widget_title_label' => 'Заголовок',
        'widget_title_error' => 'Заголовок виджета обязателен.',
        'status' => [
            'widget_title_default' => 'Статус системы',
            'update_available' => '{0} нет новый обновлений!|{1} доступно новое обновление!|[2,Inf] доступны новые обновления!'
        ]
    ],
    'user' => [
        'name' => 'Администратора',
        'menu_label' => 'Администраторы',
        'menu_description' => 'Управление группой администраторов, создание групп и разрешений.',
        'list_title' => 'Управление администраторами',
        'new' => 'Добавить администратора',
        'login' => 'Логин',
        'first_name' => 'Имя',
        'last_name' => 'Фамилия',
        'full_name' => 'Полное имя',
        'email' => 'Почта',
        'groups' => 'Группы',
        'groups_comment' => 'Укажите, к какой группе должен принадлежать этот аккаунт.',
        'avatar' => 'Аватар',
        'password' => 'Пароль',
        'password_confirmation' => 'Подтверждение пароля',
        'permissions' => 'Полномочия',
        'account' => 'Аккаунт',
        'superuser' => 'Суперпользователь',
        'superuser_comment' => 'Предоставляет этому аккаунту неограниченный доступ ко всем областям.',
        'send_invite' => 'Отправить приглашение по электронной почте',
        'send_invite_comment' => 'Отправляет приветственное сообщение, содержащее информацию о логине и пароле.',
        'delete_confirm' => 'Вы действительно хотите удалить этого администратора?',
        'return' => 'Вернуться к списку администраторов',
        'allow' => 'Разрешить',
        'inherit' => 'Наследовать',
        'deny' => 'Запретить',
        'group' => [
            'name' => 'Группы',
            'name_comment' => 'Название отображается в списке групп в форме создания/редактирования администраторов.',
            'name_field' => 'Название',
            'description_field' => 'Описание',
            'is_new_user_default_field_label' => 'Группа по умолчанию',
            'is_new_user_default_field_comment' => 'Добавлять новых администраторов в эту группу по умолчанию.',
            'code_field' => 'Уникальный код',
            'code_comment' => 'Введите уникальный код, если вы хотите открыть доступ к нему с помощью API.',
            'menu_label' => 'Группы',
            'list_title' => 'Управление группами',
            'new' => 'Добавить группу',
            'delete_confirm' => 'Вы действительно хотите удалить эту группу администраторов?',
            'return' => 'Вернуться к списку групп',
            'users_count' => 'Пользователи'
        ],
        'preferences' => [
            'not_authenticated' => 'Невозможно загрузить или сохранить настройки для неавторизованного пользователя.'
        ]
    ],
    'list' => [
        'default_title' => 'Список',
        'search_prompt' => 'Поиск...',
        'no_records' => 'По вашему запросу ничего не найдено.',
        'missing_model' => 'Для списка используемого в :class не определена модель.',
        'missing_column' => 'Нет никаких определений столбца для :columns.',
        'missing_columns' => 'Список используемый в :class не имеет никаких столбцов.',
        'missing_definition' => "Поведение списка не содержит столбец для ':field'.",
        'behavior_not_ready' => 'Поведение списка не было инициализировано, проверьте вызов makeLists() в вашем контроллере.',
        'invalid_column_datetime' => "Значение столбца ':column' не является объектом DateTime. Отсутствует \$dates ссылка в модели?",
        'pagination' => 'Отображено записей: :from-:to из :total',
        'prev_page' => 'Предыдущая страница',
        'next_page' => 'Следующая страница',
        'refresh' => 'Обновить',
        'updating' => 'Обновление...',
        'loading' => 'Загрузка...',
        'setup_title' => 'Настройка списка',
        'setup_help' => 'Используйте флажки для выбора колонок, которые вы хотите видеть в списке. Вы можете изменить положение столбцов, перетаскивая их вверх или вниз.',
        'records_per_page' => 'Записей на странице',
        'records_per_page_help' => 'Выберите количество записей на странице для отображения. Обратите внимание, что большое количество записей на одной странице может привести к снижению производительности.',
        'delete_selected' => 'Удалить выбранное',
        'delete_selected_empty' => 'Нет выбранных записей для удаления.',
        'delete_selected_confirm' => 'Удалить выбранные записи?',
        'delete_selected_success' => 'Выбранные записи успешно удалены.',
        'column_switch_true' => 'Да',
        'column_switch_false' => 'Нет'
    ],
    'fileupload' => [
        'attachment' => 'Приложение',
        'help' => 'Добавьте заголовок и описание для этого вложения.',
        'title_label' => 'Название',
        'description_label' => 'Описание',
        'default_prompt' => 'Кликните по %s или перетащите файл сюда для загрузки',
        'attachment_url' => 'URL',
        'upload_file' => 'Загрузить файл',
        'upload_error' => 'Ошибка загрузки',
        'remove_confirm' => 'Вы уверены?',
        'remove_file' => 'Удалить файл'
    ],
    'form' => [
        'create_title' => 'Создание :name',
        'update_title' => 'Редактирование :name',
        'preview_title' => 'Предпросмотр :name',
        'create_success' => ':name был успешно создан',
        'update_success' => ':name был успешно сохранен',
        'delete_success' => ':name был успешно удален',
        'missing_id' => 'Идентификатор формы записи не указан.',
        'missing_model' => 'Для формы используемой в :class не определена модель.',
        'missing_definition' => "Поведение формы не содержит поле для':field'.",
        'not_found' => 'Форма записи с идентификатором :ID не найдена.',
        'action_confirm' => 'Вы уверены, что хотите сделать это?',
        'create' => 'Создать',
        'create_and_close' => 'Создать и закрыть',
        'creating' => 'Создание...',
        'creating_name' => 'Создание :name...',
        'save' => 'Сохранить',
        'save_and_close' => 'Сохранить и закрыть',
        'saving' => 'Сохранение...',
        'saving_name' => 'Сохранение :name...',
        'delete' => 'Удалить',
        'deleting' => 'Удаление...',
        'confirm_delete' => 'Вы действительно хотите удалить эту запись?',
        'confirm_delete_multiple' => 'Вы действительно хотите удалить выбранные записи?',
        'deleting_name' => 'Удаление :name...',
        'reset_default' => 'Сбросить настройки',
        'resetting' => 'Сброс',
        'resetting_name' => 'Сброс :name',
        'undefined_tab' => 'Разное',
        'field_off' => 'Выкл',
        'field_on' => 'Вкл',
        'add' => 'Добавить',
        'apply' => 'Применить',
        'cancel' => 'Отмена',
        'close' => 'Закрыть',
        'confirm' => 'Подтвердить',
        'reload' => 'Обновить',
        'complete' => 'Завершить',
        'ok' => 'OK',
        'or' => 'или',
        'confirm_tab_close' => 'Закрыть вкладку? Несохраненные изменения будут потеряны.',
        'behavior_not_ready' => 'Поведение формы не было инициализировано, проверьте вызов initForm() в вашем контроллере.',
        'preview_no_files_message' => 'Нет загруженных файлов.',
        'preview_no_record_message' => 'Нет выбранных записей.',
        'select' => 'Выбрать',
        'select_all' => 'все',
        'select_none' => 'ничего',
        'select_placeholder' => 'Пожалуйста, выберите',
        'insert_row' => 'Вставить строку',
        'insert_row_below' => 'Вставить строку ниже',
        'delete_row' => 'Удалить строку',
        'concurrency_file_changed_title' => 'Файл был изменен',
        'concurrency_file_changed_description' => 'Файл,редактируемый вами, был изменен другим пользователем. Вы можете перезагрузить файл и потерять ваши изменения или перезаписать его',
        'return_to_list' => 'Вернуться к списку'
    ],
    'recordfinder' => [
        'find_record' => 'Найти запись'
    ],
    'relation' => [
        'missing_config' => "Поведение отношения не имеет конфигурации для ':config'.",
        'missing_definition' => "Поведение отношения не содержит определения для ':field'.",
        'missing_model' => 'Для поведения отношения, используемого в :class не определена модель.',
        'invalid_action_single' => 'Это действие не может быть выполнено для особого отношения.',
        'invalid_action_multi' => 'Это действие не может быть выполнено для множественных отношений.',
        'help'  => 'Нажмите на элемент, который нужно добавить',
        'related_data' => 'Связанные :name данные',
        'add' => 'Добавить',
        'add_selected' => 'Добавить выбранные',
        'add_a_new' => 'Добавить новый :name',
        'link_selected' => 'Связать выбранное',
        'link_a_new' => 'Новая ссылка :name',
        'cancel' => 'Отмена',
        'close' => 'Закрыть',
        'add_name' => 'Добавление :name',
        'create' => 'Создать',
        'create_name' => 'Создание :name',
        'update' => 'Обновить',
        'update_name' => 'Обновление :name',
        'preview' => 'Предпросмотр',
        'preview_name' => 'Предпросмотр :name',
        'remove' => 'Удалить',
        'remove_name' => 'Удаление :name',
        'delete' => 'Удалить',
        'delete_name' => 'Удаление :name',
        'delete_confirm' => 'Вы уверены?',
        'link' => 'Ссылка',
        'link_name' => 'Соединение :name',
        'unlink' => 'Отвязать',
        'unlink_name' => 'Разъединение :name',
        'unlink_confirm' => 'Вы уверены?'
    ],
    'reorder' => [
        'default_title' => 'Сортировать записи',
        'no_records' => 'Нет доступных записей для сортировки.',
    ],
    'model' => [
        'name' => 'Модель',
        'not_found' => "Модель ':class' с идентификатором :id не найдена",
        'missing_id' => 'Нет идентификатора для поиска модели записи.',
        'missing_relation' => "Модель ':class' не содержит определения для ':relation'",
        'missing_method' => "Модель ':class' не содержит метод ':method'.",
        'invalid_class' => 'Модель :model используемая в :class не допустима, она должна наследовать класс \Model.',
        'mass_assignment_failed' => "Массовое заполнение недоступно для атрибута модели ':attribute'."
    ],
    'warnings' => [
        'tips' => 'Подсказки по конфигурации системы',
        'tips_description' => 'Есть проблемы, на которые стоит обратить внимание, чтобы правильно настроить систему.',
        'permissions'  => 'Каталог :name или его подкаталоги недоступны для записи. Укажите соответствующие разрешения для веб-сервера.',
        'extension' => 'Расширение PHP :name не установлено. Установите эту библиотеку и активируйте расширение.'
    ],
    'editor' => [
        'menu_label' => 'Настройки редактора',
        'menu_description' => 'Управление настройками редактора кода.',
        'font_size' => 'Размер шрифта',
        'tab_size' => 'Размер табуляции',
        'use_hard_tabs' => 'Использовать табуляцию для индентации',
        'code_folding' => 'Свертывание кода',
        'word_wrap' => 'Перенос слов',
        'highlight_active_line' => 'Подсвечивать активную строку',
        'auto_closing' => 'Автоматическое закрытие тегов и специальных символов',
        'show_invisibles' => 'Показывать невидимые символы',
        'show_gutter' => 'Показывать нумерацию строк',
        'theme' => 'Цветовая схема',
        'markup_styles' => 'Стили разметки',
        'custom_styles' => 'Дополнительные CSS стили',
        'custom styles_comment' => 'Дополнительные стили для использования в HTML редакторе.',
        'markup_classes' => 'Классы разметки',
        'paragraph' => 'Параграф',
        'link' => 'Ссылка',
        'table' => 'Таблица',
        'table_cell' => 'Ячейка таблицы',
        'image' => 'Изображение',
        'label' => 'Название',
        'class_name' => 'Класс',
        'markup_tags' => 'Теги разметки',
        'allowed_empty_tags' => 'Разрешенные пустые теги',
        'allowed_empty_tags_comment' => 'Список тегов, которые не будут удаляться, если внутри них нет содержания.',
        'allowed_tags' => 'Разрешенные теги',
        'allowed_tags_comment' => 'Список разрешенных тегов.',
        'no_wrap' => 'Do not wrap теги',
        'no_wrap_comment' => 'Список тегов, которые не должны быть обернуты в блочные элементы.',
        'remove_tags' => 'Удаляемые теги',
        'remove_tags_comment' => 'Список тегов, которые будут удалены вместе с их содержанием.'
    ],
    'tooltips' => [
        'preview_website' => 'Просмотр сайта'
    ],
    'mysettings' => [
        'menu_label' => 'Мои настройки',
        'menu_description' => 'Управление настройками учетной записи администратора.'
    ],
    'myaccount' => [
        'menu_label' => 'Мой аккаунт',
        'menu_description' => 'Управление личной информацией (имя, почта, пароль)',
        'menu_keywords' => 'безопасность логин'
    ],
    'branding' => [
        'menu_label' => 'Персонализация панели управления',
        'menu_description' => 'Управление внешним видом панели управления (название, цвет, логотип)',
        'brand' => 'Бренд',
        'logo' => 'Логотип',
        'logo_description' => 'Загрузите логотип для панели управления',
        'app_name' => 'Название приложения',
        'app_name_description' => 'Это имя отображается в заголовке панели управления',
        'app_tagline' => 'Слоган приложения',
        'app_tagline_description' => 'Слоган будет отображаться на экране входа в панель управления.',
        'colors' => 'Цвета',
        'primary_color' => 'Первичный color',
        'secondary_color' => 'Вторичный color',
        'accent_color' => 'Accent color',
        'styles' => 'Стили',
        'custom_stylesheet' => 'Пользовательские стили',
        'navigation' => 'Навигация',
        'menu_mode' => 'Стиль меню',
        'menu_mode_inline' => 'Строчный',
        'menu_mode_tile' => 'Плитка',
        'menu_mode_collapsed' => 'Схлопнутый'
    ],
    'backend_preferences' => [
        'menu_label' => 'Настройки панели управления',
        'menu_description' => 'Управление языком и внешним видом панели управления.',
        'region' => 'Регион',
        'code_editor' => 'Редактор кода',
        'timezone' => 'Часовой пояс',
        'timezone_comment' => 'Выводить даты в выбранном часовом поясе.',
        'locale' => 'Язык',
        'locale_comment' => 'Выберите желаемый язык панели управления.'
    ],
    'access_log' => [
        'hint' => 'В этом журнале отображается список успешных попыток авторизаций администраторов. Записи хранятся :days дней.',
        'menu_label' => 'Журнал доступа',
        'menu_description' => 'Просмотр списка успешных авторизаций администраторов.',
        'created_at' => 'Дата & Время',
        'login' => 'Логин',
        'ip_address' => 'IP адрес',
        'first_name' => 'Имя',
        'last_name' => 'Фамилия',
        'email' => 'Почта'
    ],
    'filter' => [
      'all' => 'все'
    ],
    'import_export' => [
        'upload_csv_file' => '1. Загрузка CSV-файл',
        'import_file' => 'Импорт файла',
        'first_row_contains_titles' => 'Первая строка содержит заголовки столбцов',
        'first_row_contains_titles_desc' => 'Выберите эту опцию, если первая строка в CSV-файле используется как заголовки для столбцов.',
        'match_columns' => '2. Применение столбцов файла к полям базы данных',
        'file_columns' => 'Столбцы файла',
        'database_fields' => 'Поля базы данных',
        'set_import_options' => '3. Установка параметров импорта',
        'export_output_format' => '1. Выбор формата экспорта',
        'file_format' => 'Формат файла',
        'standard_format' => 'Стандартный формат',
        'custom_format' => 'Пользовательский формат',
        'delimiter_char' => 'Символ разделения полей',
        'enclosure_char' => 'Символ обрамления полей',
        'escape_char' => 'Экранирующий символ',
        'select_columns' => '2. Выберите колонки для экспорта',
        'column' => 'Столбец',
        'columns' => 'Столбцы',
        'set_export_options' => '3. Установка параметров экспорта',
        'show_ignored_columns' => 'Показать пропущенные столбцы',
        'auto_match_columns' => 'Авто применение столбцов',
        'created' => 'Создано',
        'updated' => 'Обновлено',
        'skipped' => 'Пропущено',
        'warnings' => 'Предупреждения',
        'errors' => 'Ошибки',
        'skipped_rows' => 'Пропущенные строки',
        'import_progress' => 'Прогресс импорта',
        'processing' => 'Обработка',
        'import_error' => 'Ошибка импорта',
        'upload_valid_csv' => 'Пожалуйста, загрузите валидный CSV-файл..',
        'drop_column_here' => 'Отпустите столбец здесь...',
        'ignore_this_column' => 'Игонорировать этот столбец',
        'processing_successful_line1' => 'Процесс экспорта файла завершился успешно!',
        'processing_successful_line2' => 'Теперь браузер автоматически должен начать загрузку файла.',
        'export_progress' => 'Прогресс экспорта',
        'export_error' => 'Ошибка экспорта',
        'column_preview' => 'Предпросмотр столбца',
        'file_not_found_error' => 'Файл не найден',
        'empty_error' => 'Нет данных доступных для экспорта',
    ],
];