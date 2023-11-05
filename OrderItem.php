<?php

class OrderItem extends Product {

    const WEIGHT_COEFFICIENT = 11;
    const DIMENSION_COEFFICIENT = 11;
    const FEE_BY_PRODUCT_TYPE = [
        'phone' => 200,
        'car' => 1000,
        'diamond' => 5000,
    ];

    /**
     * Get fee by product weight
     *
     * @return int
     */
    function getFeeByWeight() {
        $feeByWeight = $this->getWeight() * self::WEIGHT_COEFFICIENT;
        return $feeByWeight;
    }

    /**
     * Get fee by product dimension
     *
     * @return int
     */
    function getFeeByDimension() {
        $feeByDimension = $this->getDimension() * self::WEIGHT_COEFFICIENT;
        return $feeByDimension;
    }

    /**
     * Get fee by product type
     *
     * @return int
     */
    function getFeeByType() {
        $type = $this->getType();
        return self::FEE_BY_PRODUCT_TYPE[$type];
    }

    /**
     * Get shipping fee of a product item
     *
     * @return int
     */
    function getShippingFee() {
        $fees = [
            $this->getFeeByWeight(),
            $this->getFeeByDimension(),
            $this->getFeeByType()
        ];
        $shippingFee = max($fees);
        return $shippingFee;
    }

    /**
     * Get product item price
     *
     * @return int
     */
    function getItemPrice() {
        $itemPrice = $this->getAmazonPrice() + $this->getShippingFee();
        return $itemPrice;
    }
}