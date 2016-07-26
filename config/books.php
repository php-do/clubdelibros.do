<?php 

//Get table separato character
$table_separator = table_separator();

return [

    /*
    |--------------------------------------------------------------------------
    | Database Tables Name 
    |--------------------------------------------------------------------------
    |
    | This option defines the names of the tables in the database
    | Using a separator depending manager database, if the manager
    | is PostgreSQL using the separator between the schema and 
    | the table will be a point, otherwise by an underscore
    |
    */
   
    'tables' => [
        'core' => [
            'user_role'         => 'core' . $table_separator . 'user_role',
            'third'             => 'core' . $table_separator . 'third',
            'status'            => 'core' . $table_separator . 'status',
            'phone_type'        => 'core' . $table_separator . 'phone_type',
            'country'           => 'core' . $table_separator . 'country',
            'province'          => 'core' . $table_separator . 'province',
            'city'              => 'core' . $table_separator . 'city',
            'sector'            => 'core' . $table_separator . 'sector',
            'language'          => 'core' . $table_separator . 'language',
            'edition'           => 'core' . $table_separator . 'edition',
            'genre'             => 'core' . $table_separator . 'genre',
            'password_reset'    => 'core' . $table_separator . 'password_reset',
            'address'           => 'core' . $table_separator . 'address',
            'phone'             => 'core' . $table_separator . 'phone',
            'publisher'         => 'core' . $table_separator . 'publisher',
            'author'            => 'core' . $table_separator . 'author',
            'users'             => 'core' . $table_separator . 'users',
        ],
        'library' => [
            'books'             => 'library' . $table_separator . 'book',
            'books_language'    => 'library' . $table_separator . 'book_language',
            'books_edition'     => 'library' . $table_separator . 'book_edition',
            'books_status'      => 'library' . $table_separator . 'book_status',
            'books_author'      => 'library' . $table_separator . 'book_author',
            'books_review'      => 'library' . $table_separator . 'book_review',
            'books_comment'     => 'library' . $table_separator . 'book_comment',
            'books_owner'       => 'library' . $table_separator . 'book_owner',
            'books_genre'       => 'library' . $table_separator . 'book_genre',
        ]
    ]
];