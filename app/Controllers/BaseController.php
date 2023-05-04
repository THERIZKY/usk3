<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/* Model Yang Dipakai */
use App\Models\produkModel;
use App\Models\keranjangModel;
use App\Models\TransaksiModel;
use App\Models\Konfirmasi;

/* Config Yang Dipakai */
use Config\Validation;
use OutOfRangeException;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['auth', 'form'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /* Proterti Yang Dibutuhkan */
    protected $builder;
    protected $db;
    protected $produkModel;
    protected $keranjangModel;
    protected $validation;
    protected $transaksiModel;
    protected $konfirmasiModel;
    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        /* Inisialisasi Utama */

        // Buat Builder
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('keranjang');

        // Model
        $this->keranjangModel = new KeranjangModel();
        $this->produkModel = new produkModel();
        $this->transaksiModel = new TransaksiModel();
        $this->konfirmasiModel = new Konfirmasi();
        /* Inisialisasi Config */
        $this->validation = new Validation();


        // E.g.: $this->session = \Config\Services::session();

        // Produk Buat Di navbar
        $produk = $this->keranjangModel->findAll;
    }
}
