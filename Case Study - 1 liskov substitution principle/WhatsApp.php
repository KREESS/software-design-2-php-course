<?php

include_once "SocialMedia.php";
include_once "VideoGroupManager.php";

class WhatsApp implements SocialMedia, VideoGroupManager
{
    public function chat(): void
    {
        echo "Mengobrol di WhatsApp...\n";
    }

    public function sendPhotosAndVideos(): void
    {
        echo "Mengirim foto dan video di WhatsApp...\n";
    }

    public function callGroupVideo(): void
    {
        echo "Memanggil video grup di WhatsApp...\n";
    }
}
