<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerACXlyjG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerACXlyjG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerACXlyjG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerACXlyjG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerACXlyjG\App_KernelDevDebugContainer([
    'container.build_hash' => 'ACXlyjG',
    'container.build_id' => '5f3f0e36',
    'container.build_time' => 1685350859,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerACXlyjG');
