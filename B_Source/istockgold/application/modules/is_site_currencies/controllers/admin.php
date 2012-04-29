<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * modules/category/controllers/admin.php
 * Kaimonokago shopping cart on CodeIgniter
 * Author   Shin Okada
 * Contact okada.shin@gmail.com
 * version: 1.1.4 beta
 *
 *
 */

interface IApiService
{
    function balance($currency);
    function accountName($accountToRetrieve);   
}


class SoapApiAgent implements IApiService
{
    public $root_url = "https://api2.libertyreserve.com/services/apiservice.asmx?WSDL";
    public $auth;
    public $client;
    
    function __construct(Authentication $a)
    {
        $this->auth = $a;    
    }
   
    public function setupCredentials()
    {        
        $this->client = new SoapClient($this->root_url); 
        
        $Authentication = array('AccountNumber' => $this->auth->accountId, 'ApiName' => $this->auth->apiName, 'Token' => $this->auth->createAuthToken());
        $header =  new SoapHeader("https://api2.libertyreserve.com/soap/", "Authentication", $Authentication);
        $this->client->__setSoapHeaders(array($header));
    }
    
    public function accountName($accountToRetrieve)
    {
        $this->setupCredentials();  
                                                         
        try{
            $accountName = $this->client->AccountName($accountToRetrieve); 
            return $accountName;
        }
        catch (Exception $e)
        {
            $this->outputError($e);
        } 
    }
    
    public function balance($currency)
    {
        $this->setupCredentials(); 
        
        try{
            $balance = $this->client->Balance(); 
            return $balance->$currency;
        }
        catch (Exception $e)
        {
            $this->outputError($e);
        }     
    }
    
    public function history($dateFrom, $dateTo, $currency="Any", $direction="Any", $source="Any", $anonymous="Any", $reference="", $relatedAccount="", $amountFrom=0.0, $amountTo=0.0)
    {
        $dateFrom = $this->getSoapDate($dateFrom);
        $dateTo = $this->getSoapDate($dateTo);
        
        
        $spec = array(
            'From' => $dateFrom, 
            'Till' => $dateTo, 
            'Currency' => $currency, 
            'Direction' => $direction, 
            'RelatedAccount' => $relatedAccount, 
            'Reference' => $reference, 
            'Source' => $source, 
            'Private' => $anonymous, 
            'AmountFrom' => $amountFrom, 
            'AmountTo' => $amountTo 
        );
        
        $this->setupCredentials(); 
        
        try{
            $pageNumber = 0;
            $history = array();
            while(true)
            {
                $historyPage = $this->client->History($spec, $pageNumber++, 20);   
                if(is_array($historyPage->Transactions->Transaction))
                    $history = array_merge($history, $historyPage->Transactions->Transaction); 
                else
                    array_push($history, $historyPage->Transactions->Transaction);
                
                if(!$this->hasMorePages($historyPage))
                { 
                    foreach($history AS $item)
                    {
                        $item->Date = $this->getFormatDate($item->Date);
                    }
                    return $history;                 
                }     
            };
        }
        catch (Exception $e)
        {
            $this->outputError($e);
        }           
    }
    
    public function findTransaction($receiptId)
    {
        $this->setupCredentials(); 
        
        try{
            $findTransfer = $this->client->FindTransaction($receiptId); 
            $findTransfer->Date = $this->getFormatDate($findTransfer->Date);
            return $findTransfer;
        }
        catch (Exception $e)
        {
            $this->outputError($e);
        } 
    }
    
    public function transfer($payee, $currency, $amount, $private, $purpose, $reference="", $memo="")
    {        
        $private=="true"?$private=true:$private=false;
        
        $spec = array(
                'Payee' => $payee,
                'Amount' => $amount,
                'Currency' => $currency,
                'Memo' => $memo,
                'Reference' => $reference,
                'Private' => $private,
                'Purpose' => $purpose
        );
        $this->setupCredentials(); 
        
        try { 
            $history = $this->client->Transfer($spec); 
            $history->Date = $this->getFormatDate($history->Date);
            return $history;
        }
        catch (Exception $e)
        {
            $this->outputError($e);
        } 
    }

    private function hasMorePages($response)
    {
        try {
            return (bool)$response->HasMore;
        }
                
        catch (Exception $e) {
            $this->outputError($e);
        }
    }
    
    private function outputError($e)
    {          
        //echo $e->getMessage();
        //die;
    }
    
     private function getSoapDate($inputDate)
     {
        $timeStamp = strtotime($inputDate);
        $soapDate = date("Y-m-d", $timeStamp). "T" . date("H:i:s", $timeStamp);

        return $soapDate;
     }
     
