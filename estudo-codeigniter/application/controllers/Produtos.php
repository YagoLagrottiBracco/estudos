<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {
	public function index() {
		$this->load->model('produtos_model', 'produtos');
		$data['produtos'] = $this->produtos->getProdutos();
		$this->load->view('listarProdutos', $data);
	}
	
	public function add() {
		$this->load->model('produtos_model', 'produtos');
		$this->load->view('addProduto');
	}
	
	public function salvar() {
		if ($this->input->post('nome') == NULL) {
			echo 'O compo nome do produto é obrigatório.';
			echo '<a href="'.base_url().'produtos/add" title="voltar">Voltar</a>';
		} else {
			$this->load->model('produtos_model', 'produtos');
			$dados = ['nome'  => $this->input->post('nome'),
					  'preco' => $this->input->post('preco'),
					  'ativo' => $this->input->post('ativo')];

			if ($this->input->post('id') != NULL) {
				$this->produtos->editarProduto($dados, $this->input->post('id'));
			} else {
				$this->produtos->addProduto($dados);
			}

			redirect(base_url());
		}
	}

	public function editar($id=NULL) {
		if ($id == NULL) {
			redirect(base_url());
		}
		$this->load->model('produtos_model', 'produtos');
		$query = $this->produtos->getProdutoByID($id);

		if ($query == NULL) {
			redirect(base_url());
		}

		$dados['produto'] = $query;
		$this->load->view('editarProduto', $dados);
	}

	public function apagar($id=NULL) {
		if ($id == NULL) {
			redirect(base_url());
		}

		$this->load->model('produtos_model', 'produtos');
		$query = $this->produtos->getProdutoByID($id);

		if ($query != NULL) {
			$this->produtos->apagarProduto($query->id);
			redirect(base_url());
		} else {
			redirect(base_url());
		}
	}
}