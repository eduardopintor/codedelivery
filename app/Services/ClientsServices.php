<?php
/**
 * User: elshamah
 * Date: 01/05/16
 * Time: 15:02
 */

namespace CodeDelivery\Services;


use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Repositories\UserRepository;

class ClientsServices
{
    /**
     * @var ClientRepository
     */
    private $clientRepository;
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(ClientRepository $clientRepository, UserRepository $userRepository)
    {
        $this->clientRepository = $clientRepository;
        $this->userRepository = $userRepository;
    }

    public function update(array $data, $id)
    {
        $this->clientRepository->update($data, $id);
        $userId = $this->clientRepository->find($id, ['user_id'])->user_id;

        $this->userRepository->update($data['user'], $userId);
    }

}