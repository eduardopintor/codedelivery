<?php

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Http\Requests;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;

class OrdersController extends Controller
{
    /**
     * @var OrderRepository
     */
    private $repository;

    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {
        $orders =  $this->repository->paginate();

        return view('admin.orders.index', compact('orders'));
    }

    public function edit($id, UserRepository $userRepository)
    {
        $list_status = ['Pendente', 'A Caminho', 'Entregue'];
        $order = $this->repository->find($id);

        $deliveryman = $userRepository->gerDeliveryMen();

        return view('admin.orders.edit', compact('order', 'list_status', 'deliveryman'));
    }

}
