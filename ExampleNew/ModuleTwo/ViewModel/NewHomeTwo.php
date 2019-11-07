<?php
declare(strict_types=1);

namespace ExampleNew\ModuleTwo\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class NewHomeTwo implements ArgumentInterface
{
    /**
     * Returns hello world text
     *
     * @return string
     */
    public function getText(): string
    {
        return 'New view model two';
    }
}