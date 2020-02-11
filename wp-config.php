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
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'wordpress' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '123456a@' );

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
define( 'AUTH_KEY',         'R/z[Ix6dD.,3KdtN!~,Rk::<slUISij;bbYdQRDeUchenIVCIx6:mHwmzl!VH.bp' );
define( 'SECURE_AUTH_KEY',  'h2.wns{=R{=W`>wl%_gcKsPKY+t*2nh8z[(M<b|t]$zQYiY%]mh $xfpBgsD(9rB' );
define( 'LOGGED_IN_KEY',    ';3Io+mcRPy;_k_hi,Coa>/F*{#K$lsKX~6NoAZoCZ&`Ac;~PaGL30>BGOc&RhDZa' );
define( 'NONCE_KEY',        '< vdh(dU1teW0+]YN`Y]?|txh5|sUiCUk^MAW-.(K8]C/Y|Gy%g&!68e*G6Yi>=d' );
define( 'AUTH_SALT',        'X,A7P`X}g|T4>C,KO4 0gtcZcjMf|jQ>T-`H@3?$M!F}{SDs-%Dm8/mp+Cy/dMQE' );
define( 'SECURE_AUTH_SALT', 'J^1<5DMX_*1YpZ]Jxn@@D:C(<!6]W`!]6o`xuW@Se9:8G2u)u0~,Y1>62()1vigg' );
define( 'LOGGED_IN_SALT',   'ucyknYDL4?OqXrsuz}@EJl,X$*VABi5?pu+Aw:NI;VZBTdIZ _)K-oWkKcfAbD.H' );
define( 'NONCE_SALT',       '@ iuI):UgqVm)}o~6yL?]%~mgoym<AcY,%-{M{ifWZLn.KC^~Syo/-HyKt<$=5F!' );

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
