<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\AdminClientRequest;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Services\ClientsServices;
use Illuminate\Http\Request;

use CodeDelivery\Http\Requests;

class ClientsController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $repository;
    /**
     * @var ClientsServices
     */
    private $clientsServices;

    public function __construct(ClientRepository $repository, ClientsServices $clientsServices)
    {
        $this->repository = $repository;
        $this->clientsServices = $clientsServices;
    }

    public function index()
    {
        $clients =  $this->repository->paginate(10);

        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');

    }

    public function edit($id)
    {
        $client = $this->repository->find($id);

        return view('admin.clients.edit', compact('client'));

    }

    public function store(AdminClientRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.clients.index');
    }

    public function update(AdminClientRequest $request, $id)
    {
        $data = $request->all();
        $this->clientsServices->update($data, $id);

        return redirect()->route('admin.clients.index');
    }
}
