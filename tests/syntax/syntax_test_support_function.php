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
