<?php

/**
 * The MIT License
 *
 * Copyright (c) 2012-2015, contributors of Mega Mitch Credit, Inc. software project.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace MotReports\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * MotReports\Controller\Plugin\Fee
 *
 * @package MotReports\Controller\Plugin
 */
class Fee extends AbstractPlugin
{
    public function getInsuranceFee()
    {
        return [
            'name' => 'datatables6',
             'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'],
            'data'  => [
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0']
            ]
        ];
    }
    
    public function getAppliedFee()
    {
        return [
            'title' => strtoupper('clients in grace period'),
            'name' => 'datatables1',
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'],
            'data'  => [
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0']
            ]
        ];
    }
}