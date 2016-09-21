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
define('DB_NAME', 'lizzyw');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'kAc,4_O0R{P@.],Hq`s,I&JA*_+[TUEKDj8+|q+#C)lBoX<O$(c;-NO16rZU[)Bl');
define('SECURE_AUTH_KEY',  '?^F_fSJp`w|18!|*sMY;>KAx=Oe+rB.q#K,9V!CT4/e?b-zK^IDN9QM4| |)&*qm');
define('LOGGED_IN_KEY',    '53fb)~)^(=A>Q]#@?ykp`$a?+Y=E_?#i.pbFp.abAei~{+PY^xYX]#^=`M:ZkQ&$');
define('NONCE_KEY',        '}UP`&5(6UdA@T#np`KL}ix5?58lZHEPZM=u_v.FA{Om+FWtXq2w,]?i|(r.A<VD0');
define('AUTH_SALT',        '7A+0v)ihC5_t,fZE0V_G9$+m+V+bWWW R|s@S*[R1G2N]lMRPtNR9@Q?@%7Za4iO');
define('SECURE_AUTH_SALT', '[I?_f28]U,`gL@6/+MNl3!ccO0I{c>=Q~:Z.ZQhRM1vXo^:G,T,Y,I!8NSZBF:*b');
define('LOGGED_IN_SALT',   '.:ejko84gNU~CnWo?&p[DGMV[CQP}zk/WZZ}`H$Wb^*PUg4I4(`8>KiTZZq=[/aF');
define('NONCE_SALT',       '! zZYiA|t==4D|2aebH`!9=k_y9E]t/)$*20L:{3},EWU;?Rz4|Kc41g-VsI6gP]');

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
