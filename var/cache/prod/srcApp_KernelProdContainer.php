<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNpMFxcE\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNpMFxcE/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerNpMFxcE.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerNpMFxcE\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerNpMFxcE\srcApp_KernelProdContainer([
    'container.build_hash' => 'NpMFxcE',
    'container.build_id' => 'a9adf3af',
    'container.build_time' => 1554974375,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNpMFxcE');
