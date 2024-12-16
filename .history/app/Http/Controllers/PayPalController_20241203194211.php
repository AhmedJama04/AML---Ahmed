<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Plan;
use PayPal\Api\Payer;
use PayPal\Api\Agreement;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PayPalController extends Controller
{
    public function PayWithPayPal(Request $request){
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                config('services.paypal.client_id'),
                config('services.paypal.client_secret')
            )
            );

            $payer = new \PayPal\Api\Payer();
            $payer->setPaymentMethod('paypal');

            $amount = new \Paypal\Api\Amount();
            $amount->setTotal($request->input('amount'));
            $amount->setCurrency('GBP');

            $transaction = new \PayPal\Api\Transaction();
            $transaction->setAmount($amount);

            $redirectUrls = new \Paypal\Api\RedirectUrls();
            $redirectUrls
            ->setReturnUrl(url('/payment-success'))
            ->setCancelUrl(url('/payment-cancelled'));

            $payment = new \Paypal\Api\Payment();
            $payment
            ->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions($transaction)
            ->setRedirectUrls($redirectUrls)

            try {
                $payment->create($apiContext);
                return redirect($payment->getApprovalLink());
            } catch (\Paypal\Exception\PayPalConnectionException $exception) {
                return redirect()
            }

    }
}