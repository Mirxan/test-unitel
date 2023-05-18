<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(private UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allUsers()
    {
        return response()->successResponse($this->userRepository->getAllUsers());
    }

    /**
     * Display a listing of the resource with pagination.
     * @param  int  $per_page
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->get('per_page',10);
        return response()->successResponse($this->userRepository->getUsers($perPage));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->successResponse($this->userRepository->getUserById($id));
    }
    
}

