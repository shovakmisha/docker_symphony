<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXEkxTWq\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXEkxTWq/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXEkxTWq.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXEkxTWq\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXEkxTWq\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XEkxTWq',
    'container.build_id' => 'c8713399',
    'container.build_time' => 1710279851,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXEkxTWq');
