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
define( 'DB_NAME', 'web_site_ban_hang' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'dIVQJth yA![Lf6kzYYJejS7|{}<>epw/HPx7b0Fz;(cgBy8X:oNlc,)NoP.95xP' );
define( 'SECURE_AUTH_KEY',  'OAD/)BU9285sJ3q*[Fgn_M6v];]^5Ndi6O7m5MlnZS5UCp{io_7ja(8GR.%esL;n' );
define( 'LOGGED_IN_KEY',    'mLbpB1r~xYwMh0 {b58zay`70$f0d/*__$7s0;s[^*&#yFk=|EF=T]Yfk]F/)r`F' );
define( 'NONCE_KEY',        '@9d5~u6bx=v+=Ya)aKlLw]H%U= hu5!uGd[B@=#a#o|r#@i*:GT4VQ~D-4V_MZD4' );
define( 'AUTH_SALT',        'TmoHBLMz/`z&j^5Gk9WSR-A)]UA=lL*/lR;&.(u;Rl?VQHl]X5!Q{/pw(`.hhgXD' );
define( 'SECURE_AUTH_SALT', 'V~8rpq4n7OU{rB`.<L~$N[zf9m)L$or]Jtg!):%*n^twNnVFi_IY=,!8gX:/Z]vc' );
define( 'LOGGED_IN_SALT',   'yW>89dzK_#7-K=iVUa1PE6bo_i:TqROkjp[`x <#8lxA[4,AdqGHe!B^)!P{5a-}' );
define( 'NONCE_SALT',       'kMgE|2OA%DbK*KUNFR1Ss@HK:@n^FTmSyL>D87srE&25)7Y[c(u<@@1-@]Bb,KGM' );

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
