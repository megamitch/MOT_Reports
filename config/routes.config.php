<?php

/**
 * The MIT License
 *
 * Copyright (c) 2012-2015, Mega Mitch, Inc.
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
    'console'   => [], //routing configuration for CLI modules
    'router'    => [
        'routes' => [
            'mot' => [
                'type'      => 'Literal',
                'options'   => [
                    'route'     => '/mot',
                    'defaults'  => [
                        'controller'    => 'Mot\Controller\Index',
                        'action'        => 'index'
                    ]
                ],
                'may_terminate' => true,
                'child_routes' => [
                    "reports" => [
                        'type' => "Segment",
                        'options' => [
                            'route'     => '/reports',
                            'defaults'  => [
                                'controller'    => 'Mot\Controller\Index',
                                'action'        => 'index'
                            ]
                        ],
                        'may_terminate' => true,
                        'child_routes' => [
                            //SALES REPORTING
                            'credit-officer-status' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/credit-officer/status',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\SalesReport',
                                        'action'        => 'credit-officer-status'
                                    ]
                                ]
                            ],
                            'credit-officer-sales-kpi' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/kpi/sales/credit-officer',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\SalesReport',
                                        'action'        => 'credit-officer-sales-kpi'
                                    ]
                                ]
                            ],
                            'client-total-due' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/client/total-due',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\SalesReport',
                                        'action'        => 'client-total-due'
                                    ]
                                ]
                            ],
                            'insurance-fee' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/fee/insurance',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\SalesReport',
                                        'action'        => 'insurance-fee'
                                    ]
                                ]
                            ],
                            //FINANCE REPORTING
                            'client-payment-summary' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/client/payment-summary',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\FinanceReport',
                                        'action'        => 'client-payment-summary'
                                    ]
                                ]
                            ],
                            'applied-fee' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/fee/applied',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\FinanceReport',
                                        'action'        => 'applied-fee'
                                    ]
                                ]
                            ],
                            'teller-transactions' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/transactions/teller',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\FinanceReport',
                                        'action'        => 'teller-transaction'
                                    ]
                                ]
                            ],
                            'aging-analysis' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/aging-analysis',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\FinanceReport',
                                        'action'        => 'aging-analysis'
                                    ]
                                ]
                            ],
                            'aging-analysis-by-arrears' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/aging-analysis/by-arrears',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\FinanceReport',
                                        'action'        => 'aging-analysis-by-arrears'
                                    ]
                                ]
                            ],
                            //MANAGEMENT REPORTS
                            'mambu-comments' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/mambu/comments',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\ManagementReport',
                                        'action'        => 'mambu-comments'
                                    ]
                                ]
                            ],
                            'payment-transaction' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/transactions/payment',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\ManagementReport',
                                        'action'        => 'payment-transaction'
                                    ]
                                ]
                            ],
                            'employee-personal-loan' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/loans/employee/personal',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\ManagementReport',
                                        'action'        => 'employee-personal-loan'
                                    ]
                                ]
                            ],
                            'fraudulent-account' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/accounts/fraudulent',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\ManagementReport',
                                        'action'        => 'fraudulent-account'
                                    ]
                                ]
                            ],
                            'employee-as-guarantor' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/guarantors/employee',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\ManagementReport',
                                        'action'        => 'employee-as-guarantor'
                                    ]
                                ]
                            ],
                            'company-kpi' => [
                                'type' => 'Literal',
                                'options' => [
                                    'route' => '/kpi/overall',
                                    'defaults' => [
                                        'controller'    => 'MotReports\Controller\ManagementReport',
                                        'action'        => 'company-kpi'
                                    ]
                                ]
                            ],
                        ]
                    ]
                ]
            ]
        ]
    ]
];