<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFw43Sx2\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFw43Sx2/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFw43Sx2.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFw43Sx2\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerFw43Sx2\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Fw43Sx2',
    'container.build_id' => 'a513f074',
    'container.build_time' => 1572283812,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFw43Sx2');
