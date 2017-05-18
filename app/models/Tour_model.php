<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Name: Tour
 * Type: Model
 * Description: handles tour-based data
 *
 * @author Florian Dahlitz
 */
class Tour_model extends MY_Model
{
	/**
	 * default table
	 */
	protected $table = 'tour';

	public function __construct()
	{
		parent::__construct();
	}

	public function get_active_tours()
	{
		$this->db->from($this->table);
		$this->db->where('date >', date('Y-m-d H:i:s'));
		return $this->db->get()->result();
	}

	public function get_active_tour_dates()
	{
		$dates = [];

		$this->db->from($this->table);
		$this->db->where('date >', date('Y-m-d H:i:s'));
		$query = $this->db->get()->result();

		foreach($query as $tour)
			$dates[] = date('d.m.Y H:i', strtotime($tour->date));

		return $dates;
	}
}
