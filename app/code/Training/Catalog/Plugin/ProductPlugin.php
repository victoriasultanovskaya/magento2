<?php
namespace Training\Catalog\Plugin;

use Magento\Catalog\Model\Product as Product;
use Psr\Log\LoggerInterface as Logger;

class ProductPlugin
{

    /** @var Logger */
    protected $logger;

    public function __construct(
        Logger $logger
    )
    {
        $this->logger = $logger;
    }

    public function afterGetName(Product $subject, $result)
    {
        return '|' . $result . '|';
    }


    public function afterGetPrice(Product $subject, $result)
    {
        $this->logger->info($result);
        return $result;
    }
}