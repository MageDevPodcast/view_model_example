<?php
declare(strict_types=1);

namespace ExampleOld\ModuleThree\Block;

use Magento\Framework\View\Element\Template\Context;
use ExampleOld\ModuleTwo\Block\HomeTwo;

class HomeThree extends HomeTwo
{
    /** @var array */
    private $exampleNewParam;

    /** @var array */
    private $anotherExampleParam;

    /** @var array */
    private $yetAnotherExampleParam;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $exampleNewParam
     * @param array $anotherExampleParam
     * @param array $yetAnotherExampleParam
     * @param array $data
     */
    public function __construct(
        Context $context,
        $exampleNewParam = [],
        $anotherExampleParam = [],
        $yetAnotherExampleParam = [],
        array $data = []
    ) {
        $this->exampleNewParam = $exampleNewParam;
        $this->anotherExampleParam = $anotherExampleParam;
        $this->yetAnotherExampleParam = $yetAnotherExampleParam;
        parent::__construct($context, $exampleNewParam, $anotherExampleParam, $data);
    }

    /**
     * Returns a text value
     *
     * @return string
     */
    public function getText(): string
    {
        return parent::getText() . ' | Old block class three';
    }
}
