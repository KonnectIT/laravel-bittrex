<?php
namespace Pepijnolivier\Bittrex;

interface ClientContract
{
    public function getMarkets();
    public function getCurrencies();
    public function getTicker($marker);
    public function getMarketSummaries();
    public function getMarketSummary($market);
    public function getOrderBook($market, $type, $depth=20);
    public function getMarketHistory($market);
    public function buyLimit($market, $quantity, $rate);
    public function TradeBuy($market, $quantity, $rate, $orderType = 'LIMIT', $timeInEffect = 'GOOD_TIL_CANCELED', $conditionType = 'NONE', $target = 0);
    public function sellLimit($market, $quantity, $rate);
    public function cancelOrder($uuid);
    public function getOpenOrders($market=null);
    public function getBalances();
    public function getBalance($currency);
    public function getDepositAddress($currency);
    public function withdraw($currency, $quantity, $address, $paymentId=null);
    public function getOrder($uuid);
    public function getOrderHistory($market=null);
    public function getWithdrawalHistory($currency=null);
    public function getDepositHistory($currency=null);

    public function getValidChartDataTickIntervals();
    public function getChartData($marketName, $tickInterval='hour');
}
