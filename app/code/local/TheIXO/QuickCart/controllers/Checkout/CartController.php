<?php
require_once('Mage/Checkout/controllers/CartController.php');
 
class FastDivision_QuickCart_Checkout_CartController extends Mage_Checkout_CartController
{
    /**
    * Shopping cart display action
    */
    public function indexAction()
    {
        $cart = $this->_getCart();
        if ($cart->getQuote()->getItemsCount()) {
            $cart->init();
            $cart->save();
 
            if (!$this->_getQuote()->validateMinimumAmount()) {
                $warning = Mage::getStoreConfig('sales/minimum_order/description');
                $cart->getCheckoutSession()->addNotice($warning);
            }
        }
 
        foreach ($cart->getQuote()->getMessages() as $message) {
            if ($message) {
                $cart->getCheckoutSession()->addMessage($message);
            }
        }
 
        /**
         * if customer enteres shopping cart we should mark quote
         * as modified bc he can has checkout page in another window.
         */
        $this->_getSession()->setCartWasUpdated(true);
 
	// Quick Cart: If AJAX call, then return the cart dropdown HTML
        if ($this->getRequest()->isXmlHttpRequest()) {
            $this->_sendSideCartHtml();
        } else {
            Varien_Profiler::start(__METHOD__ . 'cart_display');
            $this
                ->loadLayout()
                ->_initLayoutMessages('checkout/session')
                ->_initLayoutMessages('catalog/session')
                ->getLayout()->getBlock('head')->setTitle($this->__('Shopping Cart'));
            $this->renderLayout();
            Varien_Profiler::stop(__METHOD__ . 'cart_display');
        }
    }
 
     /**
     * Set back redirect url to response
     *
     * @return Mage_Checkout_CartController
     */
    protected function _goBack()
    {
	// Quick Cart: If AJAX call, then return the cart dropdown HTML
	if ($this->getRequest()->isXmlHttpRequest()) {
		$this->_sendSideCartHtml();
	} else {
	       $returnUrl = $this->getRequest()->getParam('return_url');
	       if ($returnUrl) {
	           // clear layout messages in case of external url redirect
	           if ($this->_isUrlInternal($returnUrl)) {
	               $this->_getSession()->getMessages(true);
	           }
	           $this->getResponse()->setRedirect($returnUrl);
	       } elseif (!Mage::getStoreConfig('checkout/cart/redirect_to_cart')
	           && !$this->getRequest()->getParam('in_cart')
	           && $backUrl = $this->_getRefererUrl()
	       ) {
	           $this->getResponse()->setRedirect($backUrl);
	       } else {
	           if (($this->getRequest()->getActionName() == 'add') && !$this->getRequest()->getParam('in_cart')) {
	               $this->_getSession()->setContinueShoppingUrl($this->_getRefererUrl());
	           }
	           $this->_redirect('checkout/cart');
	       }
	       return $this;
	}
    }
 
    protected function _sendSideCartHtml()
    {
	// Return the Quick Cart's dropdown block
        $this->loadLayout();
        $output = $this->getLayout()->getBlock('quickcart')->toHtml();
        $this->getResponse()->setBody($output);
    }
}