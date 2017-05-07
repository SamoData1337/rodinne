<?php if (!defined( 'BASEPATH ')) exit( 'No direct script access allowed '); ?>
<?php
public function delete()
{
    $id = $this->uri->segment(3);

    if(empty($id))
    {
    show_404();
    }

    $objednavky_item = $this->objednavky_model->get_objednavky_by_id($id);
    $this->news_model->delete_customers($id);
    redirect( base_url() .  'index.php/objednavky \');
}