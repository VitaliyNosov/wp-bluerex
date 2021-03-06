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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\OpenServer\domains\wpbootstrap4\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wp_bootstrap' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'IQ86SgAg993BHcS5' );

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
define( 'AUTH_KEY',         'w>DFFAWXB>YmOTY}^^S4N!tK%iG/1Bt?se6ahP[eEaJUNW1zls@|$-Y$Vt>50(Wn' );
define( 'SECURE_AUTH_KEY',  'VItm7Vmpp 172=c9#`:n~RKv*RxgA(M~>qUCDH[pD0V|YV_fD:KN?]Axt~NTNQ#(' );
define( 'LOGGED_IN_KEY',    'B_27C|27cLCzrcfv$,*xpVy(DJx`F=},`IzfNk7*/D{YizaI4{FshDha1[F]M3kC' );
define( 'NONCE_KEY',        '<U(By-_-yvsz2]3 O~~58Ev,5uSGP9e(i83]>Tal>7p]YD4,bn/_X<Vkd.f..lIG' );
define( 'AUTH_SALT',        '$P$}Dc)qBd`Ge_uz$T+nwfF-JJ!eT7I&[6/xbVG=Sp/KK5<)t3+7?-V29!yrDss8' );
define( 'SECURE_AUTH_SALT', 'FEm&HbuVI1{jQRMVFgF9UztU_O3I%H4e7El}E]_?=W@]3$ TtYx2BKd&iz-#{V1x' );
define( 'LOGGED_IN_SALT',   'Y@>8Yj*Uh:a^r#?!M 6)(RX3xs(6JgC$&P*3oPT,XuRic&}gL]ono4p,ZQr:BZL2' );
define( 'NONCE_SALT',       '1~M[5tF`q3Y-BCI[>,bb#f&q), 8T;zfIjWD,<3#LELK-%A4TJ-j(Pm;oD.21-mE' );

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
