<?php

interface NotificationBuilder
{
    public function produceRecipient(): void;

    public function produceMessage(): void;

    public function produceFooter(): void;
}

class EmailNotificationBuilder implements NotificationBuilder
{
    private $notification;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->notification = new EmailNotification();
    }

    public function produceRecipient(): void
    {
        $this->notification->parts[] = "<br>Recipient: john.doe@example.com";
    }

    public function produceMessage(): void
    {
        $this->notification->parts[] = "<br>Message: Welcome to our service!";
    }

    public function produceFooter(): void
    {
        $this->notification->parts[] = "<br>Footer: Sent via Email";
    }

    public function getNotification(): EmailNotification
    {
        $result = $this->notification;
        $this->reset();
        return $result;
    }
}

class SMSNotificationBuilder implements NotificationBuilder
{
    private $notification;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->notification = new SMSNotification();
    }

    public function produceRecipient(): void
    {
        $this->notification->parts[] = "<br>Recipient: +1234567890";
    }

    public function produceMessage(): void
    {
        $this->notification->parts[] = "<br>Message: Your verification code is 123456";
    }

    public function produceFooter(): void
    {
        $this->notification->parts[] = "<br>Footer: Sent via SMS";
    }

    public function getNotification(): SMSNotification
    {
        $result = $this->notification;
        $this->reset();
        return $result;
    }
}

class EmailNotification
{
    public $parts = [];
    public function listParts(): void
    {
        echo "<br>Email Notification parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class SMSNotification
{
    public $parts = [];
    public function listParts(): void
    {
        echo "<br>SMS Notification parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class NotificationDirector
{
    private $builder;

    public function setBuilder(NotificationBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildBasicNotification(): void
    {
        $this->builder->produceRecipient();
    }

    public function buildFullFeaturedNotification(): void
    {
        $this->builder->produceRecipient();
        $this->builder->produceMessage();
        $this->builder->produceFooter();
    }
}


function clientCode(NotificationDirector $director)
{
    $emailBuilder = new EmailNotificationBuilder();
    $director->setBuilder($emailBuilder);

    echo "Standard basic email notification:\n";
    $director->buildBasicNotification();
    $emailBuilder->getNotification()->listParts();

    echo "<br>Standard full featured email notification:\n";
    $director->buildFullFeaturedNotification();
    $emailBuilder->getNotification()->listParts();

    echo "<br>Custom email notification:\n";
    $emailBuilder->produceRecipient();
    $emailBuilder->produceFooter();
    $emailBuilder->getNotification()->listParts();

    $smsBuilder = new SMSNotificationBuilder();
    $director->setBuilder($smsBuilder);

    echo "<br>Standard basic SMS notification:\n";
    $director->buildBasicNotification();
    $smsBuilder->getNotification()->listParts();

    echo "<br>Standard full featured SMS notification:\n";
    $director->buildFullFeaturedNotification();
    $smsBuilder->getNotification()->listParts();

    echo "<br>Custom SMS notification:\n";
    $smsBuilder->produceRecipient();
    $smsBuilder->produceMessage();
    $smsBuilder->getNotification()->listParts();
}

$director = new NotificationDirector();
clientCode($director);
