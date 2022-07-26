<?php
/**
 * GiaPhuGroup Co., Ltd.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GiaPhuGroup.com license that is
 * available through the world-wide-web at this URL:
 * https://www.giaphugroup.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    PHPCuong
 * @package     PHPCuong_SalesOrder
 * @copyright   Copyright (c) 2020-2021 GiaPhuGroup Co., Ltd. All rights reserved. (http://www.giaphugroup.com/)
 * @license     https://www.giaphugroup.com/LICENSE.txt
 */

namespace I95dev\Newsletter\Plugin\Button;

use Magento\Backend\Block\Widget\Button\Toolbar\Interceptor;
use Magento\Framework\View\Element\AbstractBlock;
use Magento\Backend\Block\Widget\Button\ButtonList;

class ToolbarPlugin
{
    /**
     * @param \Magento\Backend\Block\Widget\Button\Toolbar\Interceptor $subject
     * @param \Magento\Framework\View\Element\AbstractBlock $context
     * @param \Magento\Backend\Block\Widget\Button\ButtonList $buttonList
     * @return void
     */
    public function beforePushButtons(
        Interceptor $subject,
        AbstractBlock $context,
        ButtonList $buttonList
    ) {
        $nameInLayout = $context->getNameInLayout();
        $invoice = false;
        // Check if the current page is the invoice detail page
        if ($nameInLayout == 'sales_invoice_view') {
            $invoice = $context->getInvoice();
            $message = __('Are you sure you want to do this?');
            $params = [
                'invoice_id' => $invoice->getId()
            ];

            $url = $context->getUrl('phpcuong_sales_order/invoice/pdfemail', $params);

            $buttonList->add(
                'send_pdf_invoice_email',
                [
                    'label' => __('Send a PDF Invoice Email'),
                    'class' => 'send-pdf-invoice-email',
                    'onclick' => "confirmSetLocation('{$message}', '{$url}')"
                ],
                -1
            );
        }
    }
}
