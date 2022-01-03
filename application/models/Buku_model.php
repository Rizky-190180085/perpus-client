<?php 
use GuzzleHttp\Client;

class Buku_model extends CI_model {

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/perpus-server/index.php/buku'
            
        ]);
    }


    public function getAllbuku()
    {

        $response = $this->_client->request('GET', 'buku', [
            'query' => [
                'buku-key' => '1234'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];

    }


    public function getbukuById($id_buku)
    {
        $response = $this->_client->request('GET', 'buku', [
            'query' => [
                'buku-key' => '1234',
                'id_buku' => $id_buku
            ]
        ]);
        
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];

    }


    public function tambahDatabuku()
    {
        $data = [
            "judul_buku" => $this->input->post('judul_buku', true),
            "penulis" => $this->input->post('penulis', true),
            "penerbit" => $this->input->post('penerbit', true),
            "tahun_terbit" => $this->input->post('tahun_terbit', true),

            'buku-key' => '1234'
        ];

        $response = $this->_client->request('POST', 'buku/add', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;

    }


    public function hapusDatabuku($id_buku)
    {
        $response = $this->_client->request('DELETE', 'buku/delete', [
            'form_params' => [
                'id_buku' => $id_buku,
                'buku-key' => '1234'

            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }


    public function ubahDatabuku()
    {
        $data = [
            "judul_buku" => $this->input->post('judul_buku', true),
            "penulis" => $this->input->post('penulis', true),
            "penerbit" => $this->input->post('penerbit', true),
            "tahun_terbit" => $this->input->post('tahun_terbit', true),
            "id_buku" => $this->input->post('id_buku', true),

            'buku-key' => '1234'
        ];

        $response = $this->_client->request('PUT', 'buku/update', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

}