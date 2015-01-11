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

namespace MotReports\Service;

/**
 * MotReports\Service\Arrears
 *
 * @package MotReports\Service
 */
class Arrears
{
    public function lessThan($days)
    {
        return [
            'title' => strtoupper('Arrears from 0 to 30 days'),
            'name' => 'datatables9',
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm'],
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q','r','s','t','u','v','w','x','y','z','aa','ab','ac','ad'],
            'data'  => [
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30']
            ]
        ];
    }
    
    public function between($from, $to)
    {
        if ($from == 31 && $to == 60)
        return [
            'title' => strtoupper('Arrears from 31 to 60 days'),
            'name' => 'datatables9-2',
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm'],
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q','r','s','t','u','v','w','x','y','z','aa','ab','ac','ad'],
            'data'  => [
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30']
            ]
        ];
        
        if ($from == 61 && $to == 90)
        return [
            'title' => strtoupper('Arrears from 61 to 90 days'),
            'name' => 'datatables9-3',
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm'],
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q','r','s','t','u','v','w','x','y','z','aa','ab','ac','ad'],
            'data'  => [
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30']
            ]
        ];
    }
    
    public function overThan($days)
    {
        return [
            'title' => strtoupper('Arrears above 90 days'),
            'name' => 'datatables10',
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q','r','s','t','u','v','w','x','y'],
            'data'  => [
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25']
            ]
        ];
    }
}
