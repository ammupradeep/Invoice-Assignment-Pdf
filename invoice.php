<?php
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="row text-center">
			<h2>Commercial Invoice</h2>
	</div>
	<table border="2px" class="main-table">
        <tr>
            <th colspan="2" class="text-left border-line">This invoice should be completed in English</th>
            <th class="border-line">Page__of__</th>
        </tr>

		<tr>
			<th class="text-left">
				<table class="nested-table text-left" style="width:95%">
					<tr>
						<th class="margin-adjust-top text-left" colspan="5">EXPORTER:</th>
					</tr>
					<tr>
						<th class="text-left">TaxID#:</th>
						
					</tr>
					<tr>
						<th class="text-left">Contact Name:
							<p class="small-th">
							Amyris Inc 5885 Hollis Street <br> Emery ville CA 94608
							</p>
						</th>
					</tr>
					<tr>
						<th class="text-left">Country/ Territory:
							<p class="small-th">
								UNITED STATES OF AMERICA
							</p>
						</th>
					</tr>
					<tr>
						<th class="text-left">Parties to Transcation: <br>
							<input type="checkbox">Related
							<input type="checkbox" name="not-related" checked>Not Related
						</th>
					</tr>
				</table>
			</th>
			<th  class="text-left" align="right">
				<table class="nested-table">
					<tr>
						<th class="text-left">Ship Date:
							<p class="small-th">
								03 Jun,2022
							</p>
						</th>
					</tr>
					<tr>
						<th class="text-left">Air WayBill No./ Tracking No:
							<p class="small-th">
								000000000000
							</p>
						</th>
					</tr>
					<tr>
						<th class="text-left">Invoice No:
							<p class="small-th">
								194927015
							</p>
						</th>
						<th class="text-left">Purchase Order No:
							<p class="small-th">
								52145
							</p>
						</th>
					</tr>
					<tr>
						<th class="text-left">Payment Terms:
							
						</th>
						<th class="text-left">Bill of Lading:
							
						</th>
					</tr>
					<tr>
						<th rowspan="2" class="text-left">Purpose of Shipment: <br>
							<p class="small-th">
								SAMPLE
							</p>
						</th>
					</tr>
				</table>
			</th>
		</tr>
		
		<tr>
			<th class="text-left">
				<table class="nested-table">
					<tr>
						<th class="text-left">CONSIGNEE:
						<p class="small-th"></p>
						</th>
						
					</tr>
					<tr>
						<th class="text-left">TaxID#:
						<p class="small-th"></p>
						</th>
						
					</tr>
					<tr>
						<th  class="text-left">Contact Name:
							<p class="small-th">
							Geneva Trade Center
							</p>
						</th>
					</tr>
					<tr>
						<th  class="text-left">Telephone Number:
							<p class="small-th">
								4122436860
							</p>
						</th>
					</tr>
					<tr>
						<th  class="text-left">E-mail:</th>
						<p class="small-th"></p>
					</tr>
					<tr>
						<th  class="text-left">Company Name/ Address:
							<p class="small-th">
							Geneva Trade Center <br>
							Av. des Morgines 10 <br>
							**TEST LABEL - DO NOT SHIP**<br><br>
							Geneva 1213
							</p>
						</th>
					</tr> 
					<tr>
						<th  class="text-left">Country/ Territory:
							<p class="small-th">
								SWITZERLAND
							</p>
						</th>
					</tr>
				</table>
			</th>
			<th class="text-left" align="right">
				<table class="nested-table">
					<tr>
						<th  class="text-left">SOLD TO / IMPORTER(if different from Consignee): <br>
							<input type="checkbox" name="same-as">Same as Consignee
						</th>
					</tr>
					<tr>
						<th  class="text-left">Tax ID#:
							<p class="small-th">
								
							</p>
						</th>
					</tr>
					<tr>
						<th  class="text-left">Company Name/ Address:
							<p class="small-th">
							Geneva Trade Center <br>
							Av. des Morgines 10 <br><br>
							Geneva 1213
							</p>
						</th>
					</tr>
					<tr>
						<th  class="text-left">Country/ Territory:
							<p class="small-th">
								SWITZERLAND
							</p>
						</th>
					</tr>
				</table>
			</th>
		</tr>
		<tr>
			<th colspan="2" class="text-left">
				<table class="nested-table">
					<tr>
						<th colspan="4" class="text-left">If there is a designated broker for this shipment, please provide contact Information</th>				
					</tr>
					<tr>
						<th colspan="" class="text-left">Name of Broker:</th>
						<th colspan="5" class="text-left">Tel No:
							<p class="small-th"></p>
						</th>
						<th colspan="5" class="text-left">Contact Name:</th>
					</tr>
					<tr>
						<th  class="text-left">Duties and Taxes payable By 
							<input type="checkbox" name="exporter" checked>Expoerter
							<input type="checkbox" name="consignee">Consignee
							<input type="checkbox" name="other">Other
						</th>
						<th  class="text-left">
							If Other, please specify
						</th>
					</tr>
				</table>
			</th>
		</tr>
		<tr class="table-container">
			<th colspan="2"  class="text-left">
				<table border="3px" class="nested-table" style="width:95%">
					<tr>
						<th>No. of Pachages</th>
						<th>No. of Units</th>
						<th>Net Weight(LBS / KGS)</th>
						<th>Unit of Measure</th>
						<th colspan="6">Description of Goods</th>
						<th>Harmonized Tariff Number</th>
						<th >Country of Manufacture</th>
						<th colspan="2">Unit Value</th>
						<th colspan="2">Total Value</th>
					</tr>
					<tr>
						<td></td>
						<td>25.00</td>
						<td>15.00</td>
						<td>PCS</td>
						<td colspan="4">Face Creams</td>
						<td>3304995000</td>
						<td>USA</td>
						<td colspan="2">10.000000</td>
						<td colspan="2">250.00</td>
					</tr>
					<!-- <tr>
						<td rowspan="8"></td>
						<td rowspan="8">25.00</td>
						<td rowspan="8">15.00</td>
						<td rowspan="8">PCS</td>
						<td rowspan="8">Face Creams</td>
						<td rowspan="8">3304995000</td>
						<td rowspan="8">USA</td>
						<td rowspan="8"  colspan="2">10.000000</td>
						<td rowspan="8"  colspan="2">250.00</td>
					</tr> -->
                    <tr>
						<td></td>
						<td>25.00</td>
						<td>15.00</td>
						<td>PCS</td>
						<td colspan="4">Face Creams</td>
						<td>3304995000</td>
						<td>USA</td>
						<td  colspan="2">10.000000</td>
						<td colspan="2">250.00</td>
					</tr>
					<tr>
						<td></td>
						<td>25.00</td>
						<td>15.00</td>
						<td>PCS</td>
						<td colspan="4">Face Creams</td>
						<td>3304995000</td>
						<td>USA</td>
						<td colspan="2">10.000000</td>
						<td colspan="2">250.00</td>
					</tr>
					<tr>
						<td></td>
						<td>25.00</td>
						<td>15.00</td>
						<td>PCS</td>
						<td colspan="4">Face Creams</td>
						<td>3304995000</td>
						<td>USA</td>
						<td colspan="2">10.000000</td>
						<td colspan="2">250.00</td>
					</tr>
					<tr rowspan= "16">
						<th class="text-left">Total Pkgs</th>
						<th class="text-left">Total Units</th>
						<th colspan="2" class="text-left">Total Net Weight(Indicate LBS / KGS)</th>
						<th colspan="" class="text-left">Total Gross Weight(Indicate LBS / KGS)</th>
						<th colspan="5" rowspan="2" class="text-left terms">Terms of sales: </th>
						<th colspan="2">SubTotal:</th>
						<td colspan="2">250.00</td>
					</tr>
					<tr rowspan= "16">
						<td>1</td>
						<td>25.00</td>
						<td colspan="2">15.00 LB</td>
						<td colspan="2">35.00 LB</td>
						<th>Insurance:</th>
						<td>0.00</td>
					</tr>
					<tr>
						<th colspan="10" rowspan="2" class="text-left">Special Instructions:
							<p class="small-th">
							Work Order: 194927015 <br> Face Creams HTS 3304.99.5000 EAR99 NLR
							</p>
						</th>
						<th class="text-left">Freight:</th>
						<td>0.00</td>
					</tr>
					<tr>
						<th class="text-left">Packing:</th>
						<td>0.00</td>
					</tr>
					
					<tr>
						<th colspan="10" rowspan="2" class="text-left">Declaration Statement(s): <br>
							<p class="small-th">
							These items are controlled by the U.S Government ans authorised for export 
							only to the country of ultimate destination for the use by the ultimate consignee or end-user(s) herein
							identified .They may not be resold, transferred, or otherwise disposed of, to any other country or to any person
							other than the authorized ultimate consignee or end-user(s), either in their original for, or after being incorporated 
							into other items.Without first obtaining approval from the U.S Government or as otherswise authorised by U.S law and regulations. <br><br> 
							</p>
						</th>
						<th class="text-left">Handling:</th>
						<td>0.00</td>
					</tr>
					<tr>
						<th class="text-left">Other:</th>
						<td>0.00</td>
					</tr>
					<tr>
						<th colspan="10" class="text-left">I declare that all the information contained in this invoice to be true and correcct</th>
						<th colspan="" class="text-left">Invoice Total:</th>
						<td colspan="">250.00</td>
					</tr>
					<tr>
						<th colspan="10" class="text-left">Originator or Name of the Company Representative if the invoice is being completed on behalf of a company or individual:
							<p class="small-th">
								Tim Andrews
							</p>
						</th>
						<th colspan="" class="text-left">Currency Code:</th>
						<td colspan="">USD</td>
					</tr>
					<tr>
						<th rowspan="2" colspan="11" class="text-left">Signature /Title /Date :</th>
						<td rowspan="2" cospan="3">03 Jun, 2022</td>
					</tr>
				</table>
			</th>
		</tr>
</table>
</body>
</html>';


// include()
require_once __DIR__ . '/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();