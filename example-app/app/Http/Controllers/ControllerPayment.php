<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\Amount;
use PayPal\Exception\PayPalConnectionException;
use Srmklive\PayPal\Services\ExpressCheckout;

require __DIR__  . '../../../../vendor/autoload.php';

class ControllerPayment extends Controller
{

    private $apiContext;

    public function __construct()
    {
        $payPalConfig = Config::get('paypal');

        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['secret']
            )
        );

        $this->apiContext->setConfig($payPalConfig['settings']);

        //dd($this->apiContext);
    }

    public function payWithPayPal()
    {
        
        $payer = new Payer();
        $payer->setPaymentMethod('Paypal');

        $amount = new Amount();
        $amount->setTotal('3.99');
        $amount->setCurrency('USD');

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        // $transaction->setDescription('See your IQ results');

        $callbackUrl = url('/API/PayPal/Pay/Status');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);
            
        try {
            $payment->create($this->apiContext);
            return redirect()->away($payment->getApprovalLink());
        } catch (PayPalConnectionException $ex) {
            echo $ex->getData();
        }

        //dd($payment->getLinks());
        $payment->create($this->apiContext);
        return redirect()->away('https://www.sandbox.paypal.com/webapps/auth/protocol/openidconnect/v1/tokenservice');
        //var_dump($payment->getApprovalLink());
        
    }

    public function PayPalStatus(Request $request) 
    {
        dd($request->all());
    }

    

}
