<?php

/**
 * (c) CJT TERABYTE INC
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code
 *
 *        @link: https://github.com/cjtterabytesoft/alert
 *      @author: Wilmer Arámbula <terabytefrelance@gmail.com>
 *   @copyright: (c) CJT TERABYTE INC
 *      @widget: [Alert]
 *       @since: 1.0
 *         @yii: 3.0
 **/

namespace cjtterabytesoft\alert;

/**
 * Alert widget renders a message from session flash. All flash messages are displayed
 * in the sequence they were assigned using setFlash. You can set message as following:
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @author Alexander Makarov <sam@rmcreative.ru>
 */

class Alert extends \yii\bootstrap4\Widget
{
	/**
	 * @var array the alert types configuration for the flash messages.
	 * This array is setup as $key => $value, where:
	 * - $key is the name of the session flash variable
	 * - $value is the bootstrap alert type (i.e. danger, success, info, warning)
	 **/
	public $alertTypes = [
		['danger' => 'alert-danger', 'role' => 'alert'],
		['dark' => 'alert-dark', 'role' => 'alert'],
		['info' => 'alert-info', 'role' => 'alert'],
		['light' => 'alert-light', 'role' => 'alert'],
		['primary' => 'alert-primary', 'role' => 'alert'],
		['secondary' => 'alert-secondary', 'role' => 'alert'],
		['success' => 'alert-success', 'role' => 'alert'],
		['warning' => 'alert-warning', 'role' => 'alert'],
	];

	/**
	 * @var array the options for rendering the close button tag.
	 **/
	public $closeButton = [];

	public function init()
	{
		parent::init();

		$session = \Yii::$app->getSession();
		$flashes = $session->getAllFlashes();
		$appendCss = isset($this->options['class']) ? ' ' . $this->options['class'] : '';

		foreach ($flashes as $type => $data) {
			if (isset($this->alertTypes[$type])) {
				$data = (array) $data;
				foreach ($data as $message) {
					/* initialize css class for each alert box */
					$this->options['class'] = $this->alertTypes[$type] . $appendCss;
					/* assign unique id to each alert box */
					$this->options['id'] = $this->getId() . '-' . $type;
					echo \yii\bootstrap4\Alert::widget([
						'body' => $message,
						'closeButton' => $this->closeButton,
						'options' => $this->options,
					]);
				}
				$session->removeFlash($type);
			}
		}
	}
}
