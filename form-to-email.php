<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}

$Date = $_POST['Date'];
$PropertyAddress = $_POST['PropertyAddress'];
$PropertyMunicipality = $_POST['PropertyMunicipality'];
$PropertyCounty = $_POST['PropertyCounty'];
$PropertyBlock = $_POST['PropertyBlock'];
$PropertyLot = $_POST['PropertyLot'];
$PropertySalesPrice = $_POST['PropertySalesPrice'];
$PropertySettlementDate = $_POST['PropertySettlementDate'];
$PropertyType = $_POST['PropertyType'];
$PropertyOccupiedBy = $_POST['PropertyOccupiedBy'];
$PropertyKey = $_POST['PropertyKey'];
$PropertyKeyNumber = $_POST['PropertyKeyNumber'];
$BuyerBorrowerName = $_POST['BuyerBorrowerName'];
$BuyerBorrowerMaritalStatus = $_POST['BuyerBorrowerMaritalStatus'];
$BuyerBorrowerMailingAddress = $_POST['BuyerBorrowerMailingAddress'];
$BuyerBorrowerHome = $_POST['BuyerBorrowerHome'];
$BuyerBorrowerWork = $_POST['BuyerBorrowerWork'];
$BuyerBorrowerCell = $_POST['BuyerBorrowerCell'];
$BuyerBorrowerEmail = $_POST['BuyerBorrowerEmail'];
$BuyerBorrowerNameLawFirm = $_POST['BuyerBorrowerNameLawFirm'];
$BuyerBorrowerAttorneyTelephone = $_POST['BuyerBorrowerAttorneyTelephone'];
$BuyerBorrowerAttorneyAddress1 = $_POST['BuyerBorrowerAttorneyAddress1'];
$BuyerBorrowerAttorneyAddress2 = $_POST['BuyerBorrowerAttorneyAddress2'];
$BuyerBorrowerAttorneysName = $_POST['BuyerBorrowerAttorneysName'];
$BuyerBorrowerAttorneyEmail = $_POST['BuyerBorrowerAttorneyEmail'];
$BuyerBorrowerAttorneyCell = $_POST['BuyerBorrowerAttorneyCell'];
$BuyerBorrowerAttorneyFax = $_POST['BuyerBorrowerAttorneyFax'];
$LenderCompanyName = $_POST['LenderCompanyName'];
$LenderTelephone = $_POST['LenderTelephone'];
$LenderAddress1 = $_POST['LenderAddress1'];
$LenderLicense = $_POST['LenderLicense'];
$LenderCompanyEmail = $_POST['LenderCompanyEmail'];
$LenderLoanOfficer = $_POST['LenderLoanOfficer'];
$LenderLoanOfficerLicense = $_POST['LenderLoanOfficerLicense'];
$LenderLoanOfficerTelephone = $_POST['LenderLoanOfficerTelephone'];
$LenderLoanOfficerExt = $_POST['LenderLoanOfficerExt'];
$LenderLoanOfficerCell = $_POST['LenderLoanOfficerCell'];
$LenderLoanOfficerEmail1 = $_POST['LenderLoanOfficerEmail1'];
$LenderLoanOfficerEmail2 = $_POST['LenderLoanOfficerEmail2'];
$LenderLoanProcessorName = $_POST['LenderLoanProcessorName'];
$LenderLoanProcessorTelephone = $_POST['LenderLoanProcessorTelephone'];
$LenderLoanProcessorExt = $_POST['LenderLoanProcessorExt'];
$LenderLoanProcessorEmail1 = $_POST['LenderLoanProcessorEmail1'];
$LenderLoanProcessorEmail2 = $_POST['LenderLoanProcessorEmail2'];
$LenderLoanProcessorLoanNumber = $_POST['LenderLoanProcessorLoanNumber'];
$LenderLoanProcessorMortageAmount = $_POST['LenderLoanProcessorMortageAmount'];
$LenderLoanMortgageType = $_POST['LenderLoanMortgageType'];
$SellersName1 = $_POST['SellersName1'];
$SellersName2 = $_POST['SellersName2'];
$SellersMaritalStatus = $_POST['SellersMaritalStatus'];
$Over62 = $_POST['SellersYes'];
$SellersMailingAddress = $_POST['SellersMailingAddress'];
$SellersHome = $_POST['SellersHome'];
$SellersWork = $_POST['SellersWork'];
$SellersCell = $_POST['SellersCell'];
$SellersContactEmail = $_POST['SellersContactEmail'];
$SellerAttorneyNameLawFirm = $_POST['SellerAttorneyNameLawFirm'];
$SellerAttorneyTelephone = $_POST['SellerAttorneyTelephone'];
$SellerAttorneyAddress1 = $_POST['SellerAttorneyAddress1'];
$SellerAttorneyAddress2 = $_POST['SellerAttorneyAddress2'];
$SellerAttorneysName = $_POST['SellerAttorneysName'];
$SellerAttorneyEmail = $_POST['SellerAttorneyEmail'];
$SellerAttorneyCell = $_POST['SellerAttorneyCell'];
$SellerAttorneyFax = $_POST['SellerAttorneyFax'];
$ListingBrokerName = $_POST['ListingBrokerName'];
$ListingBrokerLicense = $_POST['ListingBrokerLicense'];
$ListingBrokerAddress1 = $_POST['ListingBrokerAddress1'];
$ListingBrokerAddress2 = $_POST['ListingBrokerAddress2'];
$ListingBrokerTelephone = $_POST['ListingBrokerTelephone'];
$ListingBrokerEmail = $_POST['ListingBrokerEmail'];
$ListingBrokerAgentName = $_POST['ListingBrokerAgentName'];
$ListingBrokerAgentLicense = $_POST['ListingBrokerAgentLicense'];
$ListingBrokerAgentPhone = $_POST['ListingBrokerAgentPhone'];
$ListingBrokerAgentExt = $_POST['ListingBrokerAgentExt'];
$ListingBrokerAgentFax = $_POST['ListingBrokerAgentFax'];
$ListingBrokerAgentEmail = $_POST['ListingBrokerAgentEmail'];
$SellingBrokerName = $_POST['SellingBrokerAttorneysName'];
$SellingBrokerLicense = $_POST['SellingBrokerLicense'];
$SellingBrokerAddress1 = $_POST['SellingBrokerAddress1'];
$SellingBrokerAddress2 = $_POST['SellingBrokerAddress2'];
$SellingBrokerTelephone = $_POST['SellingBrokerTelephone'];
$SellingBrokerOfficeEmail = $_POST['SellingBrokerOfficeEmail'];
$SellingBrokerAgentName = $_POST['SellingBrokerAgentName'];
$SellingBrokerAgentLicense = $_POST['SellingBrokerAgentLicense'];
$SellingBrokerAgentPhone = $_POST['SellingBrokerAgentPhone'];
$SellingBrokerAgentOfficeExt = $_POST['SellingBrokerAgentOfficeExt'];
$SellingBrokerAgentFax = $_POST['SellingBrokerAgentFax'];
$SellingBrokerAgentEmail = $_POST['SellingBrokerAgentEmail'];

