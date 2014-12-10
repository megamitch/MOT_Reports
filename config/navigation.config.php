<?php

/**
 * The MIT License
 *
 * Copyright (c) 2012-2014, contributors of Mega Mitch Credit, Inc. software project.
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

return [
    'navigation' => [
        'sidebar' => [
            "reporting" => [
                "label" => "Reporting",
                "route" =>  "#",
                "icon" => "fa fa-line-chart",
                "pages" => [
                    //SALES
                    "co-status" => [ 
                        'label' => "Credit Officer Status",
                        'route' => "mot/reports/credit-officer-status",
                        'icon' => "fa fa-line-chart"
                     ],
                    "client-total-due" => [ 
                        'label' => "Client Total Due",
                        'route' => "mot/reports/client-total-due",
                        'icon' => "fa fa-line-chart"
                    ],
                    "insurance-fee" => [
                        'label' => "Insurance Fee",
                        'route' => "mot/reports/insurance-fee",
                        'icon' => "fa fa-line-chart"
                    ],
                    "credit-officer-sales-kpi" => [
                        'label' => "Credit Officer Sales KPI",
                        'route' => "mot/reports/credit-officer-sales-kpi",
                        'icon' => "fa fa-line-chart"
                    ],
                    //FINANCE
                    "client-payment-summary" => [
                        'label' => "Client Payment Summary",
                        'route' => "mot/reports/client-payment-summary",
                        'icon' => "fa fa-line-chart"
                    ],
                    "applied-fee" => [
                        'label' => "Applied Fees",
                        'route' => "mot/reports/applied-fee",
                        'icon' => "fa fa-line-chart"
                    ],
                    "teller-transactions" => [
                        'label' => "Teller Transactions",
                        'route' => "mot/reports/teller-transactions",
                        'icon' => "fa fa-line-chart"
                    ],
                    "aging-analysis" => [
                        'label' => "Aging Analysis",
                        'route' => "mot/reports/aging-analysis",
                        'icon' => "fa fa-line-chart"
                    ],
                    "aging-analysis-by-arrears" => [
                        'label' => "Aging Analysis by Arrears",
                        'route' => "mot/reports/aging-analysis-by-arrears",
                        'icon' => "fa fa-line-chart"
                    ],
                    //MANAGEMENT
                    "mambu-comments" => [
                        'label' => "Mambu Comments",
                        'route' => "mot/reports/mambu-comments",
                        'icon' => "fa fa-line-chart"
                    ],
                    "payment-transaction" => [
                        'label' => "Payment Transactions",
                        'route' => "mot/reports/payment-transaction",
                        'icon' => "fa fa-line-chart"
                    ],
                    "employee-personal-loan" => [
                        'label' => "Employee Personal Loan",
                        'route' => "mot/reports/employee-personal-loan",
                        'icon' => "fa fa-line-chart"
                    ],
                    "fraudulent-account" => [
                        'label' => "Fraudulent Account",
                        'route' => "mot/reports/fraudulent-account",
                        'icon' => "fa fa-line-chart"
                    ],
                    "employee-as-guarantor" => [
                        'label' => "Employee as Guarantor",
                        'route' => "mot/reports/employee-as-guarantor",
                        'icon' => "fa fa-line-chart"
                    ],
                    "company-kpi" => [
                        'label' => "Business/Company KPI",
                        'route' => "mot/reports/company-kpi",
                        'icon' => "fa fa-line-chart"
                    ],
                ]
            ]
        ],
//        "header" => [
//            "reporting" => [
//                'label' => "Dashboard",
//                'route' => "mot",
//                'icon' => "fa fa-home fa-lg"
//            ]
//        ]
    ]
];