<?php
/**
 * Openstep Media
 * http://www.openstepmedia.com
 * Create a simple preview link for a product from the Admin area
 */

/**
 * Customer edit block
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author     Seth Markowitz <seth@openstepmedia.com>
 */
class Openstepmedia_AdminProductUrl_Adminhtml_Block_Catalog_Product_Edit extends Mage_Adminhtml_Block_Catalog_Product_Edit
{
    public function getHeader()
    {
        $header = '';
        if ($this->getProduct()->getId()) {
            $header = $this->htmlEscape($this->getProduct()->getName());
            if ($this->getProduct()->getProductUrl() && (1 == $this->getProduct()->getStatus())) {
                $header = "<a href='" . $this->getProduct()->getProductUrl() . "' target='_blank'>$header</a>";
            }
        }
        else {
            $header = Mage::helper('catalog')->__('New Product');
        }
        if ($setName = $this->getAttributeSetName()) {
            $header.= ' (' . $setName . ')';
        }

        return $header;
    }
}
