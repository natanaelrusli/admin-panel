<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use \Kreait\Firebase\Database;
class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factory = (new Factory)->withServiceAccount(__DIR__.'/kode-koin-firebase-adminsdk-6try0-1b9870e118.json');

        $database = $factory->createDatabase();

        $newPost = $database
        ->getReference('users')
        ->push([
            'title' => 'Testing data to add' ,
            'category' => 'from Laravel'
        ]);
        echo "<h3> Data inserted</h3>";
    }

}