<?php return array(
    'root' => array(
        'name' => 'splash/wordpress',
        'pretty_version' => '2.0.6',
        'version' => '2.0.6.0',
        'reference' => '39b23ff857559815ebb6c482c61b84728fe4c122',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'splash/phpcore' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'fecb3893316a649dc5ebd2f516f69977f1ff052f',
            'type' => 'package',
            'install_path' => __DIR__ . '/../splash/phpcore',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'splash/wordpress' => array(
            'pretty_version' => '2.0.6',
            'version' => '2.0.6.0',
            'reference' => '39b23ff857559815ebb6c482c61b84728fe4c122',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
