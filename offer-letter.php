<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Offer Letter</title>
</head>

<body>
<center>
<table border="0" width="40%" style="font-family: arial; text-align: justify"  id="tblOfferLetter">
	<tr>
		<td colspan="2">
		<img border="0" src="images/header.jpg" style="width: 750px; padding-bottom: 100px; border: none;"></td>
	</tr>
	<tr>
		<td width="50%">Date: <?php echo " " . date("d/m/Y") . "<br>"; ?></td>
		<td align="right">Ref. No.<?php echo $_POST["ref-no"];?></td>
	</tr>
	<tr>
		<td colspan="2" style="padding: 30px 0;">
		<p align="center"><u><b>INTERNSHIP: OFFER LETTER</b></u></td>
	</tr>
	<tr>
		<td colspan="2">
			<b>To,<br />
			<?php echo $_POST["Name"]; ?>,</b><br /><br />
			With reference to your interview, we are pleased to inform you that you have been selected as "<b><?php echo $_POST["Position"];
			?> intern"
			</b> in our NGO - "Suvidha Mahila Mandal", with the following terms and conditions.<br />
			<ul>
			<li>You will provide the Fundraising Services to SUVIDHA FOUNDATION and deliver the effect of the work.
			<li>The internship period will be from <b><?php echo $_POST["Startday"];?></b> to <b><?php echo $_POST["enddate"];?></b>.
			<li>Your work base station is work from the office and six days a week.
			<li>It is a paid Internship. The certificate of completion will be given only if you invest 6 hours daily on all working days.
			You must participate in the daily team meetings through Google Meet. Also, the letter holds no value without a
			completion certificate from us with a unique identification number, which can be verified online.
			<li>During the internship period and thereafter, you will not give out to anyone in writing or by word of mouth or
			otherwise particulars or details of work process, technical know-how, research carried out, security arrangements
			and/or matters of confidential or secret nature which you may come across during your service in this organization.
			<li>In case of any misconduct which causes financial loss to the NGO or hurts its reputation and goodwill of the
			organization, the management has the right to terminate any intern. In case of termination, the management will not
			be issuing certificates to the intern.
			<li>It is necessary for an intern to return all the organization belongings (login credentials, media created, and system) at
			the time of leaving the organization. A clearance and experience certificate will be given after completing the
			formalities. If any employee leaves the job/Internship without completing the formality, the organization will take
			necessary action. All the software/courses/data developed by the interns or any employee for the Suvidha Mahila
			Mandal are intellectual property of the organization & are protected by Indian Copyright Act. All the data generated
			during the internship period, is the property right of organization and can be used for any purpose. In case of any
			piracy, strict legal action will be taken by the organization against erring persons. No information or source codes or
			course curriculum or business secrets or financial position or other details of organization shall be discussed among
			friends or relatives or our competitors. Such leakage of information is likely to cause financial loss to the organization.
			Hence, in such a case, the organization will be terminating the employee immediately and if required, further legal
			action will be taken against that intern.</li>
			</ul><br />
			<img src="images/signature.jpg" style="margin-left: -20px; width: 200px; border: none;"><br />
			<b>Mrs. Shobha Motghare</b><br />
			Secretary, Suvidha Mahila Mandal
		</td>
	</tr>
</table>
<br><br>
<input type="button" id="btnExport" value="Export" onclick="Export()" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('tblOfferLetter'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("OfferLetter.pdf");
                }
            });
        }
    </script>


</center>
</body>

</html>