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
define('DB_NAME', 'divosvit');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ',QmGghL/OmkMD;Z;A3(^(y,ia3B.tb1UAZSX:NH84Tgjm_IG0r6Z>4#LzArL*.}h');
define('SECURE_AUTH_KEY',  '@dqPRN;UBQz-f]79M*rx~ qLte[I65e;2^?/yU:<D/oZb7b4HJSGJaba<r:GakuJ');
define('LOGGED_IN_KEY',    'GGuVkqr(a@W+]eE}c&rNm7&vF^9dsZ]1EYbz$5hQ&`cv}ojGl,>w*.&p{~RE8oie');
define('NONCE_KEY',        '8QUbDu`66^x99P$$/#qRH/-Y8Fw  *-]fzU9~Jo1wa*|Xh (_U_AruL3W8C@[rPf');
define('AUTH_SALT',        'Pke*2nK(;XQM$i#sVYO(xA}.Q_~s-lonUhQ0^3Z@+iTwH~fbQxW*a;sdh<7TXUR*');
define('SECURE_AUTH_SALT', 'ui;fsyfgmzE^eb!)NY>W4t:Po/;<HnLLwld(v3ssJA2 ;CjPH^-*S?v9y` tQD.<');
define('LOGGED_IN_SALT',   'BH,<j?YX`}t-@1il;Z+Vc x,n$46#^7K6`[5N/;<!?-^u.>hkDL6cQt*O<2GHLFs');
define('NONCE_SALT',       'jypG -{PXu;0l:.gJGmLZY),E4pW!!!vsKU%^tMbgTpgi!^k0i07b:_mnf:NV5?%');

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
