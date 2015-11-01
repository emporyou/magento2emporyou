<?php
/**
 * Emporyou.com
 * http://emporyou.com
 * Create a simple link for a product from the Admin area to open the emporyou coupon maker.
 */

/**
 * Customer edit block
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author     Hideki Yamamoto <hideki@yamamoto.mx>
 */
class emporyou_magento2emporyou_Adminhtml_Block_Catalog_Product_Edit extends Mage_Adminhtml_Block_Catalog_Product_Edit
{
    public function getHeader()
    {
        $header = '';
        if ($this->getProduct()->getId()) {
            $header = $this->htmlEscape($this->getProduct()->getName());
            if ($this->getProduct()->getProductUrl() && (1 == $this->getProduct()->getStatus())) {
                $header = "<a href='javascript:var _u1=function(o,t,v){o.setAttribute(t,v);};var _u2=function(u){var o=document.createElement('script');_u1(o,'type','text/javascript');_u1(o,'src',u);document.getElementsByTagName('head')[0].appendChild(o);};_u2('http://emporyou.com/js/magento.js');'>&gt;&gt;emporyou</a>";
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
