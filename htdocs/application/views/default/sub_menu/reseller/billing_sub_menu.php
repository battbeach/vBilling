<?php 
/*
 * Version: MPL 1.1
 *
 * The contents of this file are subject to the Mozilla Public License
 * Version 1.1 (the "License"); you may not use this file except in
 * compliance with the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 * 
 * Software distributed under the License is distributed on an "AS IS"
 * basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
 * License for the specific language governing rights and limitations
 * under the License.
 * 
 * The Original Code is "vBilling - VoIP Billing and Routing Platform"
 * 
 * The Initial Developer of the Original Code is 
 * Digital Linx [<] info at digitallinx.com [>]
 * Portions created by Initial Developer (Digital Linx) are Copyright (C) 2011
 * Initial Developer (Digital Linx). All Rights Reserved.
 *
 * Contributor(s)
 * "Digital Linx - <vbilling at digitallinx.com>"
 *
 * vBilling - VoIP Billing and Routing Platform
 * version 0.1.3
 *
 */
?>
<div id="subMenu">
        <ul>
            <li><a href="<?php echo base_url();?>reseller/billing/" <?php if($sub_selected == 'summary_billing') { echo 'class="sub_selected"' ;}?>>Billing Summary</a></li>
            
            <li><a href="<?php echo base_url();?>reseller/billing/invoices/" <?php if($sub_selected == 'list_invoices') { echo 'class="sub_selected"' ;}?>>Customer/Reseller Invoices</a></li>
            
            <li><a href="<?php echo base_url();?>reseller/billing/my_invoices/" <?php if($sub_selected == 'my_invoices') { echo 'class="sub_selected"' ;}?>>My Invoices</a></li>
            
        </ul>
        <div class="clr"></div>
    </div>