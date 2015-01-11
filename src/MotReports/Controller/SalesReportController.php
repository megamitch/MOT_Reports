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
        $totalDue = $this->Client()->getTotalDue();
        
        return new ViewModel(['result' => $totalDue]);
    }
    
    public function insuranceFeeAction()
    {
        $insuranceFee = $this->Fee()->getInsuranceFee();
        
        return new ViewModel(['result' => $insuranceFee]);
    }
    
    public function creditOfficerSalesKpiACtion()
    {
        
    }
}
