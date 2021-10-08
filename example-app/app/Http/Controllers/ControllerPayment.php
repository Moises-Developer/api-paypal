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
use PayPal\Api\PaymentExecution;


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
        try 
        {
            $payment->create($this->apiContext);
            return redirect()->away($payment->getApprovalLink());
        } catch (PayPalConnectionException $ex) 
        {
            echo $ex->getData();
        }
        
    }

    public function PayPalStatus(Request $request) 
    {
        //dd($request->all());
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
        $token = $request->input('token');

        if (!$paymentId || !$payerId || !$token) 
        {
            $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
            return redirect('/API/PayPal/Pay/Status/Fail')->with(compact('status', $status));
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        /** Execute the payment **/
        $result = $payment->execute($execution, $this->apiContext);

        if ($result->getState() === 'approved') 
        {
            $status = 'Gracias! El pago a través de PayPal se ha ralizado correctamente.';
            return redirect('/API/PayPal/Pay/Status/Success')->with(compact('status', $status));
        }

        $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
        return redirect('/API/PayPal/Pay/Status/Fail')->with(compact('status', $status));
    }

    function PayPalFail()
    {
        $status = 'PAGO FALLIDO';
        return view('paypal.failPay')->with(compact('status', $status));
    }

    function PayPalSuccess()
    {
        $status = "PAGO EXITOSO";
        return view('paypal.successPay')->with(compact('status', $status));
    }

    /*public function payWithPayPal()
    {
        $clientId = "AaAcHegkrUg-O-hxeF7nX2ZjQqZuSs48tfBBWzfYUSit9rtk8KSG8QcmQo9z-FkA6c2j2PkUOspuPO-M";
        $clientSecret = "EI5n9uf2xr1ocOK02pbWJt-DNanE43MSeXOzKpoTv-5da5DRJ1R6kQRAlJSpiFpNpMVx6jfVVvknXk4z";

        $environment = new SandboxEnvironment($clientId, $clientSecret);
        $client = new PayPalHttpClient($environment);

        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = [
                            "intent" => "CAPTURE",
                            "purchase_units" => [[
                                "reference_id" => "test_ref_id1",
                                "amount" => [
                                    "value" => "100.00",
                                    "currency_code" => "USD"
                                ]
                            ]],
                            "application_context" => [
                                "cancel_url" => "https://example.com/cancel",
                                "return_url" => "https://example.com/return"
                            ] 
                        ];

        try {
            // Call API with your client and get a response for your call
            $response = $client->execute($request);
            
            // If call returns body in response, you can get the deserialized version from the result attribute of the response
            dd($response);
        }catch (HttpException $ex) {
            echo $ex->statusCode;
            print_r($ex->getMessage());
        }



    }*/

}
