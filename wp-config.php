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
define('DB_NAME', 'tours');

/** Имя пользователя MySQL */
define('DB_USER', 'aknoci_apaki');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'zxcASDF123@19');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '5bBIE413.UKfw|bYjn(Uv0c{BB^LAxCO9JqeVqW<=i41=Z%|;/$xy+J=iv/[,CyJ');
define('SECURE_AUTH_KEY',  'cMeuW[_KOWoPqA@I>>=7SBbhYrg(Djg@<WYhNUJx7?Do?b^JQ+CsCvFfK8r~poJV');
define('LOGGED_IN_KEY',    '}%e%.h~[nn[WQz=lP|cEpahq?:])u!jHeIE7Z#j(,-{cYO#<xtm%Zk^Yok1!5M:)');
define('NONCE_KEY',        'vD^~t~-h:@`iFze1Ui+$UXz%MQiVtq{W(C:*3wCN4Y?ZuW)I?p-|6xeQI0q]1R3?');
define('AUTH_SALT',        ')%XIQm/cz-l686l~K:;+4C``#+t!(<!=Ml0|OG@[+KRJ,5Q6n^uwn<eFwI,b&O>t');
define('SECURE_AUTH_SALT', 'b/Na3}s}A/ULoOtWu]$!ZY,zxrle a!oRU((/u;OA~s*.`dsroZ7yF_AVq:k[}fa');
define('LOGGED_IN_SALT',   '{P2yY6l-cqRM_Rjnq2.6r9o!`(|PE/ d[vEJ%le6W2y9$oZ/qT~mSjk@n :9`@/8');
define('NONCE_SALT',       'MTF15xB!:*NOV+c-.s.n538-]SMW[}Odjy}/[y<q HyY796-g|xev>:.tQx]mi/ ');

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
