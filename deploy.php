<?php
namespace Deployer;

require 'recipe/composer.php';

// Config

set('repository', 'dep init');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts


// Hooks

after('deploy:failed', 'deploy:unlock');
