<?php
class article extends table
{
	public function __construct()
	{
		parent::__construct();
		$this->set_table(S_DB_PREFIX.'article');
		$this->set_where("art_lang = '".S_LANG."'");
		$this->set_order('art_top');
		$this->set_order('art_index');
		$this->set_order('art_id');
	}
}
//E数云
?>