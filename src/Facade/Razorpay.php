<?php 

namespace Pravnkay\Razovel\Facade;

use Illuminate\Support\Facades\Facade;
 
/**
 * Razorpay - Facade to support integration with Laravel framework 
 *
 * @author     Praveen Kalaiarasu <github@praveen.bulc.club>
 * @package    Razorpay
 * @version    1.0.0
 * @since      Class available since Release 1.0.0
 */ 
class Razorpay extends Facade {
 
    protected static function getFacadeAccessor() { 
    	return 'razorpay'; 
    }
 
}