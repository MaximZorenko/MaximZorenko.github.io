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
define( 'DB_NAME', 'maxtem' );

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
define( 'AUTH_KEY',         'beBj*(^qNg=PTM:9P]y$o0m9JM<jRD>#GT_]k}&#w7Df=@*72YM2&T:wbfq]=h[x' );
define( 'SECURE_AUTH_KEY',  '6sSR`XjJj- Q p~5>y~M^CS>lS5-1QKt~Y-@lYT9gB$vaYyk&y6o/V~P1D4$bd;%' );
define( 'LOGGED_IN_KEY',    'if)RYD~ER2H!dg]H>BU<$fD>iS9i:2klD3+u_g- %&<b1r1)+FFHA;h,Md>)Y ~J' );
define( 'NONCE_KEY',        'Y!t`I&Fde.4hX2]WHFFer?3qx;pa,+Y)(.KYZ_D.3>fUG:JRS*w&^/R|aX^o;#>r' );
define( 'AUTH_SALT',        'E1x~r>bTGv`cwbL1:edn,03p1aW4iV;AA9+(8rIsnmHB|tV7^^`X<<S+mXa3to&M' );
define( 'SECURE_AUTH_SALT', '(`[.4kA8w:;r<=FcwA;jBF(kV6`xj.fTG`|w,^Al{eyI&4}b5@2TyfxN[.[N(>!_' );
define( 'LOGGED_IN_SALT',   ')o*<(/nz6?c;HbiYEz:;TA/DVk{)nfLAh<54wTj-+tcAqbKREm$`]kN%FT,f6DiS' );
define( 'NONCE_SALT',       '#~oM|p~x7+z3R+r~>> +HCk0;M0Ul O1(jPt%2,w)Oc91(23V<Oae6p~t|`i>1Uk' );

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
