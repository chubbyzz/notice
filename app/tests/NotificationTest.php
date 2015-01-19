<?php

use \Mockery as m;


class NotificationTest extends TestCase {

    public function testShouBeTranslaterWithParams()
    {
        $notification = m::mock("Notification");
        $notification->message = "New message with :param";
        $notification->param = ["param" => "novo parametro"];

        $this->assertEquals("nova messaem com novo parametro")
    }
    public function testShouBeTranslater()
    {
        $notification = m::mock("Notification");
        $notification->message = "New message with :param";
        $notification->param = ["param" => "novo parametro"];

        $this->assertEquals("nova messaem com novo parametro")
    }
}
