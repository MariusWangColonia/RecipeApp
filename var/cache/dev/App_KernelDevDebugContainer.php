<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWdDPoWO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWdDPoWO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWdDPoWO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWdDPoWO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWdDPoWO\App_KernelDevDebugContainer([
    'container.build_hash' => 'WdDPoWO',
    'container.build_id' => '04dd23d6',
    'container.build_time' => 1671023562,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWdDPoWO');
