<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOaQddxl\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOaQddxl/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOaQddxl.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOaQddxl\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOaQddxl\App_KernelDevDebugContainer([
    'container.build_hash' => 'OaQddxl',
    'container.build_id' => '1df55ad9',
    'container.build_time' => 1689941243,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOaQddxl');
