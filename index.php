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
    <div class="row">
			<h2 class="text-center">Commercial Invoice</h2>
	</div>	
	<table class="table-1" style="border: none !important;">
		<tr style="border: none !important;">
			<td style="border: none !important;" class="text-left"> This invoice should be completed in English</td>
			<td style="border: none !important;" class="text-right">Page__of__</td>
		</tr>
	</table>

	<table border="2px" class="main-table" autosize="1.6" style="border-collapse: collapse !important; border: 1px solid black !important;">  
		<tbody>
			<tr style="border: 1px solid black !important;">
				<th class="text-left" style="width:50%">
					<table class="nested-table text-left "  style="width:100%;border:none !important;" autosize="1.6">
						<tr style="border:none !important;">
							<th class="text-left" colspan="5">EXPORTER: <br><br></th>
						</tr>
						<tr style="border:none !important;">
							<th class="text-left">TaxID#:</th>
						</tr>
						<tr style="border:none !important;">
							<th class="text-left">Contact Name: <span style="font-size: 0.5rem !important; font-weight: 100px !important;">Amyris Inc 5885 Hollis Street <br> Emery ville CA 94608</span>
								<br>
							</th>
						</tr>
						<tr style="border:none !important;">
							<th class="text-left">Country/ Territory: UNITED STATES OF AMERICA 
								<br>
							</th>
						</tr>
						<tr style="border:none !important;">
							<th class="text-left">Parties to Transcation: <br><br><br>
								<input type="checkbox">Related 
								<input type="checkbox" name="not-related" checked>Not Related
							</th>
						</tr>
					</table>
				</th>
				<th  class="text-left" align="right" >
					<table class="nested-table" autosize="1.6" style="border: none !important;">
						<tr style="border:none !important;">
							<th class="text-left">Ship Date:
								<p class="small-th">
									03 Jun,2022
								</p>
							</th>
						</tr>
						<tr style="border:none !important;">
							<th class="text-left">Air WayBill No./ Tracking No:
								<p style="font-size: 0.5rem !important; font-weight: 20px !important;">
								000000000000
								</p>
							</th>
						</tr>
						<tr style="border:none !important;">
							<th class="text-left" style="border: none !important;">Invoice No:
								<p class="small-th">
									194927015
								</p>
							</th>
							<th class="text-left" style="border:none !important;">Purchase Order No:
								<p class="small-th">
									52145
								</p>
							</th>
						</tr>
						<tr style="border:none !important;">
							<th class="text-left" style="border: none !important;">Payment Terms: <br>
								<p class="small-th">
								<br>
								</p>
							</th>
							<th class="text-left" style="border: none !important;">Bill of Lading:
								
							</th>
						</tr>
						<tr style="border:none !important;">
							<th rowspan="2" class="text-left" >Purpose of Shipment: SAMPLE<br>
								<p class="small-th">
									
								</p>
							</th>
						</tr>
					</table>
				</th>
			</tr>
		
			<tr  style="border: 1px solid black !important;">
				<th class="text-left">
					<table class="nested-table" autosize="1.6" style="border: none !important;">
						<tr style="border:none !important;">
							<th class="text-left">CONSIGNEE:
							<p class="small-th"></p> <br><br>
							</th>
							
						</tr>
						<tr style="border:none !important;">
							<th class="text-left">TaxID#:
							<p class="small-th"></p>
							</th>
							
						</tr>
						<tr style="border:none !important;">
							<th  class="text-left">Contact Name:
								<p class="small-th">
								Geneva Trade Center
								</p>
							</th>
						</tr>
						<tr style="border:none !important;">
							<th  class="text-left">Telephone Number:
								<p class="small-th">
									4122436860
								</p>
							</th>
						</tr>
						<tr style="border:none !important;">
							<th  class="text-left">E-mail:</th>
							<p class="small-th"></p>
						</tr>
						<tr style="border:none !important;">
							<th  class="text-left">Company Name/ Address:
								<p class="small-th">
								Geneva Trade Center <br>
								Av. des Morgines 10 <br>
								**TEST LABEL - DO NOT SHIP**<br><br>
								Geneva 1213
								</p>
							</th>
						</tr> 
						<tr style="border:none !important;">
							<th  class="text-left">Country/ Territory:SWITZERLAND
							</th>
						</tr>
					</table>
				</th>
				<th class="text-left" align="right">
					<table class="nested-table " autosize="1.6" style="border: none !important;">
						<tr style="border:none !important;">
							<th  class="text-left">SOLD TO / IMPORTER(if different from Consignee): 
							</th>
						</tr>
						<tr style="border:none !important;">
							<th><input type="checkbox" name="same-as">Same as Consignee</th>
						</tr>
						<tr style="border:none !important;">
							<th  class="text-left">Tax ID#:
								<p class="small-th">
									
								</p>
							</th>
						</tr>
						<tr style="border:none !important;">
							<th  class="text-left">Company Name/ Address:
								<p class="small-th">
								Geneva Trade Center <br>
								Av. des Morgines 10 <br><br><br><br><br><br><br><br>
								Geneva 1213
								</p>
							</th>
						</tr>
						<tr style="border:none !important;">
						<th  class="text-left">Country/ Territory:SWITZERLAND
						</th>
						</tr>
					</table>
				</th>
			</tr>
			<tr>
				<th colspan="2" class="text-left">
					<table class="nested-table" autosize="1" style="border: none !important;">
						<tr style="border:none !important;">
							<th colspan="4" class="text-left">If there is a designated broker for this shipment, please provide contact Information</th>				
						</tr>
						<tr style="border:none !important;">
							<th colspan="" class="text-left" style="border:none !important;">Name of Broker:</th>
							<th colspan="5" class="text-left" style="border:none !important;">Tel No:
								<p class="small-th"></p>
							</th>
							<th colspan="5" class="text-left" style="border:none !important;">Contact Name:</th>
						</tr>
						<tr style="border:none !important;">
							<th  class="text-left" style="border: none !important;">Duties and Taxes payable By 
								<input type="checkbox" name="exporter" checked>Expoerter
								<input type="checkbox" name="consignee">Consignee
								<input type="checkbox" name="other">Other
							</th>
							<th  class="text-left" style="border:none !important;">
								If Other, please specify
							</th>
						</tr>
					</table>
				</th>
			</tr>
			<tr class="table-container" style="width: 100%;">
				<th colspan="2"  class="text-left" >
					<table  class="nested-table table-data" style="width:100%; border: 1px solid black !important;" autosize="1.6" >
						<tr style="border:none !important;">
							<th>No. of Pachages</th>
							<th>No. of Units</th>
							<th>Net Weight(LBS / KGS)</th>
							<th>Unit of Measure</th>
							<th colspan="5">Description of Goods</th>
							<th>Harmonized Tariff Number</th>
							<th>Country of Manufacture</th>
							<th colspan="2" >Unit Value</th>
							<th colspan="2" style="width:9%">Total Value</th>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<td nowrap="nowrap"></td>
							<td>25.00</td>
							<td>15.00</td>
							<td>PCS</td>
							<td colspan="5">Face Creams</td>
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
							<td rowspan="8" colspan="5">Face Creams</td>
							<td rowspan="8">3304995000</td>
							<td rowspan="8">USA</td>
							<td rowspan="8"  colspan="2">10.000000</td>
							<td rowspan="8"  colspan="2">250.00</td>
						</tr> -->
						<tr style="border:none !important;">
							<td></td>
							<td >25.00</td>
							<td>15.00</td>
							<td>PCS</td>
							<td colspan="5">Face Creams</td>
							<td>3304995000</td>
							<td>USA</td>
							<td  colspan="2">10.000000</td>
							<td colspan="2">250.00</td>
						</tr>
						<tr >
							<td></td>
							<td>25.00</td>
							<td>15.00</td>
							<td>PCS</td>
							<td colspan="5">Face Creams</td>
							<td>3304995000</td>
							<td>USA</td>
							<td colspan="2">10.000000</td>
							<td colspan="2">250.00</td>
						</tr>
						<tr >
							<td></td>
							<td>25.00</td>
							<td>15.00</td>
							<td>PCS</td>
							<td colspan="5">Face Creams</td>
							<td>3304995000</td>
							<td>USA</td>
							<td colspan="2">10.000000</td>
							<td colspan="2">250.00</td>
						</tr>
						<tr rowspan= "16" style="border:none !important;">
							<th class="text-left">Total Pkgs</th>
							<th class="text-left">Total Units</th>
							<th colspan="2" class="text-left">Total Net Weight(Indicate LBS / KGS)</th>
							<th colspan="2" class="text-left">Total Gross Weight(Indicate LBS / KGS)</th>
							<th colspan="5" rowspan="2" class="text-left terms">Terms of sales: </th>
							<th colspan="2">SubTotal:</th>
							<td colspan="2">250.00</td>
						</tr>
						<tr rowspan= "16" style="border-right:none !important; border-left:none !important;">
							<td>1</td>
							<td>25.00</td>
							<td colspan="2">15.00 LB</td>
							<td colspan="2">35.00 LB</td>
							<th colspan="2">Insurance:</th>
							<td colspan="2">0.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<th colspan="11" rowspan="2" class="text-left">Special Instructions:
								<p class="small-th">
								Work Order: 194927015 <br> Face Creams HTS 3304.99.5000 EAR99 NLR
								</p>
							</th>
							<th class="text-left" colspan="2">Freight:</th>
							<td colspan="2">0.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<th class="text-left" colspan="2">Packing:</th>
							<td colspan="2">0.00</td>
						</tr>
						
						<tr style="border-right:none !important; border-left:none !important;">
							<th colspan="11" rowspan="2" class="text-left">Declaration Statement(s): <br>
								<p class="small-th">
								These items are controlled by the U.S Government ans authorised for export 
								only to the country of ultimate destination for the use by the ultimate consignee or end-user(s) herein
								identified .They may not be resold, transferred, or otherwise disposed of, to any other country or to any person
								other than the authorized ultimate consignee or end-user(s), either in their original for, or after being incorporated 
								into other items.Without first obtaining approval from the U.S Government or as otherswise authorised by U.S law and regulations. <br><br> 
								</p>
							</th>
							<th class="text-left" colspan="2">Handling:</th>
							<td colspan="2">0.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<th class="text-left" colspan="2">Other:</th>
							<td colspan="2">0.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<th colspan="11" class="text-left">I declare that all the information contained in this invoice to be true and correcct</th>
							<th colspan="2" class="text-left">Invoice Total:</th>
							<td colspan="2">250.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<th colspan="11" class="text-left">Originator or Name of the Company Representative if the invoice is being completed on behalf of a company or individual:
								<p class="small-th">
									Tim Andrews
								</p>
							</th>
							<th colspan="2" class="text-left">Currency Code:</th>
							<td colspan="2">USD</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important; border-bottom: none !important">
							<th rowspan="2" colspan="11" class="text-left"><br>Signature /Title /Date :</th>
							<td rowspan="2" colspan="4"><br>	03 Jun, 2022</td>
						</tr>
					</table>
				</th>
			</tr>
		</tbody>
		
	</table>
		
	<br><br><br><br><br><br><br><br><br><br><br><br><br>


	<div class="row">
			<h2 class="text-center">Commercial Invoice <br> Continuation Sheet</h2>
	</div>

	<table class="table-1" style="border: none !important;">
		<tr style="border: none !important;">
			<td style="border: none !important;" class="text-left"> This invoice should be completed in English</td>
			<td style="border: none !important;" class="text-right">Page__of__</td>
		</tr>
	</table>

	<table autosize="1.6" >
		<tbody>
			<tr style="border: 1px solid black !important;" height="800px">
				<th class="text-left">
					<table class="nested-table text-left "  style="width:100% ;border: none !important;" autosize="1.6">
						<tr style="border:none !important;">
							<th class="text-left" rowspan="1">EXPORTER: <br><br><br><br><br><br><br><br><br><br><br><br>
								<p class="small-th">
								<br><br>
								</p>
							</th>
						</tr>
						<tr style="border:none !important;">
							<th class="text-left">Country/ Territory:
								<p class="small-th">
									
								</p>
							</th>
						</tr>
					</table>
				</th>
				<th  class="text-left" align="right">
					<table class="nested-table" autosize="1.6" style="border: none !important;">
						<tr style="border:none !important;">
							<th class="text-left" rowspan="1">Air WayBill No./ Tracking No:
								<p class="small-th">
									<br><br><br><br>
								</p>
							</th>
						</tr>
						<tr style="border:none !important;">
							<th class="text-left" rowspan="1" style="border: none !important;">Invoice No:
								<p class="small-th">
								<br><br><br><br>
								</p>
							</th>
							<th class="text-left" style="border: none !important;">Purchase Order No:
								<p class="small-th">
								<br><br><br><br>
								</p>
							</th>
						</tr>
						<tr style="border:none !important;">
							<th class="text-left" style="border: none !important;">Payment Terms:
							<p class="small-th">
								<br><br><br><br>
								</p>
								
							</th>
							<th class="text-left" style="border: none !important;">Bill of Lading:
							<p class="small-th">
							<br><br><br><br>
							</p>
							</th>
						</tr>
					</table>
				</th>
			</tr>
		
			<tr style="border: 1px solid black !important;">
				<th class="text-left">
					<table class="nested-table text-left " style="width:100% ;border:none !important;" autosize="1.6">
						<tr  style="border:none !important;">
							<th class="margin-adjust-top text-left" rowspan="1">CONSIGNEE: <br><br><br><br><br><br><br><br><br><br><br><br>
								<p class="small-th">
								<br><br>
								</p>
							</th>
						</tr>
						
						
						<tr  style="border:none !important;">
							<th class="text-left">Country/ Territory:
								<p class="small-th">
									
								</p>
							</th>
						</tr>
					</table>
				</th>
				<th class="text-left" align="right" style="width:50%">
					<table class="nested-table text-left " style="width:100%; border:none !important;" autosize="1.6">
						<tr  style="border:none !important;">
							<th class="margin-adjust-top text-left" rowspan="1">SOLD TO/ IMPORTER (if different from consignee): <br><br><br><br><br><br><br><br><br><br><br><br>
								<p class="small-th">
								<br><br>
								</p>
							</th>
						</tr>
						
						
						<tr  style="border:none !important;">
							<th class="text-left" >Country/ Territory:
								<p class="small-th">
									
								</p>
							</th>
						</tr>
					</table>
				</th>
			</tr>
			<tr height="700px">
				<th colspan="2"  class="text-left" >
					<table class="nested-table table-data main-table2" style="width:100% ; border: none !important;" autosize="1.6">
						<tr style="border: none !important;">
							<th>No. of Packages</th>
							<th>No. of Units</th>
							<th>Net Weight(LBS / KGS)</th>
							<th>Unit of Measure</th>
							<th colspan="5">Description of Goods</th>
							<th>Harmonized Tariff Number</th>
							<th>Country of Manufacture</th>
							<th colspan="2" >Unit Value</th>
							<th colspan="2" style="width:9%">Total Value</th>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td colspan="5"></td>
							<td></td>
							<td></td>
							<td colspan="2">0.000000</td>
							<td colspan="2">0.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td colspan="5"></td>
							<td></td>
							<td></td>
							<td colspan="2">0.000000</td>
							<td colspan="2">0.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td colspan="5"></td>
							<td></td>
							<td></td>
							<td colspan="2">0.000000</td>
							<td colspan="2">0.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td colspan="5"></td>
							<td></td>
							<td></td>
							<td colspan="2">0.000000</td>
							<td colspan="2">0.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td colspan="5"></td>
							<td></td>
							<td></td>
							<td colspan="2">0.000000</td>
							<td colspan="2">0.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td colspan="5"></td>
							<td></td>
							<td></td>
							<td colspan="2">0.000000</td>
							<td colspan="2">0.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td colspan="5"></td>
							<td></td>
							<td></td>
							<td colspan="2">0.000000</td>
							<td colspan="2">0.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td colspan="5"></td>
							<td></td>
							<td></td>
							<td colspan="2">0.000000</td>
							<td colspan="2">0.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td colspan="5"></td>
							<td></td>
							<td></td>
							<td colspan="2">0.000000</td>
							<td colspan="2">0.00</td>
						</tr>
						<tr style="border-right:none !important; border-left:none !important;border-bottom:none !important;">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td colspan="5"></td>
							<td></td>
							<td></td>
							<td colspan="2">0.000000</td>
							<td colspan="2">0.00</td>
						</tr>
						
					</table>
				</th>
			</tr>	
		</tbody>
	</table>

	<table style="border: 1px solid red !important; width: 120px; align-items: right; margin-left: 600px;">
		<tr>
			<th class="text-right" style="width: 45%; font-size:  10px; border-left: none !important;  border-bottom: none !important;border-top: none !important; margin-left:100% !important;"> Subtotal</th>
			<td style=" border-top:none !important;">0.00</td>
		</tr>
	</table>
</body>
</html>';


require_once __DIR__ . '/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('invoice.pdf');