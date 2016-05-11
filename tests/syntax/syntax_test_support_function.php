// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

array_merge(array(), array());
//  ^ support.function.array
\array_merge(array(), array());
// <- punctuation.separator.inheritance
//  ^ support.function.array

class_exists('classname', false);
//  ^ support.function.classobj
\class_exists('classname', false);
// <- punctuation.separator.inheritance
//  ^ support.function.classobj

mysqli_info($link)
// ^ support.function.mysqli
\mysqli_info($link)
// <- punctuation.separator.inheritance
// ^ support.function.mysqli

password_get_info('hash')
// ^ support.function.password
\password_get_info('hash')
// <- punctuation.separator.inheritance
// ^ support.function.password

iterator_to_array(new ArrayIterator(array('recipe'=>'pancakes', 'egg', 'milk', 'flour')), true);
// ^ support.function.php_spl
\iterator_to_array(new ArrayIterator(array('recipe'=>'pancakes', 'egg', 'milk', 'flour')), true);
// <- punctuation.separator.inheritance
// ^ support.function.php_spl

/**
 * Various extensions
 */

// Zend Opcache
opcache_get_status();
// ^ support.function.opcache

// PDO
pdo_drivers();
// ^ support.function.pdo

// XDebug
xdebug_get_stack_depth();
// ^ support.function.xdebug
xdebug_get_function_stack();
// ^ support.function.xdebug
xdebug_get_formatted_function_stack();
// ^ support.function.xdebug
xdebug_print_function_stack();
// ^ support.function.xdebug
xdebug_get_declared_vars();
// ^ support.function.xdebug
xdebug_call_class();
// ^ support.function.xdebug
xdebug_call_function();
// ^ support.function.xdebug
xdebug_call_file();
// ^ support.function.xdebug
xdebug_call_line();
// ^ support.function.xdebug
xdebug_var_dump();
// ^ support.function.xdebug
xdebug_debug_zval();
// ^ support.function.xdebug
xdebug_debug_zval_stdout();
// ^ support.function.xdebug
xdebug_enable();
// ^ support.function.xdebug
xdebug_disable();
// ^ support.function.xdebug
xdebug_is_enabled();
// ^ support.function.xdebug
xdebug_break();
// ^ support.function.xdebug
xdebug_start_trace();
// ^ support.function.xdebug
xdebug_stop_trace();
// ^ support.function.xdebug
xdebug_get_tracefile_name();
// ^ support.function.xdebug
xdebug_get_profiler_filename();
// ^ support.function.xdebug
xdebug_dump_aggr_profiling_data();
// ^ support.function.xdebug
xdebug_clear_aggr_profiling_data();
// ^ support.function.xdebug
xdebug_memory_usage();
// ^ support.function.xdebug
xdebug_peak_memory_usage();
// ^ support.function.xdebug
xdebug_time_index();
// ^ support.function.xdebug
xdebug_start_error_collection();
// ^ support.function.xdebug
xdebug_stop_error_collection();
// ^ support.function.xdebug
xdebug_get_collected_errors();
// ^ support.function.xdebug
xdebug_start_function_monitor();
// ^ support.function.xdebug
xdebug_stop_function_monitor();
// ^ support.function.xdebug
xdebug_get_monitored_functions();
// ^ support.function.xdebug
xdebug_start_code_coverage();
// ^ support.function.xdebug
xdebug_stop_code_coverage();
// ^ support.function.xdebug
xdebug_get_code_coverage();
// ^ support.function.xdebug
xdebug_code_coverage_started();
// ^ support.function.xdebug
xdebug_get_function_count();
// ^ support.function.xdebug
xdebug_dump_superglobals();
// ^ support.function.xdebug
xdebug_get_headers();
// ^ support.function.xdebug

// Semaphore
msg_get_queue();
// ^ support.function.sem
msg_send();
// ^ support.function.sem
msg_receive();
// ^ support.function.sem
msg_remove_queue();
// ^ support.function.sem
msg_stat_queue();
// ^ support.function.sem
msg_set_queue();
// ^ support.function.sem
msg_queue_exists();
// ^ support.function.sem
sem_get();
// ^ support.function.sem
sem_acquire();
// ^ support.function.sem
sem_release();
// ^ support.function.sem
sem_remove();
// ^ support.function.sem
shm_attach();
// ^ support.function.sem
shm_remove();
// ^ support.function.sem
shm_detach();
// ^ support.function.sem
shm_put_var();
// ^ support.function.sem
shm_has_var();
// ^ support.function.sem
shm_get_var();
// ^ support.function.sem
shm_remove_var();
// ^ support.function.sem

