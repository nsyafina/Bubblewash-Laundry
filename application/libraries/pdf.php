<?php defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class pdf extends Dompdf
{

  /**
   * PDF filename
   * @var String
   */
  public $filename;

  public function __construct()
  {
    parent::__construct();
    $this->filename = "laporan.pdf";
  }

  /**
   * Get an instance of CodeIgniter
   *
   * @access	protected
   * @return	void
   */
  protected function ci()
  {
    return get_instance();
  }

  /**
   * Load a CodeIgniter view into domPDF
   *
   * @access	public
   * @param	string	$view The view to load
   * @param	array	$data The view data
   * @return	void
   */
}
