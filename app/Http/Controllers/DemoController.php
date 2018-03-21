<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class DemoController extends Controller
{
    
    public function checkapi(){
        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImRiNzkyOWQ1M2M2NDI2OGZkYzBiNjRmOTBiYjlkZjZiOTcyYzc0YjNhMWQyM2FmOTVhMzUwNzJkNzEzOTdhOTgzNGU1NWRlYmZlZGNjYjRkIn0.eyJhdWQiOiIxIiwianRpIjoiZGI3OTI5ZDUzYzY0MjY4ZmRjMGI2NGY5MGJiOWRmNmI5NzJjNzRiM2ExZDIzYWY5NWEzNTA3MmQ3MTM5N2E5ODM0ZTU1ZGViZmVkY2NiNGQiLCJpYXQiOjE1MjE2NTAwNDEsIm5iZiI6MTUyMTY1MDA0MSwiZXhwIjoxNTIyOTQ2MDQxLCJzdWIiOiIiLCJzY29wZXMiOltdfQ.PZTPD0kfscMueuAgmYln8kN2Bm9GZ1IjLvlP7yvtND9pU9bZCm0tgwYv2cg0ooXcQT0EkWscLVu4i14B9Az_USXemrcY4Ru-a3AOlayxrWzqnGS9eaB-ZUHtJ1wSw3SfnK5hpM3gaPi-0MabPHeZiDxLrd9U7vA3AW69F7Znz9s43n5BePOnVjUci5PCyB9RorPrkbdKypebIJ8qTI6nUfX7LXYSGvkPtFvQpKpG3o9GzAKszp_KF-U-nnnGcWsNnc3_vBbwD-fXuS2ZMuQF_ta54tsAF8CJ_CwN8zpDm3byXWgkTbtqe_wYRxaD-ANWjoepcEqMeLa0wzQC-QeJmoAzP92GpHk1Zbe9EzPhm1bHtW8es2O6ItftyJoTbzgZyCaJP_8HfANl4-wT6SWsdWqHOwbpmXMAJF1Am_ibIB6m1ac3t40G4heQ0EUbEMDzzAIsQgydT50QVIVHE0eJmleNcMEf-S4bWqJGDQv1nzYbkDzA631I3iiF3CU61pgy_N29F0v3Rny8sUn5AczbSYAd_OjbGxsZvKGlhyKIfa_mJU3JYPdMOZzS0PaLV8ElyYUsrWP5LvPjbdUuRCz5kpKxB8tlxiqqQm6bxnvWiUdNvSp5kSwJkX5weiU5GVHMgFEA5UidsukzPr17DCl2zYUWAPhe3LWw0sIqqmj-8ko';
        $client = new Client();
        $body = $client->request('GET','http://porchlightdev.getventive.com/api/v1/mls', ['Accept' => 'application/json', 'Authorization' => 'Bearer ' . $token])->getBody();
        $contents = (string) $body;
        $data = json_decode($contents);
        dd($data);
    }
    




    
    
}
