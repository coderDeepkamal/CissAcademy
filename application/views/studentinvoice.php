<html>
<head>
<title>Invoice</title>
<style type="text/css">
    #page-wrap {
        width: 700px;
        margin: 0 auto;
    }
    .center-justified {
        text-align: justify;
        margin: 0 auto;
        width: 30em;
    }
    table.outline-table {
        border: 1px solid;
        border-spacing: 0;
    }
    tr.border-bottom td, td.border-bottom {
        border-bottom: 1px solid;
    }
    tr.border-top td, td.border-top {
        border-top: 1px solid;
    }
    tr.border-right td, td.border-right {
        border-right: 1px solid;
    }
    tr.border-right td:last-child {
        border-right: 0px;
    }
    tr.center td, td.center {
        text-align: center;
        vertical-align: text-top;
    }
    td.pad-left {
        padding-left: 5px;
    }
    tr.right-center td, td.right-center {
        text-align: right;
        padding-right: 50px;
    }
    tr.right td, td.right {
        text-align: right;
    }
    .grey {
        background:grey;
    }
</style>
</head>
<body>
 <div class="content">
   <div class="container-fluid">
    <div id="page-wrap">
        <table width="100%" class="outline-table">
            <tbody>
                <tr>
                    <td width="30%">
                        <img src="<?=base_url();?>assets2/assets/img/ciss-academy_logo.png"> <!-- your logo here -->
                    </td>
                    <td width="70%">
                        <h2 style="font-size: 20px;">CISS Academy For Skill Human Development Pvt. Ltd.</h2><br>
                        <strong>Campus:</strong>Piplaj, Gandhinagar Gujarat (382610) <br>
                        <strong>Registered Office:</strong>405, Cosmos Plaza, Near D N Nagar Metro Station,Andheri (West), Mumbai. 400058<br>
                        <strong>Phone:</strong> +91 9978925167<br>
                        <strong>Email:</strong>  ciss.skills@cissindia.co.in<br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    
                </tr>
            </tbody>
        </table>
        
                    <table width="100%" class="outline-table">
            <tbody>
                <?php
                    foreach($records as $r){
                        foreach($records1 as $r1){
                            foreach($records2 as $r2){
                                if($r->student_id==$r1->student_id && $r1->course_id==$r2->course_id){ 
                ?>
                <tr class="border-bottom border-right center">
                    <td width="75%" style="font-size: 25px; margin-top: 10px; text-align: center;" ><strong>TAX INVOICE</strong></td>
                    <td width="25%">
                    <table  >
                    <tr >
                    <td width="10%"></td>
                    <td width="90%">original For Receipient</td>
                    </tr>
                    <tr>
                    <td width="10%"></td>
                    <td width="90%"><strong>Duplicate</strong></td>
                    </tr>
                    <tr>
                    <td width="10%"></td>
                    <td width="90%"><strong>Triplicate</strong></td>
                    </tr>
                    </table>
                    </td>
                    
                    
                </tr>
                <tr class="border-bottom border-right center">
                <td width="20%" style="text-align: center;"><strong>Invoice No:</strong></td>
                <td width="80%"><strong><?= $r1->invoice_no;?></strong></td>
                </tr>
                
                <tr class="border-bottom border-right center">
                <td width="20%"><strong>Invoice Date:</strong></td>
                <td width="80%"><strong><?php echo date("M d Y"); ?></strong></td>
                </tr>
                
                <tr class="border-bottom border-right center">
                <td width="20%"><strong>GSTIN:</strong></td>
                <td width="80%"><strong>19AABCW6316K1Z0</strong></td>
                </tr>
              
                <tr class="border-bottom border-right center">
                <td width="20%"><strong>Code:</strong></td>
                <td width="80%"><strong>19</strong></td>
                
                </tr>
                
                
                
            </tbody>
        </table>
                

            <table width="100%" class="outline-table">
            <tbody>
                <tr class="border-bottom border-right white">
                    <td colspan="4"><strong>.</strong></td>
                </tr>
                <tr class="border-bottom border-right center">
                    <td width="10%"><strong>Name:</strong></td>
                    <td width="40%"><strong><?= $r->name;?></strong></td>
                    <td width="25%"><strong></strong></td>
                    
                </tr>
                <tr class="border-bottom border-right center">
                    <td width="10%"><strong>Address:</strong></td>
                    <td width="40%"><strong><?= $r->address;?></strong></td>
                    <td width="25%">
                    <table>
                    <tr>
                    <td><strong>Places of service:</strong></td>
                    <td><strong>Mumbai</strong></td>
                    </tr>
                    </table>
                    </td>
                    
                </tr>
                
                <tr class="border-bottom border-right center">
                    <td width="10%"><strong>State:</strong></td>
                    <td width="40%"><strong>WestBengal</strong></td>
                    <td width="25%"><strong>Code: 19</strong></td>
                    
                </tr>
                
                
                
            </tbody>
        </table>
        <table width="100%" class="outline-table">
            <tbody>
                <tr class="border-bottom border-right white">
                    <td colspan="9"><strong>.</strong></td>
                </tr>
                <tr class="border-bottom border-right center">
                    <td width="10%"><strong>S.No</strong></td>
                    <td width="20%"><strong>Particulars</strong></td>
                    <td width="10%"><strong>SAC Code</strong></td>
                    <td width="10%"><strong>Rate</strong></td>
                    <td width="10%"><strong>SGST</strong></td>
                    <td width="10%"><strong>CGST</strong></td>
                    <td width="10%"><strong>Amount</strong></td>
                    <td width="10%"><strong>Taxable Value</strong></td>
                    <td width="10%"><strong>Total</strong></td>
                </tr>
                
                <tr class="border-bottom border-right center">
                    <td width="10%"><strong>1</strong></td>
                    <td width="20%"><strong><?= $r1->particular;?></strong></td>
                    <td width="10%"><strong><?= $r1->sac_code;?></strong></td>
                    <td width="10%"><strong><?= $r1->rate;?></strong></td>
                    <td width="10%"><strong></strong>9%</td>
                    <td width="10%"><strong></strong>9%</td>               
                    <td width="10%"><strong><?= $r1->amount;?></strong></td>
                    <td width="10%"><strong><?= $r1->tax_amount;?></strong></td>
                    <td width="10%"><strong><?= $r1->total_amount;?></strong></td>
                </tr>
                
                <tr class="border-bottom border-right center">
                    <td width="10%"><strong>.</strong></td>
                    <td width="20%"><strong>.</strong></td>
                    <td width="10%"><strong>.</strong></td>
                    <td width="10%"><strong>.</strong></td>
                    <td width="10%"><strong>.</strong></td>
                    <td width="10%"><strong>.</strong></td>
                    <td width="10%"><strong>.</strong></td>
                    <td width="10%"><strong>.</strong></td>
                    <td width="10%"><strong>.</strong></td>
                </tr>
               
                <tr class="border-bottom border-right center">
                    <td width="10%"><strong>Total</strong></td>
                    <td width="20%"><strong>.</strong></td>
                    <td width="10%"><strong>.</strong></td>
                    <td width="10%"><strong>.</strong></td>
                    <td width="10%"><strong></strong></td>
                    <td width="10%"><strong>.</strong></td>
                    <td width="10%"><strong><?= $r1->amount;?></strong></td>
                    <td width="10%"><strong></strong></td>
                    <td width="10%"><strong><?= $r1->total_amount;?></strong></td>
                </tr>
            
            </tbody>
        </table>
        
        <table width="100%" class="outline-table">
            <tbody>
                <tr class="border-bottom border-right white">
                    <td colspan="3"><strong>.</strong></td>
                </tr>
                <tr class="border-bottom border-right center">
                    <td width="80%"><strong>Total Invoice amount in words</strong></td>
                    <td width="20%" colspan="3"><strong></strong></td>
                </tr>
                
                <tr class="border-right">
                    <td class="pad-left"><Strong></Strong></td>
                    <td class="center">
                    <table>
                    <tr class="border-bottom border-right center">
                    <td><strong>Total Amount Before Tax</strong></td>
                    <td><strong><?= $r1->amount;?><strong></td>
                    </tr>
                    
                    
                    <tr class="border-bottom border-right center">
                    <td><strong>Total Tax Amount</strong></td>
                    <td><strong><?= $r1->tax_amount;?><strong></td>
                    </tr>
                    <tr class="border-bottom border-right center">
                    <td><strong>Total Amount After Tax</strong></td>
                    <td><strong><?= $r1->total_amount;?><strong></td>
                    </tr>
                    </table>
                    </td>
                    
                </tr>
                <?php
                       }
                     }
                   }
                 } 
                ?>
            </tbody>
        </table>
        <p>&nbsp;</p>
        
        
        <p>&nbsp;</p>
    
    </div>
   </div>
</div>
</body>
</html>