<?php

// todo have sep file for DebugErrors and DebugData
// - run data debug with dynAmends (same with none)

namespace Microthemer\Content;

class Debug {

	var $contentClass;
	var $m_queries = null;

	public function __construct(&$contentClass) {
		$this->contentClass = $contentClass;
		$this->m_queries = $this->getMQKeys();
	}

	public function roundKB($size) {
		$kb = round($size, 2);
		return $kb . ' <span class="amender-unit">KB</span>';
	}

	// We need m_queries, which is not available on the fronted preferences
	public function getMQKeys(){
		$p = get_option('preferences_themer_loader');
		if ($p){
			return $p['m_queries'];
		}
		return null;
	}

	public function getKeyFromQuery($query){

		$key = 'all-devices';

		if ($this->m_queries && $query !== $key){
			foreach ($this->m_queries as $mq_key => $array){
				if (trim($query) === trim($array['query'])){
					return $mq_key;
				}
			}
		}

		return $key;
	}

	public function generateHTML($debugAmends, &$modList, &$profiler, &$clientSide, &$logsArray, &$lazy) {

		$display = '';
		$devData = '';

		// show debug data
		if ($debugAmends){

			$profiler['all_amender_changes_time'] = (
				$profiler['preparing_client_side_assets']['total_time'] + $profiler['all_server_side_html_changes']['total_time']);

			$assetPrepTime = esc_html($profiler['preparing_client_side_assets']['total_time']);

			// User CSS (todo need to include MT CSS)
			$css = implode("\n", $clientSide['css']);

			// JS functions and file contents
			$js = $clientSide['inline_functions']
				?  "// Inline JS Functions \n" . $clientSide['inline_functions']
				: '';

			foreach ($clientSide['js'] as $slug){
				$js.= "// ".$slug.".js\n" .
				      file_get_contents($this->contentClass->getLocalJsFile($slug, 0, 0, 1)) . "\n\n";
			}

			$assetPrepLabel = $assetPrepTime.' <span class="amender-unit">ms</span>';
			$zeroServerMods = empty($clientSide['serverModsCount']) ? 1 : 0;
			$htmlModsLabel = $zeroServerMods ? '0<span class="amender-unit">ms</span>' : 'checking...';
			$totalModsLabel = $zeroServerMods ? $assetPrepLabel : 'checking...';

			$performance =
			'<div class="amender-data-table amender-performance-table">
				<div class="amender-column-heading">Asset Preparation</div>
				<div class="amender-column-heading">HTML Adjustments</div>
				<div class="amender-column-heading"><strong>Total Time</strong></div>
				<div id="server-asset-timing" data-time="'.$assetPrepTime.'">'.$assetPrepTime.' <span class="amender-unit">ms</span></div>
				<div id="server-html-timing" data-zero-mods="'.$zeroServerMods.'">'.$htmlModsLabel.'</div>
				<div id="server-total-timing"><strong>'.$assetPrepLabel.'</strong></div>
			</div>';


			$this->contentClass->accumulateSizeKB(
				'user_css',
				$clientSide,
				$css
			);

			$this->contentClass->accumulateSizeKB(
				'user_js',
				$clientSide,
				$js
			);

			$asset_size = $clientSide['asset_size'];
			$totalSize = 0;
			foreach ($asset_size as $key => $value){
				if ($key === 'debug_only_data'){
					$totalSize -= $value;
				} else {
					$totalSize += $value;
				}
			}
			$size = '
			<div class="amender-data-table amender-size-table">
				<div class="amender-column-heading">CSS</div>
				<div class="amender-column-heading">JS</div>
				<div class="amender-column-heading">JS Packages</div>
				<div class="amender-column-heading">Modifications JSON</div>
				<div class="amender-column-heading">Amender Scripts</div>
				
				<div class="amender-column-heading"><strong>Total Size</strong></div>
				<div>'.$this->roundKB($asset_size['user_css']).'</div>
				<div>'.$this->roundKB($asset_size['user_js']).'</div>
				<div>'.$this->roundKB($asset_size['user_packages']).'</div>
				<div>'.$this->roundKB($asset_size['amender_inline'] - $asset_size['debug_only_data']).'</div>
				<div>'.$this->roundKB($asset_size['amender_packages']).'</div>
				
				<div><strong>'.$this->roundKB($totalSize).'</strong></div>
			</div>';
			$user_packages = '
			<div class="amender-data-table amender-packages-table">
				<div class="amender-column-heading">Package</div>
				<div class="amender-column-heading">Size</div>
				<div class="amender-column-heading">Version</div>
				<div class="amender-column-heading">URL</div>
				
			';

			$table = '
			<div class="amender-data-table amender-modification-table">
				<div class="amender-column-heading">Edit</div>
				<div class="amender-column-heading">Event</div>
				<div class="amender-column-heading">Devices</div>
				<div class="amender-column-heading">Selector</div>
				<div class="amender-column-heading">Action</div>
				<div class="amender-column-heading">Aspect</div>
				<div class="amender-column-heading">Content</div>
			';

			//$debugRows = array();
			/*foreach ($modList as $item){
				$item[3] = esc_html($item[3]);
				//$debugRows[] = $item;
				$table.=
				'
				<div>serverHTMLReady</div>
				<div>'.esc_html($item[6]).'</div>
				<div>'.esc_html($item[5]).'</div>
				<div>'.esc_html($item[1]['action']).'</div>
				<div>'.esc_html($item[1]['aspect']).'</div>
				<div>'.esc_html($item[3]).'</div>
				';
			}*/

			// Server and client side amendments (always dyn when reviewing)
			foreach ($clientSide['mods'] as $event => $devices){
				foreach ($devices as $query => $selectors){
					foreach ($selectors as $selectorId => $data){
						foreach ($data['mods'] as $index => $modData){
							$mod = $modData['mod'];
							$table.=
							'
							<div class="edit-modification mt-ui-element" data-id="'.$selectorId.'" data-index="'.$index.'" 
							data-mq_key="'.$this->getKeyFromQuery($query).'" data-pg="html" data-property="action">Edit</div>
							<div>'.esc_html($event).'</div>
							<div>'.esc_html($query).'</div>
							<div>'.esc_html($data['selectorCode']).'</div>
							<div>'.esc_html($mod['action']).'</div>
							<div>'.esc_html($mod['aspect']).'</div>
							<div>'.esc_html($modData['debugValue']).'</div>
							
							';
						}
					}
				}
			}


			$table.= '</div>';

			// List packages, including size breakdown
			$hasPackages = false;
			foreach ($clientSide['import_map'] as $packageName => $one){
				$dep = $this->contentClass->getDependencyInfo($packageName);
				$dep['deliveryUrl'] = $this->contentClass->deliveryUrl(
					$dep,
					$dep['value'],
					$this->contentClass->assetClass->micro_root_dir . 'mt/js/'.$this->contentClass->assetClass->fileStub.'/npm/'
				);
				$url = $dep['deliveryUrl'];

				$user_packages.= '
				<div>'.$dep['value'].'</div>
				<div>'.$dep['size'].' <span class="amender-unit">KB</span></div>
				<div>'.$dep['version'].'</div>
				
				<div><a target="_blank" href="'.$url.'">'.$url.'</a></div>
				';

				$hasPackages = true;

				/*$devData.= '<div class="amender-data-title">Package: '.esc_html($packageName).'</div>
					<div class="amender-data-content"><pre>'.esc_html(print_r($dep, 1)).'</pre></div>';*/

			}
			$user_packages.= '
				<div class="amender-column-heading">Total</div>
				<div><strong>'.$this->roundKB($asset_size['user_packages']).'</strong></div>
			</div>';

			// Dev only

			if ($this->contentClass->devMode){

				$devData.= '<div class="amender-data-title">Dev clientSide</div>
				<div class="amender-data-content"><pre>'.esc_html(print_r($clientSide, 1)).'</pre></div>';

				// Lazyloaded content
				$devData.= '<div class="amender-data-title">Lazy content</div>
				<div class="amender-data-content"><pre>'.esc_html(print_r($lazy, 1)).'</pre></div>';

			}

			$packagesList = $hasPackages
				? '
				<div class="amender-data-title">JS Packages</div>
				<div class="amender-data-content">'.$user_packages.'</div>'
				: '';

			// <div class="amender-data-content"><pre>'.print_r($debugRows, 1).'</pre></div>
			$display.= '
			<div id="amender-data">
				<div class="amender-data-title">Server-side Performance</div>
				<div class="amender-data-content">'.$performance.'</div>
				
				<div class="amender-data-title">Asset Size</div>
				<div class="amender-data-content">'.$size.'</div>
				<div class="amender-data-title">Modifications</div>
				<div class="amender-data-content">'.$table.'</div>
				'.($css
					? '<div class="amender-data-title">CSS</div>
					<div class="amender-data-content"><pre>'.esc_html($css).'</pre></div>'
					: '').
			    ($js
					? '<div class="amender-data-title">JS</div>
					<div class="amender-data-content"><pre>'.esc_html($js).'</pre></div>'
					: '').'
				' . $packagesList . $devData.'
			</div>';

		}

		// Show errors
		if (count($logsArray)){

			$heading = '<div class="error-heading">Amender errors ('.count($logsArray).')</div>';
			$logs = '';

			foreach ($logsArray as $item){
				$data = $item['data']
					? '<pre class="error-data">'.esc_html(print_r($item['data'], 1)).'</pre>'
					: '';

				$logs.= '
				<li class="error-item error-type-'.$item['type'].'">
					<span>'.$item['message'].'</span>
					'.$data.'
				</li>';
			}

			$display.= '
			<div id="amender-errors">
				'.$heading.'
				<ul>'.$logs.'</ul>
			</div>';

		}

		return $display;

	}
}