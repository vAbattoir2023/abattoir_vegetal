<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQisxPdg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQisxPdg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQisxPdg.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQisxPdg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQisxPdg\App_KernelDevDebugContainer([
    'container.build_hash' => 'QisxPdg',
    'container.build_id' => 'dfba1028',
    'container.build_time' => 1689953343,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQisxPdg');
