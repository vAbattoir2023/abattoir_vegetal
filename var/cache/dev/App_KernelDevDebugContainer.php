<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5C0ecPC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5C0ecPC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5C0ecPC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5C0ecPC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5C0ecPC\App_KernelDevDebugContainer([
    'container.build_hash' => '5C0ecPC',
    'container.build_id' => '72c0e7d7',
    'container.build_time' => 1689944045,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5C0ecPC');
