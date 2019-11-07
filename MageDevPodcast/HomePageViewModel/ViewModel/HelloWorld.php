<?php
declare(strict_types=1);

namespace MageDevPodcast\HomePageViewModel\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class HelloWorld implements ArgumentInterface
{
    /**
     * Returns hello world text
     *
     * @return string
     */
    public function getText(): string
    {
        return 'Hello world!';
    }
}