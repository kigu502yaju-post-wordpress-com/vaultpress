<?php return array(
    'root' => array(
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'automattic/vaultpress',
        'dev' => false,
    ),
    'versions' => array(
        'automattic/jetpack-autoloader' => array(
            'pretty_version' => '2.10.x-dev',
            'version' => '2.10.9999999.9999999-dev',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../automattic/jetpack-autoloader',
            'aliases' => array(),
            'reference' => 'e7a4ea227a37ff1810ede86fd53d652156797dae',
            'dev_requirement' => false,
        ),
        'automattic/jetpack-logo' => array(
            'pretty_version' => '1.5.x-dev',
            'version' => '1.5.9999999.9999999-dev',
            'type' => 'jetpack-library',
            'install_path' => __DIR__ . '/../automattic/jetpack-logo',
            'aliases' => array(),
            'reference' => 'e9278d42372be95ebde55e9988dfb5a3a6d577f8',
            'dev_requirement' => false,
        ),
        'automattic/vaultpress' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
    ),
);
