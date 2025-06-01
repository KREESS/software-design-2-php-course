<?php

include_once "SocialMedia.php";
include_once "PostMediaManager.php";

class Instagram implements SocialMedia, PostMediaManager
{
    public function chat(): void
    {
        echo "Ngobrol di Instagram...\n";
    }

    public function sendPhotosAndVideos(): void
    {
        echo "Mengirim foto dan video di Instagram...\n";
    }

    public function publishPost(): void
    {
        echo "Memublikasikan postingan di Instagram...\n";
    }
}
