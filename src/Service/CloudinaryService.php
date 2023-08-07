<?php 

namespace App\Service;

use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Configuration\Configuration;
use Symfony\Component\HttpFoundation\File\UploadedFile;

   Configuration::instance([
            'cloud' => [
                'cloud_name' => 'db9qvgg30', 
                'api_key' => '691736231162851', 
                'api_secret' => 'VlNlG26QuRR5XvmTXtJ4UmaGaIo'],
              'url' => [
                'secure' => true]]);

                $data = ( new UploadApi())->upload('../public/assets/img_users/64cffbbc73358.jpg');

