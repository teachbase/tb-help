<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'xxx');

/** Имя пользователя MySQL */
define('DB_USER', 'xxx');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'xxx');

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
define('AUTH_KEY',         'w-t/d30QcGm0JzT|7*,ZA_{?Ar;`_+TX|$uQg.Bb%|zu-A9 Z#g*|8)B!znj.k/I');
define('SECURE_AUTH_KEY',  '[(umB@E;g-~&#8e&K93|-+c(3Zrjh[[lH:R*a5--,3|m|8_Z+LK}C>WALrkm(NdY');
define('LOGGED_IN_KEY',    'qERZR/.M]o(4jme.J6#cOGn{&4Ldk1D,/2+FQFg}+p;2#NVxk!P.P:rQBF*{,,qT');
define('NONCE_KEY',        'W0u7^RJ97+hy|?Azl?Ec?Bn3KHrsji(]p|*BrmPjXrEp*?G85m<Tv,&s{,rhCT/u');
define('AUTH_SALT',        'slq/M22SaX.8T87TRqXFei~XUX@`bKBcy*7$dbV-uk_}Lp3d}lwHxi|[H4i^gY:^');
define('SECURE_AUTH_SALT', '~2=h.BZJ2,^NndsvI2OJ-b|;rL%O;{>ObZp+n(x%v=YbgLdalOj *k]+LJlHu.7i');
define('LOGGED_IN_SALT',   '&tzIMrAy|>Y)y+/N}5Z_jAQ%?xEP/Q%T6|-iJ4E>6HYU(eFL)ocK)6odK`6Zb-Q?');
define('NONCE_SALT',       'Fq&0;Yh;zEm;:Txf}$CXuK.;8K;_(aC`F42SB *fFa)q};I.af0C~K+zF]N7iP0u');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wpqna_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
