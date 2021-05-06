<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifcenter
{
	protected $ci;

	public function __construct() {
		$this->ci =& get_instance();
	}

	public function triggerPusher() {
		require_once(FCPATH.'vendor/autoload.php');
		$options = array(
			'cluster' => 'ap1',
			'useTLS' => true
		);
		$pusher = new Pusher\Pusher(
			getenv('PUSHER_CHANNEL_KEY'),
			getenv('PUSHER_CHANNEL_SECRET'),
			getenv('PUSHER_APP_ID'),
			$options
		);

		$data['message'] = 'success';
		$pusher->trigger('my-channel', 'my-event', $data);
	}

	public function pushNotif($data) {
		$send = FALSE
		if ($send) {
			$this->triggerPusher();
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file Notifcenter.php */
/* Location: ./application/libraries/Notifcenter.php */
