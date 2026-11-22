<?php
/**
 * KameraPH API configuration.
 * Every value can be overridden with an environment variable.
 */

return [
    // Same defaults as config/database.php (XAMPP)
    'db_host' => getenv('KAMERAPH_DB_HOST') ?: 'localhost',
    'db_user' => getenv('KAMERAPH_DB_USER') ?: 'root',
    'db_pass' => getenv('KAMERAPH_DB_PASS') !== false ? getenv('KAMERAPH_DB_PASS') : '',
    'db_name' => getenv('KAMERAPH_DB_NAME') ?: 'inventory',
    'db_port' => (int)(getenv('KAMERAPH_DB_PORT') ?: 3306),

    // API key. Leave '' to keep the API open (fine for local development).
    // When set, clients must send:  X-API-Key: <key>   (or  Authorization: Bearer <key>)
    'api_key' => getenv('KAMERAPH_API_KEY') !== false ? getenv('KAMERAPH_API_KEY') : '',

    // true  = the key is required for every request
    // false = the key is only required for POST / PUT / PATCH / DELETE
    'key_required_for_reads' => false,

    // Allowed CORS origin ('*' = any). Set to your frontend URL in production.
    'cors_origin' => getenv('KAMERAPH_CORS_ORIGIN') ?: '*',

    'timezone' => getenv('KAMERAPH_TZ') ?: 'Asia/Manila',

    // Show raw exception messages in 500 responses (development only)
    'debug' => getenv('KAMERAPH_DEBUG') === '1',

    'default_limit' => 25,
    'max_limit'     => 100,
];
