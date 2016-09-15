<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'misericordia');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%L([Gv2ahj^q21#:hURL5de[|1|d&kwdnj6Wn(Rg}eiMB]U?Y01:U(R/Xp]..+SR');
define('SECURE_AUTH_KEY',  'ax;S`gzW^=QW.ot@@}dKsfU5@@d0Za17F(xrm4H-/+y&uzM%]I;wmCJJEDRFi}`1');
define('LOGGED_IN_KEY',    ';ri:pwm{(d&`*q3|El:pW[aGXDvdq5jK5w&ofPJCg.%$k~Zf.q4[^ BFa%]^+A6c');
define('NONCE_KEY',        'HwsnQmB!$g^H&!&t]an-oiq6:W=;|[`|u7>LGn%_sF_1qPVE(%xmyy@}`py Y3&{');
define('AUTH_SALT',        'R~u`!8Vn2Gx6~O;`;;_[>m<;Qmi7Gs5? xz&8>;BV@7{UBNbz?Hbq}uyU!y$7C3W');
define('SECURE_AUTH_SALT', 'sMe-9T`Sr/et u~b=PgM`fZBR+-fL6WJ%`,?p;g*QG<yj@yE1y,!wKar1i?S5H)b');
define('LOGGED_IN_SALT',   '}tez qAry_$$z[Bj/5tA8G|K~$%X|RUxAK82e,6NSK#`./P}j=.WLMQ^hWjc}/RY');
define('NONCE_SALT',       'S-%mHG6b>g;Nss58Z+bF3h1.,VwRhz+mlvMinF%xP0!rwGKqL%^%@D_ 8YHAqMwP');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
