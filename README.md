
# Wordpress Helper Debugger
Debugging functions sourced from Highrise Digital 

## Functions
Upload in the wp-content/mu-plugins/

## Functions

### pre_var_dump( $data, $label = '' )
Var dump results with Pre tags

```
@param mixed $data Data returned.
@param string $label Give a title to the dump.
@return void

```

### pre_write_log( $log )
Write errors to a log file named debug.log in wp-content.

**NOTE:** Make sure to turn on WP_DEBUG in the `confi.php` file.

```
@param mixed $log The thing you want to log.

```