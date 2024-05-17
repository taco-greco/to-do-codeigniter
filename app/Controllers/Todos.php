<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\TodosModel;

class Todos extends ResourceController
{
    protected $model;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->model = new TodosModel();
    }

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data = $this->model->findAll();
        return view("todos/index", ["data" => $data]);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        $data = $this->model->find($id);
        return view("todos/show", ["data" => $data]);
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        return view("todos/new");
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $data = $this->request->getPost();

        if (!$this->model->validate($data)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }

        $this->model->insert($data);
        return redirect()->to("/todos");
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        $data['todo'] = $this->model->find($id);

        if (!$data['todo']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Could not find the todo item with ID: ' . $id);
        }

        return view('todos/edit', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        // Retrieve the posted data
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // Validate the posted data
        if (!$this->model->validate($data)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }

        // Update the todo item in the database
        $this->model->update($id, $data);

        // Redirect to the list of todos
        return redirect()->to('/todos');
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        // Delete the todo item from the database
        $this->model->delete($id);

        // Redirect to the list of todos
        return redirect()->to('/todos');
    }
}
