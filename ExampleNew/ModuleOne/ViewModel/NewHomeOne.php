<?php
declare(strict_types=1);

namespace ExampleNew\ModuleOne\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class NewHomeOne implements ArgumentInterface
{
    /**
     * Returns hello world text
     *
     * @return string
     */
    public function getText(): string
    {
        return 'New view model one';
    }
}