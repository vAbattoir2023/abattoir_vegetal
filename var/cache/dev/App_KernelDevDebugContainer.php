<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHGMEbjL\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHGMEbjL/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHGMEbjL.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHGMEbjL\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHGMEbjL\App_KernelDevDebugContainer([
    'container.build_hash' => 'HGMEbjL',
    'container.build_id' => '8833b3fb',
    'container.build_time' => 1690186130,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHGMEbjL');