// GD/Image
gd_info();
// ^ support.function.image
imagearc();
// ^ support.function.image
imageellipse();
// ^ support.function.image
imagechar();
// ^ support.function.image
imagecharup();
// ^ support.function.image
imagecolorat();
// ^ support.function.image
imagecolorallocate();
// ^ support.function.image
imagepalettecopy();
// ^ support.function.image
imagecreatefromstring();
// ^ support.function.image
imagecolorclosest();
// ^ support.function.image
imagecolorclosesthwb();
// ^ support.function.image
imagecolordeallocate();
// ^ support.function.image
imagecolorresolve();
// ^ support.function.image
imagecolorexact();
// ^ support.function.image
imagecolorset();
// ^ support.function.image
imagecolortransparent();
// ^ support.function.image
imagecolorstotal();
// ^ support.function.image
imagecolorsforindex();
// ^ support.function.image
imagecopy();
// ^ support.function.image
imagecopymerge();
// ^ support.function.image
imagecopymergegray();
// ^ support.function.image
imagecopyresized();
// ^ support.function.image
imagecreate();
// ^ support.function.image
imagecreatetruecolor();
// ^ support.function.image
imageistruecolor();
// ^ support.function.image
imagetruecolortopalette();
// ^ support.function.image
imagepalettetotruecolor();
// ^ support.function.image
imagesetthickness();
// ^ support.function.image
imagefilledarc();
// ^ support.function.image
imagefilledellipse();
// ^ support.function.image
imagealphablending();
// ^ support.function.image
imagesavealpha();
// ^ support.function.image
imagecolorallocatealpha();
// ^ support.function.image
imagecolorresolvealpha();
// ^ support.function.image
imagecolorclosestalpha();
// ^ support.function.image
imagecolorexactalpha();
// ^ support.function.image
imagecopyresampled();
// ^ support.function.image
imagerotate();
// ^ support.function.image
imageflip();
// ^ support.function.image
imageantialias();
// ^ support.function.image
imagecrop();
// ^ support.function.image
imagecropauto();
// ^ support.function.image
imagescale();
// ^ support.function.image
imageaffine();
// ^ support.function.image
imageaffinematrixconcat();
// ^ support.function.image
imageaffinematrixget();
// ^ support.function.image
imagesetinterpolation();
// ^ support.function.image
imagesettile();
// ^ support.function.image
imagesetbrush();
// ^ support.function.image
imagesetstyle();
// ^ support.function.image
imagecreatefrompng();
// ^ support.function.image
imagecreatefromgif();
// ^ support.function.image
imagecreatefromjpeg();
// ^ support.function.image
imagecreatefromwbmp();
// ^ support.function.image
imagecreatefromxbm();
// ^ support.function.image
imagecreatefromgd();
// ^ support.function.image
imagecreatefromgd2();
// ^ support.function.image
imagecreatefromgd2part();
// ^ support.function.image
imagepng();
// ^ support.function.image
imagegif();
// ^ support.function.image
imagejpeg();
// ^ support.function.image
imagewbmp();
// ^ support.function.image
imagegd();
// ^ support.function.image
imagegd2();
// ^ support.function.image
imagedestroy();
// ^ support.function.image
imagegammacorrect();
// ^ support.function.image
imagefill();
// ^ support.function.image
imagefilledpolygon();
// ^ support.function.image
imagefilledrectangle();
// ^ support.function.image
imagefilltoborder();
// ^ support.function.image
imagefontwidth();
// ^ support.function.image
imagefontheight();
// ^ support.function.image
imageinterlace();
// ^ support.function.image
imageline();
// ^ support.function.image
imageloadfont();
// ^ support.function.image
imagepolygon();
// ^ support.function.image
imagerectangle();
// ^ support.function.image
imagesetpixel();
// ^ support.function.image
imagestring();
// ^ support.function.image
imagestringup();
// ^ support.function.image
imagesx();
// ^ support.function.image
imagesy();
// ^ support.function.image
imagedashedline();
// ^ support.function.image
imagetypes();
// ^ support.function.image
jpeg2wbmp();
// ^ support.function.image
png2wbmp();
// ^ support.function.image
image2wbmp();
// ^ support.function.image
imagelayereffect();
// ^ support.function.image
imagexbm();
// ^ support.function.image
imagecolormatch();
// ^ support.function.image
imagefilter();
// ^ support.function.image
imageconvolution();
// ^ support.function.image

/**
 * Removed Extensions and SAPIs in PHP 7.0.0
 */

ereg_replace(); // Removed in PHP 7.0.0
// ^ -support.function
mysql_connect(); // Removed in PHP 7.0.0
// ^ -support.function
mssql_connect(); // Removed in PHP 7.0.0
// ^ -support.function
sybase_connect() // Removed in PHP 7.0.0
// ^ -support.function

/**
 * Functions added in PHP 7.0.0
 */

preg_replace_callback_array() // PCRE Added PHP 7.0.0
// ^ support.function.php_pcre

posix_setrlimit() // POSIX Added PHP 7.0.0
// ^ support.function.posix

inflate_add() // Zlib Compression Added PHP 7.0.0
// ^ support.function.zlib
deflate_add() // Zlib Compression Added PHP 7.0.0
// ^ support.function.zlib
inflate_init() // Zlib Compression Added PHP 7.0.0
// ^ support.function.zlib
deflate_init() // Zlib Compression Added PHP 7.0.0
// ^ support.function.zlib
