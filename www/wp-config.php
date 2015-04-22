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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'wordpress');

/** Пароль к базе данных MySQL */


define('DB_PASSWORD', '8P<[Q[=p^rL:,7V');

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
define('AUTH_KEY',         'E#LfiL}`9H^;z;[y-WSK!h4]*rTSy3^l$Qp&9@ZB_MkYl:1b~l?t.Zy.<JOtk--2');
define('SECURE_AUTH_KEY',  'b.~fIEsub9MR-dq -$F2QZb.PmLAPKWj T1}7R<#@_};00L-4q.%7G_7U<rW)$GU');
define('LOGGED_IN_KEY',    'OrS8T}2.2l.JzklCQ+~DWB9Q)Fc:CMrm!Y,evv>Kde>f{&BP*KpgwH]A ]GP<8yP');
define('NONCE_KEY',        'd$|53f7KD___~Atde8vBvN1EAe%JD#%@@|dB$@wQ9U]9P&UW*3AP)Cp?jh^prA8y');
define('AUTH_SALT',        'l%! wYw 8zYm#{P#gz^QZkh*+_ue/V.&M|:LaLhJRxs:p~NeYBU#]yS_5w5rxd%a');
define('SECURE_AUTH_SALT', 'sg^_H=]Rb5!{SuVY[/cG 6~};juCezQ/:O>}I#pWcau].p?Cw* cH<PWtB}<rvjD');
define('LOGGED_IN_SALT',   'o*AHNINg4&S.Ec?Buu:REt0+8wldM8tMo3pA_-Hfb1(Y^hzxAQRT4g,PSx#M.xA8');
define('NONCE_SALT',       'jGxlE=?GURDrR->^l/Y(C$~fEQ> [g7}Y*8H9i3kjxA&dnFMTXG9Uoc6%fc4^zF@');

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

/* Для загрузки плагинов напрямую */
define('FS_METHOD', 'direct');

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
