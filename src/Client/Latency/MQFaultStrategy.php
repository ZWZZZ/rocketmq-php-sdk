<?php
namespace RocketMQ\Client\Latency;

class MQFaultStrategy
{
    public $log;
    public $latencyFaultTolerance;
    public $sendLatencyFaultEnable = false;
    public $latencyMax = [50, 100, 550, 1000, 2000, 3000, 15000];
    public $notAvailableDuration = [0, 0, 30000, 60000, 120000, 180000, 600000];
    public function __construct()
    {
        $this->log = ClientLogger.getLog();
        $this->latencyFaultTolerance = new LatencyFaultToleranceImpl();
    }
    public function getNotAvailableDuration()
    {

    }
    public function setNotAvailableDuration($notAvailableDuration)
    {
        $this->notAvailableDuration = $notAvailableDuration;
    }
    public function setSendLatencyFaultEnable($sendLatencyFaultEnable)
    {
        $this->setSendLatencyFaultEnable = $sendLatencyFaultEnable;
    }
    public function selectOneMessageQueue($tpInfo, $lastBrokerName)
    {

    }
    public function updateFaultItem($brokerName, $currentLatency, $isolation)
    {

    }

    public function computeNotAvailableDuration($currentLatency)
    {

    }
}