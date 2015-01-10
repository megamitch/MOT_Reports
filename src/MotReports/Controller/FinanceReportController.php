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
 * MotReports\Controller\FinanceReportController
 * 
 * @package MotReports\Controller
 */
class FinanceReportController extends AbstractActionController
{
    public function clientPaymentSummaryAction()
    {
        $payment = $this->Client()->getPaymentSummary();
        
        return new ViewModel(['result' => $payment]);
    }
    
    public function appliedFeeAction()
    {
        $fee = [
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
        
        return new ViewModel(['result' => $fee]);
    }
    
    public function tellerTransactionAction()
    {
        $transaction = $this->Teller()->getAllTransactions();
        
        return new ViewModel(['result' => $transaction]);
    }
    
    public function agingAnalysisAction()
    {
        $transaction = [
            'title' => strtoupper('clients in arrears'),
            'name' => 'datatables8',
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q','r','s','t','u','v','w','x','y','z'],
            'data'  => [
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26']
            ]
        ];
        
        return new ViewModel(['result' => $transaction]);
    }
    
    public function agingAnalysisByArrearsAction()
    {
        $thirty = [
            'title' => strtoupper('clients in arrears'),
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
        
        $sixty = [
            'title' => strtoupper('clients in arrears'),
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
        
        $ninety = [
            'title' => strtoupper('clients in arrears'),
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
        
        $overninety = [
            'title' => strtoupper('clients in arrears'),
            'name' => 'datatables10',
            'header' => ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q','r','s','t','u','v','w','x','y'],
            'data'  => [
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25'],
                ['1','2', '3', '4', '5', '6', '7', '8','9','0', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25']
            ]
        ];
        
        return new ViewModel(['result' => [$thirty, $sixty, $ninety, $overninety]]); 
    }
}
