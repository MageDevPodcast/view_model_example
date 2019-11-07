<?php
declare(strict_types=1);

namespace ExampleOld\ModuleTwo\Block;

use Magento\Framework\View\Element\Template\Context;
use ExampleOld\ModuleOne\Block\HomeOne;

class HomeTwo extends HomeOne
{
    /** @var array */
    private $exampleNewParam;

    /** @var array */
    private $anotherExampleParam;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $exampleNewParam
     * @param array $anotherExampleParam
     * @param array $data
     */
    public function __construct(
        Context $context,
        $exampleNewParam = [],
        $anotherExampleParam = [],
        array $data = []
    ) {
        $this->exampleNewParam = $exampleNewParam;
        $this->anotherExampleParam = $anotherExampleParam;
        parent::__construct($context, $exampleNewParam, $data);
    }

    /**
     * Returns a text value
     *
     * @return string
     */
    public function getText(): string
    {
        return parent::getText() . ' | Old block class two';
    }
}
