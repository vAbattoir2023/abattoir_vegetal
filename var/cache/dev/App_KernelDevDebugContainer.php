<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTQE1Pht\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTQE1Pht/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTQE1Pht.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTQE1Pht\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTQE1Pht\App_KernelDevDebugContainer([
    'container.build_hash' => 'TQE1Pht',
    'container.build_id' => 'd7943937',
    'container.build_time' => 1691688113,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTQE1Pht');
