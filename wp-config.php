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
define( 'DB_NAME', 'wppsdbootstrap4' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' b-SzS04x1H_yeg9ICD9.--$]RNWw/6>i6KNA&{wEb/&&`Y=(TsXf{3q~s7xKOO(' );
define( 'SECURE_AUTH_KEY',  '-POs4yJ=+9~.@Qy3u|q.H1b^C #=$+:JgCbvqg^1oIxW_G[2KyNm-%2pR^h?`GiA' );
define( 'LOGGED_IN_KEY',    '_o7v2m>?:M{T`~K-fi!]9O^2&_e@(W0>%*&O0<XR<l=E Fy6%)Zav`|7eiWvI:|W' );
define( 'NONCE_KEY',        'mYy@,gS)bDc>}#xVx3* QF1MM^ymvN|z#~4?`=CtxjMp`u`CF0j0Hsj;5[7tmr,~' );
define( 'AUTH_SALT',        '71J-3@sRg0d6Z/KJ.B:3zw1$EN?9lY;r:DeA,W6KESs)yq{7Y.FMP@Qt]ZjdAJ&3' );
define( 'SECURE_AUTH_SALT', 'dB[2Z[Sr49=$x5E,,sF>;)AGduJ=_3%78Fk=$BW&/w`13)i8sPy<(gX[<yaGus1]' );
define( 'LOGGED_IN_SALT',   'f??& nyO3G|;(ff%g;xZtCnVjh}&c};S7aCcNx6Gc>x>*%cYONg4]k=[QL0E<8/V' );
define( 'NONCE_SALT',       '+t^gbfO4k(?Oi.07RQSl@v/#]%t~B^S750ldyUJY6Sz=5?gzlxHe$]&1M)HK(/b2' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
