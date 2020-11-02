# Table of Contents



# Introduction

Razorvel is an easy to remember usage of the already existing API for Razorpay API to use in Laravel. It removes the multiple chained calls to various API requests and uses a co-joined name that is easy to remember. This project was created for self use and I am documenting this as a request from one of my friend.

# Installation

You can install the package from packagist

    composer require pravnkay/razorvel

This will install the package. Use the following environment variables in your .env file

    RAZORPAY_KEY_ID=<insert your Razorpay account API Key ID>
    RAZORPAY_KEY_SECRET=<insert your Razorpay account Key Secret>

If you prefer, you can use the below command to publish the assets file

    php artisan vendor:publish --provider="Pravnkay\Razorvel\Providers\RazorvelServiceProvider" --tag="config"

This will publish the config file, **razorpay.php**.

# Usage

The package registers a facade ***Razorpay*** which can be used directly in the controller.

#### Example

    <?php
    
    use Razorpay;

    class PaymentController extends BaseController
    {
		public function index(){

			$razorpay = new Razorpay;
			$razorpay->getPaymentDetails('pay_FuamyYLlCcaSs4');   

		}   
    }

# Methods Available
The following access methods are available.

 1. Payments
	 1. getPaymentDetails($payment_id)
	 2. getAllPayments()
 2. Orders
	 1. createOrder($orderContent)
	 2. getOrderDetails($order_id)
	 3. getAllOrders()
 3. Refunds
	 1. createRefund($refund_contents)
	 2. getRefundDetails($refund_id)
 4. Cards
	 1. getCardDetails($card_id)
 5. Customers
	 1. addOrUpdateUser($user_contents)
	 2. getAllCustomers()
	 3. getCustomerDetails($customer_id)

# ToDo

1. Improve Documentation
2. Add support for all API endpoints
3. Integrate a subscription billing service
4. Create a user payments portal page like the new Stripe's for Razorpay

# Support

I will be happy to support anyone who finds this useful to get it to use in their projects. I also welcome any critics/suggestions on this project. Do let me know yours through github@praveen.bulc.club

Have a good day !
