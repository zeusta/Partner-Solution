<?php 
class Magestore_SolutionPartner_Block_Adminhtml_Solutionpartner_Renderer_Website
	extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
	/* Render Grid Column*/
	public function render(Varien_Object $row) 
	{				
		$html = null;
		if($row->getWebsite()){
			$link = $row->getWebsite();
			if(count(explode('http://', $link))<=1 && count(explode('https://', $link))<=1)
				$link = 'http://'.$link;
			$html = '<a href="'.$link.'" target="_blank">'
					 .$row->getWebsite().'</a>';							
		}
		return $html;
	}	
	
}