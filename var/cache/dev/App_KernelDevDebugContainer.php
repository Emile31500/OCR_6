<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZsxlql0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZsxlql0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZsxlql0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZsxlql0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZsxlql0\App_KernelDevDebugContainer([
    'container.build_hash' => 'Zsxlql0',
    'container.build_id' => '15620100',
    'container.build_time' => 1679309272,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZsxlql0');
