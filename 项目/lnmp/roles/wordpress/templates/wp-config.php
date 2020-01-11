<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', '{{ wp_db_name }}' );

/** MySQL数据库用户名 */
define( 'DB_USER', '{{ wp_dp_user }}' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', '{{ wp_dp_password }}' );

/** MySQL主机 */
define( 'DB_HOST', '{{ db_host }}' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5c(9kU8i[BT-0_gRy*9a<^GX*XAN?`[[%*Y7uDl1XIPGl|&obehmQzh}LpOk&I }' );
define( 'SECURE_AUTH_KEY',  'fy$GK9Rt{7hu}WYSL8$C51V`%=yKzPMExYXrZTGbV]MS,@?.~OiO:0.hBU%tvC3g' );
define( 'LOGGED_IN_KEY',    '(5Qmx7.i>B<fJ`RSKT(go$eyzu5T`hTX$jw8Tw+Zv+s`qr]{St^O%!GmIl?=sP_H' );
define( 'NONCE_KEY',        '!}&&3sMbhQR^>U1*:J=d>=7mk .JU%-@$ /#vpY[3S4F#,kFuJ?(+!K|`S[=q[z9' );
define( 'AUTH_SALT',        'EjP9*F>B e~~lBhJ-7U>88TGHw%-yZ$0l2%JB2a+(K6w5==GFk|=<Gc8GDK(.Po|' );
define( 'SECURE_AUTH_SALT', '/SKYCVS6R7gXFxV`Weaor^i]/q?-3Y2 >/(+KN4.ceH|Zx771mRr[)01.TZH^du ' );
define( 'LOGGED_IN_SALT',   '=eF+rd)k.0oCG9pnCg;TU@VN6T6?ky`S+H$d: IB@e5Kn_Z32Rr#.D!-Sh9+h:]o' );
define( 'NONCE_SALT',       '?}x&w_DFu2F(+Bf3a~PJ-(3s|%lHkbhx,i:90`eb hZEYNL8ci<U_FfC{QjT|0Q6' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
