<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'wordpress');

/** Username của database */
define('DB_USER', 'wordpress');

/** Mật khẩu của database */
define('DB_PASSWORD', '12345');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kZ]Vi3}8ZDq$e@+h1|F!GQ0/JGK]+{-=|^H@ow%* Gl01$`#@.qcYL{CS1}mK+_*');
define('SECURE_AUTH_KEY',  'q,C}=/8s?a)$$SSJs-hO#Foy<qX6}p<Yj5).q21HJZ0Ui[/jd7(<}~9@-{>^?_GB');
define('LOGGED_IN_KEY',    '^KImU5PXZx_m*!ri8CgK<&WTBELN*66^e#sZCWpIou/G0zpyZbC)1fO!yo+72~&)');
define('NONCE_KEY',        '^tp2jm46IHAHe&uZi43zO.}lj6r?&*];}qUhfg)~sA>o%: V:]2IpXHX$$6~B6~o');
define('AUTH_SALT',        '~|$+HsB;TJ8`s#:Q =UJml1$IH[Fpu5 <3EN9HJOx&2wk!&O9&(Lpq$,]:Pe9`Y0');
define('SECURE_AUTH_SALT', '6DC4!~[{F36z^|H[BeHW/j{LwC~-zyle0>|-ieWmA(V8*^RC2w1X]VG?jwQ$pIyY');
define('LOGGED_IN_SALT',   't_w<e]CY;JQz42RHCaz>TfmJ*C>K#Zp%/q*tH08l,00_cbvvsH4N7*_W1h1o=}bk');
define('NONCE_SALT',       'F`r1$^Io_%>P6LY,sF1v>Jh~.YZ5[*H07xc{f+jW#/heM=8w=`M&UD`ySCW2 !Dy');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
