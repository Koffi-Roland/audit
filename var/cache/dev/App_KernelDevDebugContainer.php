<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDWI5sRK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDWI5sRK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDWI5sRK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDWI5sRK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDWI5sRK\App_KernelDevDebugContainer([
    'container.build_hash' => 'DWI5sRK',
    'container.build_id' => '311d4428',
    'container.build_time' => 1581180703,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDWI5sRK');