<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logs extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        /* Title Page :: Common */
        $this->page_title->push(lang('menu_logs'));
        $this->data['pagetitle'] = $this->page_title->show();

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, lang('menu_logs'), 'admin/logs');
    }


	public function index()
	{
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
            /* Breadcrumbs */
            $this->data['breadcrumb'] = $this->breadcrumbs->show();

            // $this->data['groups'] = $this->ion_auth->groups()->result();

            /* Load Template */
            $this->template->admin_render('admin/logs/index', $this->data);
        }
    }
}
