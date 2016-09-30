<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;

use App\Http\Requests;

class FolderController extends Controller
{
    public function index()
    {
        $folders = Folder::all();
        return view("folders", ["folders" => $folders]);
    }

    public function createFolder()
    {
        return view("createFolder");
    }

    public function create(Request $request)
    {
        $folder = new Folder([
            "name" => $request["folder_name"]
        ]);

        $request->user()->folders()->save($folder);

        redirect()->route("folders");
    }
}
