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
 * MotReports\Controller\ManagementReportController
 * 
 * @package MotReports\Controller
 */
class ManagementReportController extends AbstractActionController
{
    public function mambuCommentsAction()
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
    
    public function paymentTransactionAction()
    {
        
    }
    
    public function employeePersonalLoanAction()
    {
        
    }
    
    public function fraudulentAccountAction()
    {
        
    }
    
    public function employeeAsGuarantorAction()
    {
        
    }
    
    public function companyKpiAction()
    {
        
    }
}
