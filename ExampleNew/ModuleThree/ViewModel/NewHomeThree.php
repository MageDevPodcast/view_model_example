<?php
declare(strict_types=1);

namespace ExampleNew\ModuleThree\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class NewHomeThree implements ArgumentInterface
{
    /**
     * Returns hello world text
     *
     * @return string
     */
    public function getText(): string
    {
        return 'New view model three';
    }
}