//Validate first
if(empty($BuyerBorrowerName)||empty($BuyerBorrowerEmail))
{
    echo " Borrower's name and email are mandatory. Click <a>here</a> to go back to complete the form. ";
    exit;
}

if(IsInjected($BuyerBorrowerEmail))
{
    echo "Bad email. Try entering a proper email address.";
    exit;
}

$email_from = 'info@collegiatetitle.com';//<== update the email address
$to = "agent@designismylife.com";//<== update the email address (send to multiple emails by inserting a comma between each entry)
$email_subject = "New Title Order";

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $BuyerBorrowerEmail \r\n";
$headers .= "CC: tester@gmail.com \r\n";
$headers .= "MIME-Version: 1.0 \r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1 \r\n";

$message = '<html><body style="font-size: 18px;">';
$message .= "<p>New Title Form Order from " . $BuyerBorrowerName . ".</p>";
$message .= "__";
$message .= "<p><strong>Property</strong></p>";
$message .= "<p>Date: " . $Date . "</p>";
$message .= "<p>Address: " . $PropertyAddress . "</p>";
$message .= "<p>Municipality: " . $PropertyMunicipality . "</p>";
$message .= "<p>County: " . $PropertyCounty . "</p>";
$message .= "<p>Block: " . $PropertyBlock . "</p>";
$message .= "<p>Lot: " . $PropertyLot . "</p>";
$message .= "<p>Sales Price: " . $PropertySalesPrice . "</p>";
$message .= "<p>Settlement Date: " . $PropertySettlementDate . "</p>";
$message .= "<p>Type: " . $PropertyType . "</p>";
$message .= "<p>Occupied By: " . $PropertyOccupiedBy . "</p>";
$message .= "<p>Key: " . $PropertyKey . "</p>";
$message .= "<p>Key Number: " . $PropertyKeyNumber . "</p>";
$message .= "__";
$message .= "<p><strong>Buyer(s) Borrower(s)</strong></p>";
$message .= "<p>Name: " . $BuyerBorrowerName . "</p>";
$message .= "<p>Marital Status: " . $BuyerBorrowerMaritalStatus . "</p>";
$message .= "<p>Mailing Address: " . $BuyerBorrowerMailingAddress . "</p>";
$message .= "<p>Home: " . $BuyerBorrowerHome . "</p>";
$message .= "<p>Work: " . $BuyerBorrowerWork . "</p>";
$message .= "<p>Cell: " . $BuyerBorrowerCell . "</p> ";
$message .= "<p>Email: " . $BuyerBorrowerEmail . "</p>";
$message .= "__";
$message .= "<p><strong>Buyer(s) Borrower(s) Attorney</strong></p>";
$message .= "<p>Name of Law Firm: " . $BuyerBorrowerNameLawFirm . "</p>";
$message .= "<p>Telephone: " . $BuyerBorrowerAttorneyTelephone . "</p>";
$message .= "<p>Address 1: " . $BuyerBorrowerAttorneyAddress1 . "</p>";
$message .= "<p>Address 2: " . $BuyerBorrowerAttorneyAddress2 . "</p>";
$message .= "<p>Attorney Name: " . $BuyerBorrowerAttorneysName . "</p>";
$message .= "<p>Email: " . $BuyerBorrowerAttorneyEmail . "</p>";
$message .= "<p>Cell: " . $BuyerBorrowerAttorneyCell . "</p>";
$message .= "<p>Fax: " . $BuyerBorrowerAttorneyFax . "</p>";
$message .= "__";
$message .= "<p><strong>Lender</strong></p>";
$message .= "<p>Company Name: " . $LenderCompanyName . "</p>";
$message .= "<p>Telephone: " . $LenderTelephone . "</p>";
$message .= "<p>Address: " . $LenderAddress1 . "</p>";
$message .= "<p>License: " . $LenderLicense . "</p>";
$message .= "<p>Company Email: " . $LenderCompanyEmail . "</p>";
$message .= "__";
$message .= "<p>Loan Officer: " . $LenderLoanOfficer . "</p>";
$message .= "<p>License: " . $LenderLoanOfficerLicense . "</p>";
$message .= "<p>Telephone: " . $LenderLoanOfficerTelephone . "</p>";
$message .= "<p>Ext: " . $LenderLoanOfficerExt . "</p>";
$message .= "<p>Cell: " . $LenderLoanOfficerCell . "</p>";
$message .= "<p>Email 1: " . $LenderLoanOfficerEmail1 . "</p>";
$message .= "<p>Email 2: " . $LenderLoanOfficerEmail2 . "</p>";
$message .= "__";
$message .= "<p>Loan Processor: " . $LenderLoanProcessorName . "</p>";
$message .= "<p>Telephone: " . $LenderLoanProcessorTelephone . "</p>";
$message .= "<p>Ext: " . $LenderLoanProcessorExt . "</p>";
$message .= "<p>Email 1: " . $LenderLoanProcessorEmail1 . "</p>";
$message .= "<p>Email 2: " . $LenderLoanProcessorEmail2 . "</p>";
$message .= "<p>Loan Number: " . $LenderLoanProcessorLoanNumber . "</p>";
$message .= "<p>Mortgage Amount: " . $LenderLoanProcessorMortageAmount . "</p>";
$message .= "<p>Loan Mortgage Type: " . $LenderLoanMortgageType . "</p>";
$message .= "__";
$message .= "<p><strong>Sellers</strong></p>";
$message .= "<p>Name 1: " . $SellersName1 . "</p>";
$message .= "<p>Name 2: " . $SellersName2 . "</p>";
$message .= "<p>Marital Status: " . $SellersMaritalStatus . "</p>";
$message .= "<p>Over 62: " . $Over62 . "</p>";
$message .= "<p>Mailing Address: " . $SellersMailingAddress . "</p>";
$message .= "<p>Home: " . $SellersHome . "</p>";
$message .= "<p>Work: " . $SellersWork . "</p>";
$message .= "<p>Cell: " . $SellersCell . "</p>";
$message .= "<p>Contact Email: " . $SellersContactEmail . "</p>";
$message .= "__";
$message .= "<p><strong>Seller(s) Attorney</strong></p>";
$message .= "<p>Name of Law Firm: " . $SellerAttorneyNameLawFirm . "</p>";
$message .= "<p>Telephone: " . $SellerAttorneyTelephone . "</p>";
$message .= "<p>Address 1: " . $SellerAttorneyAddress1 . "</p>";
$message .= "<p>Address 2: " . $SellerAttorneyAddress2 . "</p>";
$message .= "<p>Seller Attorney's Name: " . $SellerAttorneysName . "</p>";
$message .= "<p>Email: " . $SellerAttorneyEmail . "</p>";
$message .= "<p>Cell: " . $SellerAttorneyCell . "</p>";
$message .= "<p>Fax: " . $SellerAttorneyFax . "</p>";
$message .= "<p>Telephone: " . $SellerAttorneyTelephone . "</p>";
$message .= "__";
$message .= "<p><strong>Broker's Data</strong></p>";
$message .= "<p>Listing Broker Name: " . $ListingBrokerName . "</p>";
$message .= "<p>License: " . $ListingBrokerLicense . "</p>";
$message .= "<p>Address 1: " . $ListingBrokerAddress1 . "</p>";
$message .= "<p>Address 2: " . $ListingBrokerAddress2 . "</p>";
$message .= "<p>Telephone: " . $ListingBrokerTelephone . "</p>";
$message .= "<p>Email: " . $ListingBrokerEmail . "</p>";
$message .= "<p>Name: " . $ListingBrokerAgentName . "</p>";
$message .= "<p>License: " . $ListingBrokerAgentLicense . "</p>";
$message .= "<p>Phone: " . $ListingBrokerAgentPhone . "</p>";
$message .= "<p>Ext: " . $ListingBrokerAgentExt . "</p>";
$message .= "<p>Fax: " . $ListingBrokerAgentFax . "</p>";
$message .= "<p>Email: " . $ListingBrokerAgentEmail . "</p>";
$message .= "__";
$message .= "<p>Selling Broker Name: " . $SellingBrokerName . "</p>";
$message .= "<p>License: " . $SellingBrokerLicense . "</p>";
$message .= "<p>Address 1: " . $SellingBrokerAddress1 . "</p>";
$message .= "<p>Address 2: " . $SellingBrokerAddress2 . "</p>";
$message .= "<p>Telephone: " . $SellingBrokerTelephone . "</p>";
$message .= "<p>Office Email: " . $SellingBrokerOfficeEmail . "</p>";
$message .= "<p>Agent Name: " . $SellingBrokerAgentName . "</p>";
$message .= "<p>License: " . $SellingBrokerAgentLicense . "</p>";
$message .= "<p>Phone: " . $SellingBrokerAgentPhone . "</p>";
$message .= "<p>Office Ext: " . $SellingBrokerAgentOfficeExt . "</p>";
$message .= "<p>Fax: " . $SellingBrokerAgentFax . "</p>";
$message .= "<p>Email: " . $SellingBrokerAgentEmail . "</p>";
$message .= "</body></html>";

//Send the email!
mail($to,$email_subject,$message,$headers);

//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
