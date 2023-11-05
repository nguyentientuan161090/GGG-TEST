<?php

class Order {

    /**
     * @var OrderItem[]
     */
    private $items = [];

    /**
     * Add product item to order
     *
     * @param OrderItem $item
     * @return $this
     */
    function addItems(OrderItem $item) {
        $this->items[] = $item;
        return $this;
    }

    /**
     * Get gross price of an order
     *
     * @return int
     */
    function getGrossPrice() {
        $grossPrice = 0;
        foreach ($this->items as $item) {
            $grossPrice += $item->getItemPrice();
        }
        return $grossPrice;
    }

    /**
     * Print an order
     *
     */
    function printOrder() {
        echo '<b>Amazon Shipping Service</b></br></br>';
        echo '<table border=\'1\'><tr>';
        echo '<th>Type</th>'.
            '<th>Weight (m)</th>'.
            '<th>Width (m)</th>'.
            '<th>Height (m)</th>'.
            '<th>Depth (m)</th>'.
            '<th>Dimension (m3)</th>'.
            '<th>Amazon Price ($)</th>'.
            '<th>Fee By Weight ($)</th>'.
            '<th>Fee By Dimension ($)</th>'.
            '<th>Fee By Type ($)</th>'.
            '<th>Item Price ($)</th>';
        echo '</tr>';
        foreach ($this->items as $item) {
            echo '<tr>';
            echo '<td>' . $item->getType(). ' </td>'.
                '<td>' . number_format($item->getWeight()). ' </td>'.
                '<td>' . number_format($item->getWidth()). '</td>'.
                '<td>' . number_format($item->getHeight()). '</td>'.
                '<td>' . number_format($item->getDepth()). '</td>'.
                '<td>' . number_format($item->getDimension()). '</td>'.
                '<td>' . number_format($item->getAmazonPrice()) . '</td>'.
                '<td>' . number_format($item->getFeeByWeight()) . '</td>'.
                '<td>' . number_format($item->getFeeByDimension()) . '</td>'.
                '<td>' . number_format($item->getFeeByType()) . '</td>'.
                '<td>' . number_format($item->getItemPrice()). '</td>';
            echo '</tr>';
        }
        echo '</table>';
        
        $grossPrice = $this->getGrossPrice();
        echo '</br><b>Gross price of an order: ' . number_format($grossPrice) . ' $</b>';
    }
}