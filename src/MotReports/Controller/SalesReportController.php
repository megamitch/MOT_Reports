<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MotReports\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * MotReports\Controller\SalesReportController
 * 
 * @package MotReports\Controller
 */
class SalesReportController extends AbstractActionController
{
    public function creditOfficerStatusAction()
    {
        $clientInGrace = [
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
        
        $clientInArrears = [
            'title' => strtoupper('clients in arrears'),
            'name' => 'datatables2',
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm'],
            'data'  => [
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13']
            ]
        ];
        
        $activeClients = [
            'title' => strtoupper('active/good standing clients'),
            'name' => 'datatables3',
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'],
            'data'  => [
                ['1','2', '3', '4', '5', '6', '7', '8','9'],
                ['1','2', '3', '4', '5', '6', '7', '8','9'],
                ['1','2', '3', '4', '5', '6', '7', '8','9'],
                ['1','2', '3', '4', '5', '6', '7', '8','9']
            ]
        ];
        
        $futureClients = [
            'title' => strtoupper('future clients'),
            'name' => 'datatables4',
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h'],
            'data'  => [
                ['1','2', '3', '4', '5', '6', '7', '8'],
                ['1','2', '3', '4', '5', '6', '7', '8'],
                ['1','2', '3', '4', '5', '6', '7', '8']
            ]
        ];
        
        return new ViewModel(['result' => [$clientInGrace, $clientInArrears, $activeClients, $futureClients]]);
    }
    
    public function clientTotalDueAction()
    {
        
    }
    
    public function insuranceFeeAction()
    {
        
    }
    
    public function creditOfficerSalesKpiACtion()
    {
        
    }
}
