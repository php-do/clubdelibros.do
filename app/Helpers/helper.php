<?php 

if( ! function_exists('is_connection_defined')) {

    /**
     * Was Connection defined in environment
     *
     * @return boolean
     */
    function is_connection_defined()
    {
        if(env('DB_CONNECTION')){
            return true;
        }

        return false;
    }
}

if( ! function_exists('table_separator')) {

    /**
     * Define  which will separate the tables in your schema or module
     *
     * @return string
     * @throws Exception
     */
    function table_separator()
    {
        if( is_connection_defined()){
            return (env('DB_CONNECTION') == 'pgsql')? '.':'_';
        }

        throw new \Exception('Connection was not defined in environment.');
    }
}
