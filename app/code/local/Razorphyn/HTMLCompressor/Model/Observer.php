<?php
	class Razorphyn_HTMLCompressor_Model_Observer
	{
		public function alterOutput($observer)
		{
			$lib_path = Mage::getBaseDir('lib').'/Razorphyn/html_compressor.php';
			
			include_once($lib_path);

			//Retrieve html body
			$response = $observer->getResponse();       
			$html     = $response->getBody();
			
			//Compress HTML
			$html=html_compress($html);
			
			//Send Response
			$response->setBody($html);
		}
	}
?>