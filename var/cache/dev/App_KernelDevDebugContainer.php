<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEvUXK2s\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEvUXK2s/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEvUXK2s.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEvUXK2s\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEvUXK2s\App_KernelDevDebugContainer([
    'container.build_hash' => 'EvUXK2s',
    'container.build_id' => 'b621bbba',
    'container.build_time' => 1685685393,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEvUXK2s');
