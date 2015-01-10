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
    /**
     * Preview the current Client status of a Credit Officer
     * 
     * 1. Identify Credit Officer
     * 2. Get Client information summary
     * 3. Breakdown client information on a table per following:
     *      a. in Grace Period
     *      b. in Arrears
     *      c. Active/Good Standing Clients
     *      d. Future Clients
     * 
     * @return ViewModel
     */
    public function creditOfficerStatusAction()
    {
        if ($this->CreditOfficer()->hasIdentity('Iligan', 'Name'))
        {
            $clientInGrace = $this->CreditOfficer()->getClientsInGracePeriod();
            $clientInArrears = $this->CreditOfficer()->getClientsInArrears();
            $activeClients = $this->CreditOfficer()->getGoodStandingClients();
            $futureClients = $this->CreditOfficer()->getFutureClients();
        }
        
        return new ViewModel(['result' => [$clientInGrace, $clientInArrears, $activeClients, $futureClients]]);
    }
    
    public function clientTotalDueAction()
    {
        $totalDue = [
            'name' => 'datatables5',
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g'],
            'data'  => [
                ['1','2', '3', '4', '5', '6', '7'],
                ['1','2', '3', '4', '5', '6', '7'],
                ['1','2', '3', '4', '5', '6', '7']
            ]
        ];
        
        return new ViewModel(['result' => $totalDue]);
    }
    
    public function insuranceFeeAction()
    {
        $insuranceFee = [
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
        
        return new ViewModel(['result' => $insuranceFee]);
    }
    
    public function creditOfficerSalesKpiACtion()
    {
        
    }
}