     private function getFormatDate($inputDate)
     {
        $date = str_replace("T", " ", $inputDate);
        $date = str_replace("Z", "", $date);
        return $date;
     }
}

function __autoload($class_name) { 
    include_once($class_name . ".php"); 
} 

class Authentication
{
    public $accountId;
    public $apiName;
    public $securityWord;
    
    function __construct($accountId, $apiName, $securityWord)
    {
        $this->accountId    = $accountId;
        $this->apiName      = $apiName;
        $this->securityWord = $securityWord;
    } 
    
    public function createAuthToken()
    {
        $datePart = gmdate("Ymd");
        $timePart = gmdate("H");
        
        $authString = $this->securityWord . ":" . $datePart . ":" . $timePart;
        $sha256     = bin2hex(mhash(MHASH_SHA256, $authString));
        return strtoupper($sha256);
    }
}

class ApiAgentFactory
{
   const XML = "xml";
   const NVP = "nvp";
   const JSON = "json";
   const SOAP = "soap";
    
   public function createApiAgent($type, Authentication $auth)
   {
        switch($type)
        {
           case "xml": 
              return new XmlApiAgent($auth); break;
           case "nvp":
              return new NvpApiAgent($auth); break;
           case "json": 
              return new JsonApiAgent($auth); break;       
           case "soap": 
              return new SoapApiAgent($auth); break;          
           default: 
              die("Error"); 
              break;
        }     
   }
}


class HistoryItem
{
    public $Batch;
    public $Date; 
    public $Amount; 
    public $Fee; 
    public $Balance; 
    public $Currency; 
    public $Payer; 
    public $PayerName; 
    public $Payee;
    public $PayeeName;
    public $Memo;
    public $Private;
    public $Reference;
    public $Source;
}

class Admin extends Shop_Admin_Controller 
{
    private $module;
    private $store_key;
    
    function __construct()
    {
        parent::__construct();
        // Check for access permission
        $this->load->model('MSiteCurrencies');
        $this->module=basename(dirname(dirname(__FILE__)));
        $this->module='is_site_currencies';
        mb_internal_encoding('UTF-8');
    }

    function index()
    {
        $data = $this->common_home();
        $data['page'] = "admin/admin_site_currencies_home";
        $this->load->view($this->_container,$data);
    }

    /*
    * This is used in index() and function Ajaxgetupdatecat()
    */ 

    function common_home()
    {
        $fields = array('id','c_id','key','display','value','note','order');
        $orderby = array('id','order');
        $data['site_currencies'] = $this->MIStockGold->getAll("account_setting",$fields, $orderby);
        $data['module'] = $this->module;
        $this->store = $data['site_currencies'];
        return $data;
    }

	function _fields()
    {
    	$data = null;
    	return $data;
    }

    function fields($value)
    {
    	$main_value = str_replace(".", "_", $value);  
        $data = array(
        'value'      => $_POST[$main_value]
        );
        return $data;
    }

 	function getAccount($accountID) 
    {
    	echo '</script> </script>';
		$auth = new Authentication("U9450274", "NIW", "tungns00457");
		$accountToRetrieve = $accountID;
		$apiAgent = ApiAgentFactory::createApiAgent(ApiAgentFactory::SOAP, $auth); 
		$accountName = $apiAgent->accountName($accountToRetrieve);  
		$data = array(
        'value'      => $accountName
        );
        return $data;
    }
    
    function edit()
    {
        if ($this->input->post('liberty_account') && $this->input->post('liberty_account_name') &&
        $this->input->post('liberty_account_storename') && $this->input->post('western_receiver_firstname') &&
        $this->input->post('western_receiver_lastname') && $this->input->post('western_receiver_city') &&
        $this->input->post('western_receiver_country'))
        {
            $this->store_key = $this->MSiteCurrencies->getAllKey();
            foreach ($this->store_key as $key => $temp)
			{
				if ($temp['key'] == 'liberty.account')
				{
					$data = $this->getAccount($_POST['liberty_account']);
					if (isset($data['value']))
					{
						$this->MSiteCurrencies->updateValueByKey('liberty.account.name',$data);
            			$data = $this->fields($temp['key']);
          				$this->MSiteCurrencies->updateValueByKey($temp['key'],$data);
					}
					else
					{
						echo '<script language="JavaScript" type="text/javascript">
						alert("Account Id is not exsist!");
						</script>';
					}
				}
				else
				if ($temp['key'] == 'liberty.account.name')
				{
				}
				else
				{
					$data = $this->fields($temp['key']);
          		    $this->MSiteCurrencies->updateValueByKey($temp['key'],$data);
				}
			}
        }
        redirect('is_site_currencies/admin/index','refresh');
    }
}   
//end class
?>
