<?php

class agent_footer extends self
{
	function compose($o)
	{
		$o->piwikURL    = 'http://'  . $CONFIG['piwik.URL'];
		$o->SSLpiwikURL = 'https://' . $CONFIG['piwik.URL'];
		$o->piwikIdSite = $CONFIG['piwik.idSite'];

		return parent::compose($o);
	}
}
