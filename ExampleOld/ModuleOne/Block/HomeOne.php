<?php
declare(strict_types=1);

namespace ExampleOld\ModuleOne\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;

class HomeOne extends Template
{
    /** @var array */
    private $exampleNewParam;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $exampleNewParam
     * @param array $data
     */
    public function __construct(
        Context $context,
        $exampleNewParam = [],
        array $data = []
    ) {
        $this->exampleNewParam = $exampleNewParam;
        parent::__construct($context, $data);
    }

    /**
     * Returns a text value
     *
     * @return string
     */
    public function getText(): string
    {
        return 'Old block class one';
    }
}
