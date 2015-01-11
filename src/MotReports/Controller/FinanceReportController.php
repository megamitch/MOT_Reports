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
        $fee = $this->Fee()->getAppliedFee();
        
        return new ViewModel(['result' => $fee]);
    }
    
    public function tellerTransactionAction()
    {
        $transaction = $this->Teller()->getAllTransactions();
        
        return new ViewModel(['result' => $transaction]);
    }
    
    public function agingAnalysisAction()
    {
        $transaction = $this->Aging()->getCurrentAnalysis();
        
        return new ViewModel(['result' => $transaction]);
    }
    
    public function agingAnalysisByArrearsAction()
    {
        $thirty = $this->Aging()->getArrearsLessThan(30);
        
        $sixty = $this->Aging()->getArrearsBetween(31, 60);
        
        $ninety = $this->Aging()->getArrearsBetween(61, 90);
        
        $overninety = $this->Aging()->getArrearsOverThan(90);
        
        return new ViewModel(['result' => [$thirty, $sixty, $ninety, $overninety]]); 
    }
}
