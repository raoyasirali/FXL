<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;



class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Fire base node js code
     *
     * 
     */


    public function index()
    {

// admin.initializeApp(
//   //credential: admin.credential.cert(serviceAccount),
//   //databaseURL: "https://foodxpress-9fe32.firebaseio.com"
// );
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/path/to/serviceAccountKey.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://foodxpress-9fe32.firebaseio.com')
        ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
        ->getReference('blog/posts')
        ->push([
        'title' => 'Laravel FireBase Tutorial' ,
        'category' => 'Laravel'
        ]);
        echo '<pre>';
        print_r($newPost->getvalue());
    }

}
