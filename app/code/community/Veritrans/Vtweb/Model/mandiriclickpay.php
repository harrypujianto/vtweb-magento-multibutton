<?php
/**
 * Veritrans VT Web Model Standard
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtweb_Model_Indomaret
 * @author     Harry Pujianto
 * this class is used after placing order, if the payment is Veritrans, this class will be called and link to redirectAction at Veritrans_Vtweb_PaymentController class
 */
class Veritrans_Vtweb_Model_Mandiriclickpay extends Veritrans_Vtweb_Model_Abstract {

	protected $_code = 'mandiri_clickpay';
	protected $_paymentMethod	= 'mandiri_clickpay';

}
?>
