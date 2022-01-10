<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'dz' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!AD%5%J:HwsV]!6dA,Q}Q1rC)qb4zcAGk%{ba `n!9sT.$tF.UA!6pvoPRapo% h' );
define( 'SECURE_AUTH_KEY',  '&AXu_=(J>3 =m/x,A#Bmc;bkuCjL*<(A[GHG/YVkR?LNwv%TGC#Did_N5ep!*UFK' );
define( 'LOGGED_IN_KEY',    'pa3cY*}H<p82%{{Zyv2rM58B]{;trXkcH9ze(eW^~^LfwE)b%&(1|G!$v]C^<9;]' );
define( 'NONCE_KEY',        'SVo>**F/zfmTtP$v*l*E>17}P3Qr..SfM5U+]pJAhWvut,`+GOd6xGF O^KLwU|P' );
define( 'AUTH_SALT',        'tCa;E<I8W*.3nu,Nu4Wxedwx]@=WGD]#Bj,MXz:D4d5?=do%;%rjum>]gV*Qc`fD' );
define( 'SECURE_AUTH_SALT', 'ndHe.H8uus3g^Ofq|W@R:.q?_![s=^TKF5S%_z-`-n*:+FY=*(*9Z`;q4X17}1%l' );
define( 'LOGGED_IN_SALT',   'V0afE9}S-Qs;*[H?GAXD[X$aL&.G_sbNwwf:~l#4 +r,R+6q,BYc(SyQtLtr7H%`' );
define( 'NONCE_SALT',       'WV.Evop{<sVMWNxcr3cU--eR+0#1U5&;I+z4j.kZL6V9=6]^el_)UKTfZN1x]fZ;' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